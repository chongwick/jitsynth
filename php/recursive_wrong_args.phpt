<?php
function f($arg) {
    f();
}
try {
    f();
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECTF--
Too few arguments to function f(), 0 passed in %s on line %d and exactly 1 expected
