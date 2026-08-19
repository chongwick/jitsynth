<?php
function foo(&$a) {
    $n = count($a);	
    $a = $a + [$n=>1];
}
function bar() {
    $x = [];
    for ($i = 0; $i < 200; $i++) {
        foo($x);
    }
    var_dump(count($x));
}
bar();
?>
