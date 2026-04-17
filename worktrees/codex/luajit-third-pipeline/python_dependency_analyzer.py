"""
Python Statement-Level Dependency Analyzer

Analyzes a Python AST to build a statement-level dependency graph.
Each statement tracks which prior statements it depends on via
variable def-use chains.

Usage:
    python python_dependency_analyzer.py script.py

    # Programmatically:
    from python_dependency_analyzer import build_statement_dependencies
    import ast
    with open("script.py") as f:
        tree = ast.parse(f.read())
    results = build_statement_dependencies(tree, source)
"""

import ast
import sys


# ---------------------------------------------------------------------------
# 1. Recursive AST walker (yield all child nodes)
# ---------------------------------------------------------------------------

def walk(node):
    """Yield all AST nodes recursively from a node."""
    if isinstance(node, ast.AST):
        yield node
        for child in ast.iter_child_nodes(node):
            yield from walk(child)
    elif isinstance(node, list):
        for item in node:
            yield from walk(item)


# ---------------------------------------------------------------------------
# 2. Variable extraction helpers
# ---------------------------------------------------------------------------

ASSIGN_TYPES = (ast.Assign, ast.AugAssign, ast.AnnAssign)

CONTROL_FLOW_TYPES = (
    ast.If, ast.While, ast.For, ast.AsyncFor,
    ast.Try, ast.With, ast.AsyncWith, ast.Match,
)

SCOPE_TYPES = (ast.FunctionDef, ast.AsyncFunctionDef, ast.ClassDef)

# Handle TryStar (3.11+) if available
try:
    CONTROL_FLOW_TYPES = CONTROL_FLOW_TYPES + (ast.TryStar,)
except AttributeError:
    pass


def get_variable_name(node):
    """
    Extract a canonical symbol key from a variable-like node.
    Returns None if the node isn't a recognizable variable.
    """
    if isinstance(node, ast.Name):
        return node.id

    if isinstance(node, ast.Attribute):
        obj_name = get_variable_name(node.value)
        if obj_name:
            return f"{obj_name}.{node.attr}"
        return None

    if isinstance(node, ast.Subscript):
        var_name = get_variable_name(node.value)
        if var_name:
            return f"{var_name}[*]"
        return None

    if isinstance(node, ast.Starred):
        return get_variable_name(node.value)

    return None


def _collect_target_defs(target, defs):
    """Extract defined variable names from an assignment target (handles unpacking)."""
    if isinstance(target, ast.Name):
        defs.add(target.id)
    elif isinstance(target, ast.Attribute):
        name = get_variable_name(target)
        if name:
            defs.add(name)
    elif isinstance(target, ast.Subscript):
        name = get_variable_name(target)
        if name:
            defs.add(name)
    elif isinstance(target, ast.Starred):
        _collect_target_defs(target.value, defs)
    elif isinstance(target, (ast.Tuple, ast.List)):
        for elt in target.elts:
            _collect_target_defs(elt, defs)


def collect_defs(stmt):
    """Return the set of variable symbols defined by this statement."""
    defs = set()

    if isinstance(stmt, ast.Assign):
        for target in stmt.targets:
            _collect_target_defs(target, defs)

    elif isinstance(stmt, ast.AugAssign):
        _collect_target_defs(stmt.target, defs)

    elif isinstance(stmt, ast.AnnAssign):
        if stmt.value is not None:  # only if there's an actual assignment
            _collect_target_defs(stmt.target, defs)

    elif isinstance(stmt, ast.For) or isinstance(stmt, ast.AsyncFor):
        _collect_target_defs(stmt.target, defs)

    elif isinstance(stmt, (ast.FunctionDef, ast.AsyncFunctionDef)):
        defs.add(stmt.name)
        for arg in stmt.args.args + stmt.args.posonlyargs + stmt.args.kwonlyargs:
            defs.add(arg.arg)
        if stmt.args.vararg:
            defs.add(stmt.args.vararg.arg)
        if stmt.args.kwarg:
            defs.add(stmt.args.kwarg.arg)

    elif isinstance(stmt, ast.ClassDef):
        defs.add(stmt.name)

    elif isinstance(stmt, ast.Import):
        for alias in stmt.names:
            name = alias.asname if alias.asname else alias.name
            # For dotted imports like "import os.path", define the top-level name
            defs.add(name.split('.')[0])

    elif isinstance(stmt, ast.ImportFrom):
        for alias in stmt.names:
            name = alias.asname if alias.asname else alias.name
            defs.add(name)

    elif isinstance(stmt, ast.Global):
        for name in stmt.names:
            defs.add(name)

    elif isinstance(stmt, ast.Nonlocal):
        for name in stmt.names:
            defs.add(name)

    elif isinstance(stmt, ast.With) or isinstance(stmt, ast.AsyncWith):
        for item in stmt.items:
            if item.optional_vars:
                _collect_target_defs(item.optional_vars, defs)

    elif isinstance(stmt, ast.ExceptHandler):
        if stmt.name:
            defs.add(stmt.name)

    elif isinstance(stmt, ast.Delete):
        for target in stmt.targets:
            name = get_variable_name(target)
            if name:
                defs.add(name)

    # Stmt_Expression-like: bare expressions that might be walrus operators
    elif isinstance(stmt, ast.Expr):
        _collect_walrus_defs(stmt.value, defs)

    return defs


