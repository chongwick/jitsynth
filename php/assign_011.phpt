<?php
function foo() {
    $a = 1;
    $c = 2;
    $d = 3;
    if ($a) {
        $b = array();
    } else {
        $b =& $c;
    }
    $b = $d;
    var_dump($b, $c);
}
foo();
?>
