<?php
json_encode($y)->y++;
?>
--EXPECTF--
Warning: Undefined variable $y in %sinc_obj_005.php on line 2

Fatal error: Uncaught Error: Attempt to increment/decrement property "y" on string in %sinc_obj_005.php:2
Stack trace:
#0 {main}
  thrown in %sinc_obj_005.php on line 2
