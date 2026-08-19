<?php
class Test{
}

$test = new Test;
(function(){$this->y.=[];})->call($test);
?>
--EXPECTF--
Deprecated: Creation of dynamic property Test::$y is deprecated in %sassign_obj_op_001.php on line 6

Warning: Undefined property: Test::$y in %sassign_obj_op_001.php on line 6

Warning: Array to string conversion in %sassign_obj_op_001.php on line 6
