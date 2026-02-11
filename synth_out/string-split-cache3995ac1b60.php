<?php
function foo() {
    $x = 1;
    $x += 0;
    ++$x; // mem -> reg
    return $x;
}
$date = '7.8.2010';
$unixtime = strtotime($date);
var_dump(foo());
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
$conn = odbc_connect($dsn, $user, $pass);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
rs as $d) {
;
