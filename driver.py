from php_dependency_analyzer import build_statement_dependencies, get_dependency_closure
import sys
import subprocess
import json
import codecs

def print_statement(results,stmt_id,file_string):
    for stmt in get_dependency_closure(results,stmt_id):
        start = results[stmt]['start_line']
        end = results[stmt]['end_line']
        print(''.join(file_string[start-1:end]), end='')

target_file = sys.argv[1]

with codecs.open(target_file,"r",encoding='utf-8',errors='ignore') as f:
    file_string = f.readlines()

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
print_statement(results,2,file_string)
