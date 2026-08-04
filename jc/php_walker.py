"""
php_walker.py -- generate JOC constraint trees from PHP seed programs.

The PHP counterpart of js_walker.py. It walks a nikic/php-parser AST (produced
by ../php_helpers/php_to_ast.php) and builds the same ControlComp/DataComp
constraint trees the synthesizer consumes, so a corpus of JOCs can be mined from
PHP seeds (e.g. the .phpt files in ../php) instead of JavaScript.

Structural shape mirrors js_walker exactly. Annotations are filled in as far as
the existing PHP infrastructure allows:
  * DataComp.type   -- via php_dependency_analyzer.infer_value_type (conservative)
  * func_call.callee + repeated -- from the call target name (whole-JOC post-pass)
  * ControlComp.trip_count -- counted `for` loops and `foreach` over array literals
Stability fields (DataComp.stable / ControlComp.type_stable) require a PHP
abstract interpreter we do not have, so they are left at their backward-compatible
None defaults.

Pickles are written with a bare `comps` import (matching js_walker) so driver's
_CompsUnpickler `comps` -> `jc.comps` remap loads them unchanged.
"""
import os
import sys
import json
import pickle
import random
import pprint
import subprocess
from collections import Counter
from multiprocessing import Pool

_HERE = os.path.dirname(os.path.abspath(__file__))
_ROOT = os.path.dirname(_HERE)
sys.path.insert(0, _ROOT)   # php_dependency_analyzer
sys.path.insert(0, _HERE)   # comps

from comps import *  # noqa: E402,F401,F403
import php_dependency_analyzer as pda  # noqa: E402

_PHP_TO_AST = os.path.join(_ROOT, 'php_helpers', 'php_to_ast.php')


# ---------------------------------------------------------------------------
# Small AST helpers (PHP / nikic node shapes)
# ---------------------------------------------------------------------------

def _name_str(node):
    """Flatten a Name / Identifier node to a dotted/joined string, or None."""
    if not isinstance(node, dict):
        return None
    nt = node.get('nodeType')
    if nt in ('Name', 'Name_FullyQualified', 'Name_Relative'):
        parts = node.get('parts')
        if parts:
            return '\\'.join(parts)
        return node.get('name')
    if nt == 'Identifier':
        return node.get('name')
    if nt == 'Expr_Variable' and isinstance(node.get('name'), str):
        return '$' + node['name']
    return None


def _php_callee(node):
    """Identity key for a call node, or None if undeterminable.

    FuncCall     -> "name"
    StaticCall   -> "Class::method"
    MethodCall   -> "$recv->method"
    """
    nt = node.get('nodeType')
    if nt == 'Expr_FuncCall':
        return _name_str(node.get('name'))
    if nt in ('Expr_StaticCall',):
        cls = _name_str(node.get('class'))
        meth = _name_str(node.get('name'))
        if cls and meth:
            return f'{cls}::{meth}'
        return meth
    if nt in ('Expr_MethodCall', 'Expr_NullsafeMethodCall'):
        recv = _name_str(node.get('var'))
        meth = _name_str(node.get('name'))
        if meth:
            return f'{recv}->{meth}' if recv else f'->{meth}'
    return None


def _int_lit(node):
    """Return the int value of a (possibly unary-minus) Scalar_Int, else None."""
    if not isinstance(node, dict):
        return None
    if node.get('nodeType') == 'Scalar_Int':
        return node.get('value')
    if node.get('nodeType') == 'Expr_UnaryMinus':
        inner = _int_lit(node.get('expr'))
        return -inner if inner is not None else None
    return None


