# Python Pipeline — jitsynth

Synthesizes Python scripts from JOC (JIT Operation Constraint) trees to fuzz CPython 3.13+'s experimental JIT compiler. Reuses the same ~497 JOC constraints generated from JavaScript seeds. Seeds come from `pytests/` (~437 `.py` files).

This pipeline runs **parallel to** the existing PHP pipeline — separate files, separate cache, no shared mutable state.

## Files

| File | Lines | Purpose |
|---|---|---|
| `python_driver.py` | ~978 | Main entry point: synthesis, profiling, fuzzing CLI |
| `python_dependency_analyzer.py` | ~765 | Statement-level dependency graph builder using `ast` module |
| `sanitize_python.sh` | ~150 | Test harness: run scripts with/without JIT, classify results |

## Architecture

### Dependency Analyzer (`python_dependency_analyzer.py`)

Uses Python's built-in `ast` module — no external parser or subprocess needed (unlike the PHP pipeline which shells out to `nikic/php-parser`).

**Pipeline:**

1. **Flatten** — `flatten_ast()` linearizes nested control/scope blocks into a flat statement list with region metadata. Each entry is a dict: `{"stmt": ast_node, "region": {...}, "is_region_header": bool}`.
2. **Defs** — `collect_defs()` extracts variables written by a statement.
3. **Uses** — `get_statement_uses()` extracts variables read, excluding assignment LHS.
4. **Graph** — `build_statement_dependencies()` single-pass builds `last_def` map and emits per-statement dependency sets. Also builds structural deps (function/class call references via `build_name_registry` + `collect_structural_refs`).
5. **Closure** — `get_dependency_closure()` computes transitive dependencies (DFS); `get_dependency_slice()` returns concatenated source text.

**Source extraction** uses line/column positions (`lineno`, `col_offset`, `end_lineno`, `end_col_offset`) — no byte-offset issues since Python's `ast` module uses character positions (unlike PHP's byte offsets).

**Variable canonicalization:** `x`, `obj.attr`, `arr[*]` (array indices collapsed, no `$` prefix).

**Statement types handled:**

| Category | AST Types |
|---|---|
| Assignment | `ast.Assign`, `ast.AugAssign`, `ast.AnnAssign`, walrus (`:=` via `ast.NamedExpr`) |
| Control flow | `ast.If`, `ast.While`, `ast.For`, `ast.AsyncFor`, `ast.Try`, `ast.TryStar` (3.11+), `ast.With`, `ast.AsyncWith`, `ast.Match` |
| Scope | `ast.FunctionDef`, `ast.AsyncFunctionDef`, `ast.ClassDef` |
| Imports | `ast.Import`, `ast.ImportFrom` |
| Other | `ast.For` targets (loop var defs), `ast.ExceptHandler`, `ast.Global`, `ast.Nonlocal`, `ast.Delete`, tuple unpacking |

**Result dict fields:** `stmt_id`, `node_type`, `description`, `start_line`, `end_line`, `start_col`, `end_col`, `defs`, `uses`, `structural_refs`, `depends_on`, `region`, `is_region_header`.

### Synthesizer (`python_driver.py`)

Loads JOC constraint trees, walks top-down, fills slots with real Python source from the seed corpus. Control regions get synthetic wrappers; data operations get randomly selected seed statements with full dependency closures.

**COMP_TO_DESCRIPTIONS mapping:**

| JOC comp_type | Python AST descriptions |
|---|---|
| `if`, `else` | `If (region)` |
| `for` | `For (region)`, `While (region)` |
| `while`, `do_while` | `While (region)` |
| `try` | `Try (region)` |
| `catch` | `ExceptHandler (region)` |
| `finally`, `switch` | *(empty — no direct match)* |
| `func` | `FunctionDef (region)`, `AsyncFunctionDef (region)` |
| `class` | `ClassDef (region)` |
| `method` | `FunctionDef (region)` |
| `assign` | `Assign`, `AugAssign`, `AnnAssign` |
| `var_dec` | `Assign` |
| `func_call`, `new`, `throw` | `Call` |
| `update`, `unary` | `AugAssign` |
| `return` | `Return` |

**Synthetic control wrappers (Python syntax):**

```python
if True:                    for i_0 in range(10):       def f_0():
    <body>                      <body>                      <body>

class C_0:                  while True:                 try:
    <body>                      break  # avoid inf         <body>
                                <body>                  except Exception:
                                                            pass
```

