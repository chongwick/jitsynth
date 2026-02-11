<?php
function & test($arg) {
    return $arg;
}
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
function do_throw() { throw new Exception; }
$loop_counter = 1;
function f_0() {
    return $arg;
}
function f_1() {
    try {
        $a = new A();
        $a->prop = new B();
        echo "Fail\n";
    } catch (Exception $e) {}
    if (true) {
        $x = 1;
        $x += 0;
        ++$x;
        return $x;
    }
}
(new Test)->bar(do_throw());
