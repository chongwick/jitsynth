from lua_dependency_analyzer import (
    build_statement_dependencies,
    get_dependency_closure,
    get_source_slice,
)
from jc.comps import ControlComp, DataComp
import argparse
import os
import pickle
import random
import re
import subprocess
import tempfile
from multiprocessing import Pool
from secrets import token_hex


class _CompsUnpickler(pickle.Unpickler):
    """Remap bare 'comps' module references to 'jc.comps' when unpickling."""

    def find_class(self, module, name):
        if module == "comps":
            module = "jc.comps"
        return super().find_class(module, name)


SUPPORTED_CONTROL_TYPES = {"main", "if", "else", "for", "while", "func"}
SUPPORTED_DATA_TYPES = {"assign", "var_dec", "func_call", "return", "update", "throw", "unary"}

COMP_TO_DESCRIPTIONS = {
    "if": ["If (region)"],
    "else": ["If (region)"],
    "for": ["For (region)"],
    "while": ["While (region)"],
    "func": ["Function (region)"],
    "assign": ["Assign", "LocalAssign"],
    "var_dec": ["LocalAssign"],
    "func_call": ["Call"],
    "return": ["Return"],
    "update": ["semantic:update"],
    "throw": ["semantic:throw"],
    "unary": ["semantic:unary"],
}

HOISTABLE_DESCRIPTIONS = {"Function (region)"}
CORPUS_CACHE_FILE = "lua_corpus_cache.pkl"

_name_counter = 0
_SIMPLE_VAR_RE = re.compile(r"^[A-Za-z_][A-Za-z0-9_]*$")
_DEF_NAME_RE = re.compile(r"(?:local\s+function|function)\s+([A-Za-z_][A-Za-z0-9_]*)")
_DISALLOWED_FUNC_CALL_RE = re.compile(
    r"\b(?:assert|error|io\.read|io\.write|io\.input|io\.output|dofile|loadfile|loadstring)\s*\("
)
_SAFE_GLOBAL_ROOTS = {
    "_G",
    "_VERSION",
    "arg",
    "assert",
    "bit",
    "collectgarbage",
    "coroutine",
    "debug",
    "getmetatable",
    "io",
    "ipairs",
    "jit",
    "math",
    "next",
    "os",
    "package",
    "pairs",
    "pcall",
    "print",
    "rawequal",
    "rawget",
    "rawset",
    "require",
    "select",
    "setmetatable",
    "string",
    "table",
    "tonumber",
    "tostring",
    "type",
    "unpack",
    "xpcall",
}
_RUNTIME_ERROR_RE = re.compile(
    r"(?:assertion failed|stack traceback|attempt to |bad argument #|syntax error| nil value| table value| string value)",
    re.IGNORECASE,
)


def _clean():
    """Avoid deleting repo files during fuzzing from an uncommitted worktree."""
    return


def sanitize(lua_file):
    is_error = lambda path: os.path.exists(path + ".er")
    is_trash = lambda path: os.path.exists(path + ".tr")
    command = ["bash", "./sanitize_lua.sh", os.path.join(os.getcwd(), lua_file)]
    try:
        subprocess.run(command, text=True, timeout=30, capture_output=True)
    except subprocess.TimeoutExpired:
        return
    try:
        if is_trash(lua_file):
            os.remove(lua_file + ".tr")
        elif not is_error(lua_file):
            os.remove(lua_file)
    except Exception:
        return


def load_constraint(path):
    with open(path, "rb") as f:
        return _CompsUnpickler(f).load()


def constraint_is_supported(constraint_env):
    if isinstance(constraint_env, DataComp):
        return constraint_env.comp_type in SUPPORTED_DATA_TYPES
    if isinstance(constraint_env, ControlComp):
        return constraint_env.comp_type in SUPPORTED_CONTROL_TYPES
    if isinstance(constraint_env, list):
        return all(constraint_is_supported(item) for item in constraint_env)
    return True


def _is_lua_seed(filepath, filename):
    return os.path.isfile(filepath) and filename.endswith(".lua")


def _index_descriptions(result):
    yield result["description"]
    for tag in result.get("semantic_tags", set()):
        yield f"semantic:{tag}"


