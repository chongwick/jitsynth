from php_dependency_analyzer import build_statement_dependencies, get_dependency_slice, get_dependency_closure, get_source_slice
from jc.comps import ControlComp, DataComp
import sys
import subprocess
import json
import pickle
import os
import argparse
import random
import re
import math
from secrets import token_hex
from multiprocessing import Pool


class _CompsUnpickler(pickle.Unpickler):
    """Remap bare 'comps' module references to 'jc.comps' when unpickling."""
    def find_class(self, module, name):
        if module == 'comps':
            module = 'jc.comps'
        return super().find_class(module, name)

def _clean():
    os.system(
        f"git clean -fd "
        f"-e corpus_cache.pkl -e synth_out -e php -e seeds -e /ramdisk "
        f"-e src -e Cargo.toml -e Cargo.lock -e target -e driver.py "
        f"-e CLAUDE.md -e README.md -e jc"
    )


def sanitize(php_file):
    is_error = lambda x: os.path.exists(x+".er")
    is_trash = lambda x: os.path.exists(x+".tr")
    for i in range(2):
        command = ['bash','./sanitize.sh',os.path.join(os.getcwd(),php_file),str(i)]
        child = None
        try:
            child = subprocess.run(command,
                                   text=True,
                                   timeout=30,
                                   capture_output=True)
        except subprocess.TimeoutExpired as exc:
            break
    try:
        if is_trash(php_file):
            os.remove(php_file+".tr")
        elif not(is_error(php_file)):
            os.remove(php_file)
    except Exception as e:
        return


def load_constraint(path):
    with open(path, 'rb') as f:
        return _CompsUnpickler(f).load()

def profile_script(script_results):
    profile_buckets = {}
    for i in script_results:
        if i['description'] not in profile_buckets:
            profile_buckets[i['description']] = [i['stmt_id']]
        else:
            profile_buckets[i['description']].append(i['stmt_id'])
    return profile_buckets

def analyze_corpus(input_dir,output_dir):
    for seed in [os.path.join(input_dir,i) for i in os.listdir(input_dir)]:
        with open(seed, "rb") as f:
            source = f.read()
        results = build_statement_dependencies(_build_ast(seed))
        analysis = [source,results]
        output_file = os.path.join(output_dir,seed)
        with open(output_file,"wb") as f:
            pickle.dump(analysis,f)

def analyze_file(seed):
    with open(seed, "rb") as f:
        source = f.read()
    results = build_statement_dependencies(_build_ast(seed))
    return source,results

def get_statement_and_dependency(results,stmt_id,source):
    dep_slice = get_dependency_slice(results,stmt_id,source)
    in_scope_statement = dep_slice.split("\n")[-1]
    dep_slice = '\n'.join(dep_slice.splitlines()[:-1])
    return in_scope_statement,dep_slice

def _build_ast(target_file):
    try:
        command = ['bash','./php_to_ast.sh',target_file]
        child = subprocess.Popen(command,stdout=subprocess.PIPE,
                                stderr=subprocess.PIPE,text=True)
        stdout,stderr = child.communicate(timeout=120)
        child.kill()
        ast = json.loads(stdout)
        return ast
    except Exception as e:
        print(e);quit()

def _profile_one_file(filepath):
    try:
        ast = _build_ast_safe(filepath)
        if ast is None:
            return None
        results = build_statement_dependencies(ast)
        entries = []
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_file_pos'), r.get('end_file_pos'))
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
        if f.endswith('.php')
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

def _build_ast_safe(target_file):
    try:
        command = ['bash', './php_to_ast.sh', target_file]
        child = subprocess.Popen(command, stdout=subprocess.PIPE,
                                 stderr=subprocess.PIPE, text=True)
        stdout, stderr = child.communicate(timeout=120)
        child.kill()
        return json.loads(stdout)
    except Exception as e:
        print(f"Warning: failed to parse {target_file}: {e}")
        return None

def print_node(entry):
    filepath, stmt_id, start_file_pos, end_file_pos = entry
    if start_file_pos is None or end_file_pos is None:
        print(f"[{filepath} stmt {stmt_id}]: no file position available")
        return
    with open(filepath, "rb") as f:
        source = f.read()
    print(source[start_file_pos:end_file_pos + 1].decode('utf-8', errors='ignore'))

