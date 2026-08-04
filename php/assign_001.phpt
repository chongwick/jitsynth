<?php
function foo() {
    $a = array();
    $b = $a;
    $c = $a;
    $a = 1;
    $x = $a;
    var_dump($x, $b, $c);
}
foo();
?>
