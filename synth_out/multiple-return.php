<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        return "key";
    }
    return true;
}
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        try {
            return str_repeat('a', 1);
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return "Object";
}
function f_4() {
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
        try {
            return "Object1";
        } catch (Exception $e) {}
        if (true) {
        }
    }
    $x = 1;
    $x += 0;
    ++$x;
    return $x;
}
#[\Deprecated(1234)]
function test() {
}
test();
printf("# Ghost:\n");
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
