"""
Lua statement-level dependency analyzer.

Uses ``luaparser`` to parse Lua source and build a linear statement list with
approximate def-use dependencies similar to the existing Python pipeline.
"""

from __future__ import annotations

from luaparser import ast
import luaparser.astnodes as lua


CONTROL_FLOW_TYPES = (lua.If, lua.ElseIf, lua.While, lua.Repeat, lua.Fornum, lua.Forin)
SCOPE_TYPES = (lua.Function, lua.LocalFunction, lua.Method)

_SKIP_ATTRS = {
    "_name",
    "comments",
    "_first_token",
    "_last_token",
    "wrapped",
}


def parse_lua_source(source):
    """Parse Lua source into a luaparser chunk node."""
    return ast.parse(source)


def _iter_child_nodes(node):
    if isinstance(node, list):
        for item in node:
            if isinstance(item, lua.Node):
                yield item
        return

    for key, value in vars(node).items():
        if key in _SKIP_ATTRS:
            continue
        if isinstance(value, list):
            for item in value:
                if isinstance(item, lua.Node):
                    yield item
        elif isinstance(value, lua.Node):
            yield value


def walk(node):
    """Yield AST nodes recursively."""
    if isinstance(node, list):
        for item in node:
            yield from walk(item)
        return
    if not isinstance(node, lua.Node):
        return

    yield node
    for child in _iter_child_nodes(node):
        yield from walk(child)


def flatten_ast(tree):
    """Flatten nested Lua statements into a linear statement list."""
    result = []
    stmts = getattr(getattr(tree, "body", None), "body", [])
    _flatten_stmts(stmts, result, parent_index=None, depth=0, region_type=None, branch=None)
    return result


def _flatten_stmts(stmts, result, parent_index, depth, region_type, branch):
    for stmt in stmts or []:
        if isinstance(stmt, CONTROL_FLOW_TYPES):
            _flatten_control_flow(stmt, result, parent_index, depth, region_type, branch)
        elif isinstance(stmt, SCOPE_TYPES):
            _flatten_scope(stmt, result, parent_index, depth, region_type, branch)
        else:
            result.append(_with_region(stmt, parent_index, depth, region_type, branch, False))


def _flatten_control_flow(stmt, result, parent_index, depth, region_type, branch):
    header_index = len(result)
    result.append(_with_region(stmt, parent_index, depth, type(stmt).__name__, "header", True))

    child_depth = depth + 1
    if isinstance(stmt, lua.If):
        _flatten_stmts(getattr(getattr(stmt, "body", None), "body", []), result, header_index, child_depth, "If", "if_body")
        orelse = getattr(stmt, "orelse", None)
        if isinstance(orelse, lua.ElseIf):
            _flatten_control_flow(orelse, result, header_index, child_depth, "If", "elif")
        else:
            _flatten_stmts(getattr(orelse, "body", []), result, header_index, child_depth, "If", "else_body")
    elif isinstance(stmt, lua.ElseIf):
        _flatten_stmts(getattr(getattr(stmt, "body", None), "body", []), result, header_index, child_depth, "If", "if_body")
        orelse = getattr(stmt, "orelse", None)
        if isinstance(orelse, lua.ElseIf):
            _flatten_control_flow(orelse, result, header_index, child_depth, "If", "elif")
        else:
            _flatten_stmts(getattr(orelse, "body", []), result, header_index, child_depth, "If", "else_body")
    elif isinstance(stmt, (lua.While, lua.Repeat, lua.Fornum, lua.Forin)):
        _flatten_stmts(getattr(getattr(stmt, "body", None), "body", []), result, header_index, child_depth, type(stmt).__name__, "body")


def _flatten_scope(stmt, result, parent_index, depth, region_type, branch):
    header_index = len(result)
    result.append(_with_region(stmt, parent_index, depth, type(stmt).__name__, "header", True))
    _flatten_stmts(getattr(getattr(stmt, "body", None), "body", []), result, header_index, depth + 1, type(stmt).__name__, "body")


def _with_region(stmt, parent_index, depth, region_type, branch, is_region_header):
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


def get_variable_name(node):
    """Return a canonical symbol key for Lua variable-like nodes."""
    if isinstance(node, lua.Name):
        return node.id

    if isinstance(node, lua.Index):
        value_name = get_variable_name(node.value)
        if not value_name:
            return None
        if getattr(node, "notation", None).name == "DOT" and isinstance(node.idx, lua.Name):
            return f"{value_name}.{node.idx.id}"
        return f"{value_name}[*]"

    return None


