<?php
class Test {
    public $prop = 0;
}
function test1($test) {
    $test[0] %= 3;
    return $test;
}
function test2($test) {
    $test->prop %= 3;
    return $test;
}
var_dump(test1([0]));
var_dump(test2(new Test));
?>
