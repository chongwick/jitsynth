<?php
namespace A;

class A {
    private $evalParameters;
    public function evaluate() {
        $this->evalParameters = array("a" => "okey");
        extract($this->evalParameters, EXTR_SKIP);
        echo $a;
        return false;
    }
}

$a = new A();

$a->evaluate();
?>
