<?php

function f() {
    $offset = 0;
    yield true;
    for ($i = 0; $i < 100; $i++) {
        $offset++;
        if ($offset === 99) {
            break;
        }
        yield true;
    }
    return $offset;
}
$gen = f();
foreach ($gen as $v) {}
var_dump($gen->getReturn());

?>
