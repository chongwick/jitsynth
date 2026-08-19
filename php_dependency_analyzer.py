"""
PHP Statement-Level Dependency Analyzer

Analyzes a PHP AST (JSON output from nikic/php-parser) to build a
statement-level dependency graph. Each statement tracks which prior
statements it depends on via variable def-use chains.

Usage:
    # From a JSON file:
    python php_dependency_analyzer.py ast.json

    # Programmatically:
    from php_dependency_analyzer import build_statement_dependencies
    import json
    with open("ast.json") as f:
        ast = json.load(f)
    deps = build_statement_dependencies(ast)
"""

import json
import sys
import subprocess


# ---------------------------------------------------------------------------
# 1. Recursive AST walker
# ---------------------------------------------------------------------------

def walk(node):
    """Yield all AST nodes (dicts) recursively from a node or list."""
    if isinstance(node, dict):
        yield node
        for value in node.values():
            yield from walk(value)
    elif isinstance(node, list):
        for item in node:
            yield from walk(item)


# ---------------------------------------------------------------------------
# 2. Variable extraction helpers
# ---------------------------------------------------------------------------

ASSIGN_TYPES = {
    "Expr_Assign",
    "Expr_AssignRef",
    "Expr_AssignOp_Plus",
    "Expr_AssignOp_Minus",
    "Expr_AssignOp_Mul",
    "Expr_AssignOp_Div",
    "Expr_AssignOp_Mod",
    "Expr_AssignOp_Concat",
    "Expr_AssignOp_Pow",
    "Expr_AssignOp_BitwiseAnd",
    "Expr_AssignOp_BitwiseOr",
    "Expr_AssignOp_BitwiseXor",
    "Expr_AssignOp_ShiftLeft",
    "Expr_AssignOp_ShiftRight",
    "Expr_AssignOp_Coalesce",
}

INCREMENT_TYPES = {
    "Expr_PreInc",
    "Expr_PreDec",
    "Expr_PostInc",
    "Expr_PostDec",
}

CONTROL_FLOW_TYPES = {
    "Stmt_If", "Stmt_While", "Stmt_Do", "Stmt_For",
    "Stmt_Foreach", "Stmt_Switch", "Stmt_TryCatch",
}

SCOPE_TYPES = {
    "Stmt_Function", "Stmt_ClassMethod",
    "Stmt_Class", "Stmt_Trait", "Stmt_Interface",
}


def get_variable_name(node):
    """
    Extract a canonical symbol key from a variable-like node.
    Returns None if the node isn't a recognizable variable.
    """
    node_type = node.get("nodeType")

    if node_type == "Expr_Variable":
        name = node.get("name")
        if isinstance(name, str):
            return f"${name}"
        return None  # dynamic variable like ${$x}

    if node_type == "Expr_PropertyFetch":
        obj = node.get("var")
        prop = node.get("name")
        obj_name = get_variable_name(obj) if isinstance(obj, dict) else None
        if obj_name and isinstance(prop, dict) and prop.get("nodeType") == "Identifier":
            return f"{obj_name}->{prop['name']}"
        elif obj_name and isinstance(prop, str):
            return f"{obj_name}->{prop}"
        return obj_name  # fall back to just the object

    if node_type == "Expr_StaticPropertyFetch":
        cls = node.get("class")
        prop = node.get("name")
        cls_name = None
        if isinstance(cls, dict):
            cls_name = cls.get("name") if cls.get("nodeType") == "Name" else None
            if cls_name is None and cls.get("nodeType") == "Identifier":
                cls_name = cls.get("name")
            if cls_name is None and "parts" in cls:
                cls_name = "\\".join(cls["parts"])
        prop_name = None
        if isinstance(prop, dict) and prop.get("nodeType") == "Expr_Variable":
            prop_name = prop.get("name")
        elif isinstance(prop, dict) and prop.get("nodeType") == "VarLikeIdentifier":
            prop_name = prop.get("name")
        if cls_name and prop_name:
            return f"{cls_name}::${prop_name}"
        return None

    if node_type == "Expr_ArrayDimFetch":
        var = node.get("var")
        var_name = get_variable_name(var) if isinstance(var, dict) else None
        if var_name:
            return f"{var_name}[*]"
        return None

    return None


