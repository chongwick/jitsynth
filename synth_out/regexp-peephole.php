<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $filename = "bug51997.bz2";
        $bz = bzopen($filename, "w");
        bzclose($bz);
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
