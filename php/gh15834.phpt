<?php
class A {
    public $_prop = 1;
    public $prop {
        get => $this->_prop;
    }
}

$a = new A;
for ($i=0;$i<5;$i++) {
    echo $a->prop;
    $a->_prop++;
}
?>