def collect_defs(stmt):
    """Return the set of variable symbols defined by this statement."""
    defs = set()
    node_type = stmt.get("nodeType")

    # Stmt_Expression wraps an expression
    if node_type == "Stmt_Expression":
        expr = stmt.get("expr")
        if not expr:
            return defs
        _collect_defs_from_expr(expr, defs)

    # Stmt_Foreach defines loop variables
    elif node_type == "Stmt_Foreach":
        value_var = stmt.get("valueVar")
        key_var = stmt.get("keyVar")
        if value_var:
            name = get_variable_name(value_var)
            if name:
                defs.add(name)
        if key_var:
            name = get_variable_name(key_var)
            if name:
                defs.add(name)

    # Stmt_For may have assignments in init
    elif node_type == "Stmt_For":
        for init_expr in stmt.get("init", []):
            _collect_defs_from_expr(init_expr, defs)

    # Stmt_Global declares globals
    elif node_type == "Stmt_Global":
        for var in stmt.get("vars", []):
            name = get_variable_name(var)
            if name:
                defs.add(name)

    # Stmt_Static declares static vars
    elif node_type == "Stmt_Static":
        for static_var in stmt.get("vars", []):
            var = static_var.get("var")
            if var:
                name = get_variable_name(var)
                if name:
                    defs.add(name)

    # Stmt_Catch defines the catch variable (e.g. $e in catch(Exception $e))
    elif node_type == "Stmt_Catch":
        var = stmt.get("var")
        if var:
            name = get_variable_name(var)
            if name:
                defs.add(name)

    # Function/method params are definitions in the function scope
    elif node_type in ("Stmt_Function", "Stmt_ClassMethod"):
        for param in stmt.get("params", []):
            if isinstance(param, dict):
                var = param.get("var")
                if var:
                    name = get_variable_name(var)
                    if name:
                        defs.add(name)

    return defs


def _collect_defs_from_expr(expr, defs):
    """Extract definitions from an expression node."""
    expr_type = expr.get("nodeType", "")

    # Standard assignments: $a = ..., $a += ..., $a =& ...
    if expr_type in ASSIGN_TYPES:
        var = expr.get("var")
        if var:
            name = get_variable_name(var)
            if name:
                defs.add(name)
            # Destructuring: list($a, $b) = ... or [$a, $b] = ...
            if var.get("nodeType") in ("Expr_List", "Expr_Array"):
                for item in var.get("items", []):
                    if item and isinstance(item, dict):
                        val = item.get("value")
                        if val:
                            name = get_variable_name(val)
                            if name:
                                defs.add(name)

    # Pre/post increment/decrement
    elif expr_type in INCREMENT_TYPES:
        var = expr.get("var")
        if var:
            name = get_variable_name(var)
            if name:
                defs.add(name)


def collect_uses(node, skip_node=None):
    """
    Collect all variable uses in a node tree.
    skip_node: a subtree to skip (e.g., the LHS of an assignment).
    """
    uses = set()
    _collect_uses_recursive(node, skip_node, uses, skip_active=False)
    return uses


def _collect_uses_recursive(node, skip_node, uses, skip_active):
    """Recursively collect variable uses, skipping a designated subtree."""
    if isinstance(node, dict):
        if node is skip_node:
            return  # skip this entire subtree

        node_type = node.get("nodeType", "")

        # If this is a variable-like node, record it as a use
        if node_type in (
            "Expr_Variable",
            "Expr_ArrayDimFetch",
            "Expr_PropertyFetch",
            "Expr_NullsafePropertyFetch",
            "Expr_StaticPropertyFetch",
        ):
            name = get_variable_name(node)
            if name:
                uses.add(name)

        # Recurse into children
        for value in node.values():
            _collect_uses_recursive(value, skip_node, uses, skip_active)

    elif isinstance(node, list):
        for item in node:
            _collect_uses_recursive(item, skip_node, uses, skip_active)


# ---------------------------------------------------------------------------
# 3. Statement uses extraction (context-aware)
# ---------------------------------------------------------------------------

def get_statement_uses(stmt):
    """
    Get variable uses for a statement, correctly excluding LHS of assignments.
    """
    node_type = stmt.get("nodeType")

    if node_type == "Stmt_Expression":
        expr = stmt.get("expr")
        if not expr:
            return set()
        return _get_expr_uses(expr)

    # For other statement types, collect all variable uses
    return collect_uses(stmt)


