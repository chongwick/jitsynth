<?php
function test(?int $i) {
    $a = (array) $i;
    $a[-1] = 1;
    var_dump($a);
}
test(null);
?>
