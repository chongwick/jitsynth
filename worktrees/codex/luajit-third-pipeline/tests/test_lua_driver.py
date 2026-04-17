import tempfile
import unittest
from pathlib import Path

from jc.comps import ControlComp, DataComp

from lua_driver import (
    build_corpus_index,
    constraint_is_supported,
    lua_source_runs_clean,
    synthesize,
    synthesize_clean,
)


class LuaDriverTest(unittest.TestCase):
    def test_filters_constraints_with_unsupported_control_nodes(self):
        supported = [
            ControlComp("main"),
            [ControlComp("func"), DataComp("assign"), DataComp("return")],
            DataComp("func_call"),
        ]
        unsupported = [
            ControlComp("main"),
            [ControlComp("try"), DataComp("throw")],
        ]

        self.assertTrue(constraint_is_supported(supported))
        self.assertFalse(constraint_is_supported(unsupported))

    def test_synthesizes_from_a_small_lua_seed_corpus(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            seed_dir = Path(tmpdir) / "seeds"
            seed_dir.mkdir()
            (seed_dir / "seed.lua").write_text(
                "local function f(a)\n"
                "  local y = a + 1\n"
                "  return y\n"
                "end\n"
                "local x = 1\n"
                "f(x)\n",
                encoding="utf-8",
            )

            constraint = [
                ControlComp("main"),
                [ControlComp("func"), DataComp("assign"), DataComp("return")],
                DataComp("func_call"),
            ]

            node_type_index, file_cache, results_cache = build_corpus_index(str(seed_dir))
            lua_source = synthesize(constraint, node_type_index, file_cache, results_cache)

            self.assertIn("function ", lua_source)
            self.assertIn("f(", lua_source)

    def test_prefers_non_assert_calls_for_clean_seed_generation(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            seed_dir = Path(tmpdir) / "seeds"
            seed_dir.mkdir()
            (seed_dir / "seed.lua").write_text(
                "assert(false)\n"
                "print('ok')\n",
                encoding="utf-8",
            )

            constraint = [ControlComp("main"), DataComp("func_call")]

            node_type_index, file_cache, results_cache = build_corpus_index(str(seed_dir))
            lua_source = synthesize(constraint, node_type_index, file_cache, results_cache)

            self.assertIn("print('ok')", lua_source)
            self.assertNotIn("assert(false)", lua_source)

    def test_retries_until_validator_accepts_a_generated_seed(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            seed_dir = Path(tmpdir) / "seeds"
            seed_dir.mkdir()
            (seed_dir / "seed.lua").write_text("print('ok')\n", encoding="utf-8")

            constraint = [ControlComp("main"), DataComp("func_call")]

            node_type_index, file_cache, results_cache = build_corpus_index(str(seed_dir))
            attempts = {"count": 0}

            def validator(_source):
                attempts["count"] += 1
                return attempts["count"] >= 2

            lua_source = synthesize_clean(
                constraint,
                node_type_index,
                file_cache,
                results_cache,
                validator=validator,
                max_attempts=3,
            )

            self.assertGreaterEqual(attempts["count"], 2)
            self.assertIn("print('ok')", lua_source)

    def test_clean_validator_rejects_error_text_printed_to_stdout(self):
        source = (
            "local co = coroutine.create(function(a) return a + 1 end)\n"
            "print(coroutine.resume(co, 'x'))\n"
        )

        self.assertFalse(lua_source_runs_clean(source))


if __name__ == "__main__":
    unittest.main()
