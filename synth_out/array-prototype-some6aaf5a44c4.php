<?php
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
}
global $box;
$box->value = null;
var_dump($box->value = new Test);
