<?php
$str = 'Hello World';
$key_compare_func = 'compare_function';
$db = PDOTest::factory();
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->query($reqOf3);
$dt = new DateTime('@1604219400');
function f_0() {
    return false;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
            $res = $mysqli->query('SELECT 42');
            $a = new DateTime("2009-01-01", null);
            $ch = curl_init();
            $stmt->close();
            var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
            $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
        }
    }
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $flags = array(
                    MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                    MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                    MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                    MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                    MYSQLI_BLOB_FLAG => 'BLOB',
                    MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                    MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                    MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                    MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                    MYSQLI_SET_FLAG	=> 'SET',
                    MYSQLI_NUM_FLAG => 'NUM',
                    MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                    // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                    (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                    (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                    (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                    // MYSQLI_BINCMP_FLAG
                );
            krsort($flags);
        }
    }
}
);
    var_dump($d == get_base;
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
