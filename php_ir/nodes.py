"""
IR Node hierarchy for PHP programs.

Every PHP construct maps to one of these node types. Nodes are pure data —
they know their structure and what relational-DB keys they reference, but
they do NOT know how to generate PHP code. Code generation is handled by
the visitor in codegen.py.

Key design decisions:

1. Nodes hold **integer keys** into the RelationalDatabase, not direct
   references to other nodes. This is what makes mutation safe.

2. **Protected dependencies** (where breaking the link would be semantically
   invalid, e.g. method_call -> object_decl) are stored as a direct
   `dependency` attribute. These are NOT in the relational DB and therefore
   are NOT subject to random splicing.

3. Every node gets an auto-generated unique name (for variable binding in
   the output). Names use the format `$v_N`.

4. Nodes track a `printed` flag so that code generation can handle the
   case where the same node is reachable from multiple paths without
   emitting duplicate code.
"""

from __future__ import annotations
from typing import Any, Dict, List, Optional, Tuple


# --- Variable name generator ---

_var_counter = 0


def _next_var_name() -> str:
    global _var_counter
    _var_counter += 1
    return f"$v_{_var_counter}"


def reset_var_counter() -> None:
    """Reset the variable counter (useful between program graphs)."""
    global _var_counter
    _var_counter = 0


# --- Abstract base ---

class IRNode:
    """Abstract base for all IR nodes.

    Attributes:
        name:       Generated variable name (e.g. '$v_3') for this node's
                    output binding.
        printed:    Whether code generation has already emitted this node.
                    Prevents duplicate emission when a node is reachable
                    from multiple paths.
        node_type:  Optional string tag carrying the original AST node type.
    """

    def __init__(self, node_type: Optional[str] = None) -> None:
        self.name: str = _next_var_name()
        self.printed: bool = False
        self.node_type: Optional[str] = node_type

    def get_name(self) -> str:
        return self.name

    def set_name(self, name: str) -> None:
        self.name = name

    def ref_keys(self) -> List[int]:
        """Return all relational-DB keys this node references.

        Used by mutation to know which relationships can be spliced.
        Subclasses override this.
        """
        return []


# =====================================================================
# Value Nodes — literals, variable references, constants
# =====================================================================

class ValueNode(IRNode):
    """Base class for nodes that represent a value."""
    pass


