<?php
class Test {
    public ?string $prop = "0";
}
function test() {
    $obj = new Test;
    $ref =& $obj->prop;
    var_dump($ref &= 1);
}
test();
?>
