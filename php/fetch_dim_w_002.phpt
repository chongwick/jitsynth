<?php
function test() {
    $b = [&$a[0]];
}
test();
?>
DONE
