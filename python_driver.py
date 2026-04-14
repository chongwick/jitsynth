from python_dependency_analyzer import build_statement_dependencies, get_dependency_slice, get_dependency_closure, get_source_slice
from jc.comps import ControlComp, DataComp
import sys
import ast as python_ast
import pickle
import os
import argparse
import random
import re
import textwrap
from secrets import token_hex
from multiprocessing import Pool


class _CompsUnpickler(pickle.Unpickler):
    """Remap bare 'comps' module references to 'jc.comps' when unpickling."""
    def find_class(self, module, name):
        if module == 'comps':
            module = 'jc.comps'
        return super().find_class(module, name)


def _clean():
    os.system("git clean -fd -e python_corpus_cache.pkl -e corpus_cache.pkl "
              "-e synth_out -e pytests -e seeds -e /ramdisk "
              "-e python_driver.py -e python_dependency_analyzer.py "
              "-e sanitize_python.sh")


def sanitize(py_file):
    import subprocess
    is_error = lambda x: os.path.exists(x + ".er")
    is_trash = lambda x: os.path.exists(x + ".tr")
    for i in range(2):
        command = ['bash', './sanitize_python.sh', os.path.join(os.getcwd(), py_file), str(i)]
        try:
            subprocess.run(command, text=True, timeout=30, capture_output=True)
        except subprocess.TimeoutExpired:
            break
    try:
        if is_trash(py_file):
            os.remove(py_file + ".tr")
        elif not is_error(py_file):
            os.remove(py_file)
    except Exception:
        return


def load_constraint(path):
    with open(path, 'rb') as f:
        return _CompsUnpickler(f).load()


def _build_ast(filepath):
    """Parse a Python file into an AST. Returns (tree, source) or raises."""
    with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
        source = f.read()
    tree = python_ast.parse(source, filename=filepath)
    return tree, source


def _build_ast_safe(filepath):
    """Parse a Python file safely. Returns (tree, source) or (None, None)."""
    try:
        return _build_ast(filepath)
    except SyntaxError as e:
        print(f"Warning: syntax error in {filepath}: {e}")
        return None, None
    except Exception as e:
        print(f"Warning: failed to parse {filepath}: {e}")
        return None, None


def _is_python_seed(filepath, filename):
    """Check if a file is a Python seed (.py extension or Python shebang)."""
    if filename.endswith('.py'):
        return True
    try:
        with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
            header = f.read(64)
        return header.startswith('#!') and 'python' in header.split('\n')[0]
    except Exception:
        return False


def _index_one_file(filepath):
    """Worker: parse a single seed file. Returns (filepath, source, results, entries) or None."""
    try:
        tree, source = _build_ast_safe(filepath)
        if tree is None:
            return None
        results = build_statement_dependencies(tree, source)
        entries = []
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_line'), r.get('end_line'),
                     r.get('start_col'), r.get('end_col'))
            entries.append((desc, entry))
        return (filepath, source, results, entries)
    except Exception as e:
        print(f"Warning: skipping {filepath}: {e}")
        return None


def build_corpus_index(seed_dir, parallel=1):
    """Build node_type_index, file_cache, and results_cache from seed corpus.

    Returns (node_type_index, file_cache, results_cache).
    """
    node_type_index = {}
    file_cache = {}
    results_cache = {}

    filepaths = []
    for filename in os.listdir(seed_dir):
        filepath = os.path.join(seed_dir, filename)
        if os.path.isfile(filepath) and _is_python_seed(filepath, filename):
            filepaths.append(filepath)

    def _merge(result):
        if result is None:
            return
        filepath, source, results, entries = result
        file_cache[filepath] = source
        results_cache[filepath] = results
        for desc, entry in entries:
            if desc not in node_type_index:
                node_type_index[desc] = [entry]
            else:
                node_type_index[desc].append(entry)

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for result in pool.imap_unordered(_index_one_file, filepaths):
                _merge(result)
    else:
        for fp in filepaths:
            _merge(_index_one_file(fp))

    return node_type_index, file_cache, results_cache


