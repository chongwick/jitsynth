<?php
function test() {
    echo "";
}

$a = [];
$a[test()] ??= 1;
var_dump($a);
?>
--EXPECTF--
Deprecated: Using null as an array offset is deprecated, use an empty string instead in %s on line %d

Deprecated: Using null as an array offset is deprecated, use an empty string instead in %s on line %d
array(1) {
  [""]=>
  int(1)
}
