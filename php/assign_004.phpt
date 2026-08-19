<?php
function foo() {
    $a = null;
    $b = $a;
    $c = null;
    $d = $c;
    $a = 1;
    $c = $a;
    return $c;
}
var_dump(foo());
?>