def _index_one_file(filepath):
    try:
        with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
            source = f.read()
        results = build_statement_dependencies(source)
        entries = []
        for result in results:
            entry = (filepath, result["stmt_id"])
            for desc in _index_descriptions(result):
                entries.append((desc, entry))
        return filepath, source, results, entries
    except Exception as exc:
        print(f"Warning: skipping {filepath}: {exc}")
        return None


def build_corpus_index(seed_dir, parallel=1):
    node_type_index = {}
    file_cache = {}
    results_cache = {}

    filepaths = []
    for filename in os.listdir(seed_dir):
        filepath = os.path.join(seed_dir, filename)
        if _is_lua_seed(filepath, filename):
            filepaths.append(filepath)

    def _merge(result):
        if result is None:
            return
        filepath, source, results, entries = result
        file_cache[filepath] = source
        results_cache[filepath] = results
        for desc, entry in entries:
            node_type_index.setdefault(desc, []).append(entry)

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for result in pool.imap_unordered(_index_one_file, filepaths):
                _merge(result)
    else:
        for filepath in filepaths:
            _merge(_index_one_file(filepath))

    return node_type_index, file_cache, results_cache


def save_corpus_cache(node_type_index, file_cache, results_cache):
    with open(CORPUS_CACHE_FILE, "wb") as f:
        pickle.dump((node_type_index, file_cache, results_cache), f)
    print(f"Cache saved to {CORPUS_CACHE_FILE}")


def load_corpus_cache():
    if not os.path.isfile(CORPUS_CACHE_FILE):
        return None
    with open(CORPUS_CACHE_FILE, "rb") as f:
        return pickle.load(f)


def get_corpus_index(seed_dir, rebuild=False, parallel=1):
    if not rebuild:
        cached = load_corpus_cache()
        if cached is not None:
            node_type_index, file_cache, results_cache = cached
            print(
                f"Loaded cached corpus index from {CORPUS_CACHE_FILE} "
                f"({sum(len(v) for v in node_type_index.values())} statements, "
                f"{len(node_type_index)} types, {len(file_cache)} files)"
            )
            return node_type_index, file_cache, results_cache

    print(f"Building corpus index from {seed_dir}..." + (f" ({parallel} workers)" if parallel > 1 else ""))
    node_type_index, file_cache, results_cache = build_corpus_index(seed_dir, parallel=parallel)
    print(
        f"Indexed {sum(len(v) for v in node_type_index.values())} statements "
        f"across {len(node_type_index)} types from {len(file_cache)} files"
    )
    save_corpus_cache(node_type_index, file_cache, results_cache)
    return node_type_index, file_cache, results_cache


def _next_name(prefix):
    global _name_counter
    name = f"{prefix}_{_name_counter}"
    _name_counter += 1
    return name


def _is_simple_var(symbol):
    return _SIMPLE_VAR_RE.match(symbol or "") is not None


def _replace_variable(code, old_var, new_var):
    return re.sub(r"\b" + re.escape(old_var) + r"\b", lambda match: new_var, code)


def _try_create_join(prev_defs, curr_free_uses, curr_inline):
    joinable_defs = [symbol for symbol in prev_defs if _is_simple_var(symbol)]
    joinable_uses = [symbol for symbol in curr_free_uses if _is_simple_var(symbol)]
    if not joinable_defs or not joinable_uses:
        return None
    def_var = random.choice(joinable_defs)
    use_var = random.choice(joinable_uses)
    join_name = _next_name("join_var")
    join_assignment = f"local {join_name} = {def_var}"
    modified_inline = _replace_variable(curr_inline, use_var, join_name)
    return join_assignment, modified_inline


def _extract_def_name(source_text):
    match = _DEF_NAME_RE.search(source_text)
    return match.group(1) if match else None


def _free_use_allowed(symbol):
    root = symbol.split(".", 1)[0].split("[", 1)[0]
    return root in _SAFE_GLOBAL_ROOTS


