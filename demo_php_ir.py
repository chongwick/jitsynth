#!/usr/bin/env python3
"""
Demo: Using the JitSynth PHP IR
================================

This file demonstrates the core capabilities of the PHP intermediate
representation (IR) used by JitSynth for PHP code generation and mutation.

Covered topics:
  1. Building IR graphs programmatically (no PHP source needed)
  2. Parsing PHP source files into IR via the Walker
  3. Rendering IR graphs back to PHP code
  4. Mutating IR graphs (data flow splicing, control flow splicing, operator mutation)
  5. Serializing / deserializing IR graphs with pickle
"""

import os
import sys
import pickle
import secrets

from sequence import Seq, FunctionBranch, FlowBranch
from seqNodes import (
    GenericSeqNode,
    FuncSeqNode,
    MiddleOpNode,
    FrontOpNode,
    RearOpNode,
    InnerOpNode,
    ArraySeqNode,
    ObjDecSeqNode,
    NonAssignmentNode,
)
from utils import new_name
from walker import Walker
from mutator import (
    stochastic_splice_dataflow,
    stochastic_splice_controlflow,
    modify_operation,
)


# ---------------------------------------------------------------------------
# Helper: render a Seq graph to a PHP string
# ---------------------------------------------------------------------------
def render_php(seq):
    """Convert a Seq IR graph into a PHP source string."""
    lines = []
    seq.output_env(lines)
    return "<?php\n" + "\n".join(lines) + "\n"


# ===================================================================
# 1. Building an IR graph by hand
# ===================================================================
def demo_build_ir():
    """
    Construct the following PHP entirely from IR nodes:

        $a = 10;
        $b = 3;
        $c = $a + $b;
        $d = !($c);
        $c++;
        $c += ($b);
    """
    print("=" * 60)
    print("1. Building an IR graph programmatically")
    print("=" * 60)

    # The top-level environment
    seq = Seq()
    rel_db = seq.get_rel_db()

    # -- scalar values --
    node_a = GenericSeqNode(10, "Scalar_Int")
    node_b = GenericSeqNode(3, "Scalar_Int")
    seq.check_in(node_a)
    seq.check_in(node_b)
    seq.set_node("a", node_a)
    seq.set_node("b", node_b)

    # -- binary operation: $c = $a + $b --
    left_key = seq.set_relation(node_a)
    right_key = seq.set_relation(node_b)
    node_add = MiddleOpNode(rel_db, left_key, right_key, "+")
    seq.check_in(node_add)
    seq.set_node("c", node_add)

    # -- unary prefix: $d = !($c) --
    c_key = seq.set_relation(node_add)
    node_not = FrontOpNode(rel_db, c_key, "!")
    seq.check_in(node_not)
    seq.set_node("d", node_not)

    # -- postfix increment: $c++ --
    c_key2 = seq.set_relation(node_add)
    node_inc = RearOpNode(rel_db, c_key2, "++")
    seq.check_in(node_inc)
    seq.set_node(node=node_inc)

    # -- compound assignment: $c += ($b) --
    b_key = seq.set_relation(node_b)
    node_plus_eq = InnerOpNode(rel_db, b_key, "+=")
    # InnerOpNode prints as `$name += ($val);` — we reuse node_add's name
    # so the output targets $c
    node_plus_eq.set_name(node_add.get_name())
    seq.check_in(node_plus_eq)
    seq.set_node(node=node_plus_eq)

    php = render_php(seq)
    print(php)
    return seq


# ===================================================================
# 2. Building an IR graph with control flow
# ===================================================================
def demo_control_flow():
    """
    Construct:

        $x = 5;
        $y = 10;
        $cond = $x == $y;
        if ($cond) {
            $z = $x + $y;
        }
    """
    print("=" * 60)
    print("2. Building an IR graph with control flow (if-branch)")
    print("=" * 60)

    seq = Seq()
    rel_db = seq.get_rel_db()

    node_x = GenericSeqNode(5, "Scalar_Int")
    node_y = GenericSeqNode(10, "Scalar_Int")
    seq.check_in(node_x)
    seq.check_in(node_y)
    seq.set_node("x", node_x)
    seq.set_node("y", node_y)

    # condition: $cond = $x == $y
    lk = seq.set_relation(node_x)
    rk = seq.set_relation(node_y)
    cond_node = MiddleOpNode(rel_db, lk, rk, "==")
    seq.check_in(cond_node)
    seq.set_node("cond", cond_node)

    # spawn an if-branch
    if_env = seq.spawn_env("Flow", flow_type="if")
    if_env.set_condition(cond_node, cond_node.get_name())

    # inside the branch: $z = $x + $y
    lk2 = seq.set_relation(node_x)
    rk2 = seq.set_relation(node_y)
    node_z = MiddleOpNode(rel_db, lk2, rk2, "+")
    seq.check_in(node_z)
    if_env.set_node("z", node_z)

    php = render_php(seq)
    print(php)
    return seq


