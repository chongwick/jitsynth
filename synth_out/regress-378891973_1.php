<?php
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
function f_0() {
    return reset($this->a);
}
function f_1() {
    $thisdir = __DIR__;
    return '';
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    clearstatcache();
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
}
