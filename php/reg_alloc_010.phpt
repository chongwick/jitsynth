<?php
function foo($y) {
    for (; $cnt < 6; $cnt++) {
        for ($i=0; $i <.1; $i++) 
            for(;$y;);
        [$i=$y];
    }
}
foo(null);
?>
DONE
--EXPECTF--
Warning: Undefined variable $cnt in %sreg_alloc_010.php on line 3

Warning: Undefined variable $cnt in %sreg_alloc_010.php on line 3
DONE
