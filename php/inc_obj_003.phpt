<?php
class Test {
    public float $prop = 1.0;
}
$test = new Test;
$r = &$test->prop;
$v = --$test->prop;
var_dump($v);
?>
