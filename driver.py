from php_dependency_analyzer import build_statement_dependencies, get_dependency_slice
import sys
import subprocess
import json

def profile_script(script_results):
    for i in script_results:
        print(f"{i['stmt_id']:3d}  {i['description']}")

def main():
    target_file = sys.argv[1]

    with open(target_file, "r", encoding="utf-8", errors="ignore") as f:
        source = f.read()

    try:
        command = ['bash','./php_to_ast.sh',target_file]
        child = subprocess.Popen(command,stdout=subprocess.PIPE,
                                stderr=subprocess.PIPE,text=True)
        stdout,stderr = child.communicate(timeout=120)
        child.kill()
        ast = json.loads(stdout)
    except Exception as e:
        print(e);quit()

    results = build_statement_dependencies(ast)
    profile_script(results)
    #print(get_dependency_slice(results, 2, source))

if __name__ == "__main__":
    main()
