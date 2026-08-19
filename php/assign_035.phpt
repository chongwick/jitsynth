<?php

class A {

  public function test() {
    $closure = function() { return "string"; };

    $arr = [
      'a' => $closure(),
      'b' => [$closure() => [],],
     ];

    $x = $arr;
    unset($x['b'][$closure()]['d']);

    $x = $arr;
    $x['a'] = $closure();

    return "okey";
  }
}

$a = new A();
echo $a->test();
?>
