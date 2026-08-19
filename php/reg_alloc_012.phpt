<?php
function foo($a) {
    $b = $a;
    $b =! $a = $a + $b & $b & $bb = $a = $a + $b & $a;
    $a = $a + $b & $b & $b = $a;
}

for ($i = 0; $i < 3; $i++) {
    @foo(39087589046889428661);
}
?>
DONE
--EXPECTF--
DONE
