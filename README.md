# jitsynth

Grammar-based PHP fuzzer for the PHP JIT. Synthesizes PHP scripts from JIT-exercising constraint trees by filling each slot with real source extracted from a seed corpus.

## How it works

A **JOC** (JIT Operation Constraint) describes the structural shape of a program: nested control regions and data operations. The synthesizer walks the constraint tree, picks matching statements from a corpus of ~500 seed PHP files, and assembles them — including each statement's full transitive dependency slice so variables are defined before use.

```
constraint:  [ControlComp('main'),                synthesized:  <?php
              [ControlComp('func'),                             function f_0() {
                DataComp('assign'),                                  $x = 42;
                DataComp('return')],                                 return $x;
              DataComp('func_call')]                            }
                                                                some_call($x);
```

## Quick start

```bash
# One-time: build the corpus cache (parses all seed PHP files via nikic/php-parser)
python3 driver.py --build-cache --seeds seeds/ -j 16

# Build the Rust driver (preferred for speed)
cargo build --release

# Generate one PHP script per constraint
./target/release/driver --synth jc/con_out/ --seeds seeds/ --out synth_out/

# Run the fuzz loop (synthesize -> run -> flag errors, forever)
./target/release/driver --fuzz jc/con_out/ --seeds seeds/ --out synth_out/
```

The Python driver (`python3 driver.py …`) accepts the same flags and is the fallback / cache-building path.

## Two drivers, one cache

`driver.py` is the original Python implementation. `src/` is a Rust port that loads the same `corpus_cache.pkl` and runs ~3.5× faster on full-corpus synthesis. Both produce equivalent output.

- **Use the Rust binary** for `--synth` and `--fuzz` — the hot paths.
- **Use the Python driver** for `--build-cache`, `--rebuild-cache`, and `--profile` — these touch the PHP AST parser, which only lives in Python. The Rust binary shells out to `python3 driver.py` automatically when you pass these flags.

## Layout

| Path | Role |
|---|---|
| `driver.py` | Python entry point: synth + fuzz + cache-build + profile |
| `src/` | Rust port of `driver.py` |
| `Cargo.toml` | Rust build config |
| `php_dependency_analyzer.py` | Per-file PHP statement dependency graph (Python, run-once) |
| `jc/comps.py` | `ControlComp` / `DataComp` JOC component classes |
| `jc/js_walker.py` | Generates JOC constraints from JS seeds (run-once) |
| `jc/con_out/` | Pickled constraint trees (~8.7k files) |
| `seeds/` | PHP seed corpus (~509 extensionless files) |
| `corpus_cache.pkl` | Pickled `(node_type_index, file_cache, results_cache)` — built once, read by every synth/fuzz run |
| `php_to_ast.sh`, `php_helpers/` | Shell + PHP scripts that invoke `nikic/php-parser` |
| `sanitize.sh` | Runs each synthesized script under PHP and writes `.er` / `.tr` markers |
| `synth_out/` | Default output directory for generated scripts |

## Commands

```bash
# Synth a single constraint
./target/release/driver --synth jc/con_out/some.pickle --seeds seeds/

# Synth all constraints, N variants each
./target/release/driver --synth jc/con_out/ --count 5 --out synth_out/

# Force cache rebuild (delegates to Python), then synth
./target/release/driver --synth jc/con_out/ --rebuild-cache -j 16

# Fuzz loop — runs forever, sanitizes each output, reports .er files
./target/release/driver --fuzz jc/con_out/ --seeds seeds/

# Profile seed corpus (Python only)
python3 driver.py --profile seeds/ -j 16

# Probability of inserting "join" variables linking consecutive data slots
./target/release/driver --synth jc/con_out/ --join-rate 0.3
```

See `CLAUDE.md` for the full architecture writeup, the COMP_TO_DESCRIPTIONS table, and known limitations.

## Build & deps

- **Python 3.10+**, `nikic/php-parser` (already vendored in `php_helpers/`), PHP CLI
- **Rust 1.75+** for the Rust port (`cargo build --release`)

The Rust port has no native Python dependency, but `--build-cache`/`--rebuild-cache`/`--profile` invoke `python3 driver.py` under the hood.
