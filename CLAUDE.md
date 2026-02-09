# CLAUDE.md — PHP Statement Dependency Analyzer

## What this project does

Analyzes PHP source code at the statement level to build a dependency graph. Each statement knows which prior statements it depends on (via variable def-use chains), so any statement can be printed along with the minimal set of statements required to understand it.

Input: PHP script
Output: Per-statement dependency mapping with transitive closure support.

## Architecture

Single-file Python script (`php_dependency_analyzer.py`), no external dependencies. Pure stdlib (json, sys, subprocess).

### Core pipeline

1. **Walk** — Recursive generator (`walk()`) yields all dict nodes in the AST tree
2. **Defs** — `collect_defs()` extracts variables written by a statement (assignment targets)
3. **Uses** — `get_statement_uses()` extracts variables read by a statement, correctly excluding LHS of assignments
4. **Graph** — `build_statement_dependencies()` single-pass builds `last_def` map and emits per-statement dependency sets
5. **Closure** — `get_dependency_closure()` computes transitive dependencies for printing

### Key design decisions

- **Symbol keys** are canonicalized strings: `$a`, `$obj->prop`, `Foo::$bar`, `$a[*]` (array access collapses indices)
- **Assignment LHS exclusion**: In `$g = $h + 2`, `$h` is a use but `$g` is not — this is enforced structurally by skipping the `var` subtree of assignments
- **Compound assignments** (`+=`, `.=`, etc.) treat the LHS as both a def and a use
- **Single pass, linear scan** — no CFG. Correct for straight-line code; approximate across branches

### Node types handled

**Definitions (writes):**
- `Expr_Assign`, `Expr_AssignRef`, all `Expr_AssignOp_*`
- `Expr_PreInc`, `Expr_PreDec`, `Expr_PostInc`, `Expr_PostDec`
- Destructuring via `Expr_List` / `Expr_Array`
- `Stmt_Foreach` (key/value vars), `Stmt_For` (init exprs)
- `Stmt_Global`, `Stmt_Static`

**Uses (reads):**
- `Expr_Variable`, `Expr_ArrayDimFetch`, `Expr_PropertyFetch`
- `Expr_NullsafePropertyFetch`, `Expr_StaticPropertyFetch`

### Valid assignment targets (from php-parser)

Only these node types can appear as LHS: `Expr_Variable`, `Expr_ArrayDimFetch`, `Expr_PropertyFetch`, `Expr_NullsafePropertyFetch`, `Expr_StaticPropertyFetch`, `Expr_List`, `Expr_Array` (destructuring only).

## Usage

```bash
# Run with a target PHP script
python php_dependency_analyzer.py script.php

# Run with built-in example (no args)
python php_dependency_analyzer.py
```

### Programmatic use

```python
from php_dependency_analyzer import build_statement_dependencies, get_dependency_closure
import json
import subprocess

command = ['bash','./php_to_ast.sh',target_file]
child = subprocess.Popen(command,stdout=subprocess.PIPE,
                        stderr=subprocess.PIPE,text=True)
stdout,stderr = child.communicate(timeout=120)
child.kill()
ast = json.loads(stdout)

results = build_statement_dependencies(ast)

# Get all statements needed to print statement 5
closure = get_dependency_closure(results, 5)
```

## Known limitations

- **No control flow**: `if`/`else`/`while` branches are not modeled — dependencies are approximate across branches
- **No aliasing**: `$a =& $b` doesn't link the two symbols
- **Array index collapse**: `$a[0]` and `$a[1]` map to the same symbol `$a[*]`
- **Dynamic variables**: `${$name}` is ignored (returns None)
- **Single scope**: No function/method boundary awareness — treats everything as one flat scope
- **Linear only**: `last_def` tracks the most recent definition; no phi/merge at join points

## Extending

**Add CFG awareness**: Introduce basic blocks, track multiple reaching definitions per variable at join points, analyze the dependencies inside of control/object regions (if statements, functions, classes, etc.).

**Add scope boundaries**: Reset `last_def` at function/class boundaries, or maintain a scope stack.

**Finer array tracking**: Replace `$a[*]` with `$a[0]`, `$a["key"]` etc. for more precise dependencies.

**Object property precision**: Track `$this->x` vs `$other->x` as distinct symbols.

