<?php
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed[strlen($compressed) - 15] = 'X';
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $code = null;
}
$list = new SplDoublyLinkedList;
