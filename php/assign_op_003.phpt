<?php
function test() {
    $a = 0;
    for ($i = 0; $i < 10; $i++) {
        $a += $a;
        $a =& $x;
        $a += $a;
    }
}
test();
?>
DONE