# ===================================================================
# 3. Building a function definition
# ===================================================================
def demo_function_def():
    """
    Construct:

        function add($p1, $p2) {
            $r = $p1 + $p2;
            return $r;
        }
        $result = add(7, 3);
    """
    print("=" * 60)
    print("3. Building a function definition")
    print("=" * 60)

    seq = Seq()
    rel_db = seq.get_rel_db()

    # spawn function environment
    func_env = seq.spawn_env("Function", name="add")

    # define parameters
    param_a = GenericSeqNode(None, "param")
    param_b = GenericSeqNode(None, "param")
    seq.check_in(param_a)
    seq.check_in(param_b)
    func_env.set_node("p1", param_a)
    func_env.set_node("p2", param_b)
    func_env.set_params({
        "p1": seq.set_relation(param_a),
        "p2": seq.set_relation(param_b),
    })

    # function body: $r = $p1 + $p2
    lk = seq.set_relation(param_a)
    rk = seq.set_relation(param_b)
    add_node = MiddleOpNode(rel_db, lk, rk, "+")
    seq.check_in(add_node)
    func_env.set_node("r", add_node)

    # call site: $result = add(7, 3)
    arg1 = GenericSeqNode(7, "Scalar_Int")
    arg2 = GenericSeqNode(3, "Scalar_Int")
    seq.check_in(arg1)
    seq.check_in(arg2)
    call_node = FuncSeqNode(
        rel_db,
        "add",
        [seq.set_relation(arg1), seq.set_relation(arg2)],
        dependency=func_env,
    )
    seq.check_in(call_node)
    seq.set_node("result", call_node)

    php = render_php(seq)
    print(php)
    return seq


# ===================================================================
# 4. Parsing a PHP file into IR with the Walker
# ===================================================================
def demo_parse_php():
    """
    Use the Walker to parse an existing PHP file and display the IR
    metadata, then render it back to PHP.
    """
    print("=" * 60)
    print("4. Parsing a PHP file into IR via the Walker")
    print("=" * 60)

    test_file = os.path.join(os.path.dirname(__file__), "test_scripts", "test1.php")
    if not os.path.exists(test_file):
        print(f"  [skipped] {test_file} not found")
        return None

    w = Walker(debug=False)
    success, tree = w.analyze(test_file)

    print(f"  Source file : {test_file}")
    print(f"  Parse OK    : {success}")
    print(f"  Total nodes : {len(tree.output_all_nodes())}")

    buckets = tree.output_env_buckets()
    print(f"  Env buckets : {list(buckets.keys())}")
    for btype, envs in buckets.items():
        print(f"    {btype}: {len(envs)} environment(s)")

    print(f"  Functions   : {list(tree.get_defined_functions().keys())}")

    print("\n  --- Reconstructed PHP ---")
    php = render_php(tree)
    print(php)
    return tree


# ===================================================================
# 5. Mutation demos
# ===================================================================
def demo_mutations():
    """
    Show how the mutator splices and modifies IR graphs.
    """
    print("=" * 60)
    print("5. Mutating IR graphs")
    print("=" * 60)

    # Build two small graphs to splice together
    # Graph A: $a = 1; $b = 2; $c = $a + $b;
    seq_a = Seq()
    rel_a = seq_a.get_rel_db()
    n1 = GenericSeqNode(1, "Scalar_Int")
    n2 = GenericSeqNode(2, "Scalar_Int")
    seq_a.check_in(n1)
    seq_a.check_in(n2)
    seq_a.set_node("a", n1)
    seq_a.set_node("b", n2)
    lk = seq_a.set_relation(n1)
    rk = seq_a.set_relation(n2)
    n3 = MiddleOpNode(rel_a, lk, rk, "+")
    seq_a.check_in(n3)
    seq_a.set_node("c", n3)

    # Graph B: $x = 99; $y = $x * $x;
    seq_b = Seq()
    rel_b = seq_b.get_rel_db()
    nx = GenericSeqNode(99, "Scalar_Int")
    seq_b.check_in(nx)
    seq_b.set_node("x", nx)
    lk2 = seq_b.set_relation(nx)
    rk2 = seq_b.set_relation(nx)
    ny = MiddleOpNode(rel_b, lk2, rk2, "*")
    seq_b.check_in(ny)
    seq_b.set_node("y", ny)

    print("  -- Graph A (before mutation) --")
    print(render_php(seq_a))

    print("  -- Graph B (donor) --")
    print(render_php(seq_b))

    # 5a. Data flow splice: randomly swap relational-database entries
    stochastic_splice_dataflow(seq_a, seq_b, reps=2)
    print("  -- Graph A after data-flow splice --")
    # Reset printed flags so we can render again
    for n in seq_a.output_all_nodes():
        if hasattr(n, "printed"):
            n.printed = False
    print(render_php(seq_a))

    # 5b. Operator mutation: randomly change operator types
    modify_operation(seq_a)
    for n in seq_a.output_all_nodes():
        if hasattr(n, "printed"):
            n.printed = False
    print("  -- Graph A after operator mutation --")
    print(render_php(seq_a))


