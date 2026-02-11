<?php
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
$compressed[strlen($compressed)-2] = 'X';
$i = 1;
$k = 2 * $i;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
}
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