def _collect_target_defs(target, defs):
    name = get_variable_name(target)
    if name:
        defs.add(name)


def _collect_name_defs(nodes, defs):
    for node in nodes or []:
        if isinstance(node, lua.Name):
            defs.add(node.id)


def collect_defs(stmt):
    defs = set()

    if isinstance(stmt, (lua.Assign, lua.LocalAssign)):
        for target in getattr(stmt, "targets", []):
            _collect_target_defs(target, defs)

    elif isinstance(stmt, lua.Fornum):
        _collect_target_defs(stmt.target, defs)

    elif isinstance(stmt, lua.Forin):
        for target in getattr(stmt, "targets", []):
            _collect_target_defs(target, defs)

    elif isinstance(stmt, (lua.Function, lua.LocalFunction)):
        _collect_target_defs(stmt.name, defs)
        _collect_name_defs(getattr(stmt, "args", []), defs)

    elif isinstance(stmt, lua.Method):
        source_name = get_variable_name(stmt.source)
        if source_name and isinstance(stmt.name, lua.Name):
            defs.add(f"{source_name}.{stmt.name.id}")
        _collect_name_defs(getattr(stmt, "args", []), defs)

    return defs


def _collect_lhs_uses(target, uses):
    if isinstance(target, lua.Index):
        value_name = get_variable_name(target.value)
        if value_name:
            uses.add(value_name)
        _collect_uses(target.idx, uses)


def _collect_uses(node, uses):
    if node is None:
        return
    if isinstance(node, list):
        for item in node:
            _collect_uses(item, uses)
        return
    if not isinstance(node, lua.Node):
        return

    if isinstance(node, lua.Name):
        uses.add(node.id)
        return

    if isinstance(node, lua.Index):
        name = get_variable_name(node)
        if name:
            uses.add(name)
        _collect_uses(node.value, uses)
        if getattr(node, "notation", None).name != "DOT":
            _collect_uses(node.idx, uses)
        return

    for child in _iter_child_nodes(node):
        _collect_uses(child, uses)


def get_statement_uses(stmt, is_region_header=False):
    uses = set()

    if isinstance(stmt, (lua.Assign, lua.LocalAssign)):
        _collect_uses(getattr(stmt, "values", []), uses)
        for target in getattr(stmt, "targets", []):
            _collect_lhs_uses(target, uses)
        return uses

    if isinstance(stmt, lua.Return):
        _collect_uses(getattr(stmt, "values", []), uses)
        return uses

    if isinstance(stmt, (lua.Call, lua.Invoke)):
        if isinstance(stmt, lua.Call):
            _collect_uses(stmt.func, uses)
        else:
            _collect_uses(stmt.source, uses)
            source_name = get_variable_name(stmt.source)
            if source_name and isinstance(stmt.func, lua.Name):
                uses.add(f"{source_name}.{stmt.func.id}")
        _collect_uses(getattr(stmt, "args", []), uses)
        return uses

    if isinstance(stmt, lua.Fornum):
        _collect_uses([stmt.start, stmt.stop, stmt.step], uses)
        return uses

    if isinstance(stmt, lua.Forin):
        _collect_uses(getattr(stmt, "iter", []), uses)
        return uses

    if isinstance(stmt, (lua.Function, lua.LocalFunction, lua.Method)) and is_region_header:
        return uses

    if isinstance(stmt, (lua.If, lua.ElseIf, lua.While, lua.Repeat)):
        test = getattr(stmt, "test", None)
        if test is not None:
            _collect_uses(test, uses)
        return uses

    _collect_uses(stmt, uses)
    return uses


def describe_statement(entry):
    stmt = entry["stmt"]
    is_header = entry["is_region_header"]

    if isinstance(stmt, (lua.If, lua.ElseIf)):
        desc = "If"
    elif isinstance(stmt, (lua.Fornum, lua.Forin)):
        desc = "For"
    elif isinstance(stmt, lua.Repeat):
        desc = "While"
    elif isinstance(stmt, (lua.Function, lua.LocalFunction)):
        desc = "Function"
    elif isinstance(stmt, lua.Method):
        desc = "Method"
    elif isinstance(stmt, lua.LocalAssign):
        desc = "LocalAssign"
    elif isinstance(stmt, lua.Assign):
        desc = "Assign"
    elif isinstance(stmt, (lua.Call, lua.Invoke)):
        desc = "Call"
    else:
        desc = type(stmt).__name__

    if is_header:
        return f"{desc} (region)"
    return desc


