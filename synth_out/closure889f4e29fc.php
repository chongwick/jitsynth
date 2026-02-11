<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function f_0() {
    $x = 1;
    $x += 0;
    ++$x;
    return $x;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt1 = $pdo->query($reqOf3);
    display([ $stmt1->fetch() ]);
}
