<?php
function foo(bool $test, int $x) {
    if (($test ? $x >= 1 : $x > 1)) {
        return 1;
    }
    return 0;
}
var_dump(foo(true, 9));
?>
