<?php
$date1 = new DateTime("Tuesday");
function f_0() {
    $output = array();
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    return 'B';
}
$arc_name = __DIR__ . "/bug40228.zip";
$zip = new ZipArchive;
$zip->open($arc_name, ZIPARCHIVE::CREATE);
function f_1() {
    return 'B';
}
$s = "1234567890a";
var_dump($s["10"], isset($s["10"]));
class Foo {
  public $bar = "bat";
}
$foo = new Foo;
$bar = (int)$foo;
var_dump($bar);
