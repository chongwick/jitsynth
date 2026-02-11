<?php
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $a = date_create("2009-01-01", null);
    }
}
$filename = "bug51997.bz2";
$bz = bzopen($filename, "w");
bzclose($bz);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
