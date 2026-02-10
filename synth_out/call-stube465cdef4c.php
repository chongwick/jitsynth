<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        );
        if (!$reader->open($fil;
    }
    $test->a++;
}
$r = new ResourceBundle( 'en_US', BUNDLE );
$t = $r['nonexisting'];
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    if (true) {
        $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    }
    if (!true) {
        if (true) {
            $I->unit++;
        }
    }
    var_dump(substr_count("", "a", 0, 0));
}
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
$counter = 1;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    if (true) {
        $fp = tmpfile();
    }
    if (!true) {
        if (true) {
            ++$testCasesTotal;
        }
    }
    function createDB(): PDO {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    $db = createDB();
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
    testLastInsertId($db);
}
