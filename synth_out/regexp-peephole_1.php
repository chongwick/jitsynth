<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        ob_end_flush();
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        print_r($browser);
    }
}
$phar->stopBuffering();
