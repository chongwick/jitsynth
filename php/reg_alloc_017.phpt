<?php
function test() {
    for($i = 0; $i < 10; $i++) {
        $a = $b = $a + !$a = !$a;
        $c = $c = $a;
        $c % $a;
    }
}
@test();
?>
DONE