# ===================================================================
# 6. Serialize / Deserialize with pickle
# ===================================================================
def demo_pickle(seq):
    """
    Save an IR graph to a pickle file and load it back.
    """
    print("=" * 60)
    print("6. Serializing and deserializing IR graphs")
    print("=" * 60)

    if seq is None:
        print("  [skipped] no graph available to serialize")
        return

    tmp_path = f"/tmp/jitsynth_demo_{secrets.token_hex(4)}.pickle"

    with open(tmp_path, "wb") as f:
        pickle.dump(seq, f)
    print(f"  Saved graph to {tmp_path}")
    print(f"  File size: {os.path.getsize(tmp_path)} bytes")

    with open(tmp_path, "rb") as f:
        loaded = pickle.load(f)
    print(f"  Loaded graph: {len(loaded.output_all_nodes())} nodes")

    # Reset printed flags and render
    for n in loaded.output_all_nodes():
        if hasattr(n, "printed"):
            n.printed = False
    print("\n  --- Rendered from deserialized graph ---")
    print(render_php(loaded))

    os.remove(tmp_path)


# ===================================================================
# 7. Loading pre-built graphs from the graphs/ directory
# ===================================================================
def demo_load_existing():
    """
    Load a pre-built pickled graph from the graphs/ directory (if any
    exist) and display its structure.
    """
    print("=" * 60)
    print("7. Loading a pre-built graph from graphs/")
    print("=" * 60)

    graphs_dir = os.path.join(os.path.dirname(__file__), "graphs")
    if not os.path.isdir(graphs_dir):
        print("  [skipped] graphs/ directory not found")
        return

    pickles = [f for f in os.listdir(graphs_dir)
               if f.endswith(".pickle") and not f.endswith(".error.pickle")]
    if not pickles:
        print("  [skipped] no .pickle files in graphs/")
        return

    target = os.path.join(graphs_dir, pickles[0])
    with open(target, "rb") as f:
        tree = pickle.load(f)

    print(f"  File        : {target}")
    print(f"  Total nodes : {len(tree.output_all_nodes())}")

    # Summarize node types
    type_counts = {}
    for n in tree.output_all_nodes():
        t = type(n).__name__
        type_counts[t] = type_counts.get(t, 0) + 1
    for t, c in sorted(type_counts.items()):
        print(f"    {t}: {c}")

    buckets = tree.output_env_buckets()
    if buckets:
        print(f"  Env buckets : {list(buckets.keys())}")

    # Render first 30 lines
    for n in tree.output_all_nodes():
        if hasattr(n, "printed"):
            n.printed = False
    lines = []
    tree.output_env(lines)
    php = "<?php\n" + "\n".join(lines)
    preview = "\n".join(php.splitlines()[:30])
    print(f"\n  --- PHP preview (first 30 lines) ---")
    print(preview)
    if len(php.splitlines()) > 30:
        print(f"  ... ({len(php.splitlines()) - 30} more lines)")


# ===================================================================
# Main
# ===================================================================
if __name__ == "__main__":
    # 1. Build IR by hand
    hand_seq = demo_build_ir()

    # 2. Build IR with control flow
    ctrl_seq = demo_control_flow()

    # 3. Build IR with function definition
    func_seq = demo_function_def()

    # 4. Parse PHP source into IR (requires php + nikic/php-parser)
    parsed_seq = demo_parse_php()

    # 5. Mutation
    demo_mutations()

    # 6. Pickle round-trip
    demo_pickle(hand_seq)

    # 7. Load existing graph
    demo_load_existing()

    print("\n" + "=" * 60)
    print("Demo complete.")
    print("=" * 60)