def _php_for_trip_count(node):
    """Static iteration count for a counted `Stmt_For`, else None.

    Recognizes `for ($i = A; $i </<=/>/>= B; $i++/--/+=k/-=k)`.
    """
    init = node.get('init') or []
    cond = node.get('cond') or []
    loop = node.get('loop') or []
    if len(init) != 1 or len(cond) != 1 or len(loop) != 1:
        return None

    a = init[0]
    if a.get('nodeType') != 'Expr_Assign':
        return None
    var = _name_str(a.get('var'))
    start = _int_lit(a.get('expr'))
    if var is None or start is None:
        return None

    c = cond[0]
    cmp_ops = {
        'Expr_BinaryOp_Smaller': '<', 'Expr_BinaryOp_SmallerOrEqual': '<=',
        'Expr_BinaryOp_Greater': '>', 'Expr_BinaryOp_GreaterOrEqual': '>=',
    }
    op = cmp_ops.get(c.get('nodeType'))
    if op is None or _name_str(c.get('left')) != var:
        return None
    limit = _int_lit(c.get('right'))
    if limit is None:
        return None

    u = loop[0]
    ut = u.get('nodeType')
    if ut in ('Expr_PostInc', 'Expr_PreInc'):
        step = 1
    elif ut in ('Expr_PostDec', 'Expr_PreDec'):
        step = -1
    elif ut in ('Expr_AssignOp_Plus', 'Expr_AssignOp_Minus'):
        if _name_str(u.get('var')) != var:
            return None
        k = _int_lit(u.get('expr'))
        if k is None or k == 0:
            return None
        step = k if ut == 'Expr_AssignOp_Plus' else -k
    else:
        return None

    # Count the i-values satisfying the condition.
    import math
    if step > 0 and op in ('<', '<='):
        if op == '<':
            n = math.ceil((limit - start) / step) if limit > start else 0
        else:  # <=
            n = (limit - start) // step + 1 if limit >= start else 0
    elif step < 0 and op in ('>', '>='):
        s = -step
        if op == '>':
            n = math.ceil((start - limit) / s) if start > limit else 0
        else:  # >=
            n = (start - limit) // s + 1 if start >= limit else 0
    else:
        return None  # direction/op mismatch -> not a terminating counted loop
    return int(n) if n >= 0 else None


def _foreach_trip_count(node):
    """foreach over an array/string literal -> element/char count, else None."""
    expr = node.get('expr') or {}
    et = expr.get('nodeType')
    if et == 'Expr_Array':
        return len(expr.get('items') or [])
    if et == 'Scalar_String':
        return len(expr.get('value') or '')
    return None


def _vt(node):
    """Best-effort inferred PHP value type for an expression node."""
    try:
        return pda.infer_value_type(node)
    except Exception:
        return 'mixed'


# ---------------------------------------------------------------------------
# Walker
# ---------------------------------------------------------------------------

