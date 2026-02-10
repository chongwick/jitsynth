<?php
$textascii = 'This is an "example" of using DOM splitText';
rt = 30;
$le
gth = 3;

$d
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($textascii);
$do
ched = $node->splitText($start);
$ma
ched->splitText($length);
pri;
var_dump(mysqli_get_server_version($link));
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$b = bar($gen);
$b->rewind();
