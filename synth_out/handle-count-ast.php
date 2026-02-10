<?php
$a->foo = 5;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $db->prepare("SELECT 1");
}