CORPUS_CACHE_FILE = 'python_corpus_cache.pkl'


def save_corpus_cache(node_type_index, file_cache, results_cache):
    """Pickle the corpus index to disk."""
    with open(CORPUS_CACHE_FILE, 'wb') as f:
        pickle.dump((node_type_index, file_cache, results_cache), f)
    print(f"Cache saved to {CORPUS_CACHE_FILE}")


def load_corpus_cache():
    """Load a previously saved corpus index from disk. Returns None if not found."""
    if not os.path.isfile(CORPUS_CACHE_FILE):
        return None
    with open(CORPUS_CACHE_FILE, 'rb') as f:
        return pickle.load(f)


def get_corpus_index(seed_dir, rebuild=False, parallel=1):
    """Load corpus index from cache, or build and cache it."""
    if not rebuild:
        cached = load_corpus_cache()
        if cached is not None:
            node_type_index, file_cache, results_cache = cached
            print(f"Loaded cached corpus index from {CORPUS_CACHE_FILE} "
                  f"({sum(len(v) for v in node_type_index.values())} statements, "
                  f"{len(node_type_index)} types, {len(file_cache)} files)")
            return node_type_index, file_cache, results_cache

    print(f"Building corpus index from {seed_dir}..." +
          (f" ({parallel} workers)" if parallel > 1 else ""))
    node_type_index, file_cache, results_cache = build_corpus_index(seed_dir, parallel=parallel)
    print(f"Indexed {sum(len(v) for v in node_type_index.values())} statements "
          f"across {len(node_type_index)} types from {len(file_cache)} files")
    save_corpus_cache(node_type_index, file_cache, results_cache)
    return node_type_index, file_cache, results_cache


# ---------------------------------------------------------------------------
# COMP_TO_DESCRIPTIONS mapping (JOC comp_type -> Python AST description)
# ---------------------------------------------------------------------------

COMP_TO_DESCRIPTIONS = {
    # Control regions
    "if":       ["If (region)"],
    "else":     ["If (region)"],
    "for":      ["For (region)", "While (region)"],
    "while":    ["While (region)"],
    "do_while": ["While (region)"],
    "try":      ["Try (region)"],
    "catch":    ["ExceptHandler (region)"],
    "finally":  [],
    "func":     ["FunctionDef (region)", "AsyncFunctionDef (region)"],
    "class":    ["ClassDef (region)"],
    "method":   ["FunctionDef (region)"],
    "switch":   [],

    # Data operations
    "assign":    ["Assign", "AugAssign", "AnnAssign"],
    "var_dec":   ["Assign"],
    "func_call": ["Call"],
    "update":    ["AugAssign"],
    "return":    ["Return"],
    "new":       ["Call"],
    "throw":     ["Call"],  # raise is a statement, but Call is close enough
    "unary":     ["AugAssign"],
}


HOISTABLE_DESCRIPTIONS = {
    "FunctionDef (region)",
    "AsyncFunctionDef (region)",
    "ClassDef (region)",
}

CATCH_DESCRIPTIONS = {"ExceptHandler (region)"}


# ---------------------------------------------------------------------------
# Name generation
# ---------------------------------------------------------------------------

_name_counter = 0


def _next_name(prefix):
    global _name_counter
    name = f"{prefix}_{_name_counter}"
    _name_counter += 1
    return name


# ---------------------------------------------------------------------------
# Context filtering
# ---------------------------------------------------------------------------

_CLASS_SCOPE_RE = re.compile(
    r'\bself\.'
    r'|\bcls\.'
    r'|\bsuper\(\)'
)


def _has_class_scope_refs(text):
    """Check if text contains class-scope references (self/cls/super)."""
    return _CLASS_SCOPE_RE.search(text) is not None


def _needs_function_scope(text):
    """Check if text contains constructs that require a function scope."""
    return 'yield' in text or 'await' in text


