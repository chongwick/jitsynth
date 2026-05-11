# CLAUDE.md — jitsynth

## What this project does

Synthesizes PHP scripts from JIT-exercising constraint trees. A JOC (JIT Operation Constraint) describes the structural shape of a program — its control flow skeleton and data operations. The synthesizer fills each slot with real PHP source extracted from a seed corpus, producing new PHP scripts that match the constraint's structure.

The dependency analyzer ensures extracted statements include all variable-defining predecessors, avoiding undefined variable errors in the output.

## Project layout

```
driver.py                    Python entry point (synthesis + profiling CLI)
src/                         Rust port of driver.py (preferred for speed)
  main.rs                    CLI, dispatch, fuzz/synth loops
  pickle.rs                  Minimal pickle-protocol-4 reader
  model.rs                   Typed Node / StatementResult / Corpus
  synth.rs                   Synthesis pipeline (pick_data_source, region, top-level)
Cargo.toml                   Rust build config (binary name: driver)
php_dependency_analyzer.py   Statement-level dependency graph builder (Python, run-once)
php_to_ast.sh                Shell wrapper: PHP file -> JSON AST via nikic/php-parser
php_helpers/                 PHP parser scripts (uses vendor/autoload.php)
jc/comps.py                  JOC component classes (ControlComp, DataComp, ObjComp)
jc/js_walker.py              JS AST walker — generates JOC constraints from JS seeds
jc/con_out/                  ~8.7k constraint .pickle files
seeds/                       ~509 PHP seed scripts (extensionless files)
corpus_cache.pkl             Pickled (node_type_index, file_cache, results_cache)
synth_out/                   Generated PHP output (created by --synth)
```

## Architecture

### Three subsystems

1. **Dependency analyzer** (`php_dependency_analyzer.py`, Python only) — parses a PHP file's AST, flattens nested control flow into a linear statement list, computes def-use chains, and builds a per-statement dependency graph with transitive closure support. Run once to produce `corpus_cache.pkl`.

2. **Synthesizer** (`driver.py --synth` / `./target/release/driver --synth`) — loads a JOC constraint tree, walks it top-down, and fills each slot with real PHP source from the seed corpus. Control regions get synthetic wrappers (`if`, `for`, `function`, etc.); data operations get randomly selected seed statements with their full dependency closures. **Two interchangeable implementations**: the original Python and the Rust port. Both read the same `corpus_cache.pkl` and emit equivalent output.

3. **Sanitizer** (`sanitize.sh`) — invoked by the fuzz loop; runs each synthesized script under PHP (with/without ASAN) and writes `<script>.er` if PHP reports an error, `<script>.tr` if it times out.

### Dependency analyzer pipeline (Python, run once)

1. **Flatten** — `flatten_ast()` linearizes nested control/scope blocks into a flat statement list with region metadata
2. **Defs** — `collect_defs()` extracts variables written by a statement
3. **Uses** — `get_statement_uses()` extracts variables read, excluding assignment LHS
4. **Graph** — `build_statement_dependencies()` single-pass builds `last_def` map and emits per-statement dependency sets
5. **Closure** — `get_dependency_closure()` computes transitive dependencies; `get_dependency_slice()` returns the source text

### Synthesizer pipeline (Python AND Rust)

1. **Index** — `build_corpus_index()` parses all seed files (Python only; one-time), builds three structures:
   - `node_type_index`: `{ description: [(filepath, stmt_id, start_pos, end_pos), ...] }`
   - `file_cache`: `{ filepath: source_bytes }`
   - `results_cache`: `{ filepath: dependency_results }`
2. **Cache** — `get_corpus_index()` saves/loads all three structures as `corpus_cache.pkl` in the project root. The Rust binary loads (but never builds) this cache.
3. **Map** — `COMP_TO_DESCRIPTIONS` maps JOC comp_types to PHP AST description strings (table is identical in Python and Rust)
4. **Fill** — `synthesize()` walks the constraint tree:
   - `ControlComp` sublists become synthetic PHP control wrappers via `synthesize_region()`
   - `DataComp` leaves become real PHP source via `pick_data_source()`, which uses `get_dependency_slice()` to include all defining predecessors

### Rust port

Lives in `src/`. Builds with `cargo build --release` to `./target/release/driver`. Includes a hand-written minimal pickle-protocol-4 reader (`src/pickle.rs`) that handles every opcode used by `corpus_cache.pkl` and constraint pickles, including `STACK_GLOBAL` + `NEWOBJ` + `BUILD` for `ControlComp` / `DataComp` instances.

- `--synth`, `--fuzz`: handled in-process by the Rust binary. ~3.5× faster wall-clock than the Python driver on full-corpus runs; fuzz loop sustains ~100+ iter/sec including `sanitize.sh` shell-outs.
- `--build-cache`, `--rebuild-cache`, `--profile`: the Rust binary shells out to `python3 driver.py` for these — they require PHP-AST parsing (`php_to_ast.sh` + `php_dependency_analyzer.py`) and are run-once operations.
- `--rebuild-cache` combined with `--synth`/`--fuzz` triggers the Python cache rebuild, then the Rust binary loads the fresh cache.

