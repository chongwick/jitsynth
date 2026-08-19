<?php
function foo() {
    $arr[0][0] = $ref;
    for($cnt=0;$cnt<6;$cnt++) {
        $ref = 1;
        $arr[0][0] = $ref;
    }
}
foo();
echo "ok\n";
?>
--EXPECTF--
Warning: Undefined variable $ref in %s on line %d
ok