def _get_expr_uses(expr):
    """Get uses from an expression, handling assignment LHS correctly."""
    expr_type = expr.get("nodeType", "")

    if expr_type in ASSIGN_TYPES:
        var_node = expr.get("var")
        rhs = expr.get("expr")

        uses = set()

        # RHS is always a use context
        if rhs:
            uses |= collect_uses(rhs)

        # For compound assignments ($a += $b), the LHS is also read
        if expr_type != "Expr_Assign" and expr_type != "Expr_AssignRef":
            if var_node:
                name = get_variable_name(var_node)
                if name:
                    uses.add(name)

        # For property/array access on LHS, the base object is a use
        # e.g., $obj->prop = 1 uses $obj
        if var_node:
            var_type = var_node.get("nodeType", "")
            if var_type in ("Expr_PropertyFetch", "Expr_NullsafePropertyFetch"):
                base = var_node.get("var")
                if base:
                    uses |= collect_uses(base)
            elif var_type == "Expr_ArrayDimFetch":
                base = var_node.get("var")
                dim = var_node.get("dim")
                if base:
                    uses |= collect_uses(base)
                if dim:
                    uses |= collect_uses(dim)

        return uses

    if expr_type in INCREMENT_TYPES:
        var_node = expr.get("var")
        uses = set()
        if var_node:
            name = get_variable_name(var_node)
            if name:
                uses.add(name)
        return uses

    # For non-assignment expressions, everything is a use
    return collect_uses(expr)


# ---------------------------------------------------------------------------
# 3a. Value-type inference — the produced type of a statement's value
# ---------------------------------------------------------------------------
#
# Mirrors the JS type lattice used for JOC data tags so that a JOC's inferred
# type can be matched against real PHP statements during synthesis. PHP is
# dynamically typed, so this is a conservative best-effort: anything the
# analyzer can't establish degrades to "mixed".

_PHP_NUMERIC = {"int", "float"}

_PHP_CAST_TYPES = {
    "Expr_Cast_Int": "int",
    "Expr_Cast_Double": "float",
    "Expr_Cast_String": "string",
    "Expr_Cast_Bool": "bool",
    "Expr_Cast_Array": "array",
    "Expr_Cast_Object": "object",
}

# Small, high-confidence table of builtin return types (name -> lattice type).
_PHP_BUILTIN_RETURNS = {
    # int
    "strlen": "int", "count": "int", "sizeof": "int", "intval": "int",
    "mt_rand": "int", "rand": "int", "time": "int", "ord": "int",
    "crc32": "int", "strcmp": "int", "strncmp": "int",
    # float
    "floatval": "float", "sqrt": "float", "sin": "float", "cos": "float",
    "pi": "float", "pow": "float", "fmod": "float", "log": "float",
    # string
    "strval": "string", "sprintf": "string", "vsprintf": "string",
    "implode": "string", "join": "string", "str_repeat": "string",
    "trim": "string", "ltrim": "string", "rtrim": "string",
    "strtolower": "string", "strtoupper": "string", "ucfirst": "string",
    "substr": "string", "str_replace": "string", "number_format": "string",
    "date": "string", "md5": "string", "sha1": "string", "hash": "string",
    "json_encode": "string", "base64_encode": "string", "chr": "string",
    "htmlspecialchars": "string", "strrev": "string",
    # bool
    "is_array": "bool", "is_string": "bool", "is_int": "bool",
    "is_float": "bool", "is_bool": "bool", "is_null": "bool",
    "is_numeric": "bool", "is_object": "bool", "is_callable": "bool",
    "isset": "bool", "empty": "bool", "in_array": "bool",
    "array_key_exists": "bool", "boolval": "bool", "ctype_digit": "bool",
    "str_contains": "bool", "str_starts_with": "bool", "str_ends_with": "bool",
    "function_exists": "bool", "class_exists": "bool", "method_exists": "bool",
    # array
    "explode": "array", "array_map": "array", "array_filter": "array",
    "array_merge": "array", "array_keys": "array", "array_values": "array",
    "range": "array", "str_split": "array", "compact": "array",
    "array_slice": "array", "array_reverse": "array", "array_fill": "array",
    "preg_split": "array", "array_unique": "array", "array_diff": "array",
}


def _php_name(node):
    """Lowercased simple name from a Name/Identifier node, else None."""
    if not isinstance(node, dict):
        return None
    name = node.get("name")
    if isinstance(name, str):
        return name.lower()
    parts = node.get("parts")
    if isinstance(parts, list) and parts:
        return parts[-1].lower()
    return None


def _php_join(a, b):
    if a is None:
        return b
    if b is None:
        return a
    return a if a == b else "mixed"


