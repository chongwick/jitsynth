<?php
var_dump($i=1);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 5));
var_dump($br);
function foo() {
  var_dump("hello");
}
foo();
