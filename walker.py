import re
import os
import json
import sys
import subprocess
import string
import secrets
import codecs
from sequence import *
from seqNodes import *
from pathlib import Path

new_name = lambda: ''.join(secrets.choice(string.ascii_letters + string.digits) for _ in range(8))

SG_Variables = {"_GET":None,
                "_POST":None,
                "_FILES":None,
                "_COOKIE":None,
                "_REQUEST":None,
                "_SERVER":None,
                "_SESSION":None,}

class Walker():
    def __init__(self,debug):
        Path(__file__).parent
        with open(os.path.join(
            Path(__file__).parent,'php_lang_description.json'),
                  'r') as f:
            data = json.load(f)
        # These are the most basic OpNodes
        self.middle_op_nodes = data['OpNodes']['MiddleOpNodes']
        self.front_op_nodes = data['OpNodes']['FrontOpNodes']
        self.inner_op_nodes = data['OpNodes']['InnerOpNodes']
        self.rear_op_nodes = data['OpNodes']['RearOpNodes']
        self.debug = debug
        self.file_string = None
        self.master = Seq()
        self.dangling_call = True
        self.curr_obj_name = None
        self.feature_list = {} #feature, feature loc

    def parse_file_string(self,node):
        start_token = node['attributes']['startFilePos']
        end_token = node['attributes']['endFilePos']
        return self.file_string[start_token:stop_token+1]


    def analyze(self,target_file):
        with codecs.open(target_file,"r",encoding='utf-8',errors='ignore') as f:
            self.file_string = f.read()

        stmts = None
        try:
            #Convert to AST
            command = ["bash","./php_to_ast.sh",target_file]
            child = subprocess.Popen(command,
                             stdout=subprocess.PIPE,
                             stderr=subprocess.PIPE,
                             text=True)

            stdout,stderr = child.communicate(timeout=120)
            child.kill()
            stmts = json.loads(stdout)

            item = []
            for line in str(json.dumps(stmts,indent=1)).split("\n"):
                m = re.search(r'"nodeType"\s*:\s*"([^"]+)"', line)
                if m:
                    item.append(m.group(1))
                m = re.search(r'"startFilePos"\s*:\s*(\d+)',line)
                if m:
                    print(m.group(1))
                    item.append(m.group(1))
                m = re.search(r'"endFilePos"\s*:\s*(\d+)',line)
                if m:
                    print(m.group(1))
                    item.append(m.group(1))
                    if len(item) == 3:
                        if item[0] not in self.feature_list:
                            self.feature_list[item[0]] = [(item[1],item[2])]
                        else:
                            self.feature_list[item[0]].append((item[1],item[2]))
                    item = []
            print(self.feature_list)

        except Exception as e:
            print(e)
            return (False,self.master)

        if self.debug:
            for node in stmts:
                self.eval_node(node, self.master)
            return (False,self.master)
        else:
            try:
                for node in stmts:
                    self.eval_node(node, self.master)
                return (True,self.master)
            except Exception as e:
                return (False,self.master)
def main():
    walker = Walker(False)
    walker.analyze(sys.argv[1])

if __name__ == "__main__":
    main()
