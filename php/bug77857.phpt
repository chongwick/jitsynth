<?php
function test() {
    $arr = array_fill(0, 1, 1.0);
    $y = 0.0;
    foreach ($arr as $v) {
        $tmp = 1.0 * $v;
        var_dump($tmp);
        $y = $tmp/1.0;
    }
    return $y;
}
var_dump(test());
?>
