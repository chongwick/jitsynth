<?php

$a = new Test();
$a->TestFunc();
var_dump($a->value);

class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
}

?>
