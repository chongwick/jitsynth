"""
JS type-stability inference for JOC constraints.

JavaScript is dynamically typed, so type stability is not written in the seed;
it is *inferred* by abstract interpretation over the ESTree AST (the same JSON
`js_walker` consumes). This module runs as a pre-pass and produces an
annotation map keyed by ``id(node)``:

    - for variable declarators / assignments / updates / unary / call / new /
      return nodes:      {'type': <lattice type>, 'stable': <bool|None>}
    - for loop nodes:    {'type_stable': <bool>}

``type`` is the value type produced at that program point. ``stable`` is True
when a variable write keeps the variable monomorphic, False when it transitions
the variable to a different type. ``type_stable`` on a loop is True when every
loop-carried variable keeps its type across the back-edge (the monomorphic hot
loop a tracing JIT specializes on) and False for a deopt-inducing loop.

The analysis is intentionally conservative: anything it cannot prove from the
AST (most calls, property reads, closures, `this`) degrades to ``mixed``, and a
write to a variable of unknown type is not claimed stable.
"""

# --- Type lattice -----------------------------------------------------------
# int and float are kept DISTINCT on purpose: an int->float transition is
# exactly a deopt trigger, so they must not silently unify. Any two distinct
# types join to 'mixed'.
NUMERIC = {"int", "float"}


def join(a, b):
    """Least-upper-bound on the type lattice."""
    if a is None:
        return b
    if b is None:
        return a
    if a == b:
        return a
    return "mixed"


# --- Known builtin return types (tiny table; everything else -> mixed) ------
_MATH_INT = {"floor", "ceil", "round", "trunc", "sign"}
_GLOBAL_CALL_TYPES = {
    "parseInt": "int",
    "parseFloat": "float",
    "Number": "float",
    "String": "string",
    "Boolean": "bool",
    "Array": "array",
    "Object": "object",
    "isNaN": "bool",
    "isFinite": "bool",
}


