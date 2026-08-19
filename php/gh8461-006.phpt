<?php

namespace {
    $x = 0;

    function test() {
        global $x;
        $x += 1;
    }
}

namespace test {

    if (!isset(opcache_get_status()['scripts'][__DIR__ . '/gh8461-006.inc'])) {
        $initialRequest = true;
        require __DIR__ . '/gh8461-006.inc';

    } else {
        $initialRequest = false;
        $y = 0;
        function test() {
            global $y;
            $y += 1;
        }
    }

    for ($i = 0; $i < 10; $i++) {
        test();
    }

    var_dump($initialRequest ? $x : $y);
    print "OK";
}
?>