def _collect_walrus_defs(expr, defs):
    """Extract definitions from walrus operator (:=) inside expressions."""
    if isinstance(expr, ast.NamedExpr):
        _collect_target_defs(expr.target, defs)
    for child in ast.iter_child_nodes(expr):
        if isinstance(child, ast.AST):
            _collect_walrus_defs(child, defs)


# ---------------------------------------------------------------------------
# 3. Uses extraction
# ---------------------------------------------------------------------------

def collect_uses(node, skip_node=None):
    """
    Collect all variable uses in a node tree.
    skip_node: a subtree to skip (e.g., the LHS of an assignment).
    """
    uses = set()
    _collect_uses_recursive(node, skip_node, uses)
    return uses


def _collect_uses_recursive(node, skip_node, uses):
    """Recursively collect variable uses, skipping a designated subtree."""
    if not isinstance(node, ast.AST):
        return
    if node is skip_node:
        return

    if isinstance(node, ast.Name):
        uses.add(node.id)
        return

    if isinstance(node, ast.Attribute):
        name = get_variable_name(node)
        if name:
            uses.add(name)
        # Still recurse into the base to catch standalone uses
        _collect_uses_recursive(node.value, skip_node, uses)
        return

    if isinstance(node, ast.Subscript):
        name = get_variable_name(node)
        if name:
            uses.add(name)
        _collect_uses_recursive(node.value, skip_node, uses)
        _collect_uses_recursive(node.slice, skip_node, uses)
        return

    for child in ast.iter_child_nodes(node):
        _collect_uses_recursive(child, skip_node, uses)


def get_statement_uses(stmt):
    """
    Get variable uses for a statement, correctly excluding LHS of assignments.
    """
    if isinstance(stmt, ast.Assign):
        # RHS is a use; LHS targets are definitions (skip them)
        uses = collect_uses(stmt.value)
        # For complex targets like obj.attr or arr[idx], the base is a use
        for target in stmt.targets:
            _collect_lhs_uses(target, uses)
        return uses

    elif isinstance(stmt, ast.AugAssign):
        # Both sides are uses (x += y reads x and y)
        uses = collect_uses(stmt.value)
        name = get_variable_name(stmt.target)
        if name:
            uses.add(name)
        _collect_lhs_uses(stmt.target, uses)
        return uses

    elif isinstance(stmt, ast.AnnAssign):
        uses = set()
        if stmt.value:
            uses = collect_uses(stmt.value)
        # annotation itself may reference names
        uses |= collect_uses(stmt.annotation)
        if stmt.value:
            _collect_lhs_uses(stmt.target, uses)
        return uses

    elif isinstance(stmt, ast.Expr):
        return collect_uses(stmt.value)

    return collect_uses(stmt)


def _collect_lhs_uses(target, uses):
    """For LHS targets like obj.attr or arr[idx], collect base object uses."""
    if isinstance(target, ast.Attribute):
        uses |= collect_uses(target.value)
    elif isinstance(target, ast.Subscript):
        uses |= collect_uses(target.value)
        uses |= collect_uses(target.slice)
    elif isinstance(target, (ast.Tuple, ast.List)):
        for elt in target.elts:
            _collect_lhs_uses(elt, uses)
    elif isinstance(target, ast.Starred):
        _collect_lhs_uses(target.value, uses)


