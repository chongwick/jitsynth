<?php
$a[] &= 1;
?>
--EXPECTF--
Warning: Undefined variable $a in %s on line %d
