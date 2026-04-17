import subprocess
import tempfile
import unittest
from pathlib import Path


REPO_ROOT = Path("/Users/danielchong/Repositories/jitsynth/worktrees/codex/luajit-third-pipeline")


class SanitizeLuaTest(unittest.TestCase):
    def test_runtime_error_is_classified_as_trash(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            script = Path(tmpdir) / "runtime_error.lua"
            script.write_text("error('boom')\n", encoding="utf-8")

            subprocess.run(
                ["bash", str(REPO_ROOT / "sanitize_lua.sh"), str(script)],
                cwd=REPO_ROOT,
                check=False,
            )

            self.assertTrue(script.with_suffix(".lua.tr").exists())

    def test_syntax_error_is_classified_as_trash(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            script = Path(tmpdir) / "syntax_error.lua"
            script.write_text("local function (\n", encoding="utf-8")

            subprocess.run(
                ["bash", str(REPO_ROOT / "sanitize_lua.sh"), str(script)],
                cwd=REPO_ROOT,
                check=False,
            )

            self.assertTrue(script.with_suffix(".lua.tr").exists())

    def test_assertion_failure_is_classified_as_error(self):
        with tempfile.TemporaryDirectory() as tmpdir:
            script = Path(tmpdir) / "assert_fail.lua"
            script.write_text("assert(false)\n", encoding="utf-8")

            subprocess.run(
                ["bash", str(REPO_ROOT / "sanitize_lua.sh"), str(script)],
                cwd=REPO_ROOT,
                check=False,
            )

            self.assertTrue(script.with_suffix(".lua.er").exists())


if __name__ == "__main__":
    unittest.main()
