<?php
function test() {
    for($i=0; $i<10; $i++) {
        $a[] &= $y;
        $a = null;
        $a[] =& $y;
     }
}
test();
?>
DONE
--EXPECTF--
Warning: Undefined variable $a in %sassign_dim_010.php on line 4

Warning: Undefined variable $y in %sassign_dim_010.php on line 4
DONE