# Imports that won't be available in synthesized scripts
_UNAVAILABLE_IMPORTS = re.compile(
    r'\b(?:unittest|test\.support|test\.test_|doctest)\b'
)


def _has_unavailable_imports(text):
    """Check if text references test-only imports."""
    return _UNAVAILABLE_IMPORTS.search(text) is not None


# Python built-in names that shouldn't be shadowed
_PYTHON_BUILTINS = {
    'print', 'len', 'range', 'int', 'float', 'str', 'bool', 'list', 'dict',
    'set', 'tuple', 'type', 'isinstance', 'issubclass', 'hasattr', 'getattr',
    'setattr', 'delattr', 'callable', 'super', 'property', 'staticmethod',
    'classmethod', 'abs', 'all', 'any', 'bin', 'chr', 'complex', 'dir',
    'divmod', 'enumerate', 'eval', 'exec', 'filter', 'format', 'frozenset',
    'globals', 'hash', 'hex', 'id', 'input', 'iter', 'map', 'max', 'min',
    'next', 'object', 'oct', 'open', 'ord', 'pow', 'repr', 'reversed',
    'round', 'slice', 'sorted', 'sum', 'vars', 'zip', 'bytearray', 'bytes',
    'memoryview', 'breakpoint', 'compile', 'copyright', 'credits',
    'exit', 'quit', 'help', 'license', 'NotImplemented', 'Ellipsis',
    '__name__', '__doc__', '__package__', '__loader__', '__spec__',
    '__build_class__', '__import__',
    # Exception classes
    'Exception', 'BaseException', 'TypeError', 'ValueError', 'KeyError',
    'IndexError', 'AttributeError', 'NameError', 'RuntimeError',
    'StopIteration', 'StopAsyncIteration', 'ArithmeticError',
    'AssertionError', 'BlockingIOError', 'BrokenPipeError',
    'BufferError', 'ChildProcessError', 'ConnectionError',
    'EOFError', 'FileExistsError', 'FileNotFoundError',
    'FloatingPointError', 'GeneratorExit', 'ImportError',
    'IndentationError', 'InterruptedError', 'IsADirectoryError',
    'LookupError', 'MemoryError', 'ModuleNotFoundError',
    'NotADirectoryError', 'NotImplementedError', 'OSError',
    'OverflowError', 'PermissionError', 'ProcessLookupError',
    'RecursionError', 'ReferenceError', 'SyntaxError',
    'SystemError', 'SystemExit', 'TabError', 'TimeoutError',
    'UnicodeDecodeError', 'UnicodeEncodeError', 'UnicodeError',
    'UnicodeTranslateError', 'UnboundLocalError', 'ZeroDivisionError',
}


# ---------------------------------------------------------------------------
# Variable join helpers
# ---------------------------------------------------------------------------

_SIMPLE_VAR_RE = re.compile(r'^[a-zA-Z_][a-zA-Z0-9_]*$')


def _is_simple_var(symbol):
    """Check if a symbol is a simple variable (e.g. x, not obj.prop)."""
    return _SIMPLE_VAR_RE.match(symbol) is not None


def _replace_variable(code, old_var, new_var):
    """Replace a Python variable name in source, matching whole identifiers only."""
    pattern = r'\b' + re.escape(old_var) + r'\b'
    return re.sub(pattern, lambda m: new_var, code)


def _try_create_join(prev_defs, curr_free_uses, curr_inline):
    """Try to create a join between two data slots.

    Returns (join_assignment_str, modified_inline) or None.
    """
    joinable_defs = [d for d in prev_defs if _is_simple_var(d)]
    joinable_uses = [u for u in curr_free_uses if _is_simple_var(u)]
    if not joinable_defs or not joinable_uses:
        return None
    def_var = random.choice(joinable_defs)
    use_var = random.choice(joinable_uses)
    join_name = _next_name("join_var")
    join_assignment = f"{join_name} = {def_var}"
    modified_inline = _replace_variable(curr_inline, use_var, join_name)
    return (join_assignment, modified_inline)