class TypeAnalyzer:
    def __init__(self):
        self.ann = {}
        self.scope = {}  # var name -> current lattice type

    def run(self, stmts):
        for s in stmts:
            self.visit(s)
        return self.ann

    # -- dispatch ------------------------------------------------------------
    def visit(self, node):
        """Visit a node for its side effects; return its value type."""
        if isinstance(node, list):
            for x in node:
                self.visit(x)
            return "mixed"
        if not isinstance(node, dict):
            return "mixed"
        handler = getattr(self, f"v_{node.get('type')}", None)
        if handler is None:
            return self.v_default(node)
        return handler(node)

    def v_default(self, node):
        """Generic recursion — descend into children to catch nested effects."""
        for key, value in node.items():
            if key in ("type", "start", "end", "loc", "range"):
                continue
            self.visit(value)
        return "mixed"

    # -- leaves / reads ------------------------------------------------------
    def v_Literal(self, node):
        if "regex" in node:
            return "object"
        value = node.get("value")
        raw = node.get("raw", "")
        if isinstance(value, bool):
            return "bool"
        if value is None:
            return "null" if raw == "null" else "mixed"
        if isinstance(value, str):
            return "string"
        if isinstance(value, (int, float)):
            return "int" if _is_int_literal(raw, value) else "float"
        return "mixed"

    def v_Identifier(self, node):
        name = node.get("name")
        if name == "undefined":
            return "undefined"
        if name in ("NaN", "Infinity"):
            return "float"
        return self.scope.get(name, "mixed")

    def v_ThisExpression(self, node):
        return "object"

    def v_TemplateLiteral(self, node):
        self.v_default(node)
        return "string"

    def v_ArrayExpression(self, node):
        self.v_default(node)
        return "array"

    def v_ObjectExpression(self, node):
        self.v_default(node)
        return "object"

    def v_FunctionExpression(self, node):
        self._function(node)
        return "function"

    def v_ArrowFunctionExpression(self, node):
        self._function(node)
        return "function"

    def v_ClassExpression(self, node):
        self.v_default(node.get("body", {}))
        return "function"

    def v_MemberExpression(self, node):
        self.visit(node.get("object"))
        if node.get("computed"):
            self.visit(node.get("property"))
            return "mixed"
        prop = node.get("property", {})
        if isinstance(prop, dict) and prop.get("name") == "length":
            return "int"
        return "mixed"

    def v_SequenceExpression(self, node):
        last = "mixed"
        for expr in node.get("expressions", []):
            last = self.visit(expr)
        return last

    # -- operators -----------------------------------------------------------
    def v_UnaryExpression(self, node):
        arg_t = self.visit(node.get("argument"))
        op = node.get("operator")
        if op == "!":
            t = "bool"
        elif op == "typeof":
            t = "string"
        elif op == "void":
            t = "undefined"
        elif op == "delete":
            t = "bool"
        elif op == "~":
            t = "int"
        else:  # unary + / -  -> numeric, keep int if the operand was int
            t = arg_t if arg_t in NUMERIC else "float"
        self.ann[id(node)] = {"type": t, "stable": None}
        return t

    def v_UpdateExpression(self, node):
        arg = node.get("argument", {})
        arg_t = self.visit(arg)
        t = arg_t if arg_t in NUMERIC else "int"
        stable = self._write(_target_name(arg), t)
        self.ann[id(node)] = {"type": t, "stable": stable}
        return t

    def v_BinaryExpression(self, node):
        lt = self.visit(node.get("left"))
        rt = self.visit(node.get("right"))
        return _binary_type(node.get("operator"), lt, rt)

    def v_LogicalExpression(self, node):
        return join(self.visit(node.get("left")), self.visit(node.get("right")))

    def v_ConditionalExpression(self, node):
        self.visit(node.get("test"))
        return join(self.visit(node.get("consequent")),
                    self.visit(node.get("alternate")))

    def v_AssignmentExpression(self, node):
        rt = self.visit(node.get("right"))
        left = node.get("left", {})
        op = node.get("operator", "=")
        if op == "=":
            result = rt
        else:
            name = _target_name(left)
            cur = self.scope.get(name, "mixed") if name else "mixed"
            result = _binary_type(op[:-1], cur, rt)  # '+=' -> '+'
        name = _target_name(left)
        if name is None:
            self.visit(left)  # member target etc.: descend for read effects
            stable = None
        else:
            stable = self._write(name, result)
        self.ann[id(node)] = {"type": result, "stable": stable}
        return result

    def v_CallExpression(self, node):
        self.visit(node.get("callee"))
        for a in node.get("arguments", []):
            self.visit(a)
        t = _call_type(node.get("callee", {}))
        self.ann[id(node)] = {"type": t, "stable": None}
        return t

    def v_NewExpression(self, node):
        self.visit(node.get("callee"))
        for a in node.get("arguments", []):
            self.visit(a)
        self.ann[id(node)] = {"type": "object", "stable": None}
        return "object"

    # -- statements ----------------------------------------------------------
    def v_ExpressionStatement(self, node):
        self.visit(node.get("expression"))

    def v_VariableDeclaration(self, node):
        for decl in node.get("declarations", []):
            init = decl.get("init")
            t = self.visit(init) if init else "undefined"
            name = _target_name(decl.get("id", {}))
            stable = self._write(name, t) if name else None
            self.ann[id(decl)] = {"type": t, "stable": stable}

    def v_ReturnStatement(self, node):
        arg = node.get("argument")
        t = self.visit(arg) if arg else "undefined"
        self.ann[id(node)] = {"type": t, "stable": None}

    def v_ThrowStatement(self, node):
        self.visit(node.get("argument"))

    def v_BlockStatement(self, node):
        for s in node.get("body", []):
            self.visit(s)

    def v_IfStatement(self, node):
        self.visit(node.get("test"))
        base = dict(self.scope)
        self.visit(node.get("consequent"))
        cons = self.scope
        self.scope = dict(base)
        alt_node = node.get("alternate")
        if alt_node:
            self.visit(alt_node)
        alt = self.scope
        merged = {}
        for k in set(cons) | set(alt) | set(base):
            merged[k] = join(cons.get(k, base.get(k)), alt.get(k, base.get(k)))
        self.scope = merged

    def v_SwitchStatement(self, node):
        self.visit(node.get("discriminant"))
        for case in node.get("cases", []):
            self.visit(case.get("test"))
            for s in case.get("consequent", []):
                self.visit(s)

    def v_TryStatement(self, node):
        self.visit(node.get("block"))
        handler = node.get("handler")
        if handler:
            self.visit(handler.get("body"))
        if node.get("finalizer"):
            self.visit(node.get("finalizer"))

    def v_FunctionDeclaration(self, node):
        self._function(node)

    def v_ClassDeclaration(self, node):
        self.v_default(node.get("body", {}))

    def v_MethodDefinition(self, node):
        value = node.get("value")
        if value:
            self._function(value)

    # loops
    def v_ForStatement(self, node):
        if node.get("init"):
            self.visit(node["init"])
        if node.get("test"):
            self.visit(node["test"])
        if node.get("update"):
            self.visit(node["update"])
        self._loop(node, node.get("body"))

    def v_WhileStatement(self, node):
        if node.get("test"):
            self.visit(node["test"])
        self._loop(node, node.get("body"))

    def v_DoWhileStatement(self, node):
        if node.get("test"):
            self.visit(node["test"])
        self._loop(node, node.get("body"))

    def v_ForInStatement(self, node):
        self._for_each(node)

    def v_ForOfStatement(self, node):
        self._for_each(node)

    # -- helpers -------------------------------------------------------------
    def _write(self, name, t):
        """Apply a variable write; return stability (True/False/None)."""
        if name is None:
            return None
        prev = self.scope.get(name)
        self.scope[name] = t
        if prev is None:
            return True          # first definition: monomorphic so far
        return prev == t         # unchanged type -> stable; else transition

    def _function(self, node):
        saved = self.scope
        self.scope = dict(saved)  # inherit outer bindings (closure reads)
        for p in node.get("params", []):
            nm = _target_name(p)
            if nm:
                self.scope[nm] = "mixed"
        body = node.get("body")
        if isinstance(body, dict) and body.get("type") == "BlockStatement":
            self.visit(body)
        elif body is not None:  # arrow with expression body (implicit return)
            self.visit(body)
        self.scope = saved        # intraprocedural: discard inner writes

    def _for_each(self, node):
        # for-in / for-of: bind the loop variable to unknown element type
        left = node.get("left")
        self.visit(node.get("right"))
        if isinstance(left, dict):
            if left.get("type") == "VariableDeclaration":
                for decl in left.get("declarations", []):
                    nm = _target_name(decl.get("id", {}))
                    if nm:
                        self.scope[nm] = "mixed"
            else:
                nm = _target_name(left)
                if nm:
                    self.scope[nm] = "mixed"
        self._loop(node, node.get("body"))

    def _loop(self, node, body):
        """Detect loop-carried type stability via a bounded fixpoint."""
        entry = dict(self.scope)
        assigned = _assigned_vars(body)
        # Pass 1 widens the environment; pass 2 lets statements inside the
        # loop annotate under the steady-state types. The lattice is shallow
        # (a variable widens to 'mixed' in one step), so two passes converge.
        self.visit(body)
        self.visit(body)
        final = self.scope
        stable = True
        for v in assigned:
            if v in entry:
                if entry.get(v) != final.get(v):
                    stable = False
                    break
            else:
                # loop-local: unstable if it never settles on a concrete type
                if final.get(v, "mixed") == "mixed":
                    stable = False
                    break
        self.ann[id(node)] = {"type_stable": stable}


