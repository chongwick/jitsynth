<?php
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
function f_0() {
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    ;
}
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$c = $b;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $obj = new Test;
    $name = "foo";
    var_dump(empty($obj[$name]));
}
function f_2() {
    $pdo = MySQLPDOTest::factory();
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
}
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
setlocale(LC_ALL, "C");
$s = "1234567890a";
var_dump($s["010"], isset($s["010"]));
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
