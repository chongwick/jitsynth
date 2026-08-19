<?php
#[AllowDynamicProperties]
class C {
    var $a = 0;
}
function foo() {
    $x = new C;
    $x->a = 1;
    unset($x->a);
    $x->a = 3;
    var_dump($x);
}
function bar() {
    $x = new C;
    $x->a = 1;
    $x->b = 2;
    unset($x->a);
    $x->a = 3;
    var_dump($x);
}
foo();
bar();
?>