# --- module-level helpers ---------------------------------------------------
def _is_int_literal(raw, value):
    if isinstance(raw, str):
        r = raw.strip().lower()
        if r.endswith("n"):          # BigInt literal
            return True
        if r.startswith(("0x", "0o", "0b")):
            return True
        if "." in r or "e" in r:
            return False
    return float(value).is_integer()


def _target_name(node):
    """Return the variable name a node assigns to, or None if untracked."""
    if not isinstance(node, dict):
        return None
    t = node.get("type")
    if t == "Identifier":
        return node.get("name")
    if t == "AssignmentPattern":
        return _target_name(node.get("left"))
    if t == "RestElement":
        return _target_name(node.get("argument"))
    return None  # MemberExpression / destructuring: not tracked in v1


def _binary_type(op, lt, rt):
    if op in ("&", "|", "^", "<<", ">>", ">>>"):
        return "int"          # bitwise coerces to int32/uint32 (asm.js `x|0`)
    if op in ("==", "!=", "===", "!==", "<", ">", "<=", ">=",
              "instanceof", "in"):
        return "bool"
    if op == "+":
        if lt == "string" or rt == "string":
            return "string"
        return "int" if lt == "int" and rt == "int" else "float"
    if op in ("-", "*", "%"):
        return "int" if lt == "int" and rt == "int" else "float"
    if op in ("/", "**"):
        return "float"
    return "mixed"


