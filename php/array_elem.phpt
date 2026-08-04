<?php

function test($a) {
    $ary = [$a];
    $ary2 = [0, $ary, $ary];
    return $ary2;
}
var_dump(test(1));

?>
