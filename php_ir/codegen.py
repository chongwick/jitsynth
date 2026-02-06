"""
PHP Code Generator — a visitor that walks the IR and emits PHP source code.

This module is entirely separate from the node definitions. Nodes are pure
data; they don't know how to render themselves into PHP. That separation
means the same IR graph could be rendered into a different language by
swapping this visitor.

The generator respects the `printed` flag on each node: a node's code is
emitted at most once, even if the node is reachable from multiple paths.
After emission, the node's `name` (e.g. ``$v_3``) is returned so that
referencing expressions can use it.

Usage:
    from php_ir import ProgramScope, PHPCodeGenerator

    program = ProgramScope()
    # ... populate the IR ...
    gen = PHPCodeGenerator()
    source = gen.generate(program)
    # source is a string like "<?php\\nfunction foo(...) { ... }\\n..."
"""

from __future__ import annotations
from typing import Any, List, Optional

from php_ir.nodes import (
    IRNode,
    LiteralNode, VariableRefNode, ConstantNode, InterpolatedStringNode,
    BinaryOpNode, UnaryPrefixOpNode, UnaryPostfixOpNode, CompoundAssignOpNode,
    FunctionCallNode, MethodCallNode, StaticCallNode,
    NewObjectNode, PropertyAccessNode,
    ArrayLiteralNode, ArrayAccessNode,
    ControlFlowNode, IfNode, ElseIfNode, ElseNode,
    WhileNode, ForNode, ForeachNode,
    SwitchNode, CaseNode,
    TryCatchNode, CatchNode, FinallyNode,
    ReturnNode, BreakNode, ContinueNode,
    EchoNode, ThrowNode, YieldNode,
    FunctionDeclNode, RawCodeNode,
)
from php_ir.scope import Scope, ProgramScope, FunctionScope, BlockScope


