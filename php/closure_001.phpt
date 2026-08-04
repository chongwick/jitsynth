<?php
class Foo {
}

function bar() {
    return function () {
        return function () {
            return function () {
                return 42;
            };
        };
    };
}

$foo = new Foo;
$f = bar();

var_dump($f->call($foo));
var_dump($f->call($foo));
var_dump($f());
?>
--EXPECTF--
object(Closure)#3 (4) {
  ["name"]=>
  string(%d) "{closure:%s:%d}"
  ["file"]=>
  string(%d) "%s"
  ["line"]=>
  int(%d)
  ["this"]=>
  object(Foo)#1 (0) {
  }
}
object(Closure)#3 (4) {
  ["name"]=>
  string(%d) "{closure:%s:%d}"
  ["file"]=>
  string(%d) "%s"
  ["line"]=>
  int(%d)
  ["this"]=>
  object(Foo)#1 (0) {
  }
}
object(Closure)#3 (3) {
  ["name"]=>
  string(%d) "{closure:%s:%d}"
  ["file"]=>
  string(%d) "%s"
  ["line"]=>
  int(%d)
}
