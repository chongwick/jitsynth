<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$array = [0];
$ar = array_values($array);
$ar[] = 1;
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
display([ $stmt1->fetch() ]);
$i = 1;
$k = 2 * $i;
printf("printf test 3:%f\n", 10.0/3);
