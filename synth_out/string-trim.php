<?php
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
var_dump( range('A', 'H', 10.0**400) );
$textascii = 'This is an "example" of using DOM splitText';
rt = 30;
$le
gth = 3;

$d
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($textascii);
$do
ched = $node->splitText($start);
$ma
ched->splitText($length);
pri;
