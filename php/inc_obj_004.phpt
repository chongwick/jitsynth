<?php
class Test {
    public $prop;
    function foo() {
        $this->prop = PHP_INT_MAX-5;
        for ($i = 0; $i - 15; $i++) {
            var_dump(++$this->prop);
        }
    }
}
$test = new Test;
$test->foo();
?>
--EXPECTF--
int(%d)
int(%d)
int(%d)
int(%d)
int(%d)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
float(%f)
