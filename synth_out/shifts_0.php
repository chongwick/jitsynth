<?php
$i = 1;
var_dump($s["10"], isset($s["10"]));
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
php_cli_server_start($code, null, $args);
