<?php
set_error_handler(function(y$y) {
});
$k=[];
$y[$k]++;
?>
--EXPECTF--
Fatal error: Uncaught TypeError: {closure:%s:%d}(): Argument #1 ($y) must be of type y, int given, called in %s on line %d and defined in %s:%d
Stack trace:
#0 %s(%d): {closure:%s:%d}(2, 'Undefined varia...', '%s', 5)
#1 {main}

Next TypeError: Cannot access offset of type array on array in %sfetch_dim_rw_004.php:5
Stack trace:
#0 {main}
  thrown in %sfetch_dim_rw_004.php on line 5
