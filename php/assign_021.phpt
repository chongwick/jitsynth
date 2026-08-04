<?php
function foo() {
    $a = array();
    $b = $a;
    $c = 1;
    $d = $a = $c;
    var_dump($b, $d);
}
foo();
?>
