<?php
$a = null; // the problem only occurs when set to NULL
test($a, 'y');

function test($str, $pad) {
	$x = $str . str_repeat($pad, 15); // $x now contains "yyyyyyyyyyyyyyy"
	var_dump($x);

	$gft = new gft();
	$gft->info(33);

	// $x has been changed ????
	// $x contains what was echoed in the function 'info'
	var_dump($x);
}
class gft {
	private $strVal = 'abcd ';
	public function info($info, $prefix = ' Info:') {
		echo $this->strVal.$prefix.serialize($info).'aaaa';
		echo "\n";
	}
}
?>
