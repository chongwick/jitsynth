<?php
function f_0() {
    class foo1
    {
      function __toString() {
        return "Object1";
      }
    }
    $object2 = new foo1();
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    return new stdClass();
}
function f_1() {
    return [get_object_vars($this)];
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
$gen = gen();
$a = bar($gen);
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$tests = array(
    'noon', 'midnight'
);
foreach ($tests as $test) {
    $t = strtotime("2005-12-22 ". $test);
    printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
}
$t = strtotime("2005-12-22 ". $test);
printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
foo();
function foo() {
    global $LAST;
    ($LAST = $LAST + 0) * 1;
    echo "ok\n";
};