COMP_TO_DESCRIPTIONS = {
    "if":       ["Stmt_If (region)"],
    "else":     ["Stmt_If (region)"],
    "for":      ["Stmt_For (region)", "Stmt_Foreach (region)"],
    "while":    ["Stmt_While (region)"],
    "do_while": ["Stmt_While (region)"],
    "try":      ["Stmt_TryCatch (region)"],
    "catch":    ["Stmt_Catch (region)"],
    "finally":  [],
    "func":     ["Stmt_Function (region)", "Stmt_ClassMethod (region)"],
    "class":    ["Stmt_Class (region)", "Stmt_Trait (region)", "Stmt_Interface (region)"],
    "method":   ["Stmt_ClassMethod (region)"],
    "switch":   [],

    "assign":    ["Expr_Assign", "Expr_AssignRef"],
    "var_dec":   ["Expr_Assign"],
    "func_call": ["Expr_FuncCall", "Expr_MethodCall"],
    "update":    ["Expr_PostInc", "Expr_PreInc", "Expr_PostDec", "Expr_PreDec"],
    "return":    ["Stmt_Return"],
    "new":       ["Expr_FuncCall"],
    "throw":     ["Stmt_Echo"],
    "unary":     ["Expr_PreInc", "Expr_PostInc"],
}


HOISTABLE_DESCRIPTIONS = {
    "Stmt_Function (region)",
    "Stmt_ClassMethod (region)",
    "Stmt_Class (region)",
    "Stmt_Trait (region)",
    "Stmt_Interface (region)",
}

CORPUS_CACHE_FILE = 'corpus_cache.pkl'


def _is_php_seed(filepath, filename):
    if filename.endswith('.php'):
        return True
    try:
        with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
            header = f.read(64)
        return header.lstrip().startswith('<?php')
    except Exception:
        return False


def _index_one_file(filepath):
    try:
        with open(filepath, "rb") as f:
            source = f.read()
        ast = _build_ast_safe(filepath)
        if ast is None:
            return None
        results = build_statement_dependencies(ast)
        entries = []
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_file_pos'), r.get('end_file_pos'))
            entries.append((desc, entry))
        return (filepath, source, results, entries)
    except Exception as e:
        print(f"Warning: skipping {filepath}: {e}")
        return None


def build_corpus_index(seed_dir, parallel=1):
    node_type_index = {}
    file_cache = {}
    results_cache = {}

    filepaths = []
    for filename in os.listdir(seed_dir):
        filepath = os.path.join(seed_dir, filename)
        if os.path.isfile(filepath) and _is_php_seed(filepath, filename):
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


def save_corpus_cache(node_type_index, file_cache, results_cache):
    with open(CORPUS_CACHE_FILE, 'wb') as f:
        pickle.dump((node_type_index, file_cache, results_cache), f)
    print(f"Cache saved to {CORPUS_CACHE_FILE}")


def load_corpus_cache():
    if not os.path.isfile(CORPUS_CACHE_FILE):
        return None
    with open(CORPUS_CACHE_FILE, 'rb') as f:
        return pickle.load(f)


def get_corpus_index(seed_dir, rebuild=False, parallel=1):
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


_DEF_NAME_RE = re.compile(
    r'(?:function\s*&?\s*|class\s+|trait\s+|interface\s+)(\w+)', re.IGNORECASE
)

_CLASS_ONLY_MODIFIERS_RE = re.compile(
    r'\b(?:(?:public|protected|private|abstract|final|static)\s+)+(?=function\b)'
)


def _strip_class_modifiers(text):
    return _CLASS_ONLY_MODIFIERS_RE.sub('', text)


def _extract_def_name(source_text, node_type):
    m = _DEF_NAME_RE.search(source_text)
    return m.group(1) if m else None


_name_counter = 0

def _next_name(prefix):
    global _name_counter
    name = f"{prefix}_{_name_counter}"
    _name_counter += 1
    return name


_SIMPLE_VAR_RE = re.compile(r'^\$[a-zA-Z_][a-zA-Z0-9_]*$')


def _is_simple_var(symbol):
    return _SIMPLE_VAR_RE.match(symbol) is not None


def _replace_variable(code, old_var, new_var):
    pattern = re.escape(old_var) + r'(?![a-zA-Z0-9_\x80-\xff])'
    return re.sub(pattern, lambda m: new_var, code)


def _try_create_join(prev_defs, curr_free_uses, curr_inline):
    joinable_defs = [d for d in prev_defs if _is_simple_var(d)]
    joinable_uses = [u for u in curr_free_uses if _is_simple_var(u)]
    if not joinable_defs or not joinable_uses:
        return None
    def_var = random.choice(joinable_defs)
    use_var = random.choice(joinable_uses)
    join_name = _next_name("join_var")
    join_var = f"${join_name}"
    join_assignment = f"{join_var} = {def_var};"
    modified_inline = _replace_variable(curr_inline, use_var, join_var)
    return (join_assignment, modified_inline)


