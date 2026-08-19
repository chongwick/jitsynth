<?php
namespace A;

class A {
    public function change(array $config) {
        $config['keys'] = array_keys($config["a"]);;
    }
}

$a = new A();

$a->change($a = array("a" => range(1, 5)));
?>
okey