def pick_data_source(data_comp, node_type_index, file_cache, results_cache):
    descriptions = COMP_TO_DESCRIPTIONS.get(data_comp.comp_type, [])
    candidates = []
    for desc in descriptions:
        candidates.extend(node_type_index.get(desc, []))
    if not candidates:
        return [], f"-- no match for {data_comp.comp_type}", set(), set()

    shuffled_candidates = list(candidates)
    random.shuffle(shuffled_candidates)
    fallback = None

    for filepath, stmt_id in shuffled_candidates:
        source = file_cache[filepath]
        results = results_cache[filepath]
        closure = get_dependency_closure(results, stmt_id)
        closure_defs = set()
        hoisted = []
        inline_parts = []

        for dep_id in closure:
            text = get_source_slice(results, dep_id, source)
            if not text:
                continue
            result = results[dep_id]
            closure_defs.update(result["defs"])
            if result["description"] in HOISTABLE_DESCRIPTIONS:
                hoisted.append((text, result["description"]))
            else:
                inline_parts.append(text)

        inline_code = "\n".join(part.strip() for part in inline_parts if part.strip()) or f"-- no inline match for {data_comp.comp_type}"
        primary_result = results[stmt_id]
        free_uses = set(primary_result["uses"]) - closure_defs
        unresolved_free_uses = {symbol for symbol in free_uses if not _free_use_allowed(symbol)}

        if fallback is None:
            fallback = (hoisted, inline_code, set(primary_result["defs"]), free_uses)

        if unresolved_free_uses:
            continue
        if data_comp.comp_type == "func_call" and _DISALLOWED_FUNC_CALL_RE.search(inline_code):
            continue

        return hoisted, inline_code, set(primary_result["defs"]), free_uses

    if fallback is not None:
        return fallback
    return [], f"-- no match for {data_comp.comp_type}", set(), set()


def _indent_lines(text, indent):
    pad = " " * indent
    return [f"{pad}{line}" if line else line for line in text.splitlines()]


def synthesize_region(region_list, node_type_index, file_cache, results_cache, indent=0, join_rate=0.0, declared_names=None):
    ct = region_list[0].comp_type
    pad = " " * indent
    hoisted = []
    lines = []
    body_indent = indent + 2

    if ct in {"if", "else"}:
        lines.append(f"{pad}if true then")
        close_lines = [f"{pad}end"]
    elif ct == "for":
        loop_name = _next_name("i")
        lines.append(f"{pad}for {loop_name} = 1, 2 do")
        close_lines = [f"{pad}end"]
    elif ct == "while":
        loop_name = _next_name("w")
        lines.append(f"{pad}local {loop_name} = 0")
        lines.append(f"{pad}while {loop_name} < 1 do")
        close_lines = [f"{' ' * body_indent}{loop_name} = {loop_name} + 1", f"{pad}end"]
    elif ct == "func":
        func_name = _next_name("f")
        lines.append(f"{pad}local function {func_name}()")
        close_lines = [f"{pad}end"]
    else:
        lines.append(f"{pad}do")
        close_lines = [f"{pad}end"]

    body = []
    last_data_defs = None
    for element in region_list[1:]:
        if isinstance(element, list):
            sub_hoisted, sub_lines = synthesize_region(
                element,
                node_type_index,
                file_cache,
                results_cache,
                indent=body_indent,
                join_rate=join_rate,
                declared_names=declared_names,
            )
            hoisted.extend(sub_hoisted)
            body.extend(sub_lines)
        elif isinstance(element, DataComp):
            data_hoisted, content, defs, free_uses = pick_data_source(element, node_type_index, file_cache, results_cache)
            hoisted.extend(data_hoisted)
            if last_data_defs is not None and random.random() < join_rate:
                join_result = _try_create_join(last_data_defs, free_uses, content)
                if join_result:
                    body.extend(_indent_lines(join_result[0], body_indent))
                    content = join_result[1]
            body.extend(_indent_lines(content, body_indent))
            last_data_defs = defs
        elif isinstance(element, ControlComp):
            body.append(f"{' ' * body_indent}-- bare control: {element.comp_type}")

    if not body:
        if ct == "func":
            body.append(f"{' ' * body_indent}return nil")
        else:
            body.append(f"{' ' * body_indent}local _ = 0")

    lines.extend(body)
    lines.extend(close_lines)
    return hoisted, lines


