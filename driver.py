from php_dependency_analyzer import build_statement_dependencies, get_dependency_slice
import sys
import subprocess
import json
import pickle
import os

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
    for seed in os.path.join(input_dir,os.listdir(input_dir)):
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

def main():
    source,results = analyze_file("g.php")
    source2,results2 = analyze_file("h.php")
    gs,gd = get_statement_and_dependency(results,1,source)
    hs,hd = get_statement_and_dependency(results2,0,source2)
    x = hd.split("\n")
    x.insert(2,gs)
    example_mutation = gd + "\n"  + "\n".join(x)

    #target_file = sys.argv[1]
    #source,results = analyze_file(target_file)

    #results = build_statement_dependencies(ast)

    #print(profile_script(results))
    #print(dep_slice)
    #print(get_dependency_slice(results, 2, source))

if __name__ == "__main__":
    main()
