<?php
class string1 {
  public function __toString() {
    return "Object";
  }
}
function bar($x='no argument')
{
    throw new Exception("This is an exception from bar({$x}).");
}
function f_0() {
    $b = 1;
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    $x = 1.0;
    $x += 0;
    return ++$x;
}
function f_1() {
    return new stdClass();
}
$obj = new string1;
$url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
var_dump(urlencode(file_get_contents($url)));
bar('first try');
$im = imagecreatetruecolor(1, 1);
imagescale($im, 0, 1, 0);
