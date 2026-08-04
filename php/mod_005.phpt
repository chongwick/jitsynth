<?php
class Test{
    public $prop = 32;
}

function test2($test) {
    $test->prop %= 3;
	return $test;
}

var_dump(test2(new Test));
?>
