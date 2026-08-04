<?php
function test($cond): ?int {
    if ($cond) {
        $i = 'foo';
    }
    return $i;
}

var_dump(test(false));
var_dump(test(false));
?>
--EXPECTF--
Warning: Undefined variable $i in %sgh16499.php on line 6

Warning: Undefined variable $i in %sgh16499.php on line 6
NULL

Warning: Undefined variable $i in %sgh16499.php on line 6

Warning: Undefined variable $i in %sgh16499.php on line 6
NULL
