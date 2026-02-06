"""
Scope hierarchy for the PHP IR.

Scopes model the lexical structure of a PHP program: which variables are
visible where, and how control flow nests. There are three scope types:

    ProgramScope   — the top-level scope. Owns the RelationalDatabase and
                     the master list of all nodes (for mutation).
    FunctionScope  — a function body. Creates a new variable namespace but
                     shares the relational database with its parent.
    BlockScope     — a control flow body (if, while, for, foreach, switch,
                     try/catch/finally). Inherits parent's variables and
                     shares the relational database.

The scope hierarchy is a tree:

    ProgramScope
    +-- FunctionScope("myFunc")
    |   +-- BlockScope("if")
    |   +-- BlockScope("while")
    +-- BlockScope("if")
    |   +-- BlockScope("elseif")
    |   +-- BlockScope("else")
    +-- FunctionScope("otherFunc")

Design rules:
    - Every scope shares the ROOT's relational database (traverses parent
      chain to find it).
    - `node_env` is an ordered dict of variable name -> IRNode bindings.
      BlockScopes inherit a copy of their parent's node_env at creation.
    - `all_nodes` and `env_buckets` live only on the root ProgramScope
      and are used for mutation target selection.
"""

from __future__ import annotations
from typing import Any, Dict, List, Optional, TYPE_CHECKING

from php_ir.relational_db import RelationalDatabase

if TYPE_CHECKING:
    from php_ir.nodes import IRNode


class Scope:
    """Abstract base for all scope types.

    Attributes:
        parent:           Parent scope (None for ProgramScope).
        node_env:         Ordered dict of variable-name -> IRNode.
        children:         Dict of child scope categories.
                          ``{"Function": {name: FunctionScope}, "Flow": {idx: BlockScope}}``
        defined_classes:  Class name -> raw PHP source string.
        defined_objects:  Object name -> NewObjectNode.
    """

    def __init__(self, parent: Optional[Scope] = None,
                 node_env: Optional[Dict[str, Any]] = None) -> None:
        self.parent = parent
        self.node_env: Dict[str, Any] = node_env if node_env is not None else {}
        self.children: Dict[str, Dict] = {
            "Function": {},
            "Flow": {},
        }
        self.defined_classes: Dict[str, str] = {}
        self.defined_objects: Dict[str, Any] = {}

    # --- Relational database access (shared via root) ---

    def get_rel_db(self) -> RelationalDatabase:
        """Walk up to the root scope and return its relational database."""
        scope = self
        while scope.parent is not None:
            scope = scope.parent
        return scope.rel_db

    def store_relation(self, node: Any) -> int:
        """Store a node in the shared relational database, return its key."""
        return self.get_rel_db().store(node)

    def get_relation(self, key: int) -> Any:
        """Retrieve a node from the shared relational database by key."""
        return self.get_rel_db().get(key)

    # --- Node environment (variable bindings) ---

    def set_node(self, name: Optional[str] = None, node: Any = None) -> None:
        """Add or update a variable binding in this scope.

        If `name` is None, the node is appended with an auto-generated
        integer key (for anonymous statements like control flow bodies).
        If `name` already exists, the old binding is displaced with a
        negative key and the new node inherits the old node's IR name.
        """
        if name is not None:
            if name in self.node_env:
                old_node = self.node_env[name]
                displaced_key = -(len(self.node_env))
                self.node_env = {
                    (displaced_key if k == name else k): v
                    for k, v in self.node_env.items()
                }
                node.set_name(old_node.get_name())
            self.node_env[name] = node
        else:
            self.node_env[len(self.node_env)] = node

    def get_node(self, name: str) -> Optional[Any]:
        """Look up a variable binding by name."""
        return self.node_env.get(name)

    def get_node_env(self) -> Dict[str, Any]:
        return self.node_env

    # --- Class and object tracking ---

    def add_class_def(self, class_name: str, definition: str) -> None:
        self.defined_classes[class_name] = definition

    def get_class_def(self, class_name: str) -> Optional[str]:
        return self.defined_classes.get(class_name)

    def add_object(self, obj_name: str, node: Any) -> None:
        self.defined_objects[obj_name] = node

    def get_object(self, obj_name: str) -> Any:
        return self.defined_objects[obj_name]

    # --- Child scope management ---

    def get_function_scopes(self) -> Dict[str, Any]:
        return self.children["Function"]

    def get_flow_scopes(self) -> Dict:
        return self.children["Flow"]

    def spawn_function_scope(self, func_name: str) -> FunctionScope:
        """Create a child FunctionScope and register it."""
        child = FunctionScope(parent=self, func_name=func_name)
        self._register_env_bucket(child)
        self.children["Function"][func_name] = child
        return child

    def spawn_block_scope(self, flow_type: str) -> BlockScope:
        """Create a child BlockScope (inherits parent vars) and register it."""
        child = BlockScope(
            parent=self,
            node_env=self.node_env.copy(),
            flow_type=flow_type,
        )
        self._register_env_bucket(child)
        # Add the block scope to our node_env so it gets printed in order
        self.node_env[len(self.node_env)] = child
        # Also track it for controlflow mutation
        self.children["Flow"][len(self.children["Flow"])] = child
        return child

    def _register_env_bucket(self, child_scope) -> None:
        """Register a child scope in the root's env_buckets for mutation."""
        root = self
        while root.parent is not None:
            root = root.parent
        flow_type = getattr(child_scope, 'flow_type', 'function')
        if flow_type in root.env_buckets:
            root.env_buckets[flow_type].append(child_scope)
        else:
            root.env_buckets[flow_type] = [child_scope]

    # --- Mutation support ---

    def get_all_nodes(self) -> List[Any]:
        """Return the master node list (walks to root)."""
        root = self
        while root.parent is not None:
            root = root.parent
        return root.all_nodes

    def get_env_buckets(self) -> Dict[str, List]:
        """Return the env buckets dict (walks to root)."""
        root = self
        while root.parent is not None:
            root = root.parent
        return root.env_buckets

    def register_node(self, node: Any) -> None:
        """Register a node in the root's master list (for mutation)."""
        root = self
        while root.parent is not None:
            root = root.parent
        root.all_nodes.append(node)

    def add_fn_dependency(self, func_name: str, dependency: Any) -> None:
        """Register a function dependency at the Function child level."""
        self.children["Function"][func_name] = dependency


