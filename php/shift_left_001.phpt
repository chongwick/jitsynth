<?php
function shl(int $a, int $b) {
    return $a << $b;
}
var_dump(shl(1, 0));
var_dump(shl(1, 1));
var_dump(shl(1, 2));
var_dump(shl(-1, 2));
try {
    var_dump(shl(1, 64));
} catch (Throwable $e) {
    echo "Exception " . $e->getMessage() . "\n";
}
try {
    var_dump(shl(1, -1));
} catch (Throwable $e) {
    echo "Exception (" . get_class($e) . "): " . $e->getMessage() . "\n";
}
?>
