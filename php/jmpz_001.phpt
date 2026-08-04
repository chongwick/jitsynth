<?php
namespace A;

function test() {

    $modelData = array();
    $ret = false ||
        ((is_array($modelData) || $modelData instanceof \Countable) && true) || false;
    return $ret;
}

var_dump(test());
?>
