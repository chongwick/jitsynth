<?php
class A {
    public string $prop = "222";
}

class B {
    public function __toString() {
        global $a;
        $a->prop .=  $a->prop . "leak";
        return "test";
    }
}

$a = new A;
$prop = &$a->prop;
$a->prop = new B;
var_dump($a);
?>
