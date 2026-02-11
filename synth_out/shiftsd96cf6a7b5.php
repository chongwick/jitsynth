<?php
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
function do_throw() { throw new Exception; }
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$f = function () {};
$t = new Test;
$f->__invoke($t->bar(Test::foo(do_throw())));
$fp = fopen (__FILE__, "r");
debug_print_backtrace();
