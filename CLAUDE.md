# CLAUDE.md — jitsynth

## What this project does

Synthesizes PHP scripts from JIT-exercising constraint trees. A JOC (JIT Operation Constraint) describes the structural shape of a program — its control flow skeleton and data operations. The synthesizer fills each slot with real PHP source extracted from a seed corpus, producing new PHP scripts that match the constraint's structure.

The dependency analyzer ensures extracted statements include all variable-defining predecessors, avoiding undefined variable errors in the output.

## Project layout

```
driver.py                    Main entry point (synthesis + profiling CLI)
php_dependency_analyzer.py   Statement-level dependency graph builder
php_to_ast.sh                Shell wrapper: PHP file -> JSON AST via nikic/php-parser
php_helpers/                 PHP parser scripts (uses vendor/autoload.php)
jc/comps.py                  JOC component classes (ControlComp, DataComp, ObjComp)
jc/js_walker.py              JS AST walker — generates JOC constraints from JS seeds
jc/con_out/                  ~497 constraint .pickle files
seeds/                       ~509 PHP seed scripts (extensionless files)
synth_out/                   Generated PHP output (created by --synth)
```

## Architecture

### Two subsystems

1. **Dependency analyzer** (`php_dependency_analyzer.py`) — parses a PHP file's AST, flattens nested control flow into a linear statement list, computes def-use chains, and builds a per-statement dependency graph with transitive closure support.

2. **Synthesizer** (`driver.py --synth`) — loads a JOC constraint tree, walks it top-down, and fills each slot with real PHP source from the seed corpus. Control regions get synthetic wrappers (`if`, `for`, `function`, etc.); data operations get randomly selected seed statements with their full dependency closures.

### Dependency analyzer pipeline

1. **Flatten** — `flatten_ast()` linearizes nested control/scope blocks into a flat statement list with region metadata
2. **Defs** — `collect_defs()` extracts variables written by a statement
3. **Uses** — `get_statement_uses()` extracts variables read, excluding assignment LHS
4. **Graph** — `build_statement_dependencies()` single-pass builds `last_def` map and emits per-statement dependency sets
5. **Closure** — `get_dependency_closure()` computes transitive dependencies; `get_dependency_slice()` returns the source text

### Synthesizer pipeline

1. **Index** — `build_corpus_index()` parses all seed files, builds three structures:
   - `node_type_index`: `{ description: [(filepath, stmt_id, start_pos, end_pos), ...] }`
   - `file_cache`: `{ filepath: source_string }`
   - `results_cache`: `{ filepath: dependency_results }`
2. **Cache** — `get_corpus_index()` saves/loads all three structures as `seeds/corpus_cache.pkl` to avoid re-parsing on subsequent runs
3. **Map** — `COMP_TO_DESCRIPTIONS` maps JOC comp_types to PHP AST description strings
4. **Fill** — `synthesize()` walks the constraint tree:
   - `ControlComp` sublists become synthetic PHP control wrappers via `synthesize_region()`
   - `DataComp` leaves become real PHP source via `pick_data_source()`, which uses `get_dependency_slice()` to include all defining predecessors

### JOC constraint structure

Constraints are pickled nested lists. Each list's first element is a `ControlComp` (the region type), followed by `DataComp` leaves and nested sublists:

```
[ControlComp('main'),
  [ControlComp('func'), DataComp('assign'), DataComp('return')],
  DataComp('func_call'),
  DataComp('func_call')]
```

### COMP_TO_DESCRIPTIONS mapping

| JOC comp_type | PHP descriptions |
|---|---|
| `if`, `else` | `Stmt_If (region)` |
| `for` | `Stmt_For (region)`, `Stmt_Foreach (region)` |
| `while`, `do_while` | `Stmt_While (region)` |
| `try` | `Stmt_TryCatch (region)` |
| `func` | `Stmt_Function (region)`, `Stmt_ClassMethod (region)` |
| `class` | `Stmt_Class (region)`, `Stmt_Trait (region)`, `Stmt_Interface (region)` |
| `method` | `Stmt_ClassMethod (region)` |
| `assign` | `Expr_Assign`, `Expr_AssignRef` |
| `var_dec` | `Expr_Assign` |
| `func_call` | `Expr_FuncCall`, `Expr_MethodCall` |
| `update` | `Expr_PostInc`, `Expr_PreInc`, `Expr_PostDec`, `Expr_PreDec` |
| `return` | `Stmt_Return` |

