<?php
function test() {
    $obj = new stdClass;
    $obj->prop =& $obj;
    var_dump($obj->prop);
}
test();
?>