# ---------------------------------------------------------------------------
# Source extraction helpers
# ---------------------------------------------------------------------------

_DEF_NAME_RE = re.compile(
    r'(?:def\s+|class\s+|async\s+def\s+)(\w+)', re.IGNORECASE
)

_MAX_CONTEXT_RETRIES = 10


def _extract_def_name(source_text, node_type):
    """Extract the defined name (function/class) from source text."""
    m = _DEF_NAME_RE.search(source_text)
    return m.group(1) if m else None


def _dedent_snippet(text):
    """Dedent a Python snippet to remove common leading whitespace."""
    return textwrap.dedent(text)


# Only strip else/elif — NOT except/finally since those are required by try
_STRIPPABLE_CLAUSES = ('else:', 'else ', 'elif ')


def _strip_dangling_blocks(text):
    """Remove dangling else/elif blocks from extracted snippets.

    When a compound statement (for/while/if) is extracted from a seed,
    its else/elif clause is included in the AST span. After dedent,
    these blocks may appear at an indentation level that doesn't match any
    enclosing structure, causing IndentationError.

    Does NOT strip except/finally since those are required parts of try blocks.
    """
    lines = text.split('\n')
    if len(lines) <= 1:
        return text

    result = []
    skip_until_indent = None
    prev_indent = 0

    for line in lines:
        stripped = line.lstrip()
        if not stripped:
            if skip_until_indent is None:
                result.append(line)
            continue

        indent = len(line) - len(stripped)

        # If we're in skip mode, check if we've returned to the skip level or less
        if skip_until_indent is not None:
            if indent <= skip_until_indent:
                skip_until_indent = None
                # Fall through to check this line normally
            else:
                continue  # still inside the dangling block

        # Check if this is a strippable clause keyword at reduced indentation
        if stripped.startswith(_STRIPPABLE_CLAUSES) and indent < prev_indent:
            skip_until_indent = indent
            continue

        result.append(line)
        prev_indent = indent

    return '\n'.join(result)


# ---------------------------------------------------------------------------
# pick_data_source
# ---------------------------------------------------------------------------

