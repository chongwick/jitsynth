<?php
class string1 {
  public function __toString() {
    return "Object";
  }
}
$count = 1;
$count++;
$obj = new string1;
var_dump( rtrim($obj, "tc") );
