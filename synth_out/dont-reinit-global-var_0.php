<?php
$tester = new FPM\Tester($cfg, $code);
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
$res = [];
printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
$h1 = $document->getElementsByTagName('h1');
$client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
$_ = str_repeat("A", 512);
printf("printf test 32:%.17g\n", -INF);
$w["bug69279.txt"] = "Sample content.";
var_dump($value);
$c = new C();
var_dump($array[$a]);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
$tester->expectLogTerminatingNotices();
register_shutdown_function('timE');
printf("printf test 6:%-010.2f\n", 2.5);
$stmt->close();
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
