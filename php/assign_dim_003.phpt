<?php
function test() {
    var_dump($a[0] = $v);
}
test();
?>
--EXPECTF--
Warning: Undefined variable $v in %sassign_dim_003.php on line 3
NULL