_MAX_CONTEXT_RETRIES = 10

_CLASS_SCOPE_RE = re.compile(
    r'\b(?:self|parent|static)\s*::'
    r'|new\s+(?:self|static)\b'
    r'|\)\s*:\s*(?:self|parent|static)\b'
)

CATCH_DESCRIPTIONS = {"Stmt_Catch (region)"}

_PHP_BUILTINS = {
    'unserialize', 'serialize', 'array_map', 'array_filter', 'array_merge',
    'array_push', 'array_pop', 'array_shift', 'array_unshift', 'array_keys',
    'array_values', 'array_slice', 'array_splice', 'array_search',
    'array_reverse', 'array_unique', 'array_flip', 'array_chunk',
    'array_combine', 'array_diff', 'array_intersect', 'count', 'sizeof',
    'strlen', 'strpos', 'substr', 'str_replace', 'str_pad', 'strtolower',
    'strtoupper', 'trim', 'ltrim', 'rtrim', 'explode', 'implode', 'join',
    'sprintf', 'printf', 'fprintf', 'sscanf', 'number_format',
    'isset', 'unset', 'empty', 'var_dump', 'print_r', 'var_export',
    'is_array', 'is_string', 'is_int', 'is_float', 'is_bool', 'is_null',
    'is_numeric', 'is_object', 'is_callable', 'gettype', 'settype',
    'intval', 'floatval', 'strval', 'boolval',
    'file_get_contents', 'file_put_contents', 'fopen', 'fclose', 'fread',
    'fwrite', 'fgets', 'feof', 'file', 'file_exists', 'is_file', 'is_dir',
    'mkdir', 'rmdir', 'rename', 'copy', 'unlink', 'glob', 'realpath',
    'basename', 'dirname', 'pathinfo',
    'json_encode', 'json_decode', 'json_last_error',
    'preg_match', 'preg_match_all', 'preg_replace', 'preg_split',
    'sort', 'rsort', 'asort', 'arsort', 'ksort', 'krsort', 'usort',
    'in_array', 'array_key_exists', 'range', 'compact', 'extract',
    'date', 'time', 'mktime', 'strtotime', 'microtime',
    'class_exists', 'function_exists', 'method_exists', 'property_exists',
    'get_class', 'get_parent_class', 'is_a', 'instanceof',
    'header', 'setcookie', 'session_start', 'session_destroy',
    'echo', 'print', 'die', 'exit',
    'min', 'max', 'abs', 'ceil', 'floor', 'round', 'rand', 'mt_rand',
    'pow', 'sqrt', 'log', 'exp',
    'md5', 'sha1', 'hash', 'base64_encode', 'base64_decode',
    'urlencode', 'urldecode', 'rawurlencode', 'rawurldecode',
    'htmlspecialchars', 'htmlentities', 'strip_tags',
    'array_walk', 'array_column', 'array_fill', 'array_pad',
    'call_user_func', 'call_user_func_array',
    'trigger_error', 'set_error_handler', 'restore_error_handler',
    'define', 'defined', 'constant',
    'ob_start', 'ob_end_clean', 'ob_get_contents', 'ob_flush',
    'chr', 'ord', 'str_repeat', 'str_word_count', 'str_split',
    'substr_count', 'substr_replace', 'str_contains', 'str_starts_with',
    'str_ends_with', 'ucfirst', 'lcfirst', 'ucwords',
    'ctype_alpha', 'ctype_digit', 'ctype_alnum',
}


def _has_class_scope_refs(text):
    return '$this' in text or _CLASS_SCOPE_RE.search(text) is not None


def _needs_function_scope(text):
    return 'yield' in text


