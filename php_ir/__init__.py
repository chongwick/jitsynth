"""
PHP Intermediate Representation for JitSynth.

This package provides a graph-based IR for PHP programs designed to support
stochastic program synthesis through mutation and splicing operations.

Architecture
------------
The IR is organized around four core concepts:

1. **Nodes** (`nodes.py`): A typed hierarchy of IR nodes representing PHP
   constructs — values, operators, calls, objects, arrays, control flow,
   and statements. Nodes never reference each other directly; they use
   integer keys into a shared relational database.

2. **Relational Database** (`relational_db.py`): A shared, flat list of
   nodes that serves as an indirection layer. Nodes store indices (keys)
   rather than direct references. This enables safe stochastic mutation:
   swapping the node at index K changes every expression that references K.

3. **Scopes** (`scope.py`): A hierarchical scope model — ProgramScope at
   the top, with FunctionScope and BlockScope children. Scopes own their
   local variable bindings and child scopes, and share the root relational
   database.

4. **Code Generation** (`codegen.py`): A visitor that walks the IR and
   emits PHP source code. Code generation is fully separated from node
   definitions so the same IR could target other backends.

5. **Operators** (`operators.py`): A registry of PHP operators grouped by
   position (binary, prefix, postfix, assignment), loaded from JSON config.

Node Hierarchy
--------------
::

    IRNode (abstract)
    +-- ValueNode
    |   +-- LiteralNode          (int, float, string, bool, null)
    |   +-- VariableRefNode      (reference to a scoped variable)
    |   +-- ConstantNode         (named/class/magic constants)
    |   +-- InterpolatedStringNode
    +-- OperatorNode
    |   +-- BinaryOpNode         (arithmetic, comparison, logical, bitwise, concat)
    |   +-- UnaryPrefixOpNode    (!, -, ~, ++, --, casts, empty, unset)
    |   +-- UnaryPostfixOpNode   (++, --)
    |   +-- CompoundAssignOpNode (+=, -=, .=, etc.)
    +-- CallNode
    |   +-- FunctionCallNode
    |   +-- MethodCallNode
    |   +-- StaticCallNode
    +-- ObjectNode
    |   +-- NewObjectNode        (constructor invocation)
    |   +-- PropertyAccessNode
    +-- ArrayNode
    |   +-- ArrayLiteralNode
    |   +-- ArrayAccessNode
    +-- ControlFlowNode
    |   +-- IfNode / ElseIfNode / ElseNode
    |   +-- WhileNode / ForNode / ForeachNode
    |   +-- SwitchNode / CaseNode
    |   +-- TryCatchNode / CatchNode / FinallyNode
    +-- StatementNode
    |   +-- ReturnNode / BreakNode / ContinueNode
    |   +-- EchoNode / ThrowNode / YieldNode
    +-- FunctionDeclNode
    +-- RawCodeNode              (opaque PHP source fragments)

Mutation Model
--------------
The relational database is the key enabler of mutation. Two operations:

- **Dataflow splicing**: Pick a random index in the relational DB and
  replace the node at that index with a node from another program graph.
  Every expression referencing that index transparently picks up the new node.

- **Controlflow splicing**: Inject a BlockScope (if/while/for/...) from one
  program graph into another's scope hierarchy.

Both operations preserve structural validity because nodes only hold indices,
not pointers — the indirection absorbs the mutation.
"""

from php_ir.relational_db import RelationalDatabase
from php_ir.nodes import (
    IRNode,
    ValueNode, LiteralNode, VariableRefNode, ConstantNode, InterpolatedStringNode,
    OperatorNode, BinaryOpNode, UnaryPrefixOpNode, UnaryPostfixOpNode, CompoundAssignOpNode,
    CallNode, FunctionCallNode, MethodCallNode, StaticCallNode,
    ObjectNode, NewObjectNode, PropertyAccessNode,
    ArrayNode, ArrayLiteralNode, ArrayAccessNode,
    ControlFlowNode, IfNode, ElseIfNode, ElseNode,
    WhileNode, ForNode, ForeachNode,
    SwitchNode, CaseNode,
    TryCatchNode, CatchNode, FinallyNode,
    StatementNode, ReturnNode, BreakNode, ContinueNode,
    EchoNode, ThrowNode, YieldNode,
    FunctionDeclNode, RawCodeNode,
)
from php_ir.scope import Scope, ProgramScope, FunctionScope, BlockScope
from php_ir.codegen import PHPCodeGenerator
from php_ir.operators import OperatorRegistry
