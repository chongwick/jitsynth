<?php
function f_0() {
    return 0;
}
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
var_dump(strncmp("test ", "e", 10));
