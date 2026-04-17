import unittest

from lua_dependency_analyzer import (
    build_statement_dependencies,
    get_dependency_closure,
    get_dependency_slice,
    get_source_slice,
)


class LuaDependencyAnalyzerTest(unittest.TestCase):
    def test_dependency_slice_includes_prior_definition(self):
        source = "local x = 1\nx = x + 2\nreturn x\n"

        results = build_statement_dependencies(source)

        self.assertEqual(len(results), 3)
        self.assertEqual(get_dependency_closure(results, 1), [0, 1])
        self.assertEqual(get_source_slice(results, 1, source), "x = x + 2")
        self.assertEqual(
            get_dependency_slice(results, 1, source),
            "local x = 1\nx = x + 2",
        )

    def test_canonicalizes_table_symbols_and_loop_bindings(self):
        source = "obj.key = arr[i]\nfor k, v in pairs(t) do print(k, v) end\n"

        results = build_statement_dependencies(source)

        self.assertEqual(results[0]["description"], "Assign")
        self.assertIn("obj.key", results[0]["defs"])
        self.assertIn("arr[*]", results[0]["uses"])
        self.assertIn("i", results[0]["uses"])
        self.assertEqual(results[1]["description"], "For (region)")
        self.assertIn("k", results[1]["defs"])
        self.assertIn("v", results[1]["defs"])
        self.assertIn("t", results[1]["uses"])

    def test_emits_semantic_tags_for_update_throw_and_unary(self):
        source = "x = x + 1\nerror(msg)\ny = -x\n"

        results = build_statement_dependencies(source)

        self.assertIn("update", results[0]["semantic_tags"])
        self.assertIn("throw", results[1]["semantic_tags"])
        self.assertIn("unary", results[2]["semantic_tags"])

    def test_call_source_slice_keeps_the_callee_name(self):
        source = "assert('5' + b == '5')\n"

        results = build_statement_dependencies(source)

        self.assertEqual(get_source_slice(results, 0, source), "assert('5' + b == '5')")


if __name__ == "__main__":
    unittest.main()
