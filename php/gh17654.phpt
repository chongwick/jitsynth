<?php
trait TestTrait {
	public function addUnit(string $x) {
		self::addRawUnit($this, $x);
	}

	public function addRawUnit(self $data, string $x) {
		var_dump($x);
	}
}

class Test {
	use TestTrait;
}

class Test2 {
	use TestTrait;
}

function main()
{
	(new Test2)->addUnit("test2");
	(new Test)->addUnit("test");
}

main();
?>
