<?php
class A {
    public function process($call) {
        $i = 0;
        foreach (array("a", "b", "c") as $attr) {
            $call($i++, "xxx");
        }
    }
}

$a = new A();
$a->process(function($i, $v) { var_dump($i); });
?>
