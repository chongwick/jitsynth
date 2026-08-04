<?php
function test($x) {
    if ($x) {
        unknown($value);
    }
    var_dump($value = INF);
}
test(false);
?>
