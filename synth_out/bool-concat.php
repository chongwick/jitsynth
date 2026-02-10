<?php
function f_0() {
    if (true) {
        return true;
    }
    if (!true) {
        return true;
    }
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    stream_filter_register('user_filter','user_filter');
}
