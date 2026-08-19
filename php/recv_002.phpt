<?php

function test($a)
{
}

test();

?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to function test(), 0 passed in %srecv_002.php on line 7 and exactly 1 expected in %s:3
Stack trace:
#0 %s(7): test()
#1 {main}
  thrown in %s on line 3
