<?php
function ref () {
}
class Foo {
      static $i;
      static string $s;
}
Foo::$i = 1;
Foo::$s = Foo::$i;
var_dump(Foo::$s -= ref());
?>
