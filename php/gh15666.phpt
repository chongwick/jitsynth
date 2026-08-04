<?php

function test() {
    require 'dummy.inc';
    global $foo, $bar;
    $foo |= $bar;
}

echo "Done\n";

?>
