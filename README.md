# jitsynth

Synthesizes PHP scripts from JIT-exercising constraint trees. Given a structural description of a program (its control flow skeleton and data operations), jitsynth fills each slot with real PHP source from a seed corpus to produce new PHP scripts that match the constraint's shape.

## How it works

jitsynth connects two sides:

- **JOC constraints** — nested trees of `ControlComp` and `DataComp` nodes describing the structural shape of JIT-exercising programs (e.g. "a function containing a for loop with an update, followed by three function calls")
- **PHP seed corpus** — ~509 real PHP scripts, analyzed at the statement level with dependency tracking

The synthesizer walks a constraint tree top-down and greedily fills each slot:
- **Control regions** (if, for, while, function, class, try, ...) get synthetic PHP wrappers
- **Data operations** (assign, func_call, update, return, ...) get randomly selected real PHP statements from the seed corpus, along with all their variable-defining dependencies

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

The first run parses all seed files and caches the index to `seeds/corpus_cache.pkl`. Subsequent runs load the cache instantly.

## CLI reference

```
python3 driver.py --synth <PATH> [--seeds DIR] [--count N] [--out DIR] [--rebuild-cache]
```

| Flag | Default | Description |
|---|---|---|
| `--synth PATH` | | Single `.pickle` file or directory of them |
| `--seeds DIR` | `./seeds` | Seed corpus directory |
| `--count N` | `1` | Number of scripts to generate per constraint |
| `--out DIR` | `./synth_out` | Output directory for generated `.php` files |
| `--rebuild-cache` | | Force rebuild of the corpus cache |

Other modes:

```bash
# Profile seed corpus — print per-type statement counts
python3 driver.py --profile seeds/

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
jc/con_out/                  ~497 constraint .pickle files
seeds/                       ~509 PHP seed scripts (extensionless)
seeds/corpus_cache.pkl       Auto-generated corpus cache
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