def pick_data_source(data_comp, node_type_index, file_cache, results_cache,
                     in_method=False, in_function=False, declared_names=None):
    """Pick a random Python source snippet matching a DataComp, including dependencies.

    Returns (hoisted, inline, primary_defs, free_uses).
    """
    descriptions = COMP_TO_DESCRIPTIONS.get(data_comp.comp_type, [])
    candidates = []
    for desc in descriptions:
        candidates.extend(node_type_index.get(desc, []))
    if not candidates:
        return ([], f"pass  # no match for {data_comp.comp_type}", set(), set())

    if declared_names is None:
        declared_names = set()

    for _attempt in range(_MAX_CONTEXT_RETRIES):
        entry = random.choice(candidates)
        filepath, stmt_id, start_line, end_line, start_col, end_col = entry
        if start_line is None or start_line < 0:
            return ([], f"pass  # no position for {data_comp.comp_type}", set(), set())
        source = file_cache.get(filepath)
        if source is None:
            return ([], f"pass  # source not cached for {filepath}", set(), set())
        results = results_cache.get(filepath)
        if results is None:
            text = get_source_slice(results_cache.get(filepath, []), stmt_id, source) if results else None
            if text:
                snippet = _dedent_snippet(text).strip()
            else:
                snippet = f"pass  # no results for {filepath}"
            if not in_method and _has_class_scope_refs(snippet):
                continue
            if not in_function and _needs_function_scope(snippet):
                continue
            if _has_unavailable_imports(snippet):
                continue
            return ([], snippet, set(), set())

        # Split dependency closure into hoistable definitions and inline statements
        closure = get_dependency_closure(results, stmt_id)
        hoisted_parts = []
        inline_parts = []
        for sid in closure:
            text = get_source_slice(results, sid, source)
            if text is None:
                continue
            r = results[sid]
            desc = r.get('description', '')
            if desc in HOISTABLE_DESCRIPTIONS:
                hoisted_parts.append((text, r.get('node_type', '')))
            elif desc in CATCH_DESCRIPTIONS:
                # Replace bare except blocks with variable assignments
                catch_defs = r.get('defs', set())
                for var in catch_defs:
                    inline_parts.append(f'{var} = Exception("stub")')
            else:
                inline_parts.append(text)

        # Filter hoisted parts: remove class-scope refs when outside a class
        if not in_method:
            hoisted_parts = [
                (t, n) for t, n in hoisted_parts
                if not _has_class_scope_refs(t)
            ]

        # Check hoisted parts for name collisions
        filtered_hoisted = []
        for text, node_type in hoisted_parts:
            name = _extract_def_name(text, node_type)
            if name and name.lower() in declared_names:
                continue
            filtered_hoisted.append((text, node_type))
        hoisted_parts = filtered_hoisted

        # Check inline parts for function/class declarations that collide
        filtered_inline = []
        for text in inline_parts:
            name_match = _DEF_NAME_RE.search(text)
            if name_match:
                name = name_match.group(1)
                if name.lower() in declared_names:
                    continue
            filtered_inline.append(text)
        inline_parts = filtered_inline

        # Dedent all inline parts and strip dangling else/elif blocks
        inline = '\n'.join(
            _strip_dangling_blocks(_dedent_snippet(p)).strip()
            for p in inline_parts
        )

        # Retry if snippet has context-incompatible references
        if not in_method and _has_class_scope_refs(inline):
            continue
        if not in_function and _needs_function_scope(inline):
            continue
        if _has_unavailable_imports(inline):
            continue

        # Register newly declared names from this pick
        for text, node_type in hoisted_parts:
            name = _extract_def_name(text, node_type)
            if name:
                declared_names.add(name.lower())
        for text in inline_parts:
            name_match = _DEF_NAME_RE.search(text)
            if name_match:
                declared_names.add(name_match.group(1).lower())

        # Compute def/use metadata for join points
        primary = results[stmt_id]
        primary_defs = primary.get('defs', set())
        closure_defs = set()
        for sid in closure:
            closure_defs.update(results[sid].get('defs', set()))
        free_uses = primary.get('uses', set()) - closure_defs

        return (hoisted_parts, inline, primary_defs, free_uses)

    # Exhausted retries — return last result anyway
    primary = results[stmt_id]
    primary_defs = primary.get('defs', set())
    closure_defs = set()
    for sid in closure:
        closure_defs.update(results[sid].get('defs', set()))
    free_uses = primary.get('uses', set()) - closure_defs
    return (hoisted_parts, inline, primary_defs, free_uses)


# ---------------------------------------------------------------------------
# synthesize_region
# ---------------------------------------------------------------------------

