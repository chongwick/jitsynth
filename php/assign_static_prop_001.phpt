<?php
class Foo {
    public static $prop;
}

function test($x) {
    $a = [$x];
    Foo::$prop = $a;
    $a = 42;
}
test(42);
var_dump(Foo::$prop);
?>
