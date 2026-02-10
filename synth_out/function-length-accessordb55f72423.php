<?php
function f_0() {
    $vars = array (
      '\$ -> This represents the dollar sign. hello dollar!!!',
      '\t\r\v The quick brown fo\fx jumped over the lazy dog',
      'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
      'hello world\\t',
      'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
    );
    $_SERVER = [ 'test' => 'test' ];
    $reference =& $_SERVER;
}
printf("printf test 20:%16X\n", 170);