### Corpus cache

The first `--synth` run parses all ~509 seed files and saves the index to `seeds/corpus_cache.pkl`. Subsequent runs load the cache instantly. Use `--rebuild-cache` to force a fresh build.

### Pickle module remapping

Constraint pickles were created with bare `comps` module imports. `_CompsUnpickler` remaps `comps` -> `jc.comps` so `isinstance` checks work correctly with our `from jc.comps import ...` imports.

## Usage

### driver.py (PHP synthesis)

```bash
# Synthesize from a single constraint
python3 driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds seeds/

# Synthesize from all constraints, 2 variants each
python3 driver.py --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/

# Force cache rebuild with 16 parallel workers
python3 driver.py --synth jc/con_out/ --seeds seeds/ --rebuild-cache -j 16

# Profile seed corpus with parallel processing
python3 driver.py --profile seeds/ -j 16

# Fuzz with parallel cache build
python3 driver.py --fuzz jc/con_out/ --seeds seeds/ -j 16

# Run dependency analyzer directly
python3 php_dependency_analyzer.py script.php
```

### jc/js_walker.py (JS constraint generation)

```bash
# Batch-generate constraints from JS seeds (sequential)
python3 jc/js_walker.py --batch ../js_seeds ./con_out

# Batch-generate with 16 parallel workers
python3 jc/js_walker.py --batch ../js_seeds ./con_out -j 16

# Analyze a single JS file (debug mode)
python3 jc/js_walker.py path/to/file.js
```

### Parallel processing (`-j` / `--jobs`)

Both `driver.py` and `jc/js_walker.py` support `-j N` / `--jobs N` to distribute file processing across N worker processes using `multiprocessing.Pool`. Each file is parsed independently in its own worker, and results are merged in the main process. Defaults to 1 (sequential).

Parallelism applies to the CPU-bound parsing and analysis phases:
- `driver.py`: `build_corpus_index()` (used by `--synth`/`--fuzz` on cache miss) and `profile_corpus()` (used by `--profile`)
- `jc/js_walker.py`: `batch_generate()` (used by `--batch`)

### Programmatic use

```python
from driver import get_corpus_index, load_constraint, synthesize

node_type_index, file_cache, results_cache = get_corpus_index('./seeds', parallel=8)
constraint = load_constraint('jc/con_out/some-constraint.pickle')
php_source = synthesize(constraint, node_type_index, file_cache, results_cache)
```

## Key design decisions

- **Dependency slices, not bare statements**: `pick_data_source()` uses `get_dependency_slice()` to include all transitive variable-defining predecessors, preventing undefined variable errors
- **Synthetic control wrappers**: Region headers (`if (true)`, `for ($i_0 = 0; ...)`, `function f_0()`) are generated rather than extracted from seeds, since extracting partial control structures via byte offsets is unreliable
- **Unique name counters**: `_next_name()` generates `f_0`, `f_1`, `C_0`, `i_0`, etc. to avoid name collisions across regions
- **Extensionless file support**: Seed files lack `.php` extensions; `build_corpus_index()` accepts them by checking for `<?php` header
- **Symbol keys** are canonicalized: `$a`, `$obj->prop`, `Foo::$bar`, `$a[*]` (array indices collapsed)
- **Single pass, linear scan** — no CFG. Correct for straight-line code; approximate across branches

## Known limitations

- **No control flow modeling**: `if`/`else`/`while` branches are not modeled — dependencies are approximate across branches
- **No aliasing**: `$a =& $b` doesn't link the two symbols
- **Array index collapse**: `$a[0]` and `$a[1]` map to the same symbol `$a[*]`
- **Dynamic variables**: `${$name}` is ignored
- **Single scope**: No function/method boundary awareness — treats everything as one flat scope
- **Cross-file deps**: Dependency slices come from the original seed file; variables from different seed files may still collide in the synthesized output
- **Greedy slot-filling**: Each slot is filled independently and randomly — no global coherence across the synthesized script

## Extending

- **Smarter slot filling**: Use type-aware or scope-aware matching instead of random selection
- **Variable renaming**: Alpha-rename variables in extracted slices to avoid cross-file collisions
- **CFG awareness**: Track multiple reaching definitions at join points
- **Scope boundaries**: Reset `last_def` at function/class boundaries
- **Finer array tracking**: Replace `$a[*]` with `$a[0]`, `$a["key"]` for more precise dependencies
