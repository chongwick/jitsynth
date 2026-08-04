<?php
function test() {
	$a = [];
    for ($i=0; $i < 2; $i++) {
        $a += $a + $a += $a;
        $a['b'] += 1;
    }
}
test();
?>
DONE
--EXPECTF--
Warning: Undefined array key "b" in %sassign_op_007.php on line 6
DONE
