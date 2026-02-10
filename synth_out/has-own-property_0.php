<?php
var_dump($prefixed->lookupNamespaceURI(""));
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
var_dump($namespaceless->lookupNamespaceURI("a"));
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
ob_start();
$dom->getElementById('x')->remove();
imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
var_dump( range(1, 7, 10.0**400) );
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
clearstatcache();
var_dump( array_unshift($temp_array, $var) );
var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
$data_compare_func = 'compare_function';
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
var_dump($dt);
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$fiber->start();
$x = new SoapClient(__DIR__."/bug27722.wsdl");
$fd = fopen('php://memory','w');
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} finally {
		print "handle first\n";
		return "ok";
	}
})();
foo(false, false);
var_dump($diff);
ob_start("test");
$a = array(1,2,3);
var_dump(gzeof($h));
var_dump(ini_get('mysqlnd.debug'));
var_dump( end($array_test) );
var_dump( end($array_test) );
);
    var_dump($d == get_base;
$phar->stopBuffering();
setStyleAndThickness($im, $black, 2);
var_dump($row_stmt);
var_dump($anon->field);
$fiber->start();
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
$arr = [$class];
define('OBJECT_COUNT', 10000);
$tester->terminate();
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
(new B)->foo();
$f = __DIR__."/data/test.txt.gz";
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
$stmt->close();
var_dump($ffi->bug_gh16013_return_struct());
var_dump($prefixed->lookupNamespaceURI(""));
$ai->current();
$dbConnection = new Com('ADODB.Connection');
var_dump($val);
set_error_handler('error_handler');
var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
var_dump($proc);
var_dump(json_decode('{"key":"value", "":"value"}', true));
printf("[001] %s, [%s] %s\n",
                $e->getMessage(),
                (is_object($db)) ? $db->errorCode() : 'n/a',
                (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
define("TEST",2);
var_dump(pg_last_notice($dbh));
display($pdo->query("select * from t2")->fetchAll());
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
unlink($tmpFileOut);
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
$dom->getElementById('x')->remove();
var_dump( array_key_exists($input, $search) );
var_dump(range(1.5, 3.5, -1.5));
var_dump( is_array ($var_array) );
$ret = $y;
$stmt = $db->prepare('SELECT * FROM test_33689');
var_dump($box->value = new Test);
var_dump($type->childNodes);
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
var_dump($info['used_memory'] + $info['free_memory']);
$g = $param->strA."\n".$param->strB."\n";
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
var_dump($sends1);
printf( "teststring: %s\n", $r['teststring'] );
var_dump($anon->field);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
var_dump(debug_backtrace());
$c("abc");