class Walker():
    def __init__(self, debug=False):
        self.constraint_env = [ControlComp('main')]
        self.debug = debug
        self.target_file = None

    # -- whole-JOC post-pass: mark repeated calls --------------------------
    def _label_repeated_calls(self, env):
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

    # -- dispatch ----------------------------------------------------------
    def eval_node(self, node, env):
        if not isinstance(node, dict):
            return
        nt = node.get('nodeType')
        if self.debug:
            print("eval_node:", nt)
        method = getattr(self, f"eval_{nt}", self.eval_default)
        return method(node, env)

    def _eval_stmts(self, stmts, env):
        for s in (stmts or []):
            self.eval_node(s, env)

    def eval_default(self, node, env):
        # Unknown / untracked node -> no-op (matches js_walker's leaf handling;
        # keeps the walk robust so more seeds yield a constraint).
        return

    # -- statements wrapping expressions -----------------------------------
    def eval_Stmt_Expression(self, node, env):
        self.eval_node(node.get('expr'), env)

    def eval_Stmt_Echo(self, node, env):
        return

    def eval_Stmt_Return(self, node, env):
        expr = node.get('expr')
        t = _vt(expr) if expr is not None else 'null'
        env.append(DataComp('return', type=t))

    def eval_Stmt_Throw(self, node, env):
        env.append(DataComp('throw'))

    def eval_Expr_Throw(self, node, env):
        env.append(DataComp('throw'))

    # -- data expressions --------------------------------------------------
    def eval_Expr_Assign(self, node, env):
        env.append(DataComp('assign', type=_vt(node)))

    def eval_Expr_AssignRef(self, node, env):
        env.append(DataComp('assign', type='mixed'))

    def _assign_op(self, node, env):
        env.append(DataComp('assign', type=_vt(node)))

    # compound assignment operators (+=, .=, etc.) -> assign
    eval_Expr_AssignOp_Plus = _assign_op
    eval_Expr_AssignOp_Minus = _assign_op
    eval_Expr_AssignOp_Mul = _assign_op
    eval_Expr_AssignOp_Div = _assign_op
    eval_Expr_AssignOp_Mod = _assign_op
    eval_Expr_AssignOp_Pow = _assign_op
    eval_Expr_AssignOp_Concat = _assign_op
    eval_Expr_AssignOp_BitwiseAnd = _assign_op
    eval_Expr_AssignOp_BitwiseOr = _assign_op
    eval_Expr_AssignOp_BitwiseXor = _assign_op
    eval_Expr_AssignOp_ShiftLeft = _assign_op
    eval_Expr_AssignOp_ShiftRight = _assign_op
    eval_Expr_AssignOp_Coalesce = _assign_op

    def _call(self, node, env):
        env.append(DataComp('func_call', type=_vt(node),
                            callee=_php_callee(node)))

    eval_Expr_FuncCall = _call
    eval_Expr_MethodCall = _call
    eval_Expr_NullsafeMethodCall = _call
    eval_Expr_StaticCall = _call

    def eval_Expr_New(self, node, env):
        env.append(DataComp('new', type='object'))

    def _update(self, node, env):
        env.append(DataComp('update', type=_vt(node)))

    eval_Expr_PostInc = _update
    eval_Expr_PreInc = _update
    eval_Expr_PostDec = _update
    eval_Expr_PreDec = _update

    # -- control regions ---------------------------------------------------
    def eval_Stmt_If(self, node, env):
        if_env = [ControlComp('if')]
        env.append(if_env)
        self._eval_stmts(node.get('stmts'), if_env)
        for elif_ in (node.get('elseifs') or []):
            elif_env = [ControlComp('if')]
            env.append(elif_env)
            self._eval_stmts(elif_.get('stmts'), elif_env)
        else_ = node.get('else')
        if else_:
            else_env = [ControlComp('else')]
            env.append(else_env)
            self._eval_stmts(else_.get('stmts'), else_env)

    def eval_Stmt_For(self, node, env):
        new_env = [ControlComp('for', trip_count=_php_for_trip_count(node))]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Stmt_Foreach(self, node, env):
        new_env = [ControlComp('for', trip_count=_foreach_trip_count(node))]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Stmt_While(self, node, env):
        new_env = [ControlComp('while')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Stmt_Do(self, node, env):
        new_env = [ControlComp('do_while')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Stmt_TryCatch(self, node, env):
        try_env = [ControlComp('try')]
        env.append(try_env)
        self._eval_stmts(node.get('stmts'), try_env)
        for catch in (node.get('catches') or []):
            catch_env = [ControlComp('catch')]
            env.append(catch_env)
            self._eval_stmts(catch.get('stmts'), catch_env)
        finally_ = node.get('finally')
        if finally_:
            finally_env = [ControlComp('finally')]
            env.append(finally_env)
            self._eval_stmts(finally_.get('stmts'), finally_env)

    def eval_Stmt_Switch(self, node, env):
        switch_env = [ControlComp('switch')]
        env.append(switch_env)
        for case in (node.get('cases') or []):
            self._eval_stmts(case.get('stmts'), switch_env)

    def eval_Stmt_Function(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Expr_Closure(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def eval_Expr_ArrowFunction(self, node, env):
        new_env = [ControlComp('func')]
        env.append(new_env)
        # arrow fn body is a single expression -> implicit return
        new_env.append(DataComp('return', type=_vt(node.get('expr'))))

    def eval_Stmt_ClassMethod(self, node, env):
        new_env = [ControlComp('method')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    def _class_like(self, node, env):
        new_env = [ControlComp('class')]
        env.append(new_env)
        self._eval_stmts(node.get('stmts'), new_env)

    eval_Stmt_Class = _class_like
    eval_Stmt_Trait = _class_like
    eval_Stmt_Interface = _class_like

    # namespaces just wrap statements
    def eval_Stmt_Namespace(self, node, env):
        self._eval_stmts(node.get('stmts'), env)

    # -- entry point -------------------------------------------------------
    def generate_constraints(self, target_file):
        self.target_file = target_file
        try:
            child = subprocess.Popen(
                ['php', _PHP_TO_AST, target_file],
                stdout=subprocess.PIPE, stderr=subprocess.PIPE, text=True)
            stdout, _stderr = child.communicate(timeout=120)
            child.kill()
            stmts = json.loads(stdout)
        except Exception:
            return (False, None)
        if not isinstance(stmts, list) or not stmts:
            return (False, None)

        if self.debug:
            print(json.dumps(stmts, indent=2))

        try:
            for node in stmts:
                self.eval_node(node, self.constraint_env)
            self._label_repeated_calls(self.constraint_env)
            return (True, self.constraint_env)
        except Exception:
            if self.debug:
                raise
            return (False, None)


# ---------------------------------------------------------------------------
# Batch driver
# ---------------------------------------------------------------------------

_PHP_EXTS = ('.phpt', '.php', '.inc')


def _is_php_seed(fname):
    return fname.endswith(_PHP_EXTS)


def _process_single_file(args):
    filepath, pickle_name, output_dir = args
    w = Walker(debug=False)
    ok, env = w.generate_constraints(filepath)
    if ok:
        with open(os.path.join(output_dir, pickle_name), 'wb') as f:
            pickle.dump(env, f)
        return (True, pickle_name)
    return (False, pickle_name)


def _pickle_name(fname):
    base = fname
    for ext in _PHP_EXTS:
        if base.endswith(ext):
            base = base[:-len(ext)]
            break
    return base + '.pickle'


def batch_generate(seed_dir, output_dir, parallel=1, recursive=False,
                   skip_existing=False):
    os.makedirs(output_dir, exist_ok=True)
    work = []
    if recursive:
        for root, _dirs, files in os.walk(seed_dir):
            for f in files:
                if not _is_php_seed(f):
                    continue
                filepath = os.path.join(root, f)
                rel = os.path.relpath(filepath, seed_dir)
                pickle_name = _pickle_name(rel.replace(os.sep, '-'))
                if skip_existing and os.path.exists(
                        os.path.join(output_dir, pickle_name)):
                    continue
                work.append((filepath, pickle_name, output_dir))
    else:
        for f in sorted(os.listdir(seed_dir)):
            if not _is_php_seed(f):
                continue
            pickle_name = _pickle_name(f)
            if skip_existing and os.path.exists(
                    os.path.join(output_dir, pickle_name)):
                continue
            work.append((os.path.join(seed_dir, f), pickle_name, output_dir))
    work.sort(key=lambda x: x[1])

    total = len(work)
    print(f"Processing {total} PHP seed(s) from {seed_dir}...")
    success = fail = 0
    failures = []

    if parallel > 1:
        with Pool(processes=parallel) as pool:
            for ok, name in pool.imap_unordered(_process_single_file, work):
                if ok:
                    success += 1
                else:
                    fail += 1
                    failures.append(name)
                if (success + fail) % 100 == 0:
                    print(f"  [{success + fail}/{total}] {success} ok, {fail} failed")
    else:
        for item in work:
            ok, name = _process_single_file(item)
            if ok:
                success += 1
            else:
                fail += 1
                failures.append(name)

    rate = (success / total * 100) if total else 0
    print(f"Batch: {success}/{total} succeeded ({rate:.1f}%) -> {output_dir}")
    if failures and len(failures) <= 40:
        print("Failed:")
        for f in failures:
            print(f"  {f}")
    return success, fail, failures


def main():
    if len(sys.argv) > 1 and sys.argv[1] == '--batch':
        seed_dir = sys.argv[2] if len(sys.argv) > 2 else '../php'
        output_dir = sys.argv[3] if len(sys.argv) > 3 else './con_out_php'
        jobs, recursive, skip_existing = 1, False, False
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
        w = Walker(debug=True)
        target = sys.argv[1] if len(sys.argv) > 1 else '../php/add_005.phpt'
        ok, env = w.generate_constraints(target)
        if env is not None:
            pprint.pprint(env, indent=4)


if __name__ == "__main__":
    main()
