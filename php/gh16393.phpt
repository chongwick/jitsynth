<?php
ini_set('opcache.jit', 'tracing');
class Test {
}
$appendProp2 = (function() {
})->bindTo($test, Test::class);
$appendProp2();
?>
--EXPECTF--
Warning: Undefined variable $test in %sgh16393.php on line 6
