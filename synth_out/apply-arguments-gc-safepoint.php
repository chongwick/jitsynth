<?php
function f_0() {
    if (true) {
        var_dump(gc_collect_cycles());
    }
    return "Class A object";
}
function f_1() {
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//2');
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
}
