<?php
function foo($a) {
    $b = $a;
    $b =! $a = $a + $b & $b & $b = $b = $a = $a + $b & $a += $a;
    $b = $b = $a = $a + $b & $b & $b = $a = $a + $b = $b = $a = $a + $b = $a += $a;
}

for ($i = 0; $i < 3; $i++) {
    @foo(39087589046889428661);
}
?>
DONE
