<?php
$im = imagecreate(800, 800);
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->startBuffering();
function foo() {
  var_dump("hello");
}
foo();
var_dump(baz());
