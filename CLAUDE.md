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
jc/type_infer.py             JS type-stability inference (types, trip counts, call identity)
jc/js_walker.py              JS AST walker — generates JOC constraints from JS seeds
jc/php_walker.py             PHP AST walker — generates JOC constraints from PHP seeds
jc/con_out/                  Constraint .pickle files from JS seeds (type-annotated)
jc/con_out_php/              Constraint .pickle files from PHP seeds (php/ via php_walker)
seeds/                       ~509 PHP seed scripts (extensionless files) — synthesis corpus
php/                         ~473 PHP .phpt seeds — JOC-mining corpus for php_walker
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
   - `node_type_index`: `{ description: [(filepath, stmt_id, start_pos, end_pos, value_type), ...] }`
   - `file_cache`: `{ filepath: source_string }`
   - `results_cache`: `{ filepath: dependency_results }`
2. **Cache** — `get_corpus_index()` saves/loads all three structures as `corpus_cache.pkl` in the project root to avoid re-parsing on subsequent runs
3. **Map** — `COMP_TO_DESCRIPTIONS` maps JOC comp_types to PHP AST description strings
4. **Fill** — `synthesize()` walks the constraint tree:
   - `ControlComp` sublists become synthetic PHP control wrappers via `synthesize_region()`
   - `DataComp` leaves become real PHP source via `pick_data_source()`, which uses `get_dependency_slice()` to include all defining predecessors, and honors `DataComp.type` by restricting candidates to statements of the matching inferred value type
   - Loop regions honor `ControlComp.trip_count` when building the `for`/`while`/`do_while` wrapper

### Resolvability filtering (correctness)

`pick_data_source()` rejects any candidate whose dependency closure references a
user function/class/interface/trait that is neither defined within the closure,
already emitted by an earlier slot, nor a PHP builtin — the dominant runtime
failure was `Uncaught Error: Call to undefined function` / `Class not found`,
almost always because the referenced symbol lived in a *different* seed. It
retries up to `_MAX_CONTEXT_RETRIES` (25) for a resolvable candidate and emits a
benign placeholder on exhaustion rather than leaking an undefined-symbol snippet.

- **Structural references** captured by `collect_structural_refs()`
  (`php_dependency_analyzer.py`): function calls, `new`, static calls, `Foo::$p`,
  `Foo::CONST`/`Foo::class`, `$x instanceof Foo`, `catch (Foo $e)`, trait uses,
  `extends`/`implements`. (`structural_refs` are stored per statement in the
  cache, so changing this set requires a cache rebuild.)
- **Builtin allowlist**: `_php_builtin_symbols()` derives the set of callable
  functions + declared classes/interfaces/traits from the live `php` binary once
  (so it matches loaded extensions); `self`/`parent`/`static` are always treated
  as resolved.
- **Hoisted-def emission**: the final dedup in `synthesize()` uses a *local*
  seen-set (seeded with builtins), not the shared `declared_names` that
  `pick_data_source()` populates as it picks — otherwise every hoisted class/
  function definition is skipped as a "redeclaration of itself," dropping the
  very definitions the emitted references need.

These correctness filters run in both strict and loose modes (they concern
validity, not JOC annotation-honoring), and together roughly double the
clean-execution rate (~21% → ~38–40% of generated seeds exit 0 under a plain
`php` run).

### JOC constraint structure

Constraints are pickled nested lists. Each list's first element is a `ControlComp` (the region type), followed by `DataComp` leaves and nested sublists:

```
[ControlComp('main'),
  [ControlComp('for', type_stable=True, trip_count=100),
    DataComp('assign', type='int', stable=True)],
  DataComp('func_call', callee='f', repeated=True),
  DataComp('func_call', callee='f', repeated=True)]
```

### Type-stability annotations

Beyond structural shape, comps carry inferred JIT-relevant metadata (see
`jc/type_infer.py`; all fields are optional with backward-compatible defaults,
so pre-annotation pickles still load). JavaScript is dynamically typed, so these
are *inferred* by an abstract-interpretation pre-pass over the JS AST, run
before the walk in `js_walker.generate_constraints`. The inference is
conservative: anything it can't prove degrades to `mixed` / `None`.