class PHPCodeGenerator:
    """Walks an IR graph rooted at a ProgramScope and emits PHP source."""

    def generate(self, program: ProgramScope) -> str:
        """Generate complete PHP source for the given program scope."""
        lines: List[str] = []
        self._emit_scope(program, lines)
        output = "\n".join(lines)
        return "<?php\n" + output

    # --- Scope emission ---

    def _emit_scope(self, scope: Scope, out: List[str]) -> None:
        """Emit all code in a scope: function declarations, then body."""
        # Emit function declarations first
        # Ensure FuncCallNodes that reference user-defined functions carry
        # their dependencies through (supports cross-graph splicing)
        for node in scope.get_all_nodes():
            if isinstance(node, FunctionCallNode):
                fn_name = node.get_func_name()
                if (fn_name not in scope.children.get("Function", {}) and
                        node.get_dependency() is not None):
                    scope.children.setdefault("Function", {})[fn_name] = node.get_dependency()

        for func_scope in scope.children.get("Function", {}).values():
            self._emit_function_scope(func_scope, out)

        # Emit body (variable bindings and nested scopes in order)
        for value in scope.node_env.values():
            self._emit_value(value, out)

    def _emit_function_scope(self, func_scope: FunctionScope, out: List[str]) -> None:
        """Emit a function declaration."""
        proto = "function {}(".format(func_scope.func_name)
        for param_node in func_scope.get_params().values():
            proto += param_node.get_name()
            value = getattr(param_node, 'value', None) if hasattr(param_node, 'value') else None
            if value is not None:
                proto += "={},".format(value)
                # Redirect subsequent references through the param name
                param_node.set_value(param_node.get_name()) if hasattr(param_node, 'set_value') else None
            else:
                proto += ","
        proto += "){\n"
        out.append(proto)

        # Nested functions
        for child_func in func_scope.children.get("Function", {}).values():
            self._emit_function_scope(child_func, out)

        # Body
        for value in func_scope.node_env.values():
            self._emit_value(value, out)

        out.append("}")

    def _emit_value(self, value: Any, out: List[str]) -> None:
        """Dispatch to the correct emitter for a node or scope."""
        if isinstance(value, BlockScope):
            self._emit_block_scope(value, out)
        elif isinstance(value, IRNode):
            self._emit_node(value, out)

    # --- Block scope emission (control flow) ---

    def _emit_block_scope(self, scope: BlockScope, out: List[str]) -> None:
        """Emit a control flow block scope."""
        ft = scope.flow_type
        header = ""

        if ft == "if":
            header = self._emit_condition_header(scope, "if")
        elif ft == "elseif":
            header = self._emit_condition_header(scope, "elseif")
        elif ft == "else":
            header = "else"
        elif ft == "try":
            header = "try"
        elif ft == "catch":
            header = "catch ("
            for t in (scope.catch_types or []):
                header += t + " | "
            header = header[:-2] + "$" + (scope.catch_var or "e") + ")"
        elif ft == "finally":
            header = "finally"
        elif ft == "while":
            header = self._emit_condition_header(scope, "while")
        elif ft == "for":
            header = self._emit_for_header(scope)
        elif ft == "foreach":
            header = self._emit_foreach_header(scope)
        elif ft == "switch":
            header = self._emit_switch_header(scope)
        elif ft == "case":
            header = "case {}:\n".format(scope.condition_var)
        elif ft == "case_default":
            header = "default:\n"

        # Emit body
        if ft not in ("case", "case_default"):
            header += "{\n"
            body_lines: List[str] = []
            for value in scope.node_env.values():
                if value not in (scope.parent.node_env.values() if scope.parent else []):
                    self._emit_value(value, body_lines)
            header += "\n".join(body_lines) + "\n}"
        else:
            body_lines = []
            for value in scope.node_env.values():
                if value not in (scope.parent.node_env.values() if scope.parent else []):
                    self._emit_value(value, body_lines)
            header += "\n".join(body_lines)

        out.append(header)

    def _emit_condition_header(self, scope: BlockScope, keyword: str) -> str:
        """Emit condition expression + keyword header for if/elseif/while."""
        tmp: List[str] = []
        if scope.condition is not None:
            self._emit_node(scope.condition, tmp)
        cond_expr = "\n".join(tmp)
        return "{ce} \n{kw}({cv})".format(
            ce=cond_expr, kw=keyword, cv=scope.condition_var)

    def _emit_for_header(self, scope: BlockScope) -> str:
        """Emit a for-loop header."""
        tmp: List[str] = []
        conditions = scope.condition  # [init_node, cond_str, update_str]
        if conditions and len(conditions) >= 3:
            init = conditions[0]
            self._emit_node(init, tmp) if isinstance(init, IRNode) else tmp.append(str(init))
            init_str = "".join(tmp)
            cond_str = conditions[1]
            update_str = conditions[2]
            return "for({i}{c};{u})".format(i=init_str, c=cond_str, u=update_str)
        return "for(;;)"

    def _emit_foreach_header(self, scope: BlockScope) -> str:
        """Emit a foreach-loop header."""
        tmp: List[str] = []
        if scope.condition is not None:
            self._emit_node(scope.condition, tmp)
        cond_expr = "\n".join(tmp)
        var_prefix = "&$" if scope.by_ref else "$"
        return "{ce}\nforeach ({v} as {pf}{fv})".format(
            ce=cond_expr, v=scope.condition_var,
            pf=var_prefix, fv=scope.foreach_var)

    def _emit_switch_header(self, scope: BlockScope) -> str:
        """Emit a switch header."""
        tmp: List[str] = []
        if scope.condition is not None:
            if isinstance(scope.condition, list):
                for stmt in scope.condition:
                    if isinstance(stmt, IRNode):
                        self._emit_node(stmt, tmp)
            else:
                self._emit_node(scope.condition, tmp)
        cond_expr = "\n".join(tmp)
        return "{ce}\nswitch({cv})".format(ce=cond_expr, cv=scope.condition_var)

    # --- Node emission ---

    def _emit_node(self, node: IRNode, out: List[str]) -> str:
        """Emit code for a single IR node, return its variable name.

        Respects the `printed` flag to avoid duplicate emission.
        """
        if isinstance(node, LiteralNode):
            return self._emit_literal(node, out)
        elif isinstance(node, ConstantNode):
            return self._emit_constant(node, out)
        elif isinstance(node, InterpolatedStringNode):
            return self._emit_interpolated_string(node, out)
        elif isinstance(node, BinaryOpNode):
            return self._emit_binary_op(node, out)
        elif isinstance(node, UnaryPrefixOpNode):
            return self._emit_prefix_op(node, out)
        elif isinstance(node, UnaryPostfixOpNode):
            return self._emit_postfix_op(node, out)
        elif isinstance(node, CompoundAssignOpNode):
            return self._emit_compound_assign(node, out)
        elif isinstance(node, FunctionCallNode):
            return self._emit_function_call(node, out)
        elif isinstance(node, MethodCallNode):
            return self._emit_method_call(node, out)
        elif isinstance(node, StaticCallNode):
            return self._emit_static_call(node, out)
        elif isinstance(node, NewObjectNode):
            return self._emit_new_object(node, out)
        elif isinstance(node, PropertyAccessNode):
            return self._emit_property_access(node, out)
        elif isinstance(node, ArrayLiteralNode):
            return self._emit_array_literal(node, out)
        elif isinstance(node, ArrayAccessNode):
            return self._emit_array_access(node, out)
        elif isinstance(node, ReturnNode):
            return self._emit_return(node, out)
        elif isinstance(node, BreakNode):
            return self._emit_break(node, out)
        elif isinstance(node, ContinueNode):
            return self._emit_continue(node, out)
        elif isinstance(node, EchoNode):
            return self._emit_echo(node, out)
        elif isinstance(node, ThrowNode):
            return self._emit_throw(node, out)
        elif isinstance(node, YieldNode):
            return self._emit_yield(node, out)
        elif isinstance(node, RawCodeNode):
            return self._emit_raw_code(node, out)
        elif isinstance(node, FunctionDeclNode):
            return self._emit_function_decl(node, out)
        else:
            return node.get_name()

    # --- Individual node emitters ---

    def _emit_literal(self, node: LiteralNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            value = node.value
            if value is None:
                value = node.name
            out.append("{v} = {val};".format(v=node.name, val=value))
        return node.name

    def _emit_constant(self, node: ConstantNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            out.append("{v} = {val};".format(v=node.name, val=node.value))
        return node.name

    def _emit_interpolated_string(self, node: InterpolatedStringNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            expr = '{v} = "'.format(v=node.name)
            for part in node.parts:
                if isinstance(part, int):
                    part_node = node.rel_db.get(part)
                    expr += self._emit_node(part_node, out).replace("'", "")
                else:
                    expr += str(part).replace("'", "")
            expr += '";'
            out.append(expr)
        return node.name

    def _emit_binary_op(self, node: BinaryOpNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            left = node.rel_db.get(node.left_key)
            right = node.rel_db.get(node.right_key)
            l_name = self._emit_node(left, out)
            r_name = self._emit_node(right, out)
            out.append("{v} = {l} {op} {r};".format(
                v=node.name, l=l_name, op=node.operator, r=r_name))
        return node.name

    def _emit_prefix_op(self, node: UnaryPrefixOpNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            operand = node.rel_db.get(node.operand_key)
            val_name = self._emit_node(operand, out)
            out.append("{v} = {op}({val});".format(
                v=node.name, op=node.operator, val=val_name))
        return node.name

    def _emit_postfix_op(self, node: UnaryPostfixOpNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            operand = node.rel_db.get(node.operand_key)
            val_name = self._emit_node(operand, out)
            out.append("{v} = {val};".format(v=node.name, val=val_name))
            out.append("{v}{op};".format(v=node.name, op=node.operator))
        return node.name

    def _emit_compound_assign(self, node: CompoundAssignOpNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            operand = node.rel_db.get(node.operand_key)
            val_name = self._emit_node(operand, out)
            out.append("{v} {op} ({val});".format(
                v=node.name, op=node.operator, val=val_name))
        return node.name

    def _emit_function_call(self, node: FunctionCallNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            expr = "{v} = {f}(".format(v=node.name, f=node.func_name)
            for key in node.arg_keys:
                arg = node.rel_db.get(key)
                expr += self._emit_node(arg, out) + ","
            expr += ");"
            out.append(expr)
        return node.name

    def _emit_method_call(self, node: MethodCallNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            tmp: List[str] = []
            expr = ""
            if node.dependency is not None:
                self._emit_node(node.dependency, tmp) if isinstance(node.dependency, IRNode) else None
                expr = "\n".join(tmp)
                expr += "{v} = {on}->{mn}(".format(
                    v=node.name, on=node.dependency.get_name(), mn=node.method_name)
            else:
                expr += "{v} = ${on}->{mn}(".format(
                    v=node.name, on=node.obj_name, mn=node.method_name)
            for key in node.arg_keys:
                arg = node.rel_db.get(key)
                expr += self._emit_node(arg, out) + ","
            expr += ");"
            out.append(expr)
        return node.name

    def _emit_static_call(self, node: StaticCallNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            expr = ""
            if node.dependency is not None:
                expr += str(node.dependency) + "\n"
            expr += "{v} = {cn}(".format(v=node.name, cn=node.class_name)
            for key in node.arg_keys:
                arg = node.rel_db.get(key)
                expr += self._emit_node(arg, out) + ","
            expr += ");"
            out.append(expr)
        return node.name

    def _emit_new_object(self, node: NewObjectNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            expr = ""
            if node.dependency is not None:
                expr += str(node.dependency) + "\n"
            expr += "{v} = new {c}(".format(v=node.name, c=node.class_name)
            for key in node.arg_keys:
                arg = node.rel_db.get(key)
                expr += self._emit_node(arg, out) + ","
            expr += ");"
            out.append(expr)
        return node.name

    def _emit_property_access(self, node: PropertyAccessNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            tmp: List[str] = []
            expr = ""
            if node.dependency is not None:
                self._emit_node(node.dependency, tmp) if isinstance(node.dependency, IRNode) else None
                expr = "\n".join(tmp)
                expr += "\n{v} = {on}->{pn};".format(
                    v=node.name, on=node.dependency.get_name(), pn=node.property_name)
            else:
                expr += "\n{v} = ${on}->{pn};".format(
                    v=node.name, on=node.obj_name, pn=node.property_name)
            out.append(expr)
        return node.name

    def _emit_array_literal(self, node: ArrayLiteralNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            expr = "{v} = array(".format(v=node.name)
            for key_str, val_key in node.entries.items():
                val_node = node.rel_db.get(val_key)
                val_name = self._emit_node(val_node, out)
                expr += "{k} => {v},".format(k=key_str, v=val_name)
            expr += ");"
            out.append(expr)
        return node.name

    def _emit_array_access(self, node: ArrayAccessNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            if node.is_dynamic:
                var_node = node.rel_db.get(node.var_key)
                dim_node = node.rel_db.get(node.dim_key)
                var_name = self._emit_node(var_node, out)
                dim_name = self._emit_node(dim_node, out)
                out.append("{v} = {var}[{dim}];".format(
                    v=node.name, var=var_name, dim=dim_name))
            else:
                if node.dependency is not None:
                    self._emit_node(node.dependency, out)
                out.append("{v} = {a}[{k}];".format(
                    v=node.name, a=node.arr_name, k=node.key_value))
        return node.name

    def _emit_return(self, node: ReturnNode, out: List[str]) -> str:
        if node.value_key is not None:
            val_node = node.rel_db.get(node.value_key)
            val_name = self._emit_node(val_node, out)
            out.append("return {};".format(val_name))
        else:
            out.append("return;")
        return ""

    def _emit_break(self, node: BreakNode, out: List[str]) -> str:
        if node.level is not None:
            out.append("break {};".format(node.level))
        else:
            out.append("break;")
        return ""

    def _emit_continue(self, node: ContinueNode, out: List[str]) -> str:
        if node.level is not None:
            out.append("continue {};".format(node.level))
        else:
            out.append("continue;")
        return ""

    def _emit_echo(self, node: EchoNode, out: List[str]) -> str:
        args = []
        for key in node.value_keys:
            val_node = node.rel_db.get(key)
            args.append(self._emit_node(val_node, out))
        out.append("echo {};".format(", ".join(args)))
        return ""

    def _emit_throw(self, node: ThrowNode, out: List[str]) -> str:
        if node.value_key is not None:
            val_node = node.rel_db.get(node.value_key)
            val_name = self._emit_node(val_node, out)
            out.append("throw {};".format(val_name))
        return ""

    def _emit_yield(self, node: YieldNode, out: List[str]) -> str:
        keyword = "yield from" if node.is_from else "yield"
        if node.value_key is not None:
            val_node = node.rel_db.get(node.value_key)
            val_name = self._emit_node(val_node, out)
            out.append("{} {};".format(keyword, val_name))
        return ""

    def _emit_raw_code(self, node: RawCodeNode, out: List[str]) -> str:
        if not node.printed:
            node.printed = True
            out.append("{v} = {code};".format(v=node.name, code=node.code))
        return node.name

    def _emit_function_decl(self, node: FunctionDeclNode, out: List[str]) -> str:
        if node.body_scope is not None:
            self._emit_function_scope(node.body_scope, out)
        return node.name
