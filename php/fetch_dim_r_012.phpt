<?php
function foo() {
	$a = 0; $a1 = []; $a2 = [];
    for($i = 0; $i < 6; $i++) {
        $a1[] = &$y;
        $a2["$a1[$a] "] = $a += $y;
    }
    var_dump($a1, $a2);
}
foo();
?>