class ProgramScope(Scope):
    """Top-level program scope.

    Owns the RelationalDatabase and the master lists used by mutation:
    - `all_nodes`: every node created during parsing (flat list).
    - `env_buckets`: nodes grouped by flow type for controlflow mutation.
    """

    def __init__(self) -> None:
        super().__init__(parent=None)
        self.rel_db = RelationalDatabase()
        self.all_nodes: List[Any] = []
        self.env_buckets: Dict[str, List] = {}


class FunctionScope(Scope):
    """Scope for a function body.

    Creates a fresh variable namespace (does NOT inherit parent vars).
    Has a parameter dict mapping param names to relational-DB keys.
    """

    def __init__(self, parent: Scope, func_name: str) -> None:
        super().__init__(parent=parent)
        self.func_name = func_name
        self.flow_type = 'function'
        self.params: Dict[str, int] = {}  # param_name -> rel_db key
        # Functions can have nested functions and control flow
        self.children = {"Function": {}, "Flow": {}}

    def set_params(self, params: Dict[str, int]) -> None:
        self.params = params

    def get_params(self) -> Dict[str, Any]:
        """Return param_name -> IRNode dict (resolves rel_db keys)."""
        rel_db = self.get_rel_db()
        return {k: rel_db.get(v) for k, v in self.params.items()}


class BlockScope(Scope):
    """Scope for a control flow body (if, while, for, foreach, etc.).

    Inherits a COPY of the parent's variable namespace. Shares the
    relational database with the root.

    Additional attributes vary by flow_type:
    - if/elseif/while: `condition` (IRNode), `condition_var` (str)
    - for: `condition` ([init, cond_str, update_str]), `for_var` (str)
    - foreach: `condition` (IRNode), `foreach_var` (str), `by_ref` (bool)
    - switch: `condition` ([IRNode, ...]), `condition_var` (str), `cases` (list)
    - case: `condition_var` (str, the case value)
    - catch: `catch_types` ([str, ...]), `catch_var` (str)
    - else/try/finally: no extra attributes
    """

    def __init__(self, parent: Scope, node_env: Optional[Dict] = None,
                 flow_type: Optional[str] = None) -> None:
        super().__init__(parent=parent, node_env=node_env)
        self.flow_type = flow_type
        self.init_env: Dict = self.node_env.copy()
        self.children = {"Flow": {}}

        # Condition/control attributes (set after construction)
        self.condition = None        # IRNode or list of IRNodes
        self.condition_var = None    # Variable name string

        # foreach-specific
        self.foreach_var: Optional[str] = None
        self.by_ref: bool = False

        # for-specific
        self.for_var: Optional[str] = None

        # switch-specific
        self.cases: Optional[List] = None

        # catch-specific
        self.catch_types: Optional[List[str]] = None
        self.catch_var: Optional[str] = None

    def set_condition(self, condition, condition_var: str) -> None:
        self.condition = condition
        self.condition_var = condition_var

    def set_catch_types_var(self, types: List[str], var: str) -> None:
        self.catch_types = types
        self.catch_var = var

    def set_foreach_var(self, var: str) -> None:
        self.foreach_var = var

    def set_by_ref(self, by_ref: bool) -> None:
        self.by_ref = by_ref

    def set_for_var(self, var: str) -> None:
        self.for_var = var

    def set_cases(self, cases: list) -> None:
        self.cases = cases

    def get_flow_type(self) -> str:
        return self.flow_type
