<?php
$x = 'abc';
$tag = $dom->appendChild($dom->createElement("style"));
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
$data_compare_func = 'compare_function';
$b->dyn = 1;
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
byVal(C[0]);
var_dump($priorityQueue->getExtractFlags());
var_dump(json_last_error() === JSON_ERROR_UTF16);
var_dump($obj->a);
var_dump($i=1);
dumpNodeList($dom->getElementsByTagName("HTML"));
var_dump(is_callable(array($this, 'static::testIsCallable2')));
var_dump($initialRequest ? $x : $y);
showFirstTwoItems($ai);
var_dump($prefixed->lookupNamespaceURI("a"));
$t->cleanRepair();
$dt->setTimezone(new DateTimeZone('America/Boise'));
printf("printf test 14:%c\n", 64);
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
var_dump($x);
clearstatcache();
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
php_cli_server_start($code, null, $args);
var_dump($row);
$arr();
$stmt->close();
var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
var_dump(new FooBar);
unlink($tmpFileOut);
session_write_close();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
var_dump( end($array_test) );
$list->attach(new TestObject());
printf("Content-Type OK" . PHP_EOL);
$tester->expectLogNotice($userMessage, 'cccc');
(new Test)->bar(do_throw());
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
var_dump($pdo->query('SELECT 1;')->fetchAll());
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
unlink($outfile);
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
zerofill(8, $link, 'FLOAT');
var_dump($temp_array);
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
test($box);
mkdir($targetDir, 0777, true);
$references[$idx]['id_ref'] 		= &$row['id'];
$gen = (function() {
    yield from (function() { yield; })();
})();
function f_0() {
    $i= DateInterval::createFromDateString('2 days');
    return 42;
}
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
