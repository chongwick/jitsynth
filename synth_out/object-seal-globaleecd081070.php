<?php
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
var_dump( range('A', 'H', fdiv(0, 0)) );
var_dump(soundex("Hilbert") == soundex("Ladd"));
