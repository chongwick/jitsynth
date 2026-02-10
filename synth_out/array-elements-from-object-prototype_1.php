<?php
$output = array();
$version = mysqli_get_server_version($link);
$error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
$errorHandler = new ErrorHandler();
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
bzwrite($bz, $str);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
var_dump(array_map(assert(...), [true, true, false]));
clearstatcache();
$this->server->addFunction('PostEvents');
printf("%0\$s", 1);
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
var_dump($data);
var_dump(spl_autoload_functions());
printf("Content-Type OK" . PHP_EOL);
var_dump($prefixed->lookupNamespaceURI("a"));
$list->attach(new TestObject());
var_dump($stmt->execute([1]));
$priorityQueue->insert("a", 1);
var_dump($diff->invert, $diff->s, $diff->f);
$s->attach($s);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
$a->test(new B());
printf("printf test 16:%x\n", 170);
$ai->seek(0);
printf("printf test 23:%016X\n", 170);
foo();
var_dump(sprintf("%.988f", 1.23456789e10));
bar();
var_dump(unserialize(serialize($obj)));
var_dump(unserialize($s));
$context = stream_context_create($arr);
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
unlink($filename);
test("http://t[est@[::1]");
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$target->after('bar', $doc->documentElement->firstChild, 'baz');
(stat("$d0\\test0.txt")) > 0);
var_dump(coun;
var_dump($foo[0]);
var_dump("DB::__construct() called");
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
var_dump( is_array ($var_array) );
printf("Length       : %d\n", $field->length);
session_set_save_handler($sh);
zerofill(11, $link, 'DECIMAL');
var_dump( range(1.0, 7.0, 0.0) );
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
printf("%s: %s\n", $e::class, $e->getMessage());
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
fflush($stream);
printf("printf test 2:%d\n", 42);
fclose($this->stream);
ini_set("intl.error_level", E_WARNING);
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
$dfp = opendir ( __DIR__ );
$stmt->close();
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump($dom->lookupNamespaceURI("a"));
$tester->close();
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
call_user_func_array($ffi->$func_ptr, $argv);
var_dump(preg_replace_callback_array([], []));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt->execute();
mysqli_fetch_field($res);
var_dump(gzeof($h));
$reflector->resetAsLazyProxy($obj, function () {});
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
curl_setopt($ch, CURLOPT_FILE, $fp);
var_dump($res);
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
$db->exec('INSERT INTO test_33689 VALUES(1)');
test($p12, $pass);
$tempnum = 12345;
$this->b = 2;
$document->loadHTMLFile($uri);
setStyleAndThickness($im, $black, 4);
$tester->close();
printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
ar_dump($dn = realpath;
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
var_dump($b, $GLOBALS['b'], $c);
$dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
extract($GLOBALS, EXTR_REFS);
printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
dumpNodeList($dom->getElementsByTagName("bar:html"));
fclose($fp);
var_dump($array[$a]);
var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
ar_dump($dn = realpath;
var_dump($rf->getNumberOfRequiredParameters());
var_dump($list->serialize());
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
var_dump(array_pop($input), $input);
set_exception_handler(null);
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