def synthesize(constraint_env, node_type_index, file_cache, results_cache, join_rate=0.0):
    global _name_counter
    _name_counter = 0

    declared_names = set()
    elements = []
    for element in constraint_env[1:]:
        if isinstance(element, list):
            sub_hoisted, sub_lines = synthesize_region(
                element,
                node_type_index,
                file_cache,
                results_cache,
                indent=0,
                join_rate=join_rate,
                declared_names=declared_names,
            )
            elements.append(("region", sub_hoisted, sub_lines, None, None))
        elif isinstance(element, DataComp):
            data_hoisted, inline_code, defs, free_uses = pick_data_source(element, node_type_index, file_cache, results_cache)
            elements.append(("data", data_hoisted, inline_code, defs, free_uses))

    hoisted = []
    body = []
    last_data_defs = None
    for kind, item_hoisted, content, defs, free_uses in elements:
        hoisted.extend(item_hoisted)
        if kind == "data":
            if last_data_defs is not None and random.random() < join_rate:
                join_result = _try_create_join(last_data_defs, free_uses, content)
                if join_result:
                    body.append(join_result[0])
                    content = join_result[1]
            body.extend(content.splitlines())
            last_data_defs = defs
        else:
            body.extend(content)

    unique_hoisted = []
    for text, _desc in hoisted:
        name = _extract_def_name(text)
        if name and name in declared_names:
            continue
        if name:
            declared_names.add(name)
        unique_hoisted.append(text.strip())

    prelude = [
        "local ok_jit, jit = pcall(require, 'jit')",
        "if ok_jit and jit and jit.opt then pcall(jit.opt.start, 'hotloop=1') end",
    ]
    lines = prelude + unique_hoisted + body
    return "\n".join(line for line in lines if line is not None) + "\n"


def lua_source_runs_clean(lua_source):
    with tempfile.NamedTemporaryFile("w", suffix=".lua", delete=False, encoding="utf-8") as tmp:
        tmp.write(lua_source)
        tmp_path = tmp.name
    try:
        proc = subprocess.run(
            ["/opt/homebrew/bin/luajit", tmp_path],
            text=True,
            capture_output=True,
        )
        combined_output = (proc.stdout or "") + "\n" + (proc.stderr or "")
        return proc.returncode == 0 and not _RUNTIME_ERROR_RE.search(combined_output)
    finally:
        try:
            os.remove(tmp_path)
        except OSError:
            pass


def synthesize_clean(constraint_env, node_type_index, file_cache, results_cache, join_rate=0.0, validator=None, max_attempts=25):
    validator = validator or lua_source_runs_clean
    last_source = None
    for _ in range(max_attempts):
        lua_source = synthesize(constraint_env, node_type_index, file_cache, results_cache, join_rate=join_rate)
        last_source = lua_source
        if validator(lua_source):
            return lua_source
    return last_source


def _profile_one_file(filepath):
    try:
        with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
            source = f.read()
        results = build_statement_dependencies(source)
        entries = []
        for result in results:
            for desc in _index_descriptions(result):
                entries.append((desc, (filepath, result["stmt_id"])))
        return entries
    except Exception as exc:
        print(f"Warning: skipping {filepath}: {exc}")
        return None


def profile_corpus(input_dir, parallel=1):
    index = {}
    filepaths = [
        os.path.join(input_dir, filename)
        for filename in os.listdir(input_dir)
        if filename.endswith(".lua")
    ]

    def _merge(entries):
        if entries is None:
            return
        for desc, entry in entries:
            index.setdefault(desc, []).append(entry)

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for entries in pool.imap_unordered(_profile_one_file, filepaths):
                _merge(entries)
    else:
        for filepath in filepaths:
            _merge(_profile_one_file(filepath))

    return index


def _load_supported_constraints(path):
    if os.path.isdir(path):
        pickle_files = sorted(
            os.path.join(path, filename)
            for filename in os.listdir(path)
            if filename.endswith(".pickle")
        )
    else:
        pickle_files = [path]

    constraints = []
    skipped = 0
    for pickle_file in pickle_files:
        try:
            constraint = load_constraint(pickle_file)
        except Exception as exc:
            print(f"Warning: skipping {pickle_file}: {exc}")
            continue
        if constraint_is_supported(constraint):
            constraints.append((pickle_file, constraint))
        else:
            skipped += 1
    if skipped:
        print(f"Skipped {skipped} unsupported constraint(s)")
    return constraints


