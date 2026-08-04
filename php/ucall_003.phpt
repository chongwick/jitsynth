<?php
function foo() {
  var_dump("hello");
}
function bar() {
  foo();
}
bar();
?>