# ---------------------------------------------------------------------------
# 3b. AST flattener — linearize nested control-flow statements
# ---------------------------------------------------------------------------

def flatten_ast(tree):
    """
    Flatten a top-level AST (Module body) so that statements nested
    inside control-flow constructs each get their own entry in the resulting
    list. Each construct is replaced by a region header followed by the
    recursively-flattened body statements.

    Returns a list of (stmt, region_metadata) tuples.
    """
    stmts = tree.body if isinstance(tree, ast.Module) else tree
    result = []
    _flatten_stmts(stmts, result, parent_index=None, depth=0,
                   region_type=None, branch=None)
    return result


def _flatten_stmts(stmts, result, parent_index, depth, region_type, branch):
    """Recursively flatten a list of statements into result."""
    if not stmts:
        return
    for stmt in stmts:
        if not isinstance(stmt, ast.AST):
            continue

        if isinstance(stmt, CONTROL_FLOW_TYPES):
            _flatten_control_flow(stmt, result, parent_index,
                                  depth, region_type, branch)
        elif isinstance(stmt, SCOPE_TYPES):
            _flatten_scope(stmt, result, parent_index,
                           depth, region_type, branch)
        else:
            result.append(_with_region(stmt, parent_index, depth,
                                       region_type, branch, False))


def _flatten_control_flow(stmt, result, parent_index, depth,
                          region_type, branch):
    """Emit a region header + recursively flattened bodies for one
    control-flow statement."""

    # Region header
    header_index = len(result)
    result.append(_with_region(stmt, parent_index, depth,
                               type(stmt).__name__, "header", True))

    child_depth = depth + 1
    type_name = type(stmt).__name__

    if isinstance(stmt, ast.If):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, "If", "if_body")
        if stmt.orelse:
            # Check if orelse is a single If (elif chain)
            if len(stmt.orelse) == 1 and isinstance(stmt.orelse[0], ast.If):
                _flatten_control_flow(stmt.orelse[0], result, header_index,
                                      child_depth, "If", "elif")
            else:
                _flatten_stmts(stmt.orelse, result, header_index,
                               child_depth, "If", "else_body")

    elif isinstance(stmt, (ast.While,)):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, "While", "body")
        if stmt.orelse:
            _flatten_stmts(stmt.orelse, result, header_index,
                           child_depth, "While", "else_body")

    elif isinstance(stmt, (ast.For, ast.AsyncFor)):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, type_name, "body")
        if stmt.orelse:
            _flatten_stmts(stmt.orelse, result, header_index,
                           child_depth, type_name, "else_body")

    elif isinstance(stmt, ast.Try):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, "Try", "try_body")
        for handler in stmt.handlers:
            handler_index = len(result)
            result.append(_with_region(handler, header_index, child_depth,
                                       "ExceptHandler", "header", True))
            _flatten_stmts(handler.body, result, handler_index,
                           child_depth + 1, "ExceptHandler", "handler_body")
        if stmt.orelse:
            _flatten_stmts(stmt.orelse, result, header_index,
                           child_depth, "Try", "else_body")
        if stmt.finalbody:
            _flatten_stmts(stmt.finalbody, result, header_index,
                           child_depth, "Try", "finally_body")

    elif isinstance(stmt, (ast.With, ast.AsyncWith)):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, type_name, "body")

    elif isinstance(stmt, ast.Match):
        for case in stmt.cases:
            _flatten_stmts(case.body, result, header_index,
                           child_depth, "Match", "case_body")

    # Handle TryStar (3.11+)
    elif hasattr(ast, 'TryStar') and isinstance(stmt, ast.TryStar):
        _flatten_stmts(stmt.body, result, header_index,
                       child_depth, "TryStar", "try_body")
        for handler in stmt.handlers:
            handler_index = len(result)
            result.append(_with_region(handler, header_index, child_depth,
                                       "ExceptHandler", "header", True))
            _flatten_stmts(handler.body, result, handler_index,
                           child_depth + 1, "ExceptHandler", "handler_body")
        if stmt.orelse:
            _flatten_stmts(stmt.orelse, result, header_index,
                           child_depth, "TryStar", "else_body")
        if stmt.finalbody:
            _flatten_stmts(stmt.finalbody, result, header_index,
                           child_depth, "TryStar", "finally_body")


