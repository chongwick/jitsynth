<?php
class C {
    public int $a;
}
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
var_dump(call_user_func_array("array_multisort", $args));
$row_stmt = null;
var_dump($row_stmt);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
chdir(__DIR__);
printf("printf test 7:%010.2f\n", 2.5);
$a = new PDO("sqlite::memory:");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_all([$key => 1], static fn () => false));
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
printf( "testtable: %d\n", $r2['major'] );
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
$list = new SplDoublyLinkedList();
$list->push('f');
var_dump(test());
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
