<?php
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj);
$text = 'This is an ‘example’ of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($text);
$matched = $node->splitText($start);
$matched->splitText($length);
