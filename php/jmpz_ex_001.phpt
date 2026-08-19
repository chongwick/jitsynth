<?php
class Test {
    public $prop;
    public function method() {
        return $this->prop && $this->prop->method2();
    }
}

class Test2 {
    public function method2() {
        return true;
    }
};

$test = new Test;
$test->prop = new Test2;
var_dump($test->method());

?>
