<?php
match(0){};
var_dump(new stdClass);
var_dump(3);
?>
--EXPECTF--
Fatal error: Uncaught UnhandledMatchError: Unhandled match case 0 in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
