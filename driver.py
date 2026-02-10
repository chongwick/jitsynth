from php_dependency_analyzer import build_statement_dependencies, get_dependency_slice
from jc.comps import ControlComp, DataComp
import sys
import subprocess
import json
import pickle
import os
import argparse
import random


class _CompsUnpickler(pickle.Unpickler):
    """Remap bare 'comps' module references to 'jc.comps' when unpickling."""
    def find_class(self, module, name):
        if module == 'comps':
            module = 'jc.comps'
        return super().find_class(module, name)


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
        #print(f"{i['stmt_id']:3d}  {i['description']}")
    return profile_buckets

def analyze_corpus(input_dir,output_dir):
    for seed in [os.path.join(input_dir,i) for i in os.listdir(input_dir)]:
        with open(seed, "r", encoding="utf-8", errors="ignore") as f:
            source = f.read()
        results = build_statement_dependencies(_build_ast(seed))
        analysis = [source,results]
        output_file = os.path.join(output_dir,seed)
        with open(output_file,"wb") as f:
            pickle.dump(analysis,f)

def analyze_file(seed):
    with open(seed, "r", encoding="utf-8", errors="ignore") as f:
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

def profile_corpus(input_dir):
    index = {}
    for filename in os.listdir(input_dir):
        if not filename.endswith('.php'):
            continue
        filepath = os.path.join(input_dir, filename)
        try:
            ast = _build_ast_safe(filepath)
            if ast is None:
                continue
            results = build_statement_dependencies(ast)
        except Exception as e:
            print(f"Warning: skipping {filepath}: {e}")
            continue
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_file_pos'), r.get('end_file_pos'))
            if desc not in index:
                index[desc] = [entry]
            else:
                index[desc].append(entry)
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
    with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
        source = f.read()
    print(source[start_file_pos:end_file_pos + 1])

COMP_TO_DESCRIPTIONS = {
    # Control regions (ControlComp comp_type -> PHP description strings)
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

    # Data operations (DataComp comp_type -> PHP description strings)
    "assign":    ["Expr_Assign", "Expr_AssignRef"],
    "var_dec":   ["Expr_Assign"],
    "func_call": ["Expr_FuncCall", "Expr_MethodCall"],
    "update":    ["Expr_PostInc", "Expr_PreInc", "Expr_PostDec", "Expr_PreDec"],
    "return":    ["Stmt_Return"],
    "new":       ["Expr_FuncCall"],
    "throw":     ["Stmt_Echo"],
    "unary":     ["Expr_PreInc", "Expr_PostInc"],
}


CORPUS_CACHE_FILE = 'corpus_cache.pkl'


def build_corpus_index(seed_dir):
    """Build node_type_index, file_cache, and results_cache from seed corpus.

    Accepts extensionless PHP files (checks for <?php header).
    Returns (node_type_index, file_cache, results_cache).
    """
    node_type_index = {}
    file_cache = {}
    results_cache = {}
    for filename in os.listdir(seed_dir):
        filepath = os.path.join(seed_dir, filename)
        if not os.path.isfile(filepath):
            continue
        # Accept .php files or extensionless files that start with <?php
        if not filename.endswith('.php'):
            try:
                with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
                    header = f.read(64)
                if not header.lstrip().startswith('<?php'):
                    continue
            except Exception:
                continue
        try:
            with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
                source = f.read()
            file_cache[filepath] = source
            ast = _build_ast_safe(filepath)
            if ast is None:
                continue
            results = build_statement_dependencies(ast)
            results_cache[filepath] = results
        except Exception as e:
            print(f"Warning: skipping {filepath}: {e}")
            continue
        for r in results:
            desc = r['description']
            entry = (filepath, r['stmt_id'], r.get('start_file_pos'), r.get('end_file_pos'))
            if desc not in node_type_index:
                node_type_index[desc] = [entry]
            else:
                node_type_index[desc].append(entry)
    return node_type_index, file_cache, results_cache


def save_corpus_cache(seed_dir, node_type_index, file_cache, results_cache):
    """Pickle the corpus index to disk."""
    cache_path = os.path.join(seed_dir, CORPUS_CACHE_FILE)
    with open(cache_path, 'wb') as f:
        pickle.dump((node_type_index, file_cache, results_cache), f)
    print(f"Cache saved to {cache_path}")


def load_corpus_cache(seed_dir):
    """Load a previously saved corpus index from disk. Returns None if not found."""
    cache_path = os.path.join(seed_dir, CORPUS_CACHE_FILE)
    if not os.path.isfile(cache_path):
        return None
    with open(cache_path, 'rb') as f:
        return pickle.load(f)


def get_corpus_index(seed_dir, rebuild=False):
    """Load corpus index from cache, or build and cache it.

    Args:
        seed_dir: path to the seed corpus directory
        rebuild: if True, ignore any existing cache and rebuild from scratch
    """
    if not rebuild:
        cached = load_corpus_cache(seed_dir)
        if cached is not None:
            node_type_index, file_cache, results_cache = cached
            print(f"Loaded cached corpus index from {os.path.join(seed_dir, CORPUS_CACHE_FILE)} "
                  f"({sum(len(v) for v in node_type_index.values())} statements, "
                  f"{len(node_type_index)} types, {len(file_cache)} files)")
            return node_type_index, file_cache, results_cache

    print(f"Building corpus index from {seed_dir}...")
    node_type_index, file_cache, results_cache = build_corpus_index(seed_dir)
    print(f"Indexed {sum(len(v) for v in node_type_index.values())} statements "
          f"across {len(node_type_index)} types from {len(file_cache)} files")
    save_corpus_cache(seed_dir, node_type_index, file_cache, results_cache)
    return node_type_index, file_cache, results_cache


_name_counter = 0