class LiteralNode(ValueNode):
    """A literal value: int, float, string, bool, or null.

    The `value` is stored as its PHP-source representation (e.g. the
    string ``'hello'`` is stored as ``"'hello'"`` with quotes).
    """

    def __init__(self, value: Any, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.value = value

    def get_value(self) -> Any:
        return self.value

    def set_value(self, value: Any) -> None:
        self.value = value


class VariableRefNode(ValueNode):
    """A reference to a variable already in scope.

    This doesn't create a new binding — it looks up an existing one.
    The `ref_name` is the scope-level variable name (e.g. 'myVar'),
    distinct from the IR-level `self.name`.
    """

    def __init__(self, ref_name: str, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.ref_name = ref_name


class ConstantNode(ValueNode):
    """A named constant, class constant, or magic constant.

    Examples: ``true``, ``PHP_INT_MAX``, ``MyClass::CONST``, ``__DIR__``.
    """

    def __init__(self, value: str, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.value = value

    def get_value(self) -> str:
        return self.value

    def set_value(self, value: str) -> None:
        self.value = value


class InterpolatedStringNode(ValueNode):
    """A double-quoted string with embedded expressions.

    `parts` is a list where each element is either:
    - a ``str``: a literal fragment (already unquoted), or
    - an ``int``: a relational-DB key pointing to an expression node.

    Example: ``"Hello {$name}, you are {$age}"`` ->
        parts = ['Hello ', 3, ', you are ', 7]
    """

    def __init__(self, rel_db, parts: List, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.parts = parts

    def ref_keys(self) -> List[int]:
        return [p for p in self.parts if isinstance(p, int)]


# =====================================================================
# Operator Nodes — binary, unary prefix/postfix, compound assignment
# =====================================================================

class OperatorNode(IRNode):
    """Base class for operator nodes."""

    def __init__(self, rel_db, operator: str, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.operator = operator

    def get_operator(self) -> str:
        return self.operator

    def set_operator(self, op: str) -> None:
        self.operator = op

    # Aliases for compatibility with mutation code
    def get_value(self) -> str:
        return self.operator

    def set_value(self, op: str) -> None:
        self.operator = op


class BinaryOpNode(OperatorNode):
    """A binary operation: ``left op right``.

    Operators: ``+  -  *  /  %  **  .  ??  ==  ===  !=  !==  >  <  >=  <=
    &&  ||  and  or  &  |  ^  <<  >>``

    Both operands are stored as relational-DB keys.
    """

    def __init__(self, rel_db, left_key: int, right_key: int,
                 operator: str, node_type: Optional[str] = None) -> None:
        super().__init__(rel_db, operator, node_type)
        self.left_key = left_key
        self.right_key = right_key

    def ref_keys(self) -> List[int]:
        return [self.left_key, self.right_key]


class UnaryPrefixOpNode(OperatorNode):
    """A prefix unary operation: ``op(expr)``.

    Operators: ``!  -  ~  ++  --  (int)  (string)  (double)  (bool)
    empty  unset  @  list``
    """

    def __init__(self, rel_db, operand_key: int,
                 operator: str, node_type: Optional[str] = None) -> None:
        super().__init__(rel_db, operator, node_type)
        self.operand_key = operand_key

    def ref_keys(self) -> List[int]:
        return [self.operand_key]


class UnaryPostfixOpNode(OperatorNode):
    """A postfix unary operation: ``expr op``.

    Operators: ``++  --``
    """

    def __init__(self, rel_db, operand_key: int,
                 operator: str, node_type: Optional[str] = None) -> None:
        super().__init__(rel_db, operator, node_type)
        self.operand_key = operand_key

    def ref_keys(self) -> List[int]:
        return [self.operand_key]


class CompoundAssignOpNode(OperatorNode):
    """A compound assignment: ``var op= expr``.

    Operators: ``+=  -=  *=  /=  %=  .=  ??=  =&``
    """

    def __init__(self, rel_db, operand_key: int,
                 operator: str, node_type: Optional[str] = None) -> None:
        super().__init__(rel_db, operator, node_type)
        self.operand_key = operand_key

    def ref_keys(self) -> List[int]:
        return [self.operand_key]


# =====================================================================
# Call Nodes — function calls, method calls, static calls
# =====================================================================

class CallNode(IRNode):
    """Base class for call-like nodes."""
    pass


class FunctionCallNode(CallNode):
    """A function call: ``func_name(arg1, arg2, ...)``.

    `arg_keys` is a list of relational-DB keys for the arguments.
    `dependency` is a protected link to the FunctionDeclNode (if the
    function is user-defined and available in the current graph).
    """

    def __init__(self, rel_db, func_name: str, arg_keys: List[int],
                 dependency=None, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.func_name = func_name
        self.arg_keys = arg_keys
        self.dependency = dependency  # Protected: not in rel_db

    def ref_keys(self) -> List[int]:
        return list(self.arg_keys)

    def get_func_name(self) -> str:
        return self.func_name

    def get_dependency(self):
        return self.dependency


class MethodCallNode(CallNode):
    """A method call: ``$obj->method(arg1, ...)``.

    `dependency` is a protected link to the object declaration node.
    In a catch block context, `dependency` may be None and `obj_name`
    is used directly.
    """

    def __init__(self, rel_db, obj_name: str, method_name: str,
                 arg_keys: List[int], dependency=None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.method_name = method_name
        self.arg_keys = arg_keys
        self.dependency = dependency  # Protected

    def ref_keys(self) -> List[int]:
        return list(self.arg_keys)

    def get_method_name(self) -> str:
        return self.method_name

    def get_dependency(self):
        return self.dependency


class StaticCallNode(CallNode):
    """A static method call: ``ClassName::method(arg1, ...)``.

    `class_name` includes the class and method: e.g. ``'MyClass::create'``.
    `dependency` is a protected link to the class definition string.
    """

    def __init__(self, rel_db, obj_name: Optional[str], class_name: str,
                 arg_keys: List[int], dependency=None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.class_name = class_name
        self.arg_keys = arg_keys
        self.dependency = dependency  # Protected

    def ref_keys(self) -> List[int]:
        return list(self.arg_keys)

    def get_dependency(self):
        return self.dependency


# =====================================================================
# Object Nodes — instantiation, property access
# =====================================================================

class ObjectNode(IRNode):
    """Base class for object-related nodes."""
    pass


class NewObjectNode(ObjectNode):
    """Object instantiation: ``new ClassName(arg1, ...)``.

    `dependency` is a protected link to the class definition string
    (stored as raw PHP source if the class was defined in the same file).
    """

    def __init__(self, rel_db, obj_name: Optional[str], class_name: str,
                 arg_keys: List[int], dependency=None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.class_name = class_name
        self.arg_keys = arg_keys
        self.dependency = dependency  # Protected: class definition string

    def ref_keys(self) -> List[int]:
        return list(self.arg_keys)

    def get_obj_name(self) -> Optional[str]:
        return self.obj_name

    def get_class_name(self) -> str:
        return self.class_name

    def get_dependency(self):
        return self.dependency


class PropertyAccessNode(ObjectNode):
    """Property access: ``$obj->property``.

    `dependency` is a protected link to the object declaration node.
    """

    def __init__(self, rel_db, obj_name: str, property_name: str,
                 dependency=None, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.obj_name = obj_name
        self.property_name = property_name
        self.dependency = dependency  # Protected

    def get_dependency(self):
        return self.dependency


# =====================================================================
# Array Nodes — literals, element access
# =====================================================================

class ArrayNode(IRNode):
    """Base class for array-related nodes."""
    pass


class ArrayLiteralNode(ArrayNode):
    """An array literal: ``array(key => value, ...)``.

    `entries` is a dict mapping string keys to relational-DB value keys.
    Keys that are ``None`` (auto-indexed) are stored with sequential
    integer string keys.
    """

    def __init__(self, rel_db, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.entries: Dict[str, int] = {}  # key_str -> rel_db value key
        self._auto_idx = 0

    def add_entry(self, key_rel_key: Optional[int], value_rel_key: int) -> None:
        """Add a key=>value pair. If key_rel_key is None, auto-index."""
        if key_rel_key is None:
            self.entries[str(self._auto_idx)] = value_rel_key
            self._auto_idx += 1
        else:
            key_node = self.rel_db.get(key_rel_key)
            key_str = str(key_node.get_value())
            self.entries[key_str] = value_rel_key

    def ref_keys(self) -> List[int]:
        return list(self.entries.values())

    def get_value(self) -> Dict[str, int]:
        return self.entries

    def set_value(self, entries: Dict[str, int]) -> None:
        self.entries = entries


class ArrayAccessNode(ArrayNode):
    """Array element access: ``$array[key]``.

    Two forms:
    1. Static key (known at IR-build time): `key_value` is a string,
       `dependency` points to the ArrayLiteralNode.
    2. Dynamic key (both operands are expressions): `var_key` and
       `dim_key` are relational-DB keys for the array and index
       expressions respectively.
    """

    def __init__(self, rel_db=None, key_value: Optional[str] = None,
                 arr_name: Optional[str] = None, dependency=None,
                 var_key: Optional[int] = None, dim_key: Optional[int] = None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        # Static form (known array + known key)
        self.key_value = key_value
        self.arr_name = arr_name
        self.dependency = dependency  # Protected: the ArrayLiteralNode
        # Dynamic form (both sides are expressions)
        self.var_key = var_key
        self.dim_key = dim_key

    @property
    def is_dynamic(self) -> bool:
        return self.var_key is not None

    def ref_keys(self) -> List[int]:
        if self.is_dynamic:
            return [self.var_key, self.dim_key]
        return []

    def get_dependency(self):
        return self.dependency


# =====================================================================
# Control Flow Nodes
# =====================================================================

class ControlFlowNode(IRNode):
    """Base class for control flow constructs.

    Control flow nodes don't generate a value binding (no ``$v_N = ...``).
    They define a new BlockScope containing their body.
    """

    def __init__(self, flow_type: str, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.flow_type = flow_type


class IfNode(ControlFlowNode):
    """``if (condition) { ... }``

    `condition` is the IRNode for the condition expression.
    `body_scope` is the BlockScope containing the if-body.
    """

    def __init__(self, condition: IRNode, body_scope=None) -> None:
        super().__init__('if')
        self.condition = condition
        self.body_scope = body_scope


class ElseIfNode(ControlFlowNode):
    """``elseif (condition) { ... }``"""

    def __init__(self, condition: IRNode, body_scope=None) -> None:
        super().__init__('elseif')
        self.condition = condition
        self.body_scope = body_scope


class ElseNode(ControlFlowNode):
    """``else { ... }``"""

    def __init__(self, body_scope=None) -> None:
        super().__init__('else')
        self.body_scope = body_scope


class WhileNode(ControlFlowNode):
    """``while (condition) { ... }``"""

    def __init__(self, condition: IRNode, body_scope=None) -> None:
        super().__init__('while')
        self.condition = condition
        self.body_scope = body_scope


class ForNode(ControlFlowNode):
    """``for (init; cond; update) { ... }``

    `init` is the initialization IRNode (e.g. ``$i = 0``).
    `cond` is the condition string (raw PHP — for loops are complex).
    `update` is the update string (raw PHP).
    """

    def __init__(self, init: IRNode, cond: str, update: str,
                 body_scope=None) -> None:
        super().__init__('for')
        self.init = init
        self.cond = cond
        self.update = update
        self.body_scope = body_scope


class ForeachNode(ControlFlowNode):
    """``foreach ($iterable as $value) { ... }``

    `iterable` is the IRNode for the collection being iterated.
    `value_var` is the loop variable name (without ``$``).
    `by_ref` indicates ``&$value`` semantics.
    """

    def __init__(self, iterable: IRNode, value_var: str,
                 by_ref: bool = False, body_scope=None) -> None:
        super().__init__('foreach')
        self.iterable = iterable
        self.value_var = value_var
        self.by_ref = by_ref
        self.body_scope = body_scope


class SwitchNode(ControlFlowNode):
    """``switch ($expr) { case ...: ... }``

    `condition` is the IRNode for the switch expression.
    `cases` is a list of CaseNode instances.
    """

    def __init__(self, condition: IRNode, cases: Optional[List] = None,
                 body_scope=None) -> None:
        super().__init__('switch')
        self.condition = condition
        self.cases = cases or []
        self.body_scope = body_scope


class CaseNode(ControlFlowNode):
    """``case value:`` or ``default:``.

    `value` is the case value IRNode (None for default).
    """

    def __init__(self, value: Optional[IRNode] = None, is_default: bool = False,
                 body_scope=None) -> None:
        super().__init__('case_default' if is_default else 'case')
        self.value = value
        self.is_default = is_default
        self.body_scope = body_scope


class TryCatchNode(ControlFlowNode):
    """``try { ... } catch (...) { ... } finally { ... }``

    Wraps a try body. Catches and finally are sibling scopes.
    """

    def __init__(self, body_scope=None) -> None:
        super().__init__('try')
        self.body_scope = body_scope


class CatchNode(ControlFlowNode):
    """``catch (ExceptionType1 | ExceptionType2 $e) { ... }``

    `exception_types` is a list of exception class name strings.
    `var_name` is the caught variable name (without ``$``).
    """

    def __init__(self, exception_types: List[str], var_name: str,
                 body_scope=None) -> None:
        super().__init__('catch')
        self.exception_types = exception_types
        self.var_name = var_name
        self.body_scope = body_scope


class FinallyNode(ControlFlowNode):
    """``finally { ... }``"""

    def __init__(self, body_scope=None) -> None:
        super().__init__('finally')
        self.body_scope = body_scope


# =====================================================================
# Statement Nodes — return, break, continue, echo, throw, yield
# =====================================================================

class StatementNode(IRNode):
    """Base class for statement nodes that don't produce a value binding."""
    pass


class ReturnNode(StatementNode):
    """``return expr;``

    `value_key` is a relational-DB key (or None for bare return).
    """

    def __init__(self, rel_db=None, value_key: Optional[int] = None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.value_key = value_key

    def ref_keys(self) -> List[int]:
        return [self.value_key] if self.value_key is not None else []


class BreakNode(StatementNode):
    """``break;`` or ``break N;``"""

    def __init__(self, level: Optional[int] = None) -> None:
        super().__init__()
        self.level = level


class ContinueNode(StatementNode):
    """``continue;`` or ``continue N;``"""

    def __init__(self, level: Optional[int] = None) -> None:
        super().__init__()
        self.level = level


class EchoNode(StatementNode):
    """``echo expr1, expr2, ...;``

    `value_keys` are relational-DB keys for expressions to echo.
    """

    def __init__(self, rel_db=None, value_keys: Optional[List[int]] = None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.value_keys = value_keys or []

    def ref_keys(self) -> List[int]:
        return list(self.value_keys)


class ThrowNode(StatementNode):
    """``throw expr;``"""

    def __init__(self, rel_db=None, value_key: Optional[int] = None,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.value_key = value_key

    def ref_keys(self) -> List[int]:
        return [self.value_key] if self.value_key is not None else []


class YieldNode(StatementNode):
    """``yield expr;`` or ``yield from expr;``

    `is_from` distinguishes ``yield`` from ``yield from``.
    """

    def __init__(self, rel_db=None, value_key: Optional[int] = None,
                 is_from: bool = False,
                 node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.rel_db = rel_db
        self.value_key = value_key
        self.is_from = is_from

    def ref_keys(self) -> List[int]:
        return [self.value_key] if self.value_key is not None else []


# =====================================================================
# Function Declaration Node
# =====================================================================

class FunctionDeclNode(IRNode):
    """A function declaration: ``function name(params) { ... }``.

    `param_keys` maps parameter names to relational-DB keys for
    their default value nodes (or nodes with value=None for no default).
    `body_scope` is the FunctionScope containing the function body.
    """

    def __init__(self, func_name: str, param_keys: Optional[Dict[str, int]] = None,
                 body_scope=None, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.func_name = func_name
        self.param_keys = param_keys or {}
        self.body_scope = body_scope

    def ref_keys(self) -> List[int]:
        return list(self.param_keys.values())


# =====================================================================
# Raw Code Node — opaque source fragments
# =====================================================================

class RawCodeNode(IRNode):
    """An opaque fragment of PHP source code.

    Used for constructs that are too complex to decompose into IR nodes
    (e.g. closures, ternary expressions, class definitions stored as
    raw strings). Treated as a black box by mutation.
    """

    def __init__(self, code: str, node_type: Optional[str] = None) -> None:
        super().__init__(node_type)
        self.code = code
