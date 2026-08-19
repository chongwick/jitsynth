<?php
function test($c) {
    if ($c) {
        $a[] = null;
    }
    foreach ($a as $k) {}
}
test(false);
?>
--EXPECTF--
Warning: Undefined variable $a in %s on line %d

Warning: foreach() argument must be of type array|object, null given in %s on line %d