def _next_name(prefix):
    global _name_counter
    name = f"{prefix}_{_name_counter}"
    _name_counter += 1
    return name


def pick_data_source(data_comp, node_type_index, file_cache, results_cache):
    """Pick a random PHP source snippet matching a DataComp, including dependencies."""
    descriptions = COMP_TO_DESCRIPTIONS.get(data_comp.comp_type, [])
    candidates = []
    for desc in descriptions:
        candidates.extend(node_type_index.get(desc, []))
    if not candidates:
        return f"/* no match for {data_comp.comp_type} */"
    entry = random.choice(candidates)
    filepath, stmt_id, start_pos, end_pos = entry
    if start_pos is None or end_pos is None:
        return f"/* no position for {data_comp.comp_type} */"
    source = file_cache.get(filepath)
    if source is None:
        return f"/* source not cached for {filepath} */"
    results = results_cache.get(filepath)
    if results is None:
        # Fallback: just the single statement without deps
        snippet = source[start_pos:end_pos + 1].strip()
        if not snippet.endswith(';'):
            snippet += ';'
        return snippet
    # Use dependency slice to include all required defining statements
    dep_slice = get_dependency_slice(results, stmt_id, source)
    # Ensure semicolon termination on the final line
    lines = dep_slice.split('\n')
    if lines and not lines[-1].rstrip().endswith(';'):
        lines[-1] = lines[-1].rstrip() + ';'
    return '\n'.join(lines)


def synthesize_region(region_list, node_type_index, file_cache, results_cache, indent=0):
    """Synthesize PHP source for a nested control region."""
    if not region_list:
        return []
    pad = "    " * indent
    ctrl = region_list[0]  # ControlComp
    ct = ctrl.comp_type
    lines = []

    # Generate synthetic control wrapper
    if ct == "if":
        lines.append(f"{pad}if (true) {{")
    elif ct == "else":
        lines.append(f"{pad}if (!true) {{")  # else branch as negated if
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
        lines.append(f"{pad}if (true) {{")  # catch body as if block
    elif ct == "finally":
        lines.append(f"{pad}if (true) {{")  # finally body as if block
    elif ct == "switch":
        lines.append(f"{pad}if (true) {{")  # switch fallback
    else:
        lines.append(f"{pad}/* unknown region: {ct} */ {{")

    # Process body elements
    body_pad = "    " * (indent + 1)
    if ct == "while":
        lines.append(f"{body_pad}break;  // avoid infinite loop")
    for element in region_list[1:]:
        if isinstance(element, list):
            lines.extend(synthesize_region(element, node_type_index, file_cache, results_cache, indent + 1))
        elif isinstance(element, DataComp):
            snippet = pick_data_source(element, node_type_index, file_cache, results_cache)
            # Indent each line of the (possibly multi-line) dependency slice
            for line in snippet.split('\n'):
                lines.append(f"{body_pad}{line}")
        elif isinstance(element, ControlComp):
            # Bare ControlComp in body (shouldn't normally happen, treat as data)
            lines.append(f"{body_pad}/* bare control: {element.comp_type} */")

    # Close wrapper
    if ct == "do_while":
        lines.append(f"{pad}}} while (false);")
    elif ct == "try":
        lines.append(f"{pad}}} catch (Exception $e) {{}}")
    else:
        lines.append(f"{pad}}}")

    return lines


def synthesize(constraint_env, node_type_index, file_cache, results_cache):
    """Walk a JOC constraint tree and assemble a PHP script."""
    global _name_counter
    _name_counter = 0

    lines = ["<?php"]
    # constraint_env[0] is ControlComp('main'), skip it
    for element in constraint_env[1:]:
        if isinstance(element, list):
            lines.extend(synthesize_region(element, node_type_index, file_cache, results_cache, indent=0))
        elif isinstance(element, DataComp):
            lines.append(pick_data_source(element, node_type_index, file_cache, results_cache))
        elif isinstance(element, ControlComp):
            lines.append(f"/* bare control: {element.comp_type} */")
    return "\n".join(lines) + "\n"


def main():
    parser = argparse.ArgumentParser(description="PHP dependency analyzer driver")
    parser.add_argument('--profile', metavar='DIR',
                        help='Profile all .php files in DIR, print per-type counts, and pickle the index')
    parser.add_argument('--synth', metavar='PATH',
                        help='Synthesize PHP scripts from JOC constraint pickle(s). '
                             'PATH can be a single .pickle file or a directory of them.')
    parser.add_argument('--seeds', metavar='DIR', default='./seeds',
                        help='Path to seed corpus directory (default: ./seeds)')
    parser.add_argument('--count', type=int, default=1,
                        help='Number of scripts to generate per constraint (default: 1)')
    parser.add_argument('--out', metavar='DIR', default='./synth_out',
                        help='Output directory for generated .php files (default: ./synth_out)')
    parser.add_argument('--rebuild-cache', action='store_true',
                        help='Force rebuild of the corpus cache even if one exists')
    args = parser.parse_args()

    if args.synth:
        # Collect constraint pickle files
        if os.path.isdir(args.synth):
            pickle_files = sorted([
                os.path.join(args.synth, f)
                for f in os.listdir(args.synth) if f.endswith('.pickle')
            ])
        else:
            pickle_files = [args.synth]

        node_type_index, file_cache, results_cache = get_corpus_index(
            args.seeds, rebuild=args.rebuild_cache)

        os.makedirs(args.out, exist_ok=True)

        for pf in pickle_files:
            constraint = load_constraint(pf)
            base_name = os.path.splitext(os.path.basename(pf))[0]
            for i in range(args.count):
                php_source = synthesize(constraint, node_type_index, file_cache, results_cache)
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
        index = profile_corpus(args.profile)
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
