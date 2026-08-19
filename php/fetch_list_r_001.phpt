<?php
function test() {
    $v = 'a';
    list($$v) = "";
    var_dump($a);
}
test();
?>
--EXPECTF--
Warning: Cannot use string as array in %s on line %d
NULL