def _flatten_scope(stmt, result, parent_index, depth,
                   region_type, branch):
    """Emit a region header + recursively flattened body for a scope
    boundary (function, async function, class)."""

    header_index = len(result)
    type_name = type(stmt).__name__
    result.append(_with_region(stmt, parent_index, depth,
                               type_name, "header", True))

    child_depth = depth + 1
    _flatten_stmts(stmt.body, result, header_index,
                   child_depth, type_name, "body")


def _with_region(stmt, parent_index, depth, region_type, branch, is_region_header):
    """Wrap a statement with region metadata."""
    return {
        "stmt": stmt,
        "region": {
            "parent_index": parent_index,
            "depth": depth,
            "region_type": region_type,
            "branch": branch,
        },
        "is_region_header": is_region_header,
    }


# ---------------------------------------------------------------------------
# 4. Structural dependency helpers (function/class)
# ---------------------------------------------------------------------------

def build_name_registry(flat_ast):
    """Map function/class names to their defining stmt_id."""
    registry = {}
    for stmt_id, entry in enumerate(flat_ast):
        stmt = entry["stmt"]
        if isinstance(stmt, (ast.FunctionDef, ast.AsyncFunctionDef, ast.ClassDef)):
            registry[stmt.name] = stmt_id
    return registry


def collect_structural_refs(stmt):
    """
    Walk a statement's subtree and return a set of name strings that are
    structurally referenced (function calls, class instantiation, decorators).
    """
    refs = set()

    # Class bases and decorators
    if isinstance(stmt, ast.ClassDef):
        for base in stmt.bases:
            if isinstance(base, ast.Name):
                refs.add(base.id)
        for dec in stmt.decorator_list:
            if isinstance(dec, ast.Name):
                refs.add(dec.id)

    if isinstance(stmt, (ast.FunctionDef, ast.AsyncFunctionDef)):
        for dec in stmt.decorator_list:
            if isinstance(dec, ast.Name):
                refs.add(dec.id)

    for node in walk(stmt):
        if isinstance(node, ast.Call):
            if isinstance(node.func, ast.Name):
                refs.add(node.func.id)
            elif isinstance(node.func, ast.Attribute):
                # For method calls like obj.method(), we don't add a structural ref
                # since the object is tracked via variable deps
                pass

    return refs


# ---------------------------------------------------------------------------
# 5. Statement description
# ---------------------------------------------------------------------------

def describe_statement(entry):
    """
    Return a descriptive node type for a statement.
    For ast.Expr wrappers, returns the inner expression's type.
    For region headers, appends "(region)" to the description.
    """
    stmt = entry["stmt"]
    is_header = entry["is_region_header"]

    if isinstance(stmt, ast.Expr):
        # Unwrap expression statement to get the inner expression type
        inner = stmt.value
        desc = type(inner).__name__
        return f"{desc} (region)" if is_header else desc

    desc = type(stmt).__name__
    if is_header:
        desc = f"{desc} (region)"
    return desc


# ---------------------------------------------------------------------------
# 6. Dependency graph builder
# ---------------------------------------------------------------------------

