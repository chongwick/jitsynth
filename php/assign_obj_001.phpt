<?php
function test1($o) {
    $o->x = new stdClass;
}
function test2($o) {
    $o->x += new stdClass;
}

try {
    test1(null);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

try {
    test2(null);
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
