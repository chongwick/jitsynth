<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
function f_0() {
    $list = new SplDoublyLinkedList();
    $list->push('o');
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        $stmt->closeCursor();
        spl_autoload_register(function ($name) {
            spl_autoload_unregister("spl_autoload_call");
        });
        $res = [];
        display($res);
        var_dump(defined('SO_REUSEPORT'));
    }
}