def _php_binop_type(op, lt, rt):
    """Result type of a PHP binary/assign-op given operand types."""
    if op in ("Plus", "Minus", "Mul"):
        if op == "Plus" and lt == "array" and rt == "array":
            return "array"
        return "int" if lt == "int" and rt == "int" else "float"
    if op in ("Div", "Pow"):
        return "float"
    if op == "Mod":
        return "int"
    if op == "Concat":
        return "string"
    if op in ("ShiftLeft", "ShiftRight", "BitwiseAnd", "BitwiseOr", "BitwiseXor"):
        return "int"
    if op == "Spaceship":
        return "int"
    if op == "Coalesce":
        return _php_join(lt, rt)
    if op in ("Equal", "NotEqual", "Identical", "NotIdentical",
              "Smaller", "SmallerOrEqual", "Greater", "GreaterOrEqual",
              "BooleanAnd", "BooleanOr", "LogicalAnd", "LogicalOr",
              "LogicalXor"):
        return "bool"
    return "mixed"


def infer_value_type(node):
    """Infer the lattice type of the value an expression node produces."""
    if not isinstance(node, dict):
        return "mixed"
    nt = node.get("nodeType", "")

    if nt == "Scalar_Int":
        return "int"
    if nt == "Scalar_Float":
        return "float"
    if nt in ("Scalar_String", "Scalar_Encapsed", "Scalar_InterpolatedString"):
        return "string"
    if nt.startswith("Scalar_MagicConst"):
        return "int" if nt == "Scalar_MagicConst_Line" else "string"
    if nt == "Expr_ConstFetch":
        name = _php_name(node.get("name"))
        if name in ("true", "false"):
            return "bool"
        if name == "null":
            return "null"
        return "mixed"
    if nt == "Expr_Array":
        return "array"
    if nt == "Expr_New":
        return "object"
    if nt in ("Expr_Closure", "Expr_ArrowFunction"):
        return "object"
    if nt in ("Expr_Assign", "Expr_AssignRef"):
        return infer_value_type(node.get("expr"))
    if nt.startswith("Expr_AssignOp_"):
        return _php_binop_type(nt[len("Expr_AssignOp_"):],
                               "mixed", infer_value_type(node.get("expr")))
    if nt.startswith("Expr_BinaryOp_"):
        return _php_binop_type(nt[len("Expr_BinaryOp_"):],
                               infer_value_type(node.get("left")),
                               infer_value_type(node.get("right")))
    if nt in ("Expr_UnaryMinus", "Expr_UnaryPlus"):
        t = infer_value_type(node.get("expr"))
        return t if t in _PHP_NUMERIC else "float"
    if nt == "Expr_BooleanNot":
        return "bool"
    if nt == "Expr_BitwiseNot":
        return "int"
    if nt in ("Expr_PreInc", "Expr_PostInc", "Expr_PreDec", "Expr_PostDec"):
        return "int"
    if nt in _PHP_CAST_TYPES:
        return _PHP_CAST_TYPES[nt]
    if nt == "Expr_Ternary":
        then = node.get("if")
        then_t = infer_value_type(then) if then else infer_value_type(node.get("cond"))
        return _php_join(then_t, infer_value_type(node.get("else")))
    if nt == "Expr_FuncCall":
        return _PHP_BUILTIN_RETURNS.get(_php_name(node.get("name")), "mixed")
    return "mixed"


def get_statement_value_type(stmt):
    """Produced value type of a statement, for JOC data-tag matching."""
    nt = stmt.get("nodeType")
    if nt == "Stmt_Expression":
        expr = stmt.get("expr")
        return infer_value_type(expr) if expr else "mixed"
    if nt == "Stmt_Return":
        expr = stmt.get("expr")
        return infer_value_type(expr) if expr else "null"
    return "mixed"


# ---------------------------------------------------------------------------
# 3b. AST flattener — linearize nested control-flow statements
# ---------------------------------------------------------------------------

def flatten_ast(ast):
    """
    Flatten a top-level AST (list of statements) so that statements nested
    inside control-flow constructs and scope boundaries (functions, classes,
    methods, traits, interfaces) each get their own entry in the resulting
    list.  Each construct is replaced by a *region header* (carrying just
    the condition / header expressions) followed by the recursively-flattened
    body statements.

    Returns a list of statement dicts, each annotated with a ``_region``
    metadata dict.
    """
    result = []
    _flatten_stmts(ast, result, parent_index=None, depth=0,
                   region_type=None, branch=None)
    return result


def _flatten_stmts(stmts, result, parent_index, depth, region_type, branch):
    """Recursively flatten a list of statements into *result*."""
    if not stmts:
        return
    for stmt in stmts:
        if not isinstance(stmt, dict):
            continue
        node_type = stmt.get("nodeType", "")

        if node_type in CONTROL_FLOW_TYPES:
            _flatten_control_flow(stmt, node_type, result, parent_index,
                                  depth, region_type, branch)
        elif node_type in SCOPE_TYPES:
            _flatten_scope(stmt, node_type, result, parent_index,
                           depth, region_type, branch)
        else:
            result.append(_with_region(stmt, parent_index, depth,
                                       region_type, branch))


