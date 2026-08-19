# jotfuzz

Generates PHP scripts from JIT-exercising constraint trees. Given a structural description of a program (its control flow skeleton and data operations), jotfuzz fills each slot with real PHP source from a seed corpus to produce new PHP scripts that match the constraint's shape.

## How it works

jotfuzz connects two sides:

- **JOC constraints** — nested trees of `ControlComp` and `DataComp` nodes describing the structural shape of JIT-exercising programs (e.g. "a function containing a for loop with an update, followed by three function calls")
- **PHP seed corpus** — ~509 real PHP scripts, analyzed at the statement level with dependency tracking

Beyond raw structure, JOCs also capture JIT-relevant metadata inferred from the JS seed (see `jc/type_infer.py`): each data op's **value type** and whether a variable write keeps it **type-stable** or transitions it (a deopt trigger); each loop's **trip count** and whether it is **type-stable across the back-edge**; and each function call's **callee identity** plus whether that function is **called repeatedly** (so it goes hot). See CLAUDE.md for the full field reference. By default (*strict* mode) the synthesizer honors two of these: each data op's **value type** drives type-directed slot filling (statements are matched to the JOC's inferred type), and each loop's **trip count** sets the synthesized loop bound. Passing `--loose` disables this and runs the original type-blind system (random type-compatible statements, fixed default loop bounds) for more output variance. The remaining annotations are captured but not yet consumed.

The synthesizer walks a constraint tree top-down and greedily fills each slot:
- **Control regions** (if, for, while, function, class, try, ...) get synthetic PHP wrappers; loops honor the JOC's inferred trip count as their bound
- **Data operations** (assign, func_call, update, return, ...) get real PHP statements from the seed corpus — matched to the JOC's inferred value type when one is pinned — along with all their variable-defining dependencies

## Prerequisites

- Python 3.10+
- PHP CLI with [nikic/php-parser](https://github.com/nikic/PHP-Parser) installed (`composer install` in `php_helpers/`)

## Quick start

```bash
# Synthesize a PHP script from a single constraint
python3 driver.py --synth jc/con_out/accessors-no-prototype.pickle --seeds seeds/

# Synthesize from all constraints, 2 variants each
python3 driver.py --synth jc/con_out/ --seeds seeds/ --count 2 --out synth_out/
```

The first run parses all seed files and caches the index to `corpus_cache.pkl` in the project root. Subsequent runs load the cache instantly. You can also build the cache independently:

```bash
# Build corpus cache without synthesizing
python3 driver.py --build-cache --seeds seeds/ -j 16
```

## CLI reference

```
python3 driver.py --synth <PATH> [--seeds DIR] [--count N] [--out DIR] [--rebuild-cache] [-j N]
```

| Flag | Default | Description |
|---|---|---|
| `--synth PATH` | | Single `.pickle` file or directory of them |
| `--fuzz DIR` | | Run infinite fuzzing loop using constraints from DIR |
| `--build-cache` | | Build (or rebuild) the corpus cache and exit |
| `--profile DIR` | | Profile all `.php` files in DIR, print per-type counts |
| `--seeds DIR` | `./seeds` | Seed corpus directory |
| `--count N` | `1` | Number of scripts to generate per constraint |
| `--out DIR` | `./synth_out` | Output directory for generated `.php` files |
| `--rebuild-cache` | | Force rebuild of the corpus cache during `--synth`/`--fuzz` |
| `--loose` | | Ignore JOC value-type and trip-count annotations (original type-blind system, more variance). Default is strict. |
| `-j N` | `1` | Number of parallel worker processes |

Other modes:

```bash
# Build corpus cache independently
python3 driver.py --build-cache --seeds seeds/ -j 16

# Profile seed corpus — print per-type statement counts
python3 driver.py --profile seeds/ -j 16

# Run infinite fuzzing loop
python3 driver.py --fuzz jc/con_out/ --seeds seeds/ -j 16

# Run dependency analyzer directly on a PHP file
python3 php_dependency_analyzer.py script.php
```

## Project structure

```
driver.py                    Synthesizer + profiling CLI
php_dependency_analyzer.py   Statement-level dependency graph builder
php_to_ast.sh                PHP file -> JSON AST via nikic/php-parser
php_helpers/                 PHP parser scripts
jc/comps.py                  JOC component classes (ControlComp, DataComp)
jc/type_infer.py             JS type-stability inference (types, trip counts, call identity)
jc/con_out/                  ~8724 constraint .pickle files (type-annotated)
seeds/                       ~509 PHP seed scripts (extensionless)
corpus_cache.pkl             Auto-generated corpus cache
synth_out/                   Generated PHP output
```

## Programmatic use

```python
from driver import get_corpus_index, load_constraint, synthesize

# Load (or build + cache) the corpus index
node_type_index, file_cache, results_cache = get_corpus_index('./seeds')

# Load a constraint and synthesize
constraint = load_constraint('jc/con_out/some-constraint.pickle')
php_source = synthesize(constraint, node_type_index, file_cache, results_cache)
print(php_source)
```

## How dependency tracking works

When a statement like `var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true))` is selected from the seed corpus, it depends on `$ch` being defined. The dependency analyzer traces this back to `$ch = curl_init()` and includes it automatically. This transitive closure prevents undefined variable errors in the synthesized output.

The analyzer works by:
1. Parsing PHP into an AST via nikic/php-parser
2. Flattening nested control flow into a linear statement list
3. Computing def-use chains in a single linear pass
4. Building transitive dependency closures per statement

## Limitations

- **Greedy slot-filling**: Each slot is filled independently — no global coherence across the synthesized script
- **Cross-file variable collisions**: Dependency slices come from different seed files; variables may collide
- **No control flow modeling**: Dependencies are approximate across branches
- **Single scope**: No function/method boundary awareness in dependency tracking
- **Array index collapse**: `$a[0]` and `$a[1]` are treated as the same symbol
