<?php
function test(array... $args) {
    var_dump($args);
}
class Foo {
  public $bar = "bat";
}
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$args[] = php_ini_loaded_file();
function f_0() {
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $result = $stmt->get_result();
}
var_dump($args);
$foo = new Foo;
$bar = (int)$foo;
var_dump($bar);
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$document = new \DOMDocument();
var_dump($document->saveHTML());
