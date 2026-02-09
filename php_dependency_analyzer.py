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
# 4. Dependency graph builder
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
    """
    last_def = {}   # variable name -> stmt_id of last definition
    results = []

    for stmt_id, stmt in enumerate(ast):
        node_type = stmt.get("nodeType", "unknown")
        attrs = stmt.get("attributes", {})
        start_line = attrs.get("startLine", -1)
        end_line = attrs.get("endLine", -1)

        defs = collect_defs(stmt)
        uses = get_statement_uses(stmt)

        # Build dependencies: for each used variable, find where it was last defined
        depends_on = set()
        for var in uses:
            if var in last_def:
                depends_on.add(last_def[var])

        # Update last-def map
        for var in defs:
            last_def[var] = stmt_id

        results.append({
            "stmt_id": stmt_id,
            "node_type": node_type,
            "start_line": start_line,
            "end_line": end_line,
            "defs": defs,
            "uses": uses,
            "depends_on": depends_on,
        })

    return results


# ---------------------------------------------------------------------------
# 5. Dependency closure (for printing a statement with all its deps)
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
# 6. Pretty printing
# ---------------------------------------------------------------------------

def print_analysis(results):
    """Print the dependency analysis in a readable format."""
    print("=" * 60)
    print("PHP Statement Dependency Analysis")
    print("=" * 60)

    for r in results:
        print(f"\nStatement {r['stmt_id']} (line {r['start_line']}-{r['end_line']})")
        print(f"  Type:       {r['node_type']}")
        print(f"  Defines:    {sorted(r['defs']) if r['defs'] else '(none)'}")
        print(f"  Uses:       {sorted(r['uses']) if r['uses'] else '(none)'}")
        print(f"  Depends on: {sorted(r['depends_on']) if r['depends_on'] else '(none)'}")

    print("\n" + "=" * 60)
    print("Dependency Closures (what to print with each statement)")
    print("=" * 60)

    for r in results:
        closure = get_dependency_closure(results, r["stmt_id"])
        if len(closure) > 1:
            print(f"\n  To print statement {r['stmt_id']} (line {r['start_line']}), "
                  f"also include: {[s for s in closure if s != r['stmt_id']]}")


# ---------------------------------------------------------------------------
# 7. Main
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
        results = build_statement_dependencies(ast)
        print_analysis(results)


if __name__ == "__main__":
    main()
