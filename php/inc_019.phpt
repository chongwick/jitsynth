<?php
function bar($b) {
    if ($b) {
        $a = 1;
    } else {
        $a = 2;
    }
    isset($a);
    var_dump($a++);
    return $a;
}
var_dump(bar(0));
?>
