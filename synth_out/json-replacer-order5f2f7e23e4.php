<?php
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
$arr = array('http'=>
                        array(
                                'follow_location'=>0,
                        )
                );
$context = stream_context_create($arr);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t (n int, t text)");
var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
