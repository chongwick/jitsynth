<?php
function foo(){
    $a = 1;
    $b = $a % 0;
    yield $b;
}
?>
DONE
