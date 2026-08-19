<?php
$a = [];
$a[] &= $b;
?>
--EXTENSIONS--
opcache
--EXPECTF--
Warning: Undefined variable $b in %s on line %d
