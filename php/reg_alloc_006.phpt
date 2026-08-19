<?php
function foo() {
	$a = 0;
    for($i=0; $i < 6; $i++) {
        $y - $b = $a ? $b : $y;
        $a = $b = 7;
     }
}
foo()
?>
DONE
--EXPECTF--
Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5

Warning: Undefined variable $y in %sreg_alloc_006.php on line 5
DONE
