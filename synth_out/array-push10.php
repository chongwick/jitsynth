<?php
function f_0() {
    $counter = 1;
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    while (true) {
        break;  // avoid infinite loop
        $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
        $stmt = $mysql->prepare("SELECT id FROM temp");
        $stmt->bind_result($id);
        if (true) {
            return $this;
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
        $id = $db->lastInsertId();
    }
}
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
