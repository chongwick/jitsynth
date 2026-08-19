<?php
function &a($i) {
    $a = "str". $i;
    return $a;
}

class A {
    public $a;
    public function test() {
        $this->a = a(1);
    }
}

$a = new A;
$a->test();
$a->test();
?>
DONE
