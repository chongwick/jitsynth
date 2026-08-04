<?php
function test() {
	$a = $b = $x = 0; $c = null;
    for ($i = 0; $i < 20; $i++) {
        $x .= $b;
        $x = $a ? $b : $c;
        $a &= $x != $a ? $b : $c;
        $x = $a ? $b : $c;
        $a &= $x != $a ? $b : $c;
        $x != $a ?: $c;
        $a--;
    }
}
test();
?>
DONE
