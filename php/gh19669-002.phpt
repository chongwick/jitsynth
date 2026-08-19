<?php
function test() {
    $a = PHP_INT_MIN;
    $b = -1;
    while ($b++ < 2) {
        $a = (int) (--$a + $a - $b);
    }
    return $a;
}
var_dump(test());
?>
--EXPECTF--
Warning: The float -1.8446744073709552E+19 is not representable as an int, cast occurred in %s on line %d
int(-10)
