<?php
function define_const() {
    define("CUSTOM_CONSTANT", 1);
}
function test_defined() {
    var_dump(defined("CUSTOM_CONSTANT"));
    define_const();
    var_dump(defined("CUSTOM_CONSTANT"));
}

test_defined();
?>
