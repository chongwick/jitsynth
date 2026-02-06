"""
Operator registry for PHP.

Loads operator definitions from a JSON config file and provides lookup
tables grouped by operator position:

    - binary:     Left op Right   (e.g. ``+``, ``===``, ``.``, ``??``)
    - prefix:     op Expr         (e.g. ``!``, ``-``, ``(int)``, ``empty``)
    - postfix:    Expr op         (e.g. ``++``, ``--``)
    - assignment: Var op= Expr    (e.g. ``+=``, ``.=``, ``??=``)

The registry maps AST node type strings (from nikic/php-parser JSON output)
to their PHP operator symbol strings.

Usage:
    registry = OperatorRegistry.from_json('php_lang_description.json')
    registry.binary['Expr_BinaryOp_Plus']  # -> '+'
    registry.random_binary()               # -> random binary operator string
"""

from __future__ import annotations
import json
import random
from pathlib import Path
from typing import Dict, List, Optional


class OperatorRegistry:
    """Registry of PHP operators, grouped by position.

    Attributes:
        binary:     AST-node-type -> operator string for binary ops.
        prefix:     AST-node-type -> operator string for prefix unary ops.
        postfix:    AST-node-type -> operator string for postfix unary ops.
        assignment: AST-node-type -> operator string for compound assignment ops.
    """

    def __init__(self, binary: Dict[str, str], prefix: Dict[str, str],
                 postfix: Dict[str, str], assignment: Dict[str, str]) -> None:
        self.binary = binary
        self.prefix = prefix
        self.postfix = postfix
        self.assignment = assignment

    @classmethod
    def from_json(cls, path: str) -> OperatorRegistry:
        """Load an OperatorRegistry from a php_lang_description.json file."""
        with open(path, 'r') as f:
            data = json.load(f)
        ops = data['OpNodes']
        return cls(
            binary=ops['MiddleOpNodes'],
            prefix=ops['FrontOpNodes'],
            postfix=ops['RearOpNodes'],
            assignment=ops['InnerOpNodes'],
        )

    @classmethod
    def default(cls) -> OperatorRegistry:
        """Load from the default location (project root)."""
        default_path = Path(__file__).parent.parent / 'php_lang_description.json'
        return cls.from_json(str(default_path))

    # --- Lookup ---

    def lookup(self, ast_node_type: str) -> Optional[str]:
        """Look up an operator string by its AST node type.

        Returns None if the node type is not a known operator.
        """
        for table in (self.binary, self.prefix, self.postfix, self.assignment):
            if ast_node_type in table:
                return table[ast_node_type]
        return None

    def classify(self, ast_node_type: str) -> Optional[str]:
        """Classify an AST node type into an operator category.

        Returns one of: 'binary', 'prefix', 'postfix', 'assignment', or None.
        """
        if ast_node_type in self.binary:
            return 'binary'
        if ast_node_type in self.prefix:
            return 'prefix'
        if ast_node_type in self.postfix:
            return 'postfix'
        if ast_node_type in self.assignment:
            return 'assignment'
        return None

    # --- Random selection (for mutation) ---

    def random_binary(self) -> str:
        return random.choice(list(self.binary.values()))

    def random_prefix(self) -> str:
        return random.choice(list(self.prefix.values()))

    def random_postfix(self) -> str:
        return random.choice(list(self.postfix.values()))

    def random_assignment(self) -> str:
        return random.choice(list(self.assignment.values()))

    def random_of_category(self, category: str) -> str:
        """Return a random operator from the given category."""
        tables = {
            'binary': self.binary,
            'prefix': self.prefix,
            'postfix': self.postfix,
            'assignment': self.assignment,
        }
        return random.choice(list(tables[category].values()))

    # --- Iteration ---

    def binary_values(self) -> List[str]:
        return list(self.binary.values())

    def prefix_values(self) -> List[str]:
        return list(self.prefix.values())

    def postfix_values(self) -> List[str]:
        return list(self.postfix.values())

    def assignment_values(self) -> List[str]:
        return list(self.assignment.values())