def build_name_registry(flat_ast):
    registry = {}
    for stmt_id, entry in enumerate(flat_ast):
        stmt = entry["stmt"]
        if isinstance(stmt, (lua.Function, lua.LocalFunction)):
            name = get_variable_name(stmt.name)
            if name:
                registry[name] = stmt_id
    return registry


def collect_structural_refs(stmt):
    refs = set()
    for node in walk(stmt):
        if isinstance(node, lua.Call) and isinstance(node.func, lua.Name):
            refs.add(node.func.id)
    return refs


def collect_semantic_tags(stmt):
    tags = set()

    if isinstance(stmt, lua.Assign):
        target_names = {get_variable_name(target) for target in getattr(stmt, "targets", [])}
        value_uses = set()
        _collect_uses(getattr(stmt, "values", []), value_uses)
        if any(name and name in value_uses for name in target_names):
            tags.add("update")
        if any(isinstance(value, lua.UMinusOp) for value in getattr(stmt, "values", [])):
            tags.add("unary")

    if isinstance(stmt, lua.Call) and isinstance(stmt.func, lua.Name) and stmt.func.id == "error":
        tags.add("throw")

    return tags


def _token_span(stmt):
    first = getattr(stmt, "_first_token", None)
    last = getattr(stmt, "_last_token", None)
    if first is None or last is None:
        return (-1, -1, -1, -1, None, None)
    return (
        first.line,
        last.line,
        first.column,
        last.column + len(getattr(last, "text", "") or ""),
        getattr(first, "start", None),
        getattr(last, "stop", None),
    )


def _render_statement_source(stmt, source, start_pos, end_pos):
    if isinstance(stmt, (lua.Call, lua.Invoke)):
        try:
            rendered = ast.to_lua_source(stmt).strip()
            if rendered:
                return rendered
        except Exception:
            pass

    if start_pos is None or end_pos is None or start_pos < 0 or end_pos < start_pos:
        return None
    return source[start_pos:end_pos + 1]


def build_statement_dependencies(tree_or_source, source=None):
    """Build a statement-level dependency graph from Lua source or a parsed tree."""
    if source is None and isinstance(tree_or_source, str):
        source = tree_or_source
        tree = parse_lua_source(source)
    else:
        tree = tree_or_source
        if source is None:
            raise ValueError("source is required when passing a parsed tree")

    flat_ast = flatten_ast(tree)
    last_def = {}
    name_registry = build_name_registry(flat_ast)
    results = []

    for stmt_id, entry in enumerate(flat_ast):
        stmt = entry["stmt"]
        defs = collect_defs(stmt)
        uses = get_statement_uses(stmt, is_region_header=entry["is_region_header"])
        depends_on = set()

        for var in uses:
            if var in last_def:
                depends_on.add(last_def[var])

        structural_refs = collect_structural_refs(stmt)
        for ref_name in structural_refs:
            if ref_name in name_registry and name_registry[ref_name] != stmt_id:
                depends_on.add(name_registry[ref_name])

        for var in defs:
            last_def[var] = stmt_id

        start_line, end_line, start_col, end_col, start_pos, end_pos = _token_span(stmt)
        semantic_tags = collect_semantic_tags(stmt)
        rendered_source = _render_statement_source(stmt, source, start_pos, end_pos)
        results.append({
            "stmt_id": stmt_id,
            "node_type": type(stmt).__name__,
            "description": describe_statement(entry),
            "start_line": start_line,
            "end_line": end_line,
            "start_col": start_col,
            "end_col": end_col,
            "start_pos": start_pos,
            "end_pos": end_pos,
            "rendered_source": rendered_source,
            "defs": defs,
            "uses": uses,
            "depends_on": depends_on,
            "structural_refs": structural_refs,
            "semantic_tags": semantic_tags,
            "region": entry["region"],
            "is_region_header": entry["is_region_header"],
        })

    return results


def get_dependency_closure(results, stmt_id):
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


def get_source_slice(results, stmt_id, source):
    result = results[stmt_id]
    rendered_source = result.get("rendered_source")
    if rendered_source:
        return rendered_source
    start_pos = result.get("start_pos")
    end_pos = result.get("end_pos")
    if start_pos is None or end_pos is None or start_pos < 0 or end_pos < start_pos:
        return None
    return source[start_pos:end_pos + 1]


def get_dependency_slice(results, stmt_id, source):
    parts = []
    for dep_id in get_dependency_closure(results, stmt_id):
        text = get_source_slice(results, dep_id, source)
        if text:
            parts.append(text)
    return "\n".join(parts)
