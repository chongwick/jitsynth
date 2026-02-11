<?php
$counter = 0;
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$root = simplexml_load_string($xml);
var_dump(soundex("Euler")       == soundex("Ellery"));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
