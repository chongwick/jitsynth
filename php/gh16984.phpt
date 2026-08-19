<?php

final class Test {
  public int $integer = -1;

  public function foo(int $x) {
    return $x;
  }
}

function foo(Test $test, int $value) {
  $val = $test->foo($value);
  if ($val <= PHP_INT_MAX) {
    $test->integer = $val;
  }
}

function main() {
  $test = new Test;
  foo($test, 9223372036854775806);
  foo($test, 9223372036854775807); // Also reproduces without this call, but this imitates the psalm code
  var_dump($test->integer);
}

main();
?>
