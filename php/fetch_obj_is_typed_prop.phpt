<?php

class Test {
    public stdClass $data;
}

function test() {
    $test = new Test;
    var_dump(isset($test->data[0]));
}

test();

?>
