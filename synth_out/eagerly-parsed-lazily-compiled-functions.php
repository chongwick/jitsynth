<?php
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
ob_clean();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
