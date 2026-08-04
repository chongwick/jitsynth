<?php
function foo() {
    $ref1 = 2.3;
    $ref2 =& $ref1;
    $a = array();
    $b = $a;
    $c = $a;
    $a = $ref1;
    $x = $a;
    var_dump($x, $b, $c);
}
foo();
?>
