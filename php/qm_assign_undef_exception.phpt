<?php
set_error_handler(function($_, $m) { throw new Exception($m); });
function test() {
    $a = $b;
    X;
}
try {
    test();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>
