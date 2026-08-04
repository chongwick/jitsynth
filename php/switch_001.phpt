<?php
function foo() {
    switch($y) {
        case 'x':
        case 'y':
    }
}
foo();
?>
DONE
--EXPECTF--
Warning: Undefined variable $y in %sswitch_001.php on line 4

Warning: Undefined variable $y in %sswitch_001.php on line 5
DONE