def _flatten_control_flow(stmt, node_type, result, parent_index, depth,
                          region_type, branch):
    """Emit a region header + recursively flattened bodies for one
    control-flow statement."""

    # --- Region header ---
    header = _make_region_header(stmt, node_type, parent_index, depth)
    header_index = len(result)
    result.append(header)

    child_depth = depth + 1

    if node_type == "Stmt_If":
        # if body
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, "Stmt_If", "if_body")
        # elseifs
        for elseif in stmt.get("elseifs", []):
            ei_header = _make_region_header(elseif, "Stmt_ElseIf",
                                            header_index, child_depth)
            ei_index = len(result)
            result.append(ei_header)
            _flatten_stmts(elseif.get("stmts", []), result, ei_index,
                           child_depth + 1, "Stmt_ElseIf", "elseif_body")
        # else
        else_clause = stmt.get("else")
        if else_clause and isinstance(else_clause, dict):
            _flatten_stmts(else_clause.get("stmts", []), result,
                           header_index, child_depth, "Stmt_If", "else_body")

    elif node_type in ("Stmt_While", "Stmt_Do"):
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, node_type, "body")

    elif node_type == "Stmt_For":
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, "Stmt_For", "body")

    elif node_type == "Stmt_Foreach":
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, "Stmt_Foreach", "body")

    elif node_type == "Stmt_Switch":
        for case in stmt.get("cases", []):
            _flatten_stmts(case.get("stmts", []) if isinstance(case, dict) else [],
                           result, header_index, child_depth,
                           "Stmt_Switch", "case_body")

    elif node_type == "Stmt_TryCatch":
        # try body
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, "Stmt_TryCatch", "try_body")
        # catches
        for catch in stmt.get("catches", []):
            if not isinstance(catch, dict):
                continue
            catch_header = _make_region_header(catch, "Stmt_Catch",
                                               header_index, child_depth)
            catch_index = len(result)
            result.append(catch_header)
            _flatten_stmts(catch.get("stmts", []), result, catch_index,
                           child_depth + 1, "Stmt_Catch", "catch_body")
        # finally
        finally_clause = stmt.get("finally")
        if finally_clause and isinstance(finally_clause, dict):
            _flatten_stmts(finally_clause.get("stmts", []), result,
                           header_index, child_depth, "Stmt_TryCatch",
                           "finally_body")


def _flatten_scope(stmt, node_type, result, parent_index, depth,
                   region_type, branch):
    """Emit a region header + recursively flattened body for a scope
    boundary (function, method, class, trait, interface)."""

    header = _make_region_header(stmt, node_type, parent_index, depth)
    header_index = len(result)
    result.append(header)

    child_depth = depth + 1

    if node_type in ("Stmt_Function", "Stmt_ClassMethod"):
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, node_type, "body")

    elif node_type in ("Stmt_Class", "Stmt_Trait", "Stmt_Interface"):
        _flatten_stmts(stmt.get("stmts", []), result, header_index,
                       child_depth, node_type, "body")


def _make_region_header(stmt, node_type, parent_index, depth):
    """
    Build a synthetic region-header node from a control-flow statement.

    Copies only the fields needed for def/use analysis (condition, loop
    expressions, etc.) — body fields (stmts, elseifs, else, cases, catches,
    finally) are deliberately omitted so that collect_uses/collect_defs only
    see the header portion.
    """
    header = {
        "nodeType": node_type,
        "attributes": dict(stmt.get("attributes", {})),
        "_is_region_header": True,
    }

    if node_type in ("Stmt_If", "Stmt_ElseIf", "Stmt_While", "Stmt_Do"):
        cond = stmt.get("cond")
        if cond is not None:
            header["cond"] = cond

    elif node_type == "Stmt_For":
        for key in ("init", "cond", "loop"):
            val = stmt.get(key)
            if val is not None:
                header[key] = val

    elif node_type == "Stmt_Foreach":
        for key in ("expr", "valueVar", "keyVar", "byRef"):
            val = stmt.get(key)
            if val is not None:
                header[key] = val

    elif node_type == "Stmt_Switch":
        cond = stmt.get("cond")
        if cond is not None:
            header["cond"] = cond

    elif node_type == "Stmt_TryCatch":
        pass  # try has no condition

    elif node_type == "Stmt_Catch":
        # Copy the catch variable so collect_defs can extract it
        var = stmt.get("var")
        if var is not None:
            header["var"] = var
        types = stmt.get("types")
        if types is not None:
            header["types"] = types

    elif node_type in ("Stmt_Function", "Stmt_ClassMethod"):
        # Copy name and params (for structural refs and param defs)
        for key in ("name", "params", "returnType", "byRef"):
            val = stmt.get(key)
            if val is not None:
                header[key] = val

    elif node_type in ("Stmt_Class", "Stmt_Trait", "Stmt_Interface"):
        # Copy name, extends, implements (for structural refs)
        for key in ("name", "extends", "implements", "flags"):
            val = stmt.get(key)
            if val is not None:
                header[key] = val

    return _with_region(header, parent_index, depth, node_type, "header")