def build_statement_dependencies(tree, source):
    """
    Build a statement-level dependency graph from a Python AST.

    Args:
        tree: ast.Module from ast.parse()
        source: source code as a string

    Returns:
        list of dicts, each containing:
            - stmt_id: int
            - node_type: str (AST class name)
            - description: str
            - start_line: int
            - end_line: int
            - start_col: int
            - end_col: int
            - defs: set of variable names defined
            - uses: set of variable names used
            - depends_on: set of stmt_ids this statement depends on
            - region: dict with parent_index, depth, region_type, branch
            - is_region_header: bool
    """
    flat_ast = flatten_ast(tree)
    last_def = {}  # variable name -> stmt_id of last definition
    name_registry = build_name_registry(flat_ast)
    results = []

    for stmt_id, entry in enumerate(flat_ast):
        stmt = entry["stmt"]
        region = entry["region"]
        is_header = entry["is_region_header"]

        node_type = type(stmt).__name__
        start_line = getattr(stmt, 'lineno', -1)
        end_line = getattr(stmt, 'end_lineno', -1)
        start_col = getattr(stmt, 'col_offset', -1)
        end_col = getattr(stmt, 'end_col_offset', -1)

        defs = collect_defs(stmt)
        uses = get_statement_uses(stmt)

        # Build dependencies: for each used variable, find where it was last defined
        depends_on = set()
        for var in uses:
            if var in last_def:
                depends_on.add(last_def[var])

        # Structural dependencies: function/class references
        structural_refs = collect_structural_refs(stmt)
        for ref_name in structural_refs:
            if ref_name in name_registry:
                dep_id = name_registry[ref_name]
                if dep_id != stmt_id:
                    depends_on.add(dep_id)

        # Update last-def map
        for var in defs:
            last_def[var] = stmt_id

        description = describe_statement(entry)

        results.append({
            "stmt_id": stmt_id,
            "node_type": node_type,
            "description": description,
            "start_line": start_line,
            "end_line": end_line,
            "start_col": start_col,
            "end_col": end_col,
            "defs": defs,
            "uses": uses,
            "structural_refs": structural_refs,
            "depends_on": depends_on,
            "region": region,
            "is_region_header": is_header,
        })

    return results


# ---------------------------------------------------------------------------
# 7. Dependency closure
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
# 8. Source text extraction via line/column positions
# ---------------------------------------------------------------------------

def get_source_slice(results, stmt_id, source):
    """
    Extract the exact source text for a statement using line/column positions.

    Args:
        results: list of result dicts from build_statement_dependencies()
        stmt_id: the statement index
        source: the Python source code as a string

    Returns:
        The source text for the statement as a string, or None if positions
        are unavailable.
    """
    r = results[stmt_id]
    start_line = r.get("start_line")
    end_line = r.get("end_line")
    start_col = r.get("start_col")
    end_col = r.get("end_col")

    if start_line is None or start_line < 0:
        return None
    if end_line is None or end_line < 0:
        return None

    lines = source.splitlines(True)  # keep line endings
    if start_line > len(lines) or end_line > len(lines):
        return None

    if start_line == end_line:
        line = lines[start_line - 1]
        if start_col >= 0 and end_col is not None and end_col >= 0:
            return line[start_col:end_col]
        return line.rstrip('\n').rstrip('\r')

    # Multi-line extraction
    extracted = []
    for i in range(start_line - 1, end_line):
        line = lines[i]
        if i == start_line - 1 and start_col >= 0:
            extracted.append(line[start_col:])
        elif i == end_line - 1 and end_col is not None and end_col >= 0:
            extracted.append(line[:end_col])
        else:
            extracted.append(line)

    return ''.join(extracted)


def get_dependency_slice(results, stmt_id, source):
    """
    Get the concatenated source text for a statement and all its dependencies.

    Args:
        results: list of result dicts from build_statement_dependencies()
        stmt_id: the statement index
        source: the Python source code as a string

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
# 9. Pretty printing
# ---------------------------------------------------------------------------

def print_analysis(results, source=None):
    snake = r"""
       /^\/^\
     _|__|  O|
    \/     /~\_/ \
     \____|__________/  \
            \_______      \
                    `\     \
    """
    print("=" * 60)
    print("Python Statement Dependency Analysis" + snake)
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
                # Show first line only for multi-line stmts
                first_line = text.split('\n')[0].strip()
                if '\n' in text:
                    first_line += ' ...'
                print(f"{indent}  Source:     {first_line}")
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
# 10. Main
# ---------------------------------------------------------------------------

def main():
    if len(sys.argv) < 2:
        example_source = """\
x = 10
y = x + 5
print(y)
"""
        print("No Python file provided — running with example.\n")
        print("Usage: python python_dependency_analyzer.py <script.py>\n")
        tree = ast.parse(example_source)
        results = build_statement_dependencies(tree, example_source)
        print_analysis(results, example_source)
    else:
        target_file = sys.argv[1]
        with open(target_file, "r", encoding="utf-8", errors="ignore") as f:
            source = f.read()
        tree = ast.parse(source, filename=target_file)
        results = build_statement_dependencies(tree, source)
        print_analysis(results, source)


if __name__ == "__main__":
    main()
