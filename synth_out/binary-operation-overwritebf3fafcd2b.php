<?php
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
function f_0() {
    return "key";
}
function f_1() {
    return "concreteClass";
}
function f_2() {
    return "Object1";
}
function f_3() {
    $db = MySQLPDOTest::factory();
    return $db;
}
$total = 10000;
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
$class = new SomeClass;
$arr = [$class];
var_dump(json_encode($arr));
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
