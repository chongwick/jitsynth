<?php
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
function f_0() {
    $a = [1,2,3];
    $i = 1;
    $k = 2 * $i;
    $a[$k] = $i;
    $empty = "";
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $found_flags = $unexpected_flags = '';
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        printf("printf test 8:<%20s>\n", "foo");
    }
}
$t = new base();
$t->test();
