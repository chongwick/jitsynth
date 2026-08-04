<?php
function test() {
    $a = null;
    for ($i = 0; $i < 6; $i++) {
        var_dump($a);
        $a = $a + $a = +$a = $b;
    }
}
test();
?>
--EXPECTF--
NULL

Warning: Undefined variable $b in %sassign_046.php on line 6
int(0)

Warning: Undefined variable $b in %sassign_046.php on line 6
int(0)

Warning: Undefined variable $b in %sassign_046.php on line 6
int(0)

Warning: Undefined variable $b in %sassign_046.php on line 6
int(0)

Warning: Undefined variable $b in %sassign_046.php on line 6
int(0)

Warning: Undefined variable $b in %sassign_046.php on line 6
