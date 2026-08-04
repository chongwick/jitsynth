<?php
function shl0(int $a) {
    return $a << 0;
}
function shl1(int $a) {
    return $a << 1;
}
function shl2(int $a) {
    return $a << 2;
}
function shl64(int $a) {
    return $a << 64;
}
function shlNEG(int $a) {
    return $a << -1;
}
var_dump(shl0(1));
var_dump(shl1(1));
var_dump(shl2(1));
var_dump(shl2(-1));
try {
    var_dump(shl64(1));
} catch (Throwable $e) {
    echo "Exception " . $e->getMessage() . "\n";
}
try {
    var_dump(shlNEG(1));
} catch (Throwable $e) {
    echo "Exception (" . get_class($e) . "): " . $e->getMessage() . "\n";
}
?>
