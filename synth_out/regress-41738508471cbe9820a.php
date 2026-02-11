<?php
class A {
    public $a;
}
class C extends stdClass {
    public int $a;
}
function f_0() {
    try {
        return 0;
    } catch (Exception $e) {}
    if (true) {
    }
}
function f_1() {
    $b = new A();
    $b->dyn = 1;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
        $col = imagecolorat($im2, 5, 5);
        $color = imagecolorsforindex($im2, $col);
        $iterator = 1;
        try {
            $c = "assert";
        } catch (Exception $e) {}
        if (true) {
        }
        try {
            $loop_counter = 1;
            $loop_counter++;
        } catch (Exception $e) {}
        if (true) {
        }
        $obj = new C();
    }
}
var_dump(soundex("Euler")       == soundex("Ellery"));
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
