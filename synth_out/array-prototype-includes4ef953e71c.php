<?php
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$db = createDB();
testLastInsertId($db);
