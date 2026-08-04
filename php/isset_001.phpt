<?php
function test() {
    var_dump(isset($a[$undef]));
}
test();
?>
--EXPECTF--
Warning: Undefined variable $undef in %s on line %d
bool(false)