**`DataComp` fields:**

| Field | Applies to | Meaning |
|---|---|---|
| `type` | all data ops | Inferred value type from the lattice `int / float / string / bool / null / undefined / array / object / function / mixed`. `int` and `float` are kept distinct so an `int→float` write reads as a transition. |
| `stable` | var writes (`var_dec`/`assign`/`update`) | `True` if the write keeps the variable monomorphic, `False` if it transitions the variable to a new type, `None` if not a tracked write. Steady-state within loops (loop bodies are analyzed to a fixpoint). |
| `callee` | `func_call` | Identity key of the called function (`"f"`, `"obj.method"`), or `None` if undeterminable. |
| `repeated` | `func_call` | `True` if this `callee` is called ≥2× anywhere in the JOC (so the function goes hot / its call sites repeat), `False` if called once, `None` if callee unknown. Set by a whole-JOC post-pass. |

**`ControlComp` fields:**

| Field | Applies to | Meaning |
|---|---|---|
| `type_stable` | loops (`for`/`while`/`do_while`) | `True` if every loop-carried variable keeps its type across the back-edge (the monomorphic hot loop a tracing JIT specializes on), `False` for a deopt-inducing loop, `None` if not applicable. |
| `trip_count` | loops | Statically inferred iteration count. Computed for counted `for` loops (integer bounds/step) and `for-of`/`for-in` over array/string literals; `None` for `while`/`do_while` and data-dependent loops. Drives whether a loop crosses the JIT hot-loop threshold. |

Honoring these annotations is **configurable**. By default the synthesizer runs
in *strict* mode and enforces them; passing `--loose` (or `synthesize(...,
strict=False)`) runs the original type-blind system — random type-compatible
statements and fixed default loop bounds — for more output variance. In strict
mode, two annotations are honored:

- **`DataComp.type`** drives *type-directed slot filling*. Each corpus statement
  carries an inferred PHP value type (see below); when a `DataComp` pins a
  concrete type, `pick_data_source()` draws only from statements the corpus
  inferred to that same type, falling back to the full pool when the JOC is
  type-agnostic (`mixed`/`None`) or the typed bucket is empty.
- **`ControlComp.trip_count`** sets the loop bound. `for` wrappers use it as the
  upper bound (default 10); `while`/`do_while` wrappers emit a real counted loop
  (`$w = 0; while ($w < N) { … $w++; }`) instead of the infinite-loop guard.

The remaining annotations (`stable`, `type_stable`, `callee`, `repeated`) are
still captured but not yet consumed by `driver.py`.

### PHP value-type inference

To make `type`-directed filling possible, the dependency analyzer infers a
value type per statement (`php_dependency_analyzer.py`, `infer_value_type()` /
`get_statement_value_type()`, exposed as `value_type` in each result row). It is
a shallow, conservative bottom-up inference over the PHP AST: literals, casts,
`new`, arithmetic/concat/comparison binops, and a small builtin-return table
(`strlen`→`int`, `sprintf`→`string`, `explode`→`array`, `is_*`→`bool`, …);
anything undeterminable degrades to `mixed`. The type is baked into each
`node_type_index` entry — the tuple is now
`(filepath, stmt_id, start_pos, end_pos, value_type)` — so type buckets need no
separate structure. The corpus cache is versioned (`CACHE_VERSION`); a
pre-value-type cache is detected and rebuilt automatically.

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

The first `--synth` or `--fuzz` run parses all ~509 seed files and saves the index to `corpus_cache.pkl` in the project root. Subsequent runs load the cache instantly. Use `--build-cache` to build the cache independently, or `--rebuild-cache` to force a fresh build during `--synth`/`--fuzz`.

### Pickle module remapping

Constraint pickles were created with bare `comps` module imports. `_CompsUnpickler` remaps `comps` -> `jc.comps` so `isinstance` checks work correctly with our `from jc.comps import ...` imports.

