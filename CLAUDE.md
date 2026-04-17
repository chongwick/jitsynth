# CLAUDE.md — jitsynth

## What this project does

Synthesizes PHP and Python scripts from JIT-exercising constraint trees. A JOC (JIT Operation Constraint) describes the structural shape of a program — its control flow skeleton and data operations. The synthesizer fills each slot with real source extracted from a seed corpus, producing new scripts that match the constraint's structure.

Two parallel pipelines exist: **PHP** (targeting PHP's OPcache JIT) and **Python** (targeting CPython 3.13+'s JIT). Both reuse the same ~497 JOC constraints from JavaScript.

The dependency analyzer ensures extracted statements include all variable-defining predecessors, avoiding undefined variable errors in the output.

## Project layout

```
# PHP pipeline
driver.py                    PHP entry point (synthesis + profiling CLI)
php_dependency_analyzer.py   PHP statement-level dependency graph builder
php_to_ast.sh                Shell wrapper: PHP file -> JSON AST via nikic/php-parser
php_helpers/                 PHP parser scripts (uses vendor/autoload.php)
sanitize.sh                  PHP JIT sanitizer (runs with opcache.jit)

# Python pipeline
python_driver.py             Python entry point (synthesis + profiling CLI)
python_dependency_analyzer.py Python statement-level dependency graph builder (uses ast module)
sanitize_python.sh           Python JIT sanitizer (runs with PYTHON_JIT=1 -X jit)

# Shared
jc/comps.py                  JOC component classes (ControlComp, DataComp, ObjComp)
jc/js_walker.py              JS AST walker — generates JOC constraints from JS seeds
jc/con_out/                  ~497 constraint .pickle files

# Data
seeds/                       ~509 PHP seed scripts (extensionless files)
pytests/                     ~437 Python seed scripts (.py files)
synth_out/                   Generated output (created by --synth)
```

## Architecture

### Two pipelines (PHP + Python)

Each pipeline has the same two subsystems:

1. **Dependency analyzer** — parses a source file's AST, flattens nested control flow into a linear statement list, computes def-use chains, and builds a per-statement dependency graph with transitive closure support.
   - PHP: `php_dependency_analyzer.py` (uses nikic/php-parser via subprocess)
   - Python: `python_dependency_analyzer.py` (uses built-in `ast` module — no subprocess needed)

2. **Synthesizer** — loads a JOC constraint tree, walks it top-down, and fills each slot with real source from the seed corpus. Control regions get synthetic wrappers; data operations get randomly selected seed statements with their full dependency closures.
   - PHP: `driver.py --synth` (generates PHP with braces, semicolons, `<?php` header)
   - Python: `python_driver.py --synth` (generates Python with indentation, `pass` for empty bodies)

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
2. **Cache** — `get_corpus_index()` saves/loads all three structures as `corpus_cache.pkl` in the project root to avoid re-parsing on subsequent runs
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

### COMP_TO_DESCRIPTIONS mapping (Python)

| JOC comp_type | Python descriptions |
|---|---|
| `if`, `else` | `If (region)` |
| `for` | `For (region)`, `While (region)` |
| `while`, `do_while` | `While (region)` |
| `try` | `Try (region)` |
| `func` | `FunctionDef (region)`, `AsyncFunctionDef (region)` |
| `class` | `ClassDef (region)` |
| `method` | `FunctionDef (region)` |
| `assign` | `Assign`, `AugAssign`, `AnnAssign` |
| `var_dec` | `Assign` |
| `func_call` | `Call` |
| `update` | `AugAssign` |
| `return` | `Return` |

### Corpus cache

- **PHP**: `corpus_cache.pkl` — parses ~509 seed files on first run
- **Python**: `python_corpus_cache.pkl` — parses ~437 `.py` seed files on first run

Use `--build-cache` to build the cache independently, or `--rebuild-cache` to force a fresh build during `--synth`/`--fuzz`.

### Pickle module remapping

Constraint pickles were created with bare `comps` module imports. `_CompsUnpickler` remaps `comps` -> `jc.comps` so `isinstance` checks work correctly with our `from jc.comps import ...` imports.

## Usage

### driver.py (PHP synthesis)

```bash
# Synthesize from a single constraint
python3 driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds seeds/

# Synthesize from all constraints, 2 variants each
python3 driver.py --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/

# Build corpus cache independently with 16 parallel workers
python3 driver.py --build-cache --seeds seeds/ -j 16

# Force cache rebuild with 16 parallel workers
python3 driver.py --synth jc/con_out/ --seeds seeds/ --rebuild-cache -j 16

# Profile seed corpus with parallel processing
python3 driver.py --profile seeds/ -j 16

# Fuzz with parallel cache build
python3 driver.py --fuzz jc/con_out/ --seeds seeds/ -j 16

# Run dependency analyzer directly
python3 php_dependency_analyzer.py script.php
```

### python_driver.py (Python synthesis)

