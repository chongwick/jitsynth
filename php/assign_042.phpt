<?php
class Test {
    public $prop;
    function __construct() {
        $this->prop = $this->retref();
    }
    function &retref() {
        return str_repeat("a", 5);
    }
}
$o = new Test();
var_dump($o);
?>
--EXPECTF--
Notice: Only variable references should be returned by reference in %sassign_042.php on line 8
object(Test)#1 (1) {
  ["prop"]=>
  string(5) "aaaaa"
}
