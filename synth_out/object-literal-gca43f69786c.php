<?php
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function f_0() {
    $priorityQueue = new SplPriorityQueue();
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $b = 1;
        }
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
        $id = odbc_result($res, "ID");
    }
    $id_1_date = '2014-09-23';
    undefined_function();
    $iterator = 1;
    $iterator++;
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        error_reporting(0);
    }
}
$date = new DateTime("2011-05-17T22:14:12");
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $gen = gen();
    $b = bar($gen);
    $b->rewind();
}
