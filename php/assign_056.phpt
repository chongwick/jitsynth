<?php
class Test {
    static ?Test $test;
}

$a = new Test;
Test::$test = &$a;
var_dump($a = new Test);
?>