def _call_type(callee):
    if not isinstance(callee, dict):
        return "mixed"
    if callee.get("type") == "Identifier":
        return _GLOBAL_CALL_TYPES.get(callee.get("name"), "mixed")
    if callee.get("type") == "MemberExpression" and not callee.get("computed"):
        obj = callee.get("object", {})
        prop = callee.get("property", {})
        if (isinstance(obj, dict) and obj.get("name") == "Math"
                and isinstance(prop, dict)):
            return "int" if prop.get("name") in _MATH_INT else "float"
    return "mixed"


# --- Loop trip counts & call-site identity ----------------------------------
def _int_literal(node):
    """Integer value of a literal (or negated literal), else None."""
    if not isinstance(node, dict):
        return None
    if node.get("type") == "Literal":
        v = node.get("value")
        if isinstance(v, bool):
            return None
        if isinstance(v, int):
            return v
        if isinstance(v, float) and v.is_integer():
            return int(v)
        return None
    if node.get("type") == "UnaryExpression" and node.get("operator") == "-":
        a = _int_literal(node.get("argument"))
        return -a if a is not None else None
    return None


def _init_var_start(init):
    """(loop var, start value) from a for-loop init, or (None, None)."""
    if not isinstance(init, dict):
        return None, None
    if init.get("type") == "VariableDeclaration":
        decls = init.get("declarations", [])
        if len(decls) != 1:
            return None, None
        d = decls[0]
        idn = d.get("id", {})
        name = idn.get("name") if isinstance(idn, dict) else None
        return name, _int_literal(d.get("init"))
    if init.get("type") == "AssignmentExpression" and init.get("operator") == "=":
        left = init.get("left", {})
        name = left.get("name") if isinstance(left, dict) and left.get("type") == "Identifier" else None
        return name, _int_literal(init.get("right"))
    return None, None


def _test_limit(test, var):
    """(comparison-op-relative-to-var, int limit) from a for-loop test."""
    if not isinstance(test, dict) or test.get("type") != "BinaryExpression":
        return None, None
    op = test.get("operator")
    left, right = test.get("left", {}), test.get("right", {})

    def is_var(n):
        return isinstance(n, dict) and n.get("type") == "Identifier" and n.get("name") == var

    if is_var(left):
        lim = _int_literal(right)
        return (op, lim) if lim is not None else (None, None)
    if is_var(right):
        lim = _int_literal(left)
        flip = {"<": ">", ">": "<", "<=": ">=", ">=": "<="}
        return (flip.get(op), lim) if lim is not None else (None, None)
    return None, None