def pick_data_source(data_comp, node_type_index, file_cache, results_cache,
                     in_method=False, in_function=False, declared_names=None):
    descriptions = COMP_TO_DESCRIPTIONS.get(data_comp.comp_type, [])
    candidates = []
    for desc in descriptions:
        candidates.extend(node_type_index.get(desc, []))
    if not candidates:
        return ([], f"/* no match for {data_comp.comp_type} */", set(), set())

    if declared_names is None:
        declared_names = set()

    for _attempt in range(_MAX_CONTEXT_RETRIES):
        entry = random.choice(candidates)
        filepath, stmt_id, start_pos, end_pos = entry
        if start_pos is None or end_pos is None:
            return ([], f"/* no position for {data_comp.comp_type} */", set(), set())
        source = file_cache.get(filepath)
        if source is None:
            return ([], f"/* source not cached for {filepath} */", set(), set())
        results = results_cache.get(filepath)
        if results is None:
            raw = source[start_pos:end_pos + 1]
            snippet = raw.decode('utf-8', errors='ignore').strip() if isinstance(raw, bytes) else raw.strip()
            if not snippet.endswith(';'):
                snippet += ';'
            if not in_method and _has_class_scope_refs(snippet):
                continue
            if not in_function and _needs_function_scope(snippet):
                continue
            return ([], snippet, set(), set())
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
                catch_defs = r.get('defs', set())
                for var in catch_defs:
                    inline_parts.append(f'{var} = new Exception("stub");')
            else:
                inline_parts.append(text)
        if not in_method:
            hoisted_parts = [
                (t, n) for t, n in hoisted_parts
                if not _has_class_scope_refs(t)
            ]
        filtered_hoisted = []
        has_name_collision = False
        for text, node_type in hoisted_parts:
            name = _extract_def_name(text, node_type)
            if name and name.lower() in declared_names:
                has_name_collision = True
                continue
            filtered_hoisted.append((text, node_type))
        hoisted_parts = filtered_hoisted
        filtered_inline = []
        for text in inline_parts:
            name_match = _DEF_NAME_RE.search(text)
            if name_match:
                name = name_match.group(1)
                if name.lower() in declared_names:
                    has_name_collision = True
                    continue
            filtered_inline.append(text)
        inline_parts = filtered_inline
        inline = '\n'.join(inline_parts)
        lines = inline.split('\n')
        if lines and not lines[-1].rstrip().endswith(';'):
            lines[-1] = lines[-1].rstrip() + ';'
        inline = '\n'.join(lines)
        if not in_method and _has_class_scope_refs(inline):
            continue
        if not in_function and _needs_function_scope(inline):
            continue
        for text, node_type in hoisted_parts:
            name = _extract_def_name(text, node_type)
            if name:
                declared_names.add(name.lower())
        for text in inline_parts:
            name_match = _DEF_NAME_RE.search(text)
            if name_match:
                declared_names.add(name_match.group(1).lower())
        primary = results[stmt_id]
        primary_defs = primary.get('defs', set())
        closure_defs = set()
        for sid in closure:
            closure_defs.update(results[sid].get('defs', set()))
        free_uses = primary.get('uses', set()) - closure_defs
        return (hoisted_parts, inline, primary_defs, free_uses)

    primary = results[stmt_id]
    primary_defs = primary.get('defs', set())
    closure_defs = set()
    for sid in closure:
        closure_defs.update(results[sid].get('defs', set()))
    free_uses = primary.get('uses', set()) - closure_defs
    return (hoisted_parts, inline, primary_defs, free_uses)


def synthesize_region(region_list, node_type_index, file_cache, results_cache,
                      indent=0, in_method=False, in_function=False,
                      join_rate=0.0, declared_names=None):
    if not region_list:
        return [], []
    if declared_names is None:
        declared_names = set()
    pad = "    " * indent
    ctrl = region_list[0]
    ct = ctrl.comp_type
    child_in_method = in_method or ct in ("method", "class")
    child_in_function = in_function or ct in ("func", "method")
    hoisted = []
    lines = []

    if ct == "if":
        lines.append(f"{pad}if (true) {{")
    elif ct == "else":
        lines.append(f"{pad}if (!true) {{")
    elif ct == "for":
        vname = _next_name("i")
        lines.append(f"{pad}for (${vname} = 0; ${vname} < 10; ${vname}++) {{")
    elif ct == "while":
        lines.append(f"{pad}while (true) {{")
    elif ct == "do_while":
        lines.append(f"{pad}do {{")
    elif ct == "func":
        fname = _next_name("f")
        lines.append(f"{pad}function {fname}() {{")
    elif ct == "class":
        cname = _next_name("C")
        lines.append(f"{pad}class {cname} {{")
    elif ct == "method":
        mname = _next_name("m")
        lines.append(f"{pad}public function {mname}() {{")
    elif ct == "try":
        lines.append(f"{pad}try {{")
    elif ct == "catch":
        lines.append(f"{pad}if (true) {{")
    elif ct == "finally":
        lines.append(f"{pad}if (true) {{")
    elif ct == "switch":
        lines.append(f"{pad}if (true) {{")
    else:
        lines.append(f"{pad}/* unknown region: {ct} */ {{")

    body_pad = "    " * (indent + 1)
    elements = []
    if ct == "while":
        lines.append(f"{body_pad}break;  // avoid infinite loop")
    for element in region_list[1:]:
        if isinstance(element, list):
            sub_hoisted, sub_lines = synthesize_region(
                element, node_type_index, file_cache, results_cache,
                indent + 1, in_method=child_in_method,
                in_function=child_in_function, join_rate=join_rate,
                declared_names=declared_names)
            elements.append(('region', sub_hoisted, sub_lines, None, None))
        elif isinstance(element, DataComp):
            hoisted_parts, inline_code, defs, free_uses = pick_data_source(
                element, node_type_index, file_cache, results_cache,
                in_method=child_in_method, in_function=child_in_function,
                declared_names=declared_names)
            elements.append(('data', hoisted_parts, inline_code, defs, free_uses))
        elif isinstance(element, ControlComp):
            elements.append(('bare', [], f"/* bare control: {element.comp_type} */", None, None))

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

    if ct == "do_while":
        lines.append(f"{pad}}} while (false);")
    elif ct == "try":
        lines.append(f"{pad}}} catch (Exception $e) {{}}")
    else:
        lines.append(f"{pad}}}")

    return hoisted, lines


