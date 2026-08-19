<?php
function test() {
    for ($i = 0; $i < 2; $i++) {
        $a = $a;
        "-" . $b;
        $b = [];
        unset($a);
    }
}
test();
?>
DONE
--EXPECTF--
Warning: Undefined variable $a in %sqm_assign_002.php on line 4

Warning: Undefined variable $b in %sqm_assign_002.php on line 5

Warning: Undefined variable $a in %sqm_assign_002.php on line 4

Warning: Array to string conversion in %sqm_assign_002.php on line 5
DONE
