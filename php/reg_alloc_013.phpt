<?php
function foo() {
    $j++;
    $j++ % $j -= $a % $a = $j;
}
foo();
?>
DONE
--EXPECTF--
Warning: Undefined variable $j in %sreg_alloc_013.php on line 3
DONE
