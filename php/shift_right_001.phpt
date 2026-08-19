<?php
function shr(int $a, int $b) {
    return $a >> $b;
}
var_dump(shr(256, 0));
var_dump(shr(256, 1));
var_dump(shr(256, 2));
var_dump(shr(-8, 2));
try {
    var_dump(shr(1, 64));
} catch (Throwable $e) {
    echo "Exception " . $e->getMessage() . "\n";
}
try {
    var_dump(shr(-1, 64));
} catch (Throwable $e) {
    echo "Exception " . $e->getMessage() . "\n";
}
try {
    var_dump(shr(1, -1));
} catch (Throwable $e) {
    echo "Exception (" . get_class($e) . "): " . $e->getMessage() . "\n";
}
?>
