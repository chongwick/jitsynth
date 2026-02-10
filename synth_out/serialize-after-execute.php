<?php
function f_0() {
    function f_1() {
        function f_2() {
            function test($s, $mode)
            {
                return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
            }
            return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
        }
        return "Object1";
    }
    return 42;
}
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
$descriptorspec = [STDIN, STDOUT, STDOUT];
for ($i = 1; $i <= 255; $i++) {
  echo "Testing $i\n";
  try {
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    var_dump($proc);
    proc_close($proc);
  } catch (Error) {}
}
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
proc_close($proc);