def synthesize_region(region_list, node_type_index, file_cache, results_cache,
                      indent=0, in_method=False, in_function=False,
                      join_rate=0.0, declared_names=None):
    """Synthesize Python source for a nested control region.

    Returns (hoisted_lines, region_lines).
    """
    if not region_list:
        return [], []
    if declared_names is None:
        declared_names = set()
    pad = "    " * indent
    body_pad = "    " * (indent + 1)
    ctrl = region_list[0]  # ControlComp
    ct = ctrl.comp_type
    child_in_method = in_method or ct in ("method", "class")
    child_in_function = in_function or ct in ("func", "method")
    hoisted = []
    lines = []

    # Generate synthetic control wrapper
    if ct == "if":
        lines.append(f"{pad}if True:")
    elif ct == "else":
        lines.append(f"{pad}if not True:")
    elif ct == "for":
        vname = _next_name("i")
        lines.append(f"{pad}for {vname} in range(10):")
    elif ct == "while":
        lines.append(f"{pad}while True:")
    elif ct == "do_while":
        # Python has no do-while; simulate with while True + break at end
        lines.append(f"{pad}while True:")
    elif ct == "func":
        fname = _next_name("f")
        lines.append(f"{pad}def {fname}():")
    elif ct == "class":
        cname = _next_name("C")
        lines.append(f"{pad}class {cname}:")
    elif ct == "method":
        mname = _next_name("m")
        lines.append(f"{pad}def {mname}(self):")
    elif ct == "try":
        lines.append(f"{pad}try:")
    elif ct == "catch":
        lines.append(f"{pad}if True:")
    elif ct == "finally":
        lines.append(f"{pad}if True:")
    elif ct == "switch":
        lines.append(f"{pad}if True:")
    else:
        lines.append(f"{pad}if True:  # unknown region: {ct}")

    # Phase 1: collect body elements with metadata
    elements = []
    has_body_content = False

    if ct == "while":
        lines.append(f"{body_pad}break  # avoid infinite loop")
        has_body_content = True

    for element in region_list[1:]:
        if isinstance(element, list):
            sub_hoisted, sub_lines = synthesize_region(
                element, node_type_index, file_cache, results_cache,
                indent + 1, in_method=child_in_method,
                in_function=child_in_function, join_rate=join_rate,
                declared_names=declared_names)
            elements.append(('region', sub_hoisted, sub_lines, None, None))
            if sub_lines:
                has_body_content = True
        elif isinstance(element, DataComp):
            hoisted_parts, inline_code, defs, free_uses = pick_data_source(
                element, node_type_index, file_cache, results_cache,
                in_method=child_in_method, in_function=child_in_function,
                declared_names=declared_names)
            elements.append(('data', hoisted_parts, inline_code, defs, free_uses))
            has_body_content = True
        elif isinstance(element, ControlComp):
            elements.append(('bare', [], f"pass  # bare control: {element.comp_type}", None, None))
            has_body_content = True

    # Phase 2: assemble with joins
    last_data_defs = None
    for kind, h, content, defs, free_uses in elements:
        hoisted.extend(h)
        if kind == 'data':
            if last_data_defs is not None and random.random() < join_rate:
                result = _try_create_join(last_data_defs, free_uses, content)
                if result:
                    lines.append(f"{body_pad}{result[0]}")
                    content = result[1]
            for line in content.split('\n'):
                lines.append(f"{body_pad}{line}")
            last_data_defs = defs
        elif kind == 'region':
            lines.extend(content)
        elif kind == 'bare':
            lines.append(f"{body_pad}{content}")

    # Add pass if body is empty (Python requirement)
    if not has_body_content:
        lines.append(f"{body_pad}pass")

    # Close wrapper for try blocks
    if ct == "try":
        lines.append(f"{pad}except Exception:")
        lines.append(f"{body_pad}pass")
    elif ct == "do_while":
        # break at end to simulate do-while (runs body once)
        lines.append(f"{body_pad}break")

    return hoisted, lines


# ---------------------------------------------------------------------------
# synthesize
# ---------------------------------------------------------------------------

def synthesize(constraint_env, node_type_index, file_cache, results_cache, join_rate=0.0):
    """Walk a JOC constraint tree and assemble a Python script."""
    global _name_counter
    _name_counter = 0

    # Track declared function/class names globally
    declared_names = set(n.lower() for n in _PYTHON_BUILTINS)

    # Phase 1: collect elements with metadata
    elements = []
    # constraint_env[0] is ControlComp('main'), skip it
    for element in constraint_env[1:]:
        if isinstance(element, list):
            sub_hoisted, sub_lines = synthesize_region(
                element, node_type_index, file_cache, results_cache,
                indent=0, join_rate=join_rate, declared_names=declared_names)
            elements.append(('region', sub_hoisted, sub_lines, None, None))
        elif isinstance(element, DataComp):
            hoisted_parts, inline_code, defs, free_uses = pick_data_source(
                element, node_type_index, file_cache, results_cache,
                declared_names=declared_names)
            elements.append(('data', hoisted_parts, inline_code, defs, free_uses))
        elif isinstance(element, ControlComp):
            elements.append(('bare', [], f"pass  # bare control: {element.comp_type}", None, None))

    # Phase 2: assemble with joins
    hoisted = []
    body = []
    last_data_defs = None
    for kind, h, content, defs, free_uses in elements:
        hoisted.extend(h)
        if kind == 'data':
            if last_data_defs is not None and random.random() < join_rate:
                result = _try_create_join(last_data_defs, free_uses, content)
                if result:
                    body.append(result[0])
                    content = result[1]
            body.append(content)
            last_data_defs = defs
        elif kind == 'region':
            body.extend(content)
        elif kind == 'bare':
            body.append(content)

    # Deduplicate hoisted definitions by name
    unique_hoisted = []
    for text, node_type in hoisted:
        text = _strip_dangling_blocks(_dedent_snippet(text)).strip()
        name = _extract_def_name(text, node_type)
        if name:
            key = name.lower()
            if key in declared_names:
                continue
            declared_names.add(key)
        unique_hoisted.append(text)

    lines = unique_hoisted + body
    return "\n".join(lines) + "\n"


