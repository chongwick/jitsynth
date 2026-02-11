<?php
function foo() {
  var_dump("hello");
}
foo();
$im = imagecreate(800, 800);
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
