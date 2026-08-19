<?php
set_error_handler(function() {
    (y);
});
$ret = new stdClass;
try {
    $ret = $y;
} catch (y) {
}
?>
--EXPECTF--
Fatal error: Uncaught Error: Undefined constant "y" in %sassign_055.php:3
Stack trace:
#0 %s(%d): {closure:%s:%d}(2, 'Undefined varia...', '%s', 7)
#1 {main}
  thrown in %sassign_055.php on line 3