- 4-space indentation (not braces)
- `pass` inserted for empty bodies (Python requirement)
- `break` inserted in `while` bodies to prevent infinite loops
- `do_while` → `while True:` with `break` at end (runs body once)

### Corpus Indexing

**Index entry format:** 6-tuple `(filepath, stmt_id, start_line, end_line, start_col, end_col)` — differs from PHP's 4-tuple `(filepath, stmt_id, start_pos, end_pos)` which uses byte offsets.

**Three structures:**
- `node_type_index`: `{ description: [(filepath, stmt_id, start_line, end_line, start_col, end_col), ...] }`
- `file_cache`: `{ filepath: source_string }`
- `results_cache`: `{ filepath: dependency_results }`

**Cache file:** `python_corpus_cache.pkl` (separate from PHP's `corpus_cache.pkl`). First run parses all seeds and saves; subsequent runs load instantly.

### Post-Processing

#### Import Hoisting (`_hoist_imports`)

All top-level `import` and `from ... import` statements are moved to the top of the generated script and deduplicated. Handles:
- Single-line imports
- Parenthesized multi-line imports: `from foo import (\n    bar,\n    baz\n)`
- Backslash-continued imports: `from foo import bar, \\\n    baz`

Detection regex: `^(?:import\s|from\s\S+\s+import\s)`

#### Dangling Block Stripping (`_strip_dangling_blocks`)

When compound statements (for/while/if) are extracted from seeds, Python's `ast` reports `end_lineno` covering the entire compound including `else`/`elif` clauses. After dedent, orphaned clauses cause `IndentationError`.

**Fix:** Strip `else:`, `else `, `elif ` at reduced indentation, along with their indented bodies. Does **NOT** strip `except:` or `finally:` since those are required parts of `try` blocks.

Strippable clauses: `('else:', 'else ', 'elif ')`

### Context Filtering

Before accepting an extracted snippet, `pick_data_source` retries up to 10 times if the snippet fails context checks:

| Filter | Regex/Check | Purpose |
|---|---|---|
| Class scope | `\bself\.`, `\bcls\.`, `\bsuper\(\)` | Reject outside class context |
| Function scope | `yield`, `await` in text | Reject outside function context |
| Unavailable imports | `\b(?:unittest\|test\.support\|test\.test_\|doctest)\b` | Reject test-framework-dependent code |
| Name collisions | `declared_names` set (case-insensitive) | Skip if function/class name already used |

**`_PYTHON_BUILTINS`** (~100 names) is pre-seeded into `declared_names` to prevent shadowing built-ins like `print`, `len`, `range`, exception classes, etc.

### Variable Joins

`_try_create_join()` creates data-flow links between consecutive data slots:
- Picks a simple variable (`[a-zA-Z_][a-zA-Z0-9_]*`) from the previous slot's defs
- Picks a simple free-use variable from the current slot
- Generates `join_var_N = prev_def_var` and renames the current slot's free use
- Controlled by `--join-rate` (0.0–1.0, default 0.0)

No `$` prefix on variable names (unlike PHP). No `;` on assignments.

### Sanitizer (`sanitize_python.sh`)

Runs synthesized Python scripts and classifies results.

**Modes:**
- Mode 0: `python3 script.py` (JIT off, baseline)
- Mode 1: `PYTHON_JIT=1 python3 -X jit script.py` (JIT on)

**Classification:**

| Category | Extension | Criteria | Action |
|---|---|---|---|
| Trash | `.tr` | Timeout (exit 124/137/153), `MemoryError`, `RecursionError`, `SyntaxError`, `ImportError`, `ModuleNotFoundError`, `NameError`, `TypeError`, `AttributeError`, `IndentationError` | Deleted |
| Error | `.er` | Segfault (exit 139), abort (exit 134), AddressSanitizer, assertion failure, `Fatal Python error` | Preserved (read-only 440) |
| Differential | `.er` | JIT-on output differs from JIT-off output (mode 1 only) | Preserved with diff in `san.log` |
| Clean | *(none)* | Normal execution, no difference | Deleted |

**Differential testing flow (mode 1):** After successful JIT execution, re-runs the script without JIT. If baseline also succeeds but output differs, the file is classified as an error with the diff logged to `san.log`.

### Fuzz Loop

`fuzz_loop()` runs an infinite synthesize → write → sanitize → repeat cycle:

1. Loads all constraint pickles from the constraints directory
2. Builds/loads corpus index from seeds
3. Each iteration: picks a random constraint, synthesizes a Python script, writes it to `synth_out/`, runs `sanitize()` (which calls `sanitize_python.sh` for modes 0 and 1)
4. Every 100 iterations: `_clean()` runs `git clean -fd` with exclusions

**`_clean()` exclusions:** `-e python_corpus_cache.pkl -e corpus_cache.pkl -e synth_out -e pytests -e seeds -e /ramdisk -e python_driver.py -e python_dependency_analyzer.py -e sanitize_python.sh`

## Usage

```bash
# Synthesize from a single constraint
python3 python_driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds pytests/

# Synthesize from all constraints, 2 variants each
python3 python_driver.py --synth jc/con_out/ --seeds pytests/ --count 2 --out synth_out/

# Build corpus cache independently with 16 parallel workers
python3 python_driver.py --build-cache --seeds pytests/ -j 16

# Force cache rebuild
python3 python_driver.py --synth jc/con_out/ --seeds pytests/ --rebuild-cache -j 16

# Profile seed corpus
python3 python_driver.py --profile pytests/ -j 16

# Fuzz with parallel cache build and 30% join rate
python3 python_driver.py --fuzz jc/con_out/ --seeds pytests/ -j 16 --join-rate 0.3

# Run dependency analyzer directly
python3 python_dependency_analyzer.py script.py
```

### CLI Arguments

| Argument | Description |
|---|---|
| `--synth PATH` | Synthesize from a `.pickle` file or directory of them |
| `--fuzz DIR` | Run infinite fuzzing loop using constraints from DIR |
| `--profile DIR` | Profile all `.py` files, print per-type counts |
| `--seeds DIR` | Seed corpus directory (default: `./pytests`) |
| `--count N` | Scripts per constraint (default: 1) |
| `--out DIR` | Output directory (default: `./synth_out`) |
| `--build-cache` | Build corpus cache and exit |
| `--rebuild-cache` | Force cache rebuild during `--synth`/`--fuzz` |
| `--join-rate F` | Join probability 0.0–1.0 (default: 0.0) |
| `-j N` / `--jobs N` | Parallel workers (default: 1) |

### Programmatic Use

```python
from python_driver import get_corpus_index, load_constraint, synthesize

node_type_index, file_cache, results_cache = get_corpus_index('./pytests', parallel=8)
constraint = load_constraint('jc/con_out/some-constraint.pickle')
py_source = synthesize(constraint, node_type_index, file_cache, results_cache)
```

## Differences from PHP Pipeline

| Aspect | PHP (`driver.py`) | Python (`python_driver.py`) |
|---|---|---|
| Parser | `nikic/php-parser` via subprocess | Built-in `ast.parse()` |
| Source positions | Byte offsets (`startFilePos`, `endFilePos`) | Line/col (`lineno`, `col_offset`, `end_lineno`, `end_col_offset`) |
| Source reading | `rb` (bytes) due to byte offsets | `r` (string) since `ast` uses character positions |
| Variable syntax | `$a`, `$obj->prop`, `Foo::$bar`, `$a[*]` | `a`, `obj.attr`, `a[*]` |
| Block delimiters | `{ }` braces | 4-space indentation |
| Empty bodies | Not needed | `pass` required |
| Infinite loop prevention | N/A | `break` in `while` bodies |
| Statement terminator | `;` | None |
| File header | `<?php` | None |
| Cache file | `corpus_cache.pkl` | `python_corpus_cache.pkl` |
| Index entry | 4-tuple (byte offsets) | 6-tuple (line/col positions) |
| Context filtering | `$this`, `self::`, `parent::` | `self.`, `cls.`, `super()`, `yield`, `await` |
| Post-processing | None | Import hoisting, dangling block stripping |
| Seed detection | `<?php` header | `.py` extension or `#!...python` shebang |

## Known Limitations

- **No control flow modeling**: `if`/`else`/`while` branches are not modeled — dependencies are approximate across branches
- **No aliasing**: No link between `a = b` creating an alias
- **Array index collapse**: `a[0]` and `a[1]` map to the same symbol `a[*]`
- **Single scope**: No function/method boundary awareness — treats everything as one flat scope
- **Cross-file deps**: Dependency slices from different seed files may introduce variable collisions
- **Greedy slot-filling**: Each slot is filled independently — no global coherence
- **Dangling block edge cases**: ~1.2% of generated scripts may still fail to parse (unmatched `)` from mid-expression extraction, empty `if` bodies)

## Testing Results

Batch synthesis of 680 scripts: **98.8% parse rate** (672/680 valid Python).

Remaining failures:
- 5 unmatched `)` (mid-expression extraction)
- 3 empty `if` body (edge case in snippet assembly)
