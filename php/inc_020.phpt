<?php
function foo($row) {
    foreach ($row as $key => $value) {
        if (is_int($key)) {
            $key++;
        }
        if (isset($row[$key])) {
            return false;
        }
    }
    return true;
}
?>
OK