def synthesize(constraint_env, node_type_index, file_cache, results_cache, join_rate=0.0):
    global _name_counter
    _name_counter = 0

    declared_names = set(n.lower() for n in _PHP_BUILTINS)

    elements = []
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
            elements.append(('bare', [], f"/* bare control: {element.comp_type} */", None, None))

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

    unique_hoisted = []
    for text, node_type in hoisted:
        if node_type == 'Stmt_ClassMethod':
            text = _strip_class_modifiers(text)
        name = _extract_def_name(text, node_type)
        if name:
            key = name.lower()
            if key in declared_names:
                continue
            declared_names.add(key)
        unique_hoisted.append(text)
    lines = ["<?php"] + unique_hoisted + body
    return "\n".join(lines) + "\n"


def fuzz_loop(constraints_dir, seed_dir, out_dir, rebuild_cache=False, parallel=1, join_rate=0.0):
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
            php_source = synthesize(constraint, node_type_index, file_cache, results_cache, join_rate=join_rate)
            base_name = os.path.splitext(os.path.basename(pf))[0]
            out_name = f"fuzz_{base_name}_{token_hex(5)}.php"
            out_path = os.path.join(out_dir, out_name)
            with open(out_path, 'w') as f:
                f.write(php_source)
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


def main():
    parser = argparse.ArgumentParser(description="PHP dependency analyzer driver")
    parser.add_argument('--profile', metavar='DIR',
                        help='Profile all .php files in DIR, print per-type counts, and pickle the index')
    parser.add_argument('--synth', metavar='PATH',
                        help='Synthesize PHP scripts from JOC constraint pickle(s). '
                             'PATH can be a single .pickle file or a directory of them.')
    parser.add_argument('--fuzz', metavar='DIR',
                        help='Run infinite fuzzing loop using constraints from DIR. '
                             'Generates, sanitizes, and reports errors continuously.')
    parser.add_argument('--seeds', metavar='DIR', default='./seeds',
                        help='Path to seed corpus directory (default: ./seeds)')
    parser.add_argument('--count', type=int, default=1,
                        help='Number of scripts to generate per constraint (default: 1)')
    parser.add_argument('--out', metavar='DIR', default='./synth_out',
                        help='Output directory for generated .php files (default: ./synth_out)')
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
            base_name = os.path.splitext(os.path.basename(pf))[0]+token_hex(5)
            for i in range(args.count):
                php_source = synthesize(constraint, node_type_index, file_cache, results_cache, join_rate=args.join_rate)
                if args.count == 1:
                    out_name = f"{base_name}.php"
                else:
                    out_name = f"{base_name}_{i}.php"
                out_path = os.path.join(args.out, out_name)
                with open(out_path, 'w') as f:
                    f.write(php_source)
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
        source,results = analyze_file("g.php")
        source2,results2 = analyze_file("h.php")
        gs,gd = get_statement_and_dependency(results,1,source)
        hs,hd = get_statement_and_dependency(results2,0,source2)
        x = hd.split("\n")
        x.insert(2,gs)
        example_mutation = gd + "\n"  + "\n".join(x)

if __name__ == "__main__":
    main()
