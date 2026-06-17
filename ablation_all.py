"""Ablated fuzzer: no JoCs (Join-of-Components / Walker+Seq env model) and no
dependency slices (the relational-database splicing in fuzzer.py).

Instead of building a structured, dependency-aware sequence graph and recombining
typed components across scoped environments, this version simply harvests raw
*statement fragments* out of the seed corpus and appends 5-20 of them, picked
uniformly at random, to form a new PHP script. There is no notion of components,
environments, scopes, or protected (dependency) relations -- fragments are glued
together verbatim.

Usage:
    python3 ablation_all.py build      # (re)build the fragment corpus cache
    python3 ablation_all.py            # run the fuzzing loop (builds cache if missing)
    python3 ablation_all.py sample     # print one generated script to stdout
"""

import os
import sys
import json
import pickle
import codecs
import string
import secrets
import subprocess
from random import choice, randint

SEED_DIRECTORY = "seeds"
OUTPUT_DIRECTORY = "scripts"
FRAGMENT_CACHE = "fragment_corpus.pkl"

# A statement fragment is composed of randomly 5 - 20 fragments.
MIN_FRAGMENTS = 5
MAX_FRAGMENTS = 20

# Sub-statements that are never valid on their own (they only exist attached to a
# parent statement), so they make poor standalone fragments.
_NON_STANDALONE = {
    "Stmt_Else", "Stmt_ElseIf", "Stmt_Catch", "Stmt_Finally", "Stmt_Case",
}

# Mirror fuzzer.py's safety filter: skip fragments containing destructive calls.
_BANNED = (
    "posix_kill", "chmod", "posix_setrlimit",
    "exec", "passthru", "system", "shell_exec", "popen", "proc_open",
    "unlink", "rmdir", "rename", "chown", "chgrp", "symlink",
    "eval", "create_function", "assert", "dl", "pcntl_exec",
    "mail", "pcntl_fork", "pcntl_signal",
)


def _is_banned(fragment):
    return any(term in fragment for term in _BANNED)


def _parse_to_ast(seed_path):
    """Run the existing php-parser helper and return the top-level AST list."""
    try:
        command = ["bash", "./php_to_ast.sh", seed_path]
        child = subprocess.Popen(command,
                                 stdout=subprocess.PIPE,
                                 stderr=subprocess.PIPE,
                                 text=True)
        stdout, _stderr = child.communicate(timeout=120)
        child.kill()
        return json.loads(stdout)
    except Exception:
        return None


def _collect_statement_nodes(node, out):
    """Recursively gather every standalone statement node (nodeType 'Stmt_*')
    found anywhere in the AST, at any nesting depth."""
    if isinstance(node, dict):
        node_type = node.get("nodeType", "")
        if (node_type.startswith("Stmt_")
                and node_type not in _NON_STANDALONE
                and "attributes" in node
                and "startFilePos" in node["attributes"]
                and "endFilePos" in node["attributes"]):
            out.append(node)
        for value in node.values():
            _collect_statement_nodes(value, out)
    elif isinstance(node, list):
        for item in node:
            _collect_statement_nodes(item, out)


def _extract_fragments(seed_path):
    """Return the raw source text of every statement fragment in a seed.

    The php-parser reports BYTE offsets (startFilePos / endFilePos), so the file
    is read as bytes, sliced by byte offset, then decoded -- otherwise multi-byte
    UTF-8 seeds would slice at the wrong character index.
    """
    stmts = _parse_to_ast(seed_path)
    if not stmts:
        return []

    with open(seed_path, "rb") as f:
        source_bytes = f.read()

    nodes = []
    _collect_statement_nodes(stmts, nodes)

    fragments = []
    for node in nodes:
        start = node["attributes"]["startFilePos"]
        end = node["attributes"]["endFilePos"]
        fragment = source_bytes[start:end + 1].decode("utf-8", errors="ignore").strip()
        if fragment and not _is_banned(fragment):
            fragments.append(fragment)
    return fragments


def build_corpus():
    """Harvest statement fragments from every seed and cache them."""
    seeds = [os.path.join(SEED_DIRECTORY, i) for i in os.listdir(SEED_DIRECTORY)]
    corpus = []
    seen = set()
    for seed in seeds:
        for fragment in _extract_fragments(seed):
            if fragment not in seen:
                seen.add(fragment)
                corpus.append(fragment)
    with open(FRAGMENT_CACHE, "wb") as f:
        pickle.dump(corpus, f, protocol=pickle.HIGHEST_PROTOCOL)
    print("Built fragment corpus: {} unique fragments".format(len(corpus)))
    return corpus


def load_corpus():
    if not os.path.exists(FRAGMENT_CACHE):
        return build_corpus()
    with open(FRAGMENT_CACHE, "rb") as f:
        return pickle.load(f)


def generate_script(corpus):
    """Append 5 - 20 randomly chosen fragments into a single PHP script."""
    n = randint(MIN_FRAGMENTS, MAX_FRAGMENTS)
    chosen = [choice(corpus) for _ in range(n)]
    return "<?php\n" + "\n".join(chosen) + "\n"


def main():
    if len(sys.argv) > 1 and sys.argv[1] == "build":
        build_corpus()
        return

    corpus = load_corpus()
    if not corpus:
        print("Fragment corpus is empty; nothing to do.")
        return

    if len(sys.argv) > 1 and sys.argv[1] == "sample":
        print(generate_script(corpus))
        return

    os.makedirs(OUTPUT_DIRECTORY, exist_ok=True)
    is_error = lambda x: os.path.exists(x + ".er")
    is_trash = lambda x: os.path.exists(x + ".tr")

    count = 0
    while True:
        count += 1
        if count == 10:
            count = 0
            os.system("git clean -fd -e scripts -e php_seeds -e php "
                      "-e /ramdisk -e /graphs -e /graphs2")

        php_file = os.path.join(OUTPUT_DIRECTORY, secrets.token_hex(10) + ".php")
        try:
            output = generate_script(corpus)
            with codecs.open(php_file, "w", encoding="utf-8", errors="ignore") as f:
                f.write(output)
        except Exception:
            continue

        for i in range(2):
            command = ["bash", "./sanitize.sh",
                       os.path.join(os.getcwd(), php_file), str(i)]
            try:
                subprocess.run(command, text=True, timeout=30, capture_output=True)
            except subprocess.TimeoutExpired:
                break

        try:
            if is_trash(php_file):
                os.remove(php_file + ".tr")
            elif not is_error(php_file):
                os.remove(php_file)
        except Exception:
            continue


if __name__ == "__main__":
    main()
