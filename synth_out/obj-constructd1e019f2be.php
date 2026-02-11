<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
class Foo {
    public function foo() {
        return $this;
    }

    public function __set($name, $value) {
        throw new Exception('Hello');
    }
}
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
$lazy = true;
$mem = $lazy ? 0 : 1;
function f_0() {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
}
function f_1() {
    $c = new C();
    $d = new D();
    $d->prop = $c;
}
$test = array("A\x00B" => "Hello world");
var_export($test);
$foo = new Foo();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$text = 'This is an ‘example’ of using DOM splitText';
$foo = new Foo;
$bar = (int)$foo;
var_dump($bar);
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
test("str");
$arr  = array("test");
list($a,$b) = is_array($arr)? $arr : $arr;
md5('foo');
