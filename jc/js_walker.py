import pprint
import random
import subprocess
import json
import codecs
import os
import sys
import pickle
from multiprocessing import Pool
from comps import *
from type_infer import TypeAnalyzer, loop_trip_count, callee_key
from collections import Counter

class Walker():
    def __init__(self, debug=False):
        #constraint environments are really control regions that start
        #with a control component. first one being main
        self.constraint_env = [ControlComp("main")]
        self.debug = debug
        self.target_file = None
        # id(node) -> {'type','stable'} / {'type_stable'} from the pre-pass
        self.types = {}
        self.trash = ['ImportDeclaration',
                      'ExportNamedDeclaration',
                      'ExportDefaultDeclaration',
                      'ExportAllDeclaration',
                      'DebuggerStatement']

    def _ty(self, node):
        """Inferred {'type','stable'} for a node, with safe defaults."""
        return self.types.get(id(node), {})

    def _label_repeated_calls(self, env):
        """Whole-JOC pass: mark each func_call as repeated if its callee is
        called more than once anywhere in the constraint tree."""
        calls = []

        def collect(region):
            for e in region:
                if isinstance(e, list):
                    collect(e)
                elif isinstance(e, DataComp) and e.comp_type == 'func_call':
                    calls.append(e)

        collect(env)
        counts = Counter(c.callee for c in calls if c.callee is not None)
        for c in calls:
            c.repeated = (counts[c.callee] >= 2) if c.callee is not None else None

    def eval_node(self, node, env):
        node_type = node['type']
        if node_type in self.trash:
            return

        if self.debug == True: print("eval_node:", node_type)

        method = getattr(self, f"eval_{node_type}", self.eval_default)
        return method(node, env)

#--------------------------------Syntax---------------------------------
    def eval_BlockStatement(self, node, env):
        for stmt in node['body']:
            self.eval_node(stmt, env)
        return

    def eval_ExpressionStatement(self, node, env):
        self.eval_node(node['expression'], env)
        return

    def eval_EmptyStatement(self, node, env):
        return

    def eval_LabeledStatement(self, node, env):
        self.eval_node(node['body'], env)
        return

    def eval_SequenceExpression(self, node, env):
        for expr in node['expressions']:
            self.eval_node(expr, env)
        return

#---------------------------------Data----------------------------------
    def eval_VariableDeclaration(self, node, env):
        for var in node['declarations']:
            a = self._ty(var)
            env.append(DataComp('var_dec', type=a.get('type', 'mixed'),
                                stable=a.get('stable')))
        return

    def eval_AssignmentExpression(self, node, env):
        a = self._ty(node)
        env.append(DataComp('assign', type=a.get('type', 'mixed'),
                            stable=a.get('stable')))
        return

    def eval_UnaryExpression(self, node, env):
        a = self._ty(node)
        env.append(DataComp('unary', type=a.get('type', 'mixed')))
        return

    def eval_CallExpression(self, node, env):
        a = self._ty(node)
        env.append(DataComp('func_call', type=a.get('type', 'mixed'),
                            callee=callee_key(node)))
        return

    def eval_ReturnStatement(self, node, env):
        a = self._ty(node)
        env.append(DataComp('return', type=a.get('type', 'mixed')))
        return

    def eval_UpdateExpression(self, node, env):
        a = self._ty(node)
        env.append(DataComp('update', type=a.get('type', 'mixed'),
                            stable=a.get('stable')))
        return

    def eval_NewExpression(self, node, env):
        env.append(DataComp('new', type='object'))
        return

    def eval_ThrowStatement(self, node, env):
        env.append(DataComp('throw'))
        return

#------------------------------No-op / leaf-----------------------------
    def eval_Literal(self, node, env):
        return

    def eval_Identifier(self, node, env):
        return

    def eval_ThisExpression(self, node, env):
        return

    def eval_BreakStatement(self, node, env):
        return

    def eval_ContinueStatement(self, node, env):
        return

    def eval_MemberExpression(self, node, env):
        return

    def eval_TemplateLiteral(self, node, env):
        return

    def eval_TaggedTemplateExpression(self, node, env):
        return

    def eval_MetaProperty(self, node, env):
        return

    def eval_Super(self, node, env):
        return

    def eval_SpreadElement(self, node, env):
        return

    def eval_YieldExpression(self, node, env):
        return

    def eval_AwaitExpression(self, node, env):
        return

    def eval_ConditionalExpression(self, node, env):
        return

    def eval_LogicalExpression(self, node, env):
        return

    def eval_BinaryExpression(self, node, env):
        return

    def eval_ArrayExpression(self, node, env):
        return

    def eval_ObjectExpression(self, node, env):
        return

    def eval_ImportExpression(self, node, env):
        return

    def eval_ClassExpression(self, node, env):
        # Inline class expression (e.g. var x = class { ... })
        # Treat like ClassDeclaration
        new_env = [ControlComp('class')]
        env.append(new_env)
        if node.get('body'):
            for item in node['body']['body']:
                self.eval_node(item, new_env)
        return

