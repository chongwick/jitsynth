<?php
function foo() {
    $a = array(1);
    $a[0] = $undef;
    for($i=0; $i<6; $i++) {
        $undef = 1;
    }
}
foo();
echo "ok\n";
?>
--EXPECTF--
Warning: Undefined variable $undef in %s on line %d
ok
