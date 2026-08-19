<?php
class A {
   public $x = 2;
}

class B {
   public $x = 3;
   public function __get($name) {
      var_dump("__get");
   }
}

function bar() {
   $a = new A();
   var_dump($a->x);
   var_dump($a->y);
   $b = new B();
   var_dump($b->x);
   unset($b->x);
   $b->x;
}

bar();
?>
--EXPECTF--
int(2)

Warning: Undefined property: A::$y in %s on line %d
NULL
int(3)
string(5) "__get"