```bash
# Synthesize from a single constraint
python3 python_driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds pytests/

# Synthesize from all constraints, 2 variants each
python3 python_driver.py --synth jc/con_out/ --seeds pytests/ --count 2 --out synth_out/

# Build corpus cache independently with 16 parallel workers
python3 python_driver.py --build-cache --seeds pytests/ -j 16

# Force cache rebuild with 16 parallel workers
python3 python_driver.py --synth jc/con_out/ --seeds pytests/ --rebuild-cache -j 16

# Profile seed corpus with parallel processing
python3 python_driver.py --profile pytests/ -j 16

# Fuzz with parallel cache build
python3 python_driver.py --fuzz jc/con_out/ --seeds pytests/ -j 16

# Run dependency analyzer directly
python3 python_dependency_analyzer.py script.py
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

`driver.py`, `python_driver.py`, and `jc/js_walker.py` all support `-j N` / `--jobs N` to distribute file processing across N worker processes using `multiprocessing.Pool`. Each file is parsed independently in its own worker, and results are merged in the main process. Defaults to 1 (sequential).

Parallelism applies to the CPU-bound parsing and analysis phases:
- `driver.py`: `build_corpus_index()` (used by `--build-cache`, `--synth`/`--fuzz` on cache miss) and `profile_corpus()` (used by `--profile`)
- `python_driver.py`: same as above but for Python seeds
- `jc/js_walker.py`: `batch_generate()` (used by `--batch`)

### Programmatic use

```python
# PHP
from driver import get_corpus_index, load_constraint, synthesize
node_type_index, file_cache, results_cache = get_corpus_index('./seeds', parallel=8)
constraint = load_constraint('jc/con_out/some-constraint.pickle')
php_source = synthesize(constraint, node_type_index, file_cache, results_cache)

# Python
from python_driver import get_corpus_index, load_constraint, synthesize
node_type_index, file_cache, results_cache = get_corpus_index('./pytests', parallel=8)
constraint = load_constraint('jc/con_out/some-constraint.pickle')
py_source = synthesize(constraint, node_type_index, file_cache, results_cache)
```

## Key design decisions

- **Dependency slices, not bare statements**: `pick_data_source()` uses `get_dependency_slice()` to include all transitive variable-defining predecessors, preventing undefined variable errors
- **Synthetic control wrappers**: Region headers (`if (true)`, `for ($i_0 = 0; ...)`, `function f_0()`) are generated rather than extracted from seeds, since extracting partial control structures via byte offsets is unreliable
- **Unique name counters**: `_next_name()` generates `f_0`, `f_1`, `C_0`, `i_0`, etc. to avoid name collisions across regions
- **Extensionless file support**: Seed files lack `.php` extensions; `build_corpus_index()` accepts them by checking for `<?php` header
- **Symbol keys** are canonicalized: PHP uses `$a`, `$obj->prop`, `Foo::$bar`, `$a[*]`; Python uses `a`, `obj.attr`, `a[*]` (array indices collapsed)
- **Single pass, linear scan** — no CFG. Correct for straight-line code; approximate across branches
- **Python uses `ast` module**: No subprocess for parsing — `ast.parse()` is built-in and fast. Source extraction uses line/column positions (no byte-offset issues)
- **Python context filtering**: `self`/`cls.`/`super()` filtered outside class scope; `yield`/`await`/`return` filtered outside function scope; `unittest`/`test.support`/CPython internal test modules/Windows-only modules filtered entirely
- **Scope declaration stripping**: `global`/`nonlocal` statements are excluded from `collect_defs()` and stripped from extracted snippets, preventing SyntaxErrors when they appear at wrong scope levels
- **Exhausted retry safety**: When all context-filter retries fail, `pick_data_source()` returns `pass` instead of leaking the last bad snippet
- **Suspicious reference filter**: Free uses containing 2+ likely-undefined names (CamelCase non-builtins, underscore-prefixed privates) trigger a retry to reduce NameErrors

## Known limitations

- **No control flow modeling**: `if`/`else`/`while` branches are not modeled — dependencies are approximate across branches
- **No aliasing**: `$a =& $b` doesn't link the two symbols
- **Array index collapse**: `$a[0]` and `$a[1]` map to the same symbol `$a[*]`
- **Dynamic variables**: `${$name}` is ignored
- **Single scope**: No function/method boundary awareness — treats everything as one flat scope. This is the dominant remaining source of NameErrors (~33% of generated Python scripts) since variables defined inside functions/classes in seed files don't carry over
- **Cross-file deps**: Dependency slices come from the original seed file; variables from different seed files may still collide in the synthesized output
- **Greedy slot-filling**: Each slot is filled independently and randomly — no global coherence across the synthesized script
- **Large constraints**: Some JS-derived constraints have thousands of data slots (up to 6500+), making synthesis very slow. Constraints with >50 data slots can take minutes per file

## Extending

- **Smarter slot filling**: Use type-aware or scope-aware matching instead of random selection
- **Variable renaming**: Alpha-rename variables in extracted slices to avoid cross-file collisions
- **CFG awareness**: Track multiple reaching definitions at join points
- **Scope boundaries**: Reset `last_def` at function/class boundaries
- **Finer array tracking**: Replace `$a[*]` with `$a[0]`, `$a["key"]` for more precise dependencies
