<?php
function foo() {
    $a = array();
    $b = $a;
    $c = array();
    $d = $c;
    $a = 1;
    $c = $a;
    return $c;
}
var_dump(foo());
?>