# ---------------------------------------------------------------------------
# Profile
# ---------------------------------------------------------------------------

def _profile_one_file(filepath):
    """Worker: profile a single Python file."""
    try:
        tree, source = _build_ast_safe(filepath)
        if tree is None:
            return None
        results = build_statement_dependencies(tree, source)
        entries = []
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_line'), r.get('end_line'),
                     r.get('start_col'), r.get('end_col'))
            entries.append((desc, entry))
        return entries
    except Exception as e:
        print(f"Warning: skipping {filepath}: {e}")
        return None


def profile_corpus(input_dir, parallel=1):
    index = {}
    filepaths = [
        os.path.join(input_dir, f)
        for f in os.listdir(input_dir)
        if f.endswith('.py')
    ]

    def _merge(entries):
        if entries is None:
            return
        for desc, entry in entries:
            if desc not in index:
                index[desc] = [entry]
            else:
                index[desc].append(entry)

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for entries in pool.imap_unordered(_profile_one_file, filepaths):
                _merge(entries)
    else:
        for fp in filepaths:
            _merge(_profile_one_file(fp))

    return index


# ---------------------------------------------------------------------------
# Fuzz loop
# ---------------------------------------------------------------------------

def fuzz_loop(constraints_dir, seed_dir, out_dir, rebuild_cache=False, parallel=1, join_rate=0.0):
    """Run an infinite fuzzing loop: synthesize, write, sanitize, repeat."""
    pickle_files = sorted([
        os.path.join(constraints_dir, f)
        for f in os.listdir(constraints_dir) if f.endswith('.pickle')
    ])
    if not pickle_files:
        print(f"No .pickle files found in {constraints_dir}")
        return
    constraints = []
    for pf in pickle_files:
        try:
            constraints.append((pf, load_constraint(pf)))
        except Exception as e:
            print(f"Warning: skipping {pf}: {e}")
    print(f"Loaded {len(constraints)} constraints from {constraints_dir}")

    node_type_index, file_cache, results_cache = get_corpus_index(
        seed_dir, rebuild=rebuild_cache, parallel=parallel)

    os.makedirs(out_dir, exist_ok=True)

    iteration = 0
    errors_found = 0
    print("Fuzzing started. Ctrl+C to stop.\n")
    try:
        while True:
            if iteration % 100 == 0:
                _clean()
            iteration += 1
            pf, constraint = random.choice(constraints)
            py_source = synthesize(constraint, node_type_index, file_cache, results_cache, join_rate=join_rate)
            base_name = os.path.splitext(os.path.basename(pf))[0]
            out_name = f"fuzz_{base_name}_{token_hex(5)}.py"
            out_path = os.path.join(out_dir, out_name)
            with open(out_path, 'w') as f:
                f.write(py_source)
            sanitize(out_path)
            if os.path.exists(out_path + ".er"):
                errors_found += 1
                print(f"[{iteration}] ERROR found: {out_path}.er")
            else:
                print(f"[{iteration}] clean  (errors so far: {errors_found})", end='\r')
    except KeyboardInterrupt:
        print(f"\n\nFuzzing stopped after {iteration} iterations.")
        print(f"Errors found: {errors_found}")
        er_files = [f for f in os.listdir(out_dir) if f.endswith('.er')]
        if er_files:
            print(f"Error files in {out_dir}/:")
            for ef in sorted(er_files):
                print(f"  {ef}")


