<?php
function test($value, bool $test)
{
    $value = (float) $value;

    if ($test) {
        return $value * 2;
    }

    return $value;
}

var_dump(test(1.25, true));
var_dump(test(1.25, false));
?>