def _with_region(stmt, parent_index, depth, region_type, branch):
    """Attach ``_region`` metadata to a statement dict and return it."""
    stmt["_region"] = {
        "parent_index": parent_index,
        "depth": depth,
        "region_type": region_type,
        "branch": branch,
    }
    return stmt


# ---------------------------------------------------------------------------
# 4. Structural dependency helpers (function/class/trait/interface)
# ---------------------------------------------------------------------------

def build_name_registry(ast):
    """Map function/class/trait/interface names to their defining stmt_id."""
    registry = {}  # name_string -> stmt_id
    for stmt_id, stmt in enumerate(ast):
        node_type = stmt.get("nodeType")
        if node_type in ("Stmt_Function", "Stmt_Class", "Stmt_Trait", "Stmt_Interface"):
            name_node = stmt.get("name")
            if isinstance(name_node, dict):
                name = name_node.get("name")
            elif isinstance(name_node, str):
                name = name_node
            else:
                name = None
            if name:
                registry[name] = stmt_id
    return registry


def _extract_name(node):
    """Extract a name string from a Name node (handles both 'name' field and 'parts' array)."""
    if not isinstance(node, dict):
        return None
    if node.get("nodeType") == "Name":
        # Try 'name' field first (simple name), then 'parts' for namespaced
        name = node.get("name")
        if isinstance(name, str):
            return name
        parts = node.get("parts")
        if isinstance(parts, list) and parts:
            return "\\".join(parts)
    return None


def collect_structural_refs(stmt):
    """
    Walk a statement's subtree and return a set of name strings that are
    structurally referenced (function calls, class instantiation, static calls,
    trait uses, extends, implements).
    """
    refs = set()

    # Top-level class extends/implements (these are direct children, not nested)
    node_type = stmt.get("nodeType")
    if node_type == "Stmt_Class":
        extends = stmt.get("extends")
        if extends:
            name = _extract_name(extends)
            if name:
                refs.add(name)
        for iface in stmt.get("implements", []):
            name = _extract_name(iface)
            if name:
                refs.add(name)

    for node in walk(stmt):
        nt = node.get("nodeType")

        if nt == "Expr_FuncCall":
            name = _extract_name(node.get("name"))
            if name:
                refs.add(name)

        elif nt == "Expr_New":
            name = _extract_name(node.get("class"))
            if name:
                refs.add(name)

        elif nt in ("Expr_StaticCall", "Expr_StaticPropertyFetch",
                    "Expr_ClassConstFetch", "Expr_Instanceof"):
            # Foo::bar(), Foo::$p, Foo::CONST, Foo::class, $x instanceof Foo
            name = _extract_name(node.get("class"))
            if name:
                refs.add(name)

        elif nt == "Stmt_TraitUse":
            for trait in node.get("traits", []):
                name = _extract_name(trait)
                if name:
                    refs.add(name)

        elif nt == "Stmt_Catch":
            for ctype in node.get("types", []):
                name = _extract_name(ctype)
                if name:
                    refs.add(name)

    return refs


# ---------------------------------------------------------------------------
# 5. Statement description
# ---------------------------------------------------------------------------

def describe_statement(stmt):
    """
    Return a descriptive node type for a statement.
    For Stmt_Expression, returns the inner expression's nodeType instead.
    For region headers, appends "(region)" to the description.
    For all other statements, returns the statement's nodeType as-is.
    """
    node_type = stmt.get("nodeType", "unknown")
    is_header = stmt.get("_is_region_header", False)

    if node_type == "Stmt_Expression":
        expr = stmt.get("expr")
        if expr:
            desc = expr.get("nodeType", "unknown")
            return f"{desc} (region)" if is_header else desc

    desc = node_type
    if is_header:
        desc = f"{desc} (region)"
    return desc


# ---------------------------------------------------------------------------
# 6. Dependency graph builder
# ---------------------------------------------------------------------------

