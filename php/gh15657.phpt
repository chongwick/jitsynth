<?php
// Triggering the inheritance cache via implementing this interface is important to reproduce the bug
interface I {}

class A implements I {
    private $_prop;
    public $prop {
        get => $this->_prop;
    }
}
echo "Done\n";
?>
