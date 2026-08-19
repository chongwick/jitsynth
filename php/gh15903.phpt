<?php
for ($i = 0; $i < 2; ++$i) { //This must run >=2 (increasing the number of elements in the array *2 will not do)
foreach (array_fill(0, 389, 'x') as &$params) { //Will not trigger <389
$x[] = new foo;
}
}
?>
--EXPECTF--
Fatal error: Uncaught Error: Class "foo" not found in %sgh15903.php:4
Stack trace:
#0 {main}
  thrown in %sh15903.php on line 4
