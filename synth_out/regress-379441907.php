<?php
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
$fn = static function() { return static::name(); };
$index_array = array (1, 2, 3);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array[1]) );
function f_0() {
    $db = MySQLPDOTest::factory();
    return $db;
}
$offset3 = "offset";
