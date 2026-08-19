<?php
function test() {
    $a =& $v;
    $a = 0;
    $b = 0; 
    for ($i = 0; $i < 10; $i++) {
        $a *= 64;
        $b += $a;
        $a += $b + $a;
        $a++;
    }
}
test(); 
?>
DONE