def build_statement_dependencies(ast):
    """
    Build a statement-level dependency graph from a PHP AST.

    Args:
        ast: list of top-level Stmt_* nodes (parsed JSON from php-parser)

    Returns:
        list of dicts, each containing:
            - stmt_id: int
            - node_type: str
            - start_line: int
            - end_line: int
            - defs: set of variable names defined
            - uses: set of variable names used
            - depends_on: set of stmt_ids this statement depends on
            - region: dict with parent_index, depth, region_type, branch
            - is_region_header: bool
    """
    flat_ast = flatten_ast(ast)
    last_def = {}   # variable name -> stmt_id of last definition
    name_registry = build_name_registry(flat_ast)
    results = []

    for stmt_id, stmt in enumerate(flat_ast):
        node_type = stmt.get("nodeType", "unknown")
        attrs = stmt.get("attributes", {})
        start_line = attrs.get("startLine", -1)
        end_line = attrs.get("endLine", -1)
        start_file_pos = attrs.get("startFilePos")
        end_file_pos = attrs.get("endFilePos")

        defs = collect_defs(stmt)
        uses = get_statement_uses(stmt)
        value_type = get_statement_value_type(stmt)

        # Build dependencies: for each used variable, find where it was last defined
        depends_on = set()
        for var in uses:
            if var in last_def:
                depends_on.add(last_def[var])

        # Structural dependencies: function/class/trait/interface references
        structural_refs = collect_structural_refs(stmt)
        for ref_name in structural_refs:
            if ref_name in name_registry:
                dep_id = name_registry[ref_name]
                if dep_id != stmt_id:  # don't depend on yourself
                    depends_on.add(dep_id)

        # Update last-def map
        for var in defs:
            last_def[var] = stmt_id

        description = describe_statement(stmt)
        is_region_header = bool(stmt.get("_is_region_header"))
        region = stmt.get("_region", {})

        results.append({
            "stmt_id": stmt_id,
            "node_type": node_type,
            "description": description,
            "start_line": start_line,
            "end_line": end_line,
            "start_file_pos": start_file_pos,
            "end_file_pos": end_file_pos,
            "defs": defs,
            "uses": uses,
            "value_type": value_type,
            "structural_refs": structural_refs,
            "depends_on": depends_on,
            "region": region,
            "is_region_header": is_region_header,
        })

    return results


# ---------------------------------------------------------------------------
# 6. Dependency closure (for printing a statement with all its deps)
# ---------------------------------------------------------------------------

def get_dependency_closure(results, stmt_id):
    """
    Get the full transitive closure of dependencies for a statement.
    Returns a sorted list of stmt_ids (including the statement itself).
    """
    visited = set()
    stack = [stmt_id]

    while stack:
        current = stack.pop()
        if current in visited:
            continue
        visited.add(current)
        for dep_id in results[current]["depends_on"]:
            if dep_id not in visited:
                stack.append(dep_id)

    return sorted(visited)


# ---------------------------------------------------------------------------
# 7. Source text extraction via byte offsets
# ---------------------------------------------------------------------------

def get_source_slice(results, stmt_id, source):
    """
    Extract the exact source text for a statement using byte offsets.

    Args:
        results: list of result dicts from build_statement_dependencies()
        stmt_id: the statement index
        source: the raw PHP file contents as bytes or string

    Returns:
        The source text for the statement as a string, or None if positions
        are unavailable.
    """
    r = results[stmt_id]
    start = r.get("start_file_pos")
    end = r.get("end_file_pos")
    if start is None or end is None:
        return None
    raw = source[start:end + 1]
    if isinstance(raw, bytes):
        return raw.decode('utf-8', errors='ignore')
    return raw


def get_dependency_slice(results, stmt_id, source):
    """
    Get the concatenated source text for a statement and all its dependencies.

    Args:
        results: list of result dicts from build_statement_dependencies()
        stmt_id: the statement index
        source: the raw PHP file contents as a string

    Returns:
        A string with the source text of all required statements (in order),
        separated by newlines.
    """
    closure = get_dependency_closure(results, stmt_id)
    slices = []
    for sid in closure:
        text = get_source_slice(results, sid, source)
        if text is not None:
            slices.append(text)
    return "\n".join(slices)


# ---------------------------------------------------------------------------
# 8. Pretty printing
# ---------------------------------------------------------------------------