The Rust binary uses Rust's `rand` PRNG, so generated outputs differ run-to-run (as in Python) but are not byte-identical to a given Python run. Output *shape* and *correctness rate* are parity-verified (8724 outputs per full-corpus synth, ~99.6% PHP-syntax-valid in both).

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

The first `--synth` or `--fuzz` run parses all ~509 seed files and saves the index to `corpus_cache.pkl` in the project root. Subsequent runs load the cache instantly. Use `--build-cache` to build the cache independently, or `--rebuild-cache` to force a fresh build during `--synth`/`--fuzz`. Cache building is Python-only; the Rust binary delegates to `python3 driver.py` when these flags are present.

### Pickle module remapping

Constraint pickles were created with bare `comps` module imports. The Python driver's `_CompsUnpickler` remaps `comps` -> `jc.comps` so `isinstance` checks work correctly with `from jc.comps import ...`. The Rust pickle reader ignores the module portion entirely and dispatches on the class name (`ControlComp` / `DataComp` / `ObjComp`), so it handles both module spellings transparently.

## Usage

### Rust binary (preferred for synth/fuzz hot paths)

```bash
# One-time build
cargo build --release

# Synthesize from a single constraint
./target/release/driver --synth jc/con_out/accessors-no-prototype.pickle --seeds seeds/

# Synthesize from all constraints, 2 variants each
./target/release/driver --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/

# Force cache rebuild (shells out to driver.py) then synthesize
./target/release/driver --synth jc/con_out/ --rebuild-cache -j 16

# Infinite fuzzing loop with sanitization
./target/release/driver --fuzz jc/con_out/ --seeds seeds/ --out synth_out/
```

### driver.py (Python; required for cache building and profiling)

```bash
# Build corpus cache with 16 parallel workers
python3 driver.py --build-cache --seeds seeds/ -j 16

# Profile seed corpus
python3 driver.py --profile seeds/ -j 16

# Synthesize / fuzz (same flags as the Rust binary; slower)
python3 driver.py --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/
python3 driver.py --fuzz jc/con_out/ --seeds seeds/

# Run dependency analyzer directly on one file
python3 php_dependency_analyzer.py script.php
```

### jc/js_walker.py (JS constraint generation, run-once)

```bash
# Batch-generate constraints from JS seeds
python3 jc/js_walker.py --batch ../js_seeds ./con_out -j 16

# Analyze a single JS file (debug mode)
python3 jc/js_walker.py path/to/file.js
```

### Parallel processing (`-j` / `--jobs`)

The `-j N` flag applies to Python operations that parse seed files (`--build-cache`, `--rebuild-cache`, `--profile`, `js_walker.py --batch`). The Rust binary forwards this flag to Python when shelling out for cache builds; it does not parallelize synthesis itself (per-constraint synth is already microseconds).

### Programmatic use (Python only)

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
- **Byte offsets, not character offsets**: PHP parser returns byte offsets; Python reads source as bytes and slices before decoding. The Rust port preserves this — `file_cache` stores `Rc<Vec<u8>>` and slices are decoded with `from_utf8_lossy` (matching Python's `errors='ignore'`).
- **Single pass, linear scan** — no CFG. Correct for straight-line code; approximate across branches
- **Two implementations, one cache**: Rust and Python both read the same `corpus_cache.pkl`. Cache format is owned by Python; Rust treats it as read-only input.

## Known limitations

- **No control flow modeling**: `if`/`else`/`while` branches are not modeled — dependencies are approximate across branches
- **No aliasing**: `$a =& $b` doesn't link the two symbols
- **Array index collapse**: `$a[0]` and `$a[1]` map to the same symbol `$a[*]`
- **Dynamic variables**: `${$name}` is ignored
- **Single scope**: No function/method boundary awareness — treats everything as one flat scope
- **Cross-file deps**: Dependency slices come from the original seed file; variables from different seed files may still collide in the synthesized output
- **Greedy slot-filling**: Each slot is filled independently and randomly — no global coherence across the synthesized script
- **Fuzz `.er` rate is dominated by setup-context errors**: synthesized scripts call seed-corpus APIs (`PDO`, `imagecreatefrompng`, `FPM\Tester`, …) without their setup. Almost every script trips a non-fatal PHP warning, so `sanitize.sh` flags most outputs. Lowering this rate is a corpus/synthesis-quality job (smarter slot matching, scope awareness), not a driver bug.

## Extending

- **Smarter slot filling**: Use type-aware or scope-aware matching instead of random selection
- **Variable renaming**: Alpha-rename variables in extracted slices to avoid cross-file collisions
- **CFG awareness**: Track multiple reaching definitions at join points
- **Scope boundaries**: Reset `last_def` at function/class boundaries
- **Finer array tracking**: Replace `$a[*]` with `$a[0]`, `$a["key"]` for more precise dependencies
