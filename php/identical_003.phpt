<?php
function foo(array $a, int|float $n) {
	var_dump(count($a) === $n);
}
foo([1], 1);
?>
