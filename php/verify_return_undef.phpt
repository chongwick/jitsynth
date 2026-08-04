<?php

function test(): int {
    return $undef;
}

try {
    test();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECTF--
Warning: Undefined variable $undef in %s on line %d
test(): Return value must be of type int, null returned
