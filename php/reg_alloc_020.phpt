<?php
function foo() {
    for($j=0; $j<6; $j++) {
        $y = $a;
        $a = 6;
        for(;$i;);
    }
}
@foo();
?>
DONE
--EXPECTF--
DONE
