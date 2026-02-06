"""
Relational Database — the indirection layer that enables safe mutation.

Every relationship between IR nodes is stored here as an indexed entry.
Nodes hold integer keys (indices) instead of direct references. This means
swapping the node at index K transparently affects every expression that
uses K, which is exactly what stochastic dataflow splicing needs.

Design rules:
    - NO node should hold a direct pointer to another node.
    - Every inter-node relationship goes through RelationalDatabase.store().
    - Protected dependencies (e.g. method_call -> object_decl) are stored
      directly on the dependent node, NOT in the relational DB, so that
      splicing cannot break semantic invariants.
"""

from __future__ import annotations
from typing import Any, List, Optional


class RelationalDatabase:
    """Central store for all inter-node relationships in a program graph.

    Internally just a flat list. Nodes are appended via store() which returns
    the integer index (key). Nodes retrieve related nodes via get(key).

    This is intentionally simple — the power comes from the indirection, not
    the data structure. A flat list with O(1) index access is exactly right
    for random mutation (pick a random index, swap the node).
    """

    def __init__(self) -> None:
        self._entries: List[Any] = []

    def store(self, node: Any) -> int:
        """Store a node and return its index key.

        The same node can be stored multiple times at different indices;
        each index represents a distinct relationship.
        """
        self._entries.append(node)
        return len(self._entries) - 1

    def get(self, key: int) -> Any:
        """Retrieve the node at the given index."""
        return self._entries[key]

    def replace(self, key: int, node: Any) -> None:
        """Replace the node at the given index (mutation)."""
        self._entries[key] = node

    def __len__(self) -> int:
        return len(self._entries)

    def __getitem__(self, key: int) -> Any:
        return self._entries[key]

    def __setitem__(self, key: int, node: Any) -> None:
        self._entries[key] = node

    @property
    def entries(self) -> List[Any]:
        """Direct access to the backing list (for mutation loops)."""
        return self._entries
