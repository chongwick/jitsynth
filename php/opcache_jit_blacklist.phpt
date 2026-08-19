<?php
function foo() {
    $x = 1;
    $x += 0;
    ++$x;
    var_dump($x);
}
opcache_jit_blacklist(foo(...));
foo();
?>