#-------------------------------Control----------------------------------
    def eval_IfStatement(self, node, env):
        if_env = [ControlComp('if')]
        env.append(if_env)
        self.eval_node(node['consequent'], if_env)
        if node['alternate'] != None:
            else_env = [ControlComp('else')]
            env.append(else_env)
            self.eval_node(node['alternate'], else_env)
        return

    def eval_FunctionDeclaration(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_FunctionExpression(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_ArrowFunctionExpression(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        body = node['body']
        if body['type'] == 'BlockStatement':
            self.eval_node(body, new_env)
        else:
            # Expression body (e.g. () => expr) — treat as implicit return
            new_env.append(DataComp('return'))
        return

    def eval_ForInStatement(self, node, env):
        new_env = [ControlComp('for', type_stable=self._ty(node).get('type_stable'),
                               trip_count=loop_trip_count(node))]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_ForOfStatement(self, node, env):
        new_env = [ControlComp('for', type_stable=self._ty(node).get('type_stable'),
                               trip_count=loop_trip_count(node))]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_ForStatement(self, node, env):
        new_env = [ControlComp('for', type_stable=self._ty(node).get('type_stable'),
                               trip_count=loop_trip_count(node))]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_WhileStatement(self, node, env):
        new_env = [ControlComp('while', type_stable=self._ty(node).get('type_stable'),
                               trip_count=loop_trip_count(node))]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_DoWhileStatement(self, node, env):
        new_env = [ControlComp('do_while', type_stable=self._ty(node).get('type_stable'),
                               trip_count=loop_trip_count(node))]
        env.append(new_env)
        self.eval_node(node['body'], new_env)
        return

    def eval_TryStatement(self, node, env):
        # try block
        try_env = [ControlComp('try')]
        env.append(try_env)
        self.eval_node(node['block'], try_env)
        # catch handler
        if node.get('handler'):
            catch_env = [ControlComp('catch')]
            env.append(catch_env)
            self.eval_node(node['handler']['body'], catch_env)
        # finally block
        if node.get('finalizer'):
            finally_env = [ControlComp('finally')]
            env.append(finally_env)
            self.eval_node(node['finalizer'], finally_env)
        return

    def eval_SwitchStatement(self, node, env):
        switch_env = [ControlComp('switch')]
        env.append(switch_env)
        for case in node['cases']:
            for stmt in case['consequent']:
                self.eval_node(stmt, switch_env)
        return

    def eval_ClassDeclaration(self, node, env):
        new_env = [ControlComp('class')]
        env.append(new_env)
        for item in node['body']['body']:
            self.eval_node(item, new_env)
        return

    def eval_MethodDefinition(self, node, env):
        new_env = [ControlComp('method')]
        env.append(new_env)
        # value is a FunctionExpression — recurse into its body
        self.eval_node(node['value']['body'], new_env)
        return

#-------------------------------Default----------------------------------
    def eval_default(self, node, env):
        if self.debug:
            print(json.dumps(node, indent=4))
            print(self.target_file)
        raise NotImplementedError(f"No handler for {node['type']}")

#-------------------------------------------------------------------------

    def generate_constraints(self, target_file):
        self.target_file = target_file
        with codecs.open(target_file, "r",
                         encoding='utf-8',
                         errors='ignore') as f:
            self.file_string = f.read()
        stmts = None
        try:
            command = ["bash", "./js_to_ast.sh", target_file]
            child = subprocess.Popen(command,
                                     stdout=subprocess.PIPE,
                                     stderr=subprocess.PIPE,
                                     text=True)
            stdout, stderr = child.communicate(timeout=120)
            child.kill()
            stmts = json.loads(stdout)['body']
        except Exception as e:
            return (False, None)

        if self.debug:
            print(target_file)
            print(json.dumps(stmts, indent=4))

        # Pre-pass: infer value types and type stability over the same AST
        # objects the walk below stamps onto comps (keyed by id(node)).
        try:
            self.types = TypeAnalyzer().run(stmts)
        except Exception:
            self.types = {}  # inference is best-effort; never block synthesis

        try:
            for node in stmts:
                self.eval_node(node, self.constraint_env)
            self._label_repeated_calls(self.constraint_env)
            return (True, self.constraint_env)
        except Exception as e:
            if self.debug:
                raise
            return (False, None)


def _process_single_file(args):
    """Worker function for parallel batch processing."""
    filepath, fname, output_dir = args
    w = Walker(debug=False)
    ok, env = w.generate_constraints(filepath)
    if ok:
        out_path = os.path.join(output_dir, fname.replace('.js', '.pickle'))
        with open(out_path, 'wb') as f:
            pickle.dump(env, f)
        return (True, fname)
    return (False, fname)


def batch_generate(seed_dir, output_dir, parallel=1, recursive=False,
                    skip_existing=False):
    os.makedirs(output_dir, exist_ok=True)
    success = 0
    fail = 0
    skipped = 0
    failures = []

    if recursive:
        # Walk directories recursively; use relative path for unique pickle names
        work = []
        for root, _dirs, files in os.walk(seed_dir):
            for f in files:
                if not f.endswith('.js'):
                    continue
                filepath = os.path.join(root, f)
                rel = os.path.relpath(filepath, seed_dir)
                # Convert path separators to dashes for a flat output name
                pickle_name = rel.replace(os.sep, '-').replace('.js', '.pickle')
                if skip_existing:
                    out_path = os.path.join(output_dir, pickle_name)
                    if os.path.exists(out_path):
                        skipped += 1
                        continue
                work.append((filepath, pickle_name.replace('.pickle', '.js'),
                             output_dir))
        work.sort(key=lambda x: x[1])
    else:
        seeds = sorted([f for f in os.listdir(seed_dir) if f.endswith('.js')])
        if skip_existing:
            filtered = []
            for fname in seeds:
                out_path = os.path.join(output_dir,
                                        fname.replace('.js', '.pickle'))
                if os.path.exists(out_path):
                    skipped += 1
                else:
                    filtered.append(fname)
            seeds = filtered
        work = [(os.path.join(seed_dir, fname), fname, output_dir)
                for fname in seeds]

    total_work = len(work)
    if skipped:
        print(f"Skipping {skipped} already-generated pickle(s)")
    print(f"Processing {total_work} JS file(s)...")

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for ok, fname in pool.imap_unordered(_process_single_file, work):
                if ok:
                    success += 1
                else:
                    fail += 1
                    failures.append(fname)
                done = success + fail
                if done % 500 == 0:
                    print(f"  [{done}/{total_work}] {success} ok, {fail} failed")
    else:
        for item in work:
            ok, fname = _process_single_file(item)
            if ok:
                success += 1
            else:
                fail += 1
                failures.append(fname)

    total = success + fail
    rate = (success / total * 100) if total > 0 else 0
    print(f"Batch: {success}/{total} succeeded ({rate:.1f}%)")
    if failures:
        print(f"Failed ({fail}):")
        for f in failures:
            print(f"  {f}")
    return success, fail, failures

def main():
    if len(sys.argv) > 1 and sys.argv[1] == '--batch':
        seed_dir = sys.argv[2] if len(sys.argv) > 2 else '../js_seeds'
        output_dir = sys.argv[3] if len(sys.argv) > 3 else './con_out'
        jobs = 1
        recursive = False
        skip_existing = False
        for i, arg in enumerate(sys.argv):
            if arg in ('-j', '--jobs') and i + 1 < len(sys.argv):
                jobs = int(sys.argv[i + 1])
            elif arg in ('-r', '--recursive'):
                recursive = True
            elif arg == '--skip-existing':
                skip_existing = True
        batch_generate(seed_dir, output_dir, parallel=jobs,
                       recursive=recursive, skip_existing=skip_existing)
    else:
        w = Walker(True)
        if len(sys.argv) > 1:
            target_file = sys.argv[1]
        else:
            target_file = random.choice(
                ["../jstests/mjsunit/" + i
                 for i in os.listdir("../jstests/mjsunit")])
        ok, env = w.generate_constraints(target_file)
        if env is not None:
            with open("con_ex.pickle", "wb") as f:
                pickle.dump(env, f)
            pprint.pprint(env, indent=4)


if __name__ == "__main__":
    main()
