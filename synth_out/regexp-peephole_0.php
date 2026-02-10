<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump(array_all([$key => 1], static fn () => false));
    }
}
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