def _update_step(update, var):
    """Signed integer step applied to the loop var each iteration, else None."""
    if not isinstance(update, dict):
        return None
    t = update.get("type")
    if t == "UpdateExpression":
        arg = update.get("argument", {})
        if isinstance(arg, dict) and arg.get("name") == var:
            return 1 if update.get("operator") == "++" else -1
        return None
    if t == "AssignmentExpression":
        left = update.get("left", {})
        if not (isinstance(left, dict) and left.get("name") == var):
            return None
        op = update.get("operator")
        if op == "+=":
            return _int_literal(update.get("right"))
        if op == "-=":
            c = _int_literal(update.get("right"))
            return -c if c is not None else None
        if op == "=":  # i = i + C  /  i = i - C
            r = update.get("right", {})
            if isinstance(r, dict) and r.get("type") == "BinaryExpression":
                l2 = r.get("left", {})
                if isinstance(l2, dict) and l2.get("name") == var:
                    c = _int_literal(r.get("right"))
                    if c is not None and r.get("operator") == "+":
                        return c
                    if c is not None and r.get("operator") == "-":
                        return -c
    return None


def _for_trip_count(node):
    var, start = _init_var_start(node.get("init"))
    if var is None or start is None:
        return None
    op, lim = _test_limit(node.get("test"), var)
    if op is None or lim is None:
        return None
    step = _update_step(node.get("update"), var)
    if not step:  # None or 0
        return None
    if step > 0:
        if op == "<":
            return max(0, -(-(lim - start) // step))   # ceil((lim-start)/step)
        if op == "<=":
            return max(0, (lim - start) // step + 1) if lim >= start else 0
        return None  # ascending step with descending test: degenerate
    else:
        s = -step
        if op == ">":
            return max(0, -(-(start - lim) // s))
        if op == ">=":
            return max(0, (start - lim) // s + 1) if start >= lim else 0
        return None


def loop_trip_count(node):
    """Statically inferred iteration count of a loop node, or None if unknown.

    Handles counted for-loops with integer bounds/step, and for-of/for-in over
    an array or string literal. while/do-while and data-dependent loops are
    left as None.
    """
    if not isinstance(node, dict):
        return None
    t = node.get("type")
    if t == "ForStatement":
        return _for_trip_count(node)
    if t in ("ForOfStatement", "ForInStatement"):
        right = node.get("right", {})
        if isinstance(right, dict):
            if right.get("type") == "ArrayExpression":
                return len(right.get("elements", []))
            if right.get("type") == "Literal" and isinstance(right.get("value"), str):
                return len(right["value"])
    return None


def callee_key(node):
    """Identity of a CallExpression's target: "f", "obj.method", or None."""
    callee = node.get("callee", {})
    if not isinstance(callee, dict):
        return None
    if callee.get("type") == "Identifier":
        return callee.get("name")
    if callee.get("type") == "MemberExpression" and not callee.get("computed"):
        prop = callee.get("property", {})
        pname = prop.get("name") if isinstance(prop, dict) else None
        if pname:
            obj = callee.get("object", {})
            oname = (obj.get("name") if isinstance(obj, dict)
                     and obj.get("type") == "Identifier" else None)
            return f"{oname}.{pname}" if oname else f".{pname}"
    return None


def _assigned_vars(body):
    """Names of variables written anywhere in a subtree (assign/update/decl)."""
    found = set()

    def rec(n):
        if isinstance(n, list):
            for x in n:
                rec(x)
            return
        if not isinstance(n, dict):
            return
        t = n.get("type")
        if t == "AssignmentExpression":
            nm = _target_name(n.get("left"))
            if nm:
                found.add(nm)
        elif t == "UpdateExpression":
            nm = _target_name(n.get("argument"))
            if nm:
                found.add(nm)
        elif t == "VariableDeclarator":
            nm = _target_name(n.get("id"))
            if nm:
                found.add(nm)
        for k, v in n.items():
            if k in ("type", "start", "end", "loc", "range"):
                continue
            rec(v)

    rec(body)
    return found
