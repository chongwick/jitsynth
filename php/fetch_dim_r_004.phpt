<?php
function foo($n) {
    $a = "ABCDEF";
    try {
        var_dump($a[$n]);
    } catch (\TypeError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
foo(0);
foo(2);
foo(1.0);
foo("0");
foo("2");
foo(false);
foo(true);
foo(null);
foo("ab");
$x="a";
$y="b";
foo($x.$y);
foo("2x");
$x=2;
$y="x";
foo($x.$y);
?>
--EXPECTF--
string(1) "A"
string(1) "C"

Warning: String offset cast occurred in %s on line %d
string(1) "B"
string(1) "A"
string(1) "C"

Warning: String offset cast occurred in %s on line %d
string(1) "A"

Warning: String offset cast occurred in %s on line %d
string(1) "B"

Warning: String offset cast occurred in %s on line %d
string(1) "A"
Cannot access offset of type string on string
Cannot access offset of type string on string

Warning: Illegal string offset "2x" in %sfetch_dim_r_004.php on line 5
string(1) "C"

Warning: Illegal string offset "2x" in %sfetch_dim_r_004.php on line 5
string(1) "C"
