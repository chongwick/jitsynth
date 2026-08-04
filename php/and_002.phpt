<?php
function t($a) {
    for($i = 0; $i < 2; $i++)
        $a &= $a = $a;
    }
t("");
?>
DONE
--EXPECTF--
DONE
