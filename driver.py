from php_dependency_analyzer import build_statement_dependencies, get_dependency_slice
import sys
import subprocess
import json
import pickle
import os
import argparse

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

def main():
    parser = argparse.ArgumentParser(description="PHP dependency analyzer driver")
    parser.add_argument('--profile', metavar='DIR',
                        help='Profile all .php files in DIR, print per-type counts, and pickle the index')
    args = parser.parse_args()

    if args.profile:
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
