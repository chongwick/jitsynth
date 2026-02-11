<?php
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
var_dump($h1->length);
