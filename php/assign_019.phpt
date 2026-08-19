<?php
function foo() {
    $c = array();
    $d =& $c;
    $a = 1;
    $b = 2;
    $c = $a = $b;
    var_dump($c, $d);
}
foo();
?>
