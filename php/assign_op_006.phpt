<?php
function test($a) {
    for ($i = 0; $i < 2; $i++) {
        $a .= $a = $a;
    }
}
test("");
?>
DONE