def print_analysis(results, source=None):
    whale = """
        .
       ":"
     ___:____     |"\\/"|
   ,'        `.    \\  /
   |  O        \\___/  |
 ~^~^~^~^~^~^~^~^~^~^~^~^~
 """
    """Print the dependency analysis in a readable format."""
    print("=" * 60)
    print("PHP Statement Dependency Analysis" + whale)
    print("=" * 60)

    for r in results:
        region = r.get("region", {})
        depth = region.get("depth", 0)
        indent = "  " + "| " * depth
        header_marker = " [REGION]" if r.get("is_region_header") else ""
        print(f"\n{indent}Statement {r['stmt_id']} (line {r['start_line']}-{r['end_line']}){header_marker}")
        print(f"{indent}  Type:       {r['node_type']}  ->  {r['description']}")
        if source is not None:
            text = get_source_slice(results, r['stmt_id'], source)
            if text is not None:
                print(f"{indent}  Source:     {text.strip()}")
        print(f"{indent}  Defines:    {sorted(r['defs']) if r['defs'] else '(none)'}")
        print(f"{indent}  Uses:       {sorted(r['uses']) if r['uses'] else '(none)'}")
        print(f"{indent}  Struct refs:{' ' + sorted(r['structural_refs']).__repr__() if r.get('structural_refs') else ' (none)'}")
        print(f"{indent}  Depends on: {sorted(r['depends_on']) if r['depends_on'] else '(none)'}")
        if region.get("parent_index") is not None:
            print(f"{indent}  Region:     parent={region['parent_index']}, "
                  f"type={region.get('region_type')}, branch={region.get('branch')}")

    print("\n" + "=" * 60)
    print("Dependency Closures (what to print with each statement)")
    print("=" * 60)

    for r in results:
        closure = get_dependency_closure(results, r["stmt_id"])
        if len(closure) > 1:
            print(f"\n  To print statement {r['stmt_id']} (line {r['start_line']}), "
                  f"also include: {[s for s in closure if s != r['stmt_id']]}")
            if source is not None:
                dep_text = get_dependency_slice(results, r['stmt_id'], source)
                print(f"  Full slice:\n    {dep_text.replace(chr(10), chr(10) + '    ')}")


# ---------------------------------------------------------------------------
# 9. Main
# ---------------------------------------------------------------------------

def main():
    if len(sys.argv) < 2:
        # Use the example AST from the conversation
        example_ast = [
            {
                "nodeType": "Stmt_Expression",
                "attributes": {"startLine": 2, "endLine": 2},
                "expr": {
                    "nodeType": "Expr_Assign",
                    "attributes": {},
                    "var": {
                        "nodeType": "Expr_Variable",
                        "attributes": {},
                        "name": "h"
                    },
                    "expr": {
                        "nodeType": "Expr_BinaryOp_Spaceship",
                        "attributes": {},
                        "left": {"nodeType": "Scalar_Int", "attributes": {}, "value": 14},
                        "right": {"nodeType": "Scalar_Int", "attributes": {}, "value": 2}
                    }
                }
            },
            {
                "nodeType": "Stmt_Expression",
                "attributes": {"startLine": 3, "endLine": 3},
                "expr": {
                    "nodeType": "Expr_Assign",
                    "attributes": {},
                    "var": {
                        "nodeType": "Expr_Variable",
                        "attributes": {},
                        "name": "g"
                    },
                    "expr": {
                        "nodeType": "Expr_BinaryOp_Plus",
                        "attributes": {},
                        "left": {
                            "nodeType": "Expr_Variable",
                            "attributes": {},
                            "name": "h"
                        },
                        "right": {"nodeType": "Scalar_Int", "attributes": {}, "value": 2}
                    }
                }
            },
            {
                "nodeType": "Stmt_Echo",
                "attributes": {"startLine": 4, "endLine": 4},
                "exprs": [
                    {
                        "nodeType": "Expr_Variable",
                        "attributes": {},
                        "name": "h"
                    }
                ]
            }
        ]
        print("No AST file provided — running with example AST.\n")
        print("Usage: python php_dependency_analyzer.py <ast.json>\n")
        results = build_statement_dependencies(example_ast)
        print_analysis(results)
    else:
        target_file = sys.argv[1]
        try:
            command = ['bash','./php_to_ast.sh',target_file]
            child = subprocess.Popen(command,stdout=subprocess.PIPE,
                                    stderr=subprocess.PIPE,text=True)
            stdout,stderr = child.communicate(timeout=120)
            child.kill()
            ast = json.loads(stdout)
        except Exception as e:
            print(e);quit()
        with open(target_file, "rb") as f:
            source = f.read()
        results = build_statement_dependencies(ast)
        print_analysis(results, source)


if __name__ == "__main__":
    main()
