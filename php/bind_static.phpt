<?php
function test() {
    static $N = UNDEFINED;
    throw new Exception;
}
try {
    test();
} catch (Error $e) {
    echo $e->getMessage(), "\n";
}

?>
