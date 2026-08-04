<?php

function test(int $x) {
    return ($x > 0xdead && unimportant()) ||
           ($x < 0xbeef && unimportant());
}

var_dump(test(0xcccc));

?>