## Usage

### driver.py (PHP synthesis)

```bash
# Synthesize from a single constraint
python3 driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds seeds/

# Synthesize from all constraints, 2 variants each
python3 driver.py --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/

# Loose mode: ignore type/trip-count annotations (original type-blind system)
python3 driver.py --synth jc/con_out/ --seeds seeds/ --loose

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

### jc/js_walker.py (JS constraint generation)

```bash
# Batch-generate constraints from JS seeds (sequential)
python3 jc/js_walker.py --batch ../js_seeds ./con_out

# Batch-generate with 16 parallel workers
python3 jc/js_walker.py --batch ../js_seeds ./con_out -j 16

# Analyze a single JS file (debug mode)
python3 jc/js_walker.py path/to/file.js
```

### jc/php_walker.py (PHP constraint generation)

The PHP counterpart of `js_walker.py`: mines JOCs from PHP seeds (e.g. the
`.phpt` files in `php/`) instead of JavaScript, producing the same
`ControlComp`/`DataComp` trees via the nikic/php-parser AST. Run from `jc/`.

```bash
# Batch-generate a PHP-derived JOC corpus (php/ -> jc/con_out_php/)
python3 jc/php_walker.py --batch ../php ./con_out_php -j 8

# Recurse into subdirectories; skip already-generated pickles
python3 jc/php_walker.py --batch ../php ./con_out_php -j 8 -r --skip-existing

# Analyze a single PHP/.phpt file (debug mode, prints the JOC)
python3 jc/php_walker.py ../php/add_005.phpt
```

Accepts `.phpt`/`.php`/`.inc` seeds (the `--EXPECT*` tail of a `.phpt` parses as
inline HTML and is ignored). Annotations filled: `DataComp.type` (via
`php_dependency_analyzer.infer_value_type`), `func_call.callee`+`repeated`, and
`ControlComp.trip_count` (counted `for` loops and `foreach` over array/string
literals). Stability fields (`stable`/`type_stable`) require a PHP abstract
interpreter we don't have and are left at their `None` defaults. Output pickles
load through the same `_CompsUnpickler` remap, so `driver.py --synth
jc/con_out_php/ --seeds seeds/` works unchanged.

### Parallel processing (`-j` / `--jobs`)

Both `driver.py` and `jc/js_walker.py` support `-j N` / `--jobs N` to distribute file processing across N worker processes using `multiprocessing.Pool`. Each file is parsed independently in its own worker, and results are merged in the main process. Defaults to 1 (sequential).

Parallelism applies to the CPU-bound parsing and analysis phases:
- `driver.py`: `build_corpus_index()` (used by `--build-cache`, `--synth`/`--fuzz` on cache miss) and `profile_corpus()` (used by `--profile`)
- `jc/js_walker.py` and `jc/php_walker.py`: `batch_generate()` (used by `--batch`)

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
- **Cross-file deps**: Dependency slices come from the original seed file; variables from different seed files may still collide in the synthesized output. Undefined *function/class* references are now filtered out (see Resolvability filtering), but cross-file *variable* and *constant* references are not
- **Greedy slot-filling**: Each slot is filled independently and randomly — no global coherence across the synthesized script
- **Remaining runtime errors**: With undefined-symbol errors largely eliminated, the dominant failures in generated seeds are now `TypeError`/`ValueError` (argument type/value coercion), `Undefined constant`, and dynamic (`ReflectionClass('X')`, `new $var`) class references that static analysis cannot see

## Extending

- **Smarter slot filling**: Use type-aware or scope-aware matching instead of random selection
- **Variable renaming**: Alpha-rename variables in extracted slices to avoid cross-file collisions
- **CFG awareness**: Track multiple reaching definitions at join points
- **Scope boundaries**: Reset `last_def` at function/class boundaries
- **Finer array tracking**: Replace `$a[*]` with `$a[0]`, `$a["key"]` for more precise dependencies
