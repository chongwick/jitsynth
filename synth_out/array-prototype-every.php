<?php
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
}
global $box;
$box->value = null;
function test($box) {
    var_dump($box->value = new Test);
}
var_dump($box->value = new Test);
