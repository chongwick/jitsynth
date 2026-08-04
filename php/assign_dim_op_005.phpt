<?php
set_error_handler(function($_, $m){
    throw new Exception($m);
});
function test1() {
    $res = $a[$undef] = null;
}
function test2() {
    $res = $a[$undef] += 1;
}
try {
    test1();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
try {
    test2();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>
