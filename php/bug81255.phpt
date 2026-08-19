<?php
eval('class B {}');
class A extends B {
    private ?string $x = null;

    public function foo($a) {
        if (!($this->x = str_repeat($a, 5))) {
	        throw new Exception('ops');
        }
        var_dump($this->x);
        $this->x = null;
    }
}

$a = new A;
$a->foo('a');
$a->foo('b');
?>
