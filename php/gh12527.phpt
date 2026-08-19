<?php
function foo(array $a1) {
    $a2 = [];
    foreach ($a1 as $key => $val) {
        if (!$val) {
            $a2["bad"][] = $key;
        } else {
            $a2[0][] = $key;
        }
    }
    foreach ($a2 as $key => $val) {
    	var_dump($key);
    }
}
foo([1, 2, 3]);
foo([1, 2, 3]);
foo([0, 0]);
?>