# ---------------------------------------------------------------------------
# Main
# ---------------------------------------------------------------------------

def main():
    parser = argparse.ArgumentParser(description="Python JIT fuzzer — synthesize Python scripts from JOC constraints")
    parser.add_argument('--profile', metavar='DIR',
                        help='Profile all .py files in DIR, print per-type counts')
    parser.add_argument('--synth', metavar='PATH',
                        help='Synthesize Python scripts from JOC constraint pickle(s). '
                             'PATH can be a single .pickle file or a directory of them.')
    parser.add_argument('--fuzz', metavar='DIR',
                        help='Run infinite fuzzing loop using constraints from DIR.')
    parser.add_argument('--seeds', metavar='DIR', default='./pytests',
                        help='Path to seed corpus directory (default: ./pytests)')
    parser.add_argument('--count', type=int, default=1,
                        help='Number of scripts to generate per constraint (default: 1)')
    parser.add_argument('--out', metavar='DIR', default='./synth_out',
                        help='Output directory for generated .py files (default: ./synth_out)')
    parser.add_argument('--build-cache', action='store_true',
                        help='Build (or rebuild) the corpus cache and exit')
    parser.add_argument('--rebuild-cache', action='store_true',
                        help='Force rebuild of the corpus cache even if one exists')
    parser.add_argument('--join-rate', type=float, default=0.0,
                        help='Probability (0.0-1.0) of creating join variables between '
                             'consecutive data statements (default: 0.0)')
    parser.add_argument('-j', '--jobs', type=int, default=1,
                        help='Number of parallel worker processes (default: 1)')
    args = parser.parse_args()

    if args.build_cache:
        get_corpus_index(args.seeds, rebuild=True, parallel=args.jobs)
        return

    elif args.fuzz:
        fuzz_loop(args.fuzz, args.seeds, args.out,
                  rebuild_cache=args.rebuild_cache, parallel=args.jobs,
                  join_rate=args.join_rate)

    elif args.synth:
        if os.path.isdir(args.synth):
            pickle_files = sorted([
                os.path.join(args.synth, f)
                for f in os.listdir(args.synth) if f.endswith('.pickle')
            ])
        else:
            pickle_files = [args.synth]

        node_type_index, file_cache, results_cache = get_corpus_index(
            args.seeds, rebuild=args.rebuild_cache, parallel=args.jobs)

        os.makedirs(args.out, exist_ok=True)

        for pf in pickle_files:
            constraint = load_constraint(pf)
            base_name = os.path.splitext(os.path.basename(pf))[0] + token_hex(5)
            for i in range(args.count):
                py_source = synthesize(constraint, node_type_index, file_cache, results_cache, join_rate=args.join_rate)
                if args.count == 1:
                    out_name = f"{base_name}.py"
                else:
                    out_name = f"{base_name}_{i}.py"
                out_path = os.path.join(args.out, out_name)
                with open(out_path, 'w') as f:
                    f.write(py_source)
                print(f"  {out_path}")

        print(f"\nGenerated {len(pickle_files) * args.count} file(s) in {args.out}/")

    elif args.profile:
        index = profile_corpus(args.profile, parallel=args.jobs)
        print(f"\nNode type index ({len(index)} types):\n")
        for desc in sorted(index, key=lambda k: len(index[k]), reverse=True):
            print(f"  {desc}: {len(index[desc])} occurrences")
        out_path = os.path.join(args.profile, 'node_type_index.pkl')
        with open(out_path, 'wb') as f:
            pickle.dump(index, f)
        print(f"\nIndex saved to {out_path}")

    else:
        parser.print_help()


if __name__ == "__main__":
    main()
