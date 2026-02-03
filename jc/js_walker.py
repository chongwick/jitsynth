import pprint
import random
import subprocess
import json
import codecs
import os
import sys
import pickle
from comps import *

class Walker():
    def __init__(self,debug):
        #constraint environments are really control regions that start
        #with a control component. first one being main
        self.constraint_env = [ControlComp("main")]
        self.debug = debug
        self.target_file = None
        self.trash = ['ImportDeclaration',
                      'ExportNamedDeclaration']

    def eval_node(self,node,env):
        #node_string=self.parse_file_string(node)
        #node_value = node.text.decode()
        node_type = node['type'] #idk i just prefer this aesthetic
        if node_type in self.trash:
            return 

        if self.debug == True: print("eval_node:", node_type)

        method = getattr(self, f"eval_{node_type}",self.eval_default)
        return method(node,env)

#--------------------------------Syntax---------------------------------
    def eval_BlockStatement(self,node,env):
        for stmt in node['body']:
            self.eval_node(stmt,env)
        return

    def eval_ExpressionStatement(self,node,env):
        self.dangling_call = True
        self.eval_node(node['expression'],env)
        return


#---------------------------------Data----------------------------------
    def eval_VariableDeclaration(self,node,env):
        for var in node['declarations']:
            env.append(DataComp('var_dec'))
        return

    #def eval_VariableDeclarator(self,node):
    #    return

    def eval_AssignmentExpression(self,node,env):
        env.append(DataComp('assign')) 
        return

    #def eval_Literal(self,node):
    #    return 

    #def eval_Identifier(self,node):
    #    return

    #def eval_BinaryExpression(self,node,seq):
    #    return 

    def eval_UnaryExpression(self,node,env):
        env.append(DataComp('unary'))
        return 

    #def eval_ObjectExpression(self,node,seq):
    #    return 

    #def eval_MemberExpression(self,node,seq):
    #    return 

    #def eval_ArrayExpression(self,node):
    #    return

    #def eval_TemplateLiteral(self,node):
    #    return 

    def eval_CallExpression(self,node,env):
        env.append(DataComp('func_call'))
        return 


#-------------------------------Control----------------------------------
    def eval_IfStatement(self,node,env):
        if_env = [ControlComp('if')]
        env.append(if_env)
        self.eval_node(node['consequent'],if_env)
        if node['alternate'] != None:
            else_env = [ControlComp('else')]
            env.append(else_env)
            self.eval_node(node['alternate'],else_env)
        return

    def eval_FunctionDeclaration(self,node,env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        self.eval_node(node['body'],new_env)
        return

    #def eval_ReturnStatement(self,node):
    #    return

    #def eval_ThrowStatement(self,node):
    #    return

    #def eval_NewExpression(self,node):
    #    return 

    def eval_ForInStatement(self,node,env):
        new_env = [ControlComp('for')]
        env.append(new_env)
        self.eval_node(node['body'],new_env)
        return

    def eval_ForOfStatement(self,node,env):
        new_env = [ControlComp('for')]
        env.append(new_env)
        self.eval_node(node['body'],new_env)
        return

    def eval_ForStatement(self,node,env):
        new_env = [ControlComp('for')]
        env.append(new_env)
        self.eval_node(node['body'],new_env)
        return

    #def eval_TryStatement(self,node):
    #    return

    #def eval_CatchClause(self,node):
    #    return

    #def eval_class_def(self,node):
    #    return

#-------------------------------Default----------------------------------
    def eval_default(self,node,env):
        print(json.dumps(node,indent=4))
        print(self.target_file)
        raise NotImplementedError(f"No handler for {node['type']}")

#-------------------------------------------------------------------------


    def generate_constraints(self,target_file):
        self.target_file = target_file
        with codecs.open(target_file,"r",
                         encoding='utf-8',
                         errors='ignore') as f:
            self.file_string = f.read()
        stmts = None
        try:
            command = ["bash","./js_to_ast.sh", target_file]
            child = subprocess.Popen(command,
                                     stdout=subprocess.PIPE,
                                     stderr=subprocess.PIPE,
                                     text=True)
            stdout,stderr = child.communicate(timeout=120)
            child.kill()
            stmts = json.loads(stdout)['body']
        except Exception as e:
            return (False)

        print(json.dumps(stmts,indent=4))

        if self.debug:
            print(target_file)
            for node in stmts:
                self.eval_node(node,self.constraint_env)
            return False, self.constraint_env
        else:
            try:
                for node in stmts:
                    self.eval_node(node, self.constraint_env)
                return (True)
            except Exception as e:
                return (False)


def main():
    w = Walker(True)
    if len(sys.argv) > 1:
        target_file = sys.argv[1]
    else:
        target_file = random.choice(["../jstests/mjsunit/" + i for i in os.listdir("../jstests/mjsunit")])
    error,env = w.generate_constraints(target_file)
    with open("con_ex.pickle","wb") as f:
        pickle.dump(env,f)
    #pprint.pprint(env,indent=4)


if __name__ == "__main__":
    main()
