<?php
$date = new DateTime("2011-05-17T22:14:12");
function f_0() {
    $x = 1.0;
    $x += 0;
    return ++$x;
}
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$varchar_col = odbc_result($res, "VARCHAR_COL");
date_default_timezone_set("UTC");
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
$tester = new FPM\Tester($cfg);
$tester->terminate();
$code = null;
var_dump(__METHOD__);
