<?php
function test($key) {
    $ao = new ArrayObject();
    $ao[$key] = 1 < $ao['321'] = 2;
}
test('0');
?>
DONE
--EXPECTF--
DONE
