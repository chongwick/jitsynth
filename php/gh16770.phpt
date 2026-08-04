<?php
function ret_undef($k) {
    return $undefined;
}
for ($i = 0; $i < 10; $i++) {
    $output = ret_undef($i);
}
var_dump($output);
?>
--EXPECTF--
Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d

Warning: Undefined variable $undefined in %s on line %d
NULL
