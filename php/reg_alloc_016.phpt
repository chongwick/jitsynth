<?php
function foo() {
    for($cnt = 0; $cnt < 6; $cnt++) {
    	var_dump($x);
        $a - 536 >> 4 - $y - 4 << ++$x == $a ?: $b;
        $a .= !$a;
        $x = $a ? $b : $b;
    }
}
@foo();
?>
DONE
--EXPECTF--
NULL
NULL
NULL
NULL
NULL
NULL
DONE
