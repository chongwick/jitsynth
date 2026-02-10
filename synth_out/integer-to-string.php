<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump(sprintf("%%%.2f", 1.23456789e10));
    }
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
