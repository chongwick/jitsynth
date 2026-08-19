<?php
function test() {
    for ($i = 0; $i < 10; $i++) {
        $obj = new stdClass;
        $obj->x[0] = null;
        $obj->x > $obj->x[0] = null;
    }
}
test();
?>
DONE