def fuzz_loop(constraints_dir, seed_dir, out_dir, rebuild_cache=False, parallel=1, join_rate=0.0):
    constraints = _load_supported_constraints(constraints_dir)
    if not constraints:
        print(f"No supported constraints found in {constraints_dir}")
        return
    print(f"Loaded {len(constraints)} supported constraints from {constraints_dir}")

    node_type_index, file_cache, results_cache = get_corpus_index(seed_dir, rebuild=rebuild_cache, parallel=parallel)
    os.makedirs(out_dir, exist_ok=True)

    iteration = 0
    errors_found = 0
    print("Fuzzing started. Ctrl+C to stop.\n")
    try:
        while True:
            if iteration % 100 == 0:
                _clean()
            iteration += 1
            pickle_file, constraint = random.choice(constraints)
            lua_source = synthesize_clean(
                constraint,
                node_type_index,
                file_cache,
                results_cache,
                join_rate=join_rate,
            )
            base_name = os.path.splitext(os.path.basename(pickle_file))[0]
            out_name = f"fuzz_{base_name}_{token_hex(5)}.lua"
            out_path = os.path.join(out_dir, out_name)
            with open(out_path, "w", encoding="utf-8") as f:
                f.write(lua_source)
            sanitize(out_path)
            if os.path.exists(out_path + ".er"):
                errors_found += 1
                print(f"[{iteration}] ERROR found: {out_path}.er")
            else:
                print(f"[{iteration}] clean  (errors so far: {errors_found})", end="\r")
    except KeyboardInterrupt:
        print(f"\n\nFuzzing stopped after {iteration} iterations.")
        print(f"Errors found: {errors_found}")


def main():
    parser = argparse.ArgumentParser(description="LuaJIT fuzzer — synthesize Lua scripts from JOC constraints")
    parser.add_argument("--profile", metavar="DIR", help="Profile all .lua files in DIR, print per-type counts")
    parser.add_argument("--synth", metavar="PATH", help="Synthesize Lua scripts from JOC constraint pickle(s)")
    parser.add_argument("--fuzz", metavar="DIR", help="Run infinite fuzzing loop using constraints from DIR")
    parser.add_argument("--seeds", metavar="DIR", default="./luatests", help="Path to seed corpus directory (default: ./luatests)")
    parser.add_argument("--count", type=int, default=1, help="Number of scripts to generate per constraint (default: 1)")
    parser.add_argument("--out", metavar="DIR", default="./synth_out", help="Output directory for generated .lua files (default: ./synth_out)")
    parser.add_argument("--build-cache", action="store_true", help="Build (or rebuild) the corpus cache and exit")
    parser.add_argument("--rebuild-cache", action="store_true", help="Force rebuild of the corpus cache even if one exists")
    parser.add_argument("--join-rate", type=float, default=0.0, help="Probability (0.0-1.0) of creating join variables between consecutive data statements")
    parser.add_argument("-j", "--jobs", type=int, default=1, help="Number of parallel worker processes (default: 1)")
    args = parser.parse_args()

    if args.build_cache:
        get_corpus_index(args.seeds, rebuild=True, parallel=args.jobs)
        return

    if args.fuzz:
        fuzz_loop(args.fuzz, args.seeds, args.out, rebuild_cache=args.rebuild_cache, parallel=args.jobs, join_rate=args.join_rate)
        return

    if args.synth:
        constraints = _load_supported_constraints(args.synth)
        if not constraints:
            print(f"No supported constraints found in {args.synth}")
            return

        node_type_index, file_cache, results_cache = get_corpus_index(args.seeds, rebuild=args.rebuild_cache, parallel=args.jobs)
        os.makedirs(args.out, exist_ok=True)

        for pickle_file, constraint in constraints:
            base_name = os.path.splitext(os.path.basename(pickle_file))[0] + token_hex(5)
            for i in range(args.count):
                lua_source = synthesize_clean(constraint, node_type_index, file_cache, results_cache, join_rate=args.join_rate)
                out_name = f"{base_name}.lua" if args.count == 1 else f"{base_name}_{i}.lua"
                out_path = os.path.join(args.out, out_name)
                with open(out_path, "w", encoding="utf-8") as f:
                    f.write(lua_source)
                print(f"  {out_path}")

        print(f"\nGenerated {len(constraints) * args.count} file(s) in {args.out}/")
        return

    if args.profile:
        index = profile_corpus(args.profile, parallel=args.jobs)
        print(f"\nNode type index ({len(index)} types):\n")
        for desc in sorted(index, key=lambda key: len(index[key]), reverse=True):
            print(f"  {desc}: {len(index[desc])} occurrences")
        out_path = os.path.join(args.profile, "lua_node_type_index.pkl")
        with open(out_path, "wb") as f:
            pickle.dump(index, f)
        print(f"\nIndex saved to {out_path}")
        return

    parser.print_help()


if __name__ == "__main__":
    main()
