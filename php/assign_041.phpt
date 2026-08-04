<?php
class Test {
    public ?string $prop;
}
function test($val) {
    $obj = new Test;
    $ref =& $obj->prop;
    var_dump($ref = $val);
}
test(0);
?>
