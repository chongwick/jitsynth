<?php
function f_0() {
    var_dump(gzread($h, -1));
}
function f_1() {
    set_error_handler('test_error_handler');
}
var_dump(test($x));
phpinfo(INFO_MODULES);
var_dump(preg_replace_callback_array([], ''));
var_dump($prefixed->lookupNamespaceURI(NULL));
$zip->close();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
$phar->setDefaultStub(str_repeat('a', 401));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
ini_set("intl.error_level", E_WARNING);
imagescale($im, 1, 0, 0);
var_dump($line);
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump( range('A', 'H', 10.0**400) );
var_dump($args);
class_alias( 'stdClass', 'bool' );
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
var_dump( end($test_array[1]) );
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
var_dump( array_key_exists($input, $search) );
fflush($stream);
var_dump($array[$a]);
$mysql->query("DROP TABLE temp");
var_dump( array_reverse($array, false) );
krsort($flags);
var_dump(array_pop($input), $input);
pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
$test('sensitive');
var_dump($dom->lookupNamespaceURI("a"));
var_dump( array_multisort($ar1, $value) );
$this->server->handle($request);
et_basename;
ob_end_flush();
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump($value);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
set_exception_handler(function () { print "EX\n"; });
var_dump(gc_collect_cycles());
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
$zip->addFromString('foo.txt', 'foo bar foobar');
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
showFirstTwoItems($ai);
test(1);
var_dump(__METHOD__);
$phar->setDefaultStub();
var_dump(nl2br($str) );
ini_set('display_errors',true);
var_dump(gethostbynamel($host));
define("TEST",2);
var_dump($row['bit_column_1']);
$zip->close();
var_dump(-2147483648 % -1);
$tester->start();
var_dump($data);
session_write_close();
$this->mysqli->close();
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
var_dump(soundex("Knuth")       == soundex("Kant"));
$dt->setTimezone(new DateTimeZone('America/Boise'));
var_dump($array_object);
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
var_dump( range(1, 7, 0) );
unlink($filename);
var_dump($phar->getStub());
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
=> imagecreatefromgd2part($file, 0,0, -25, 10),
    fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
);

unlink($file);
?>;
file_put_contents($batch_file_path, $batch_file_content);
sprintf('%$s, %2$s %1$s', "a", "b");
dir($d1);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump($x);
var_dump(gethostbynamel($host));
mysqli_fetch_field($res);
pcntl_sigwaitinfo($a,$a);
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insert->execute();
dirs as $d) {;
printf("# Proxy:\n");
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
var_dump(file_exists($filename));
ith_cp($d1, 65001);

touch("$d0\\;
var_dump(sprintf("%%%.2f", 1.23456789e10));
test('<?php echo "1";//22');
var_dump($i=1);
var_dump($namespaceless->lookupNamespaceURI("a"));
var_dump(error_get_last());
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
var_dump($baz);
$sh->read("");
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
st1.txt");

var_dump(cou;
printf("printf test 22:%016x\n", 170);
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
call_user_func_array($ffi->$func_ptr, $argv);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$tester->terminate();
var_dump(gzread($h, 5));
var_dump($obj);
openssl_error_string();
var_dump($prefixed->lookupNamespaceURI(""));
var_dump(gzeof($h));
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
var_dump(substr_count("aaa", "a", 0, 0));
function f_2() {
    var_dump(pg_last_notice($dbh));
}
var_dump(test());
st0.txt");
touch("$d1\\t;
var_dump(__METHOD__);
var_dump($dom->getElementById('x')?->nodeName);
zerofill(5, $link, 'INT');
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
var_dump($rit->valid());
var_dump($dom->getElementById('x')?->nodeName);
imagepng($im, $dest);
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
$db->query('DROP PROCEDURE IF EXISTS testSp');
$child->testIsCallable2();
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
$child->testIsCallable2();
var_dump(gzread($h, 8));
var_dump("DB::__construct() called");
foo();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
var_dump( range('A', 'H', 0) );
test('Proxy', $obj);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
var_dump(lookup(513));
var_dump($namespaceless->lookupNamespaceURI(NULL));
var_dump($client->__getLastResponseHeaders());
var_dump($prefixed->lookupNamespaceURI(""));
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
printf("printf test 18:%16b\n", 170);
fclose($fp);
$f->__invoke(do_throw());
$phar->stopBuffering();
$mysql->close();
var_dump($client->__getLastResponseHeaders());
var_dump(gzeof($h));
var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
print_r($g);
var_dump($r["bug69279.txt"]->isCompressed());
imagesetthickness($im, $thickness);
var_dump($list->offsetExists($x));
var_dump(preg_match_all($regex, $subject, 'test'));
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump(openssl_pkcs7_verify($empty, 0));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
rewind($fp);
$tester->expectLogStartNotices();
var_dump($obj->a);
printf("printf test 32:%.17g\n", -INF);
set_exception_handler(function () { print "EX\n"; });
$oIntlDateFormatter->setPattern('VV');
fwrite($stream,"sdfgdfg");
test("str");
printf("[005] [%d] %s\n", $link->errno, $link->error);
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
var_dump(gethostbyname($host));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
mt_srand(1234567890);
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
var_dump($i=$x);
;
var_dump(c1::$a2);
register_shutdown_function('ABC');
set_error_handler('my_error_handler');
var_dump( rtrim($obj, "tc") );
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
var_dump(foo());
var_dump($dom->lookupNamespaceURI("xml"));
curl_setopt($ch, CURLOPT_PASSWORD, null);
$tester->close();
var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
odbc_fetch_row($res);
dirs as $d) {;
odbc_binmode($res, ODBC_BINMODE_RETURN);
function f_3() {
    $tester->expectLogNotice($userMessage, 'eeee');
}
function f_4() {
    print_r($stmt->getColumnMeta(0));
}
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
var_dump(getopt("abcd"));
var_dump(file_exists($filename));
var_dump(-2147483648 % -2);
curl_setopt($ch, CURLOPT_USERNAME, null);
(stat("$d0\\test0.txt")) > 0);

unlink("$d0\;
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
ini_set('display_errors',true);
$phar->setDefaultStub();
var_dump(gzread($h, 5));
debug_zval_dump( $value );
register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
mysqli_close($link);
var_dump(range('z', 'a', 100));
closedir( $dir_handle );
$tester->expectLogStartNotices();
error_reporting(0);
var_dump(sin($threesixty));
var_dump($oIntlDateFormatter->getTimeZone()->getID());
printf("[005] [%d] %s\n", $link->errno, $link->error);
var_dump($finfo->buffer("buffer\n"));
test($nodes, "attributes", fn ($n) => $n->attributes());
var_dump($n);
var_dump($rit->key());
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
var_dump($prefixed->lookupNamespaceURI("a"));
var_dump($target);
print_r(stream_context_get_options($context));
var_dump($value);
var_dump($r["bug69279.txt"]->isCompressed());
debug_zval_dump($test);
var_dump($c);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
$ffi->bug79177();
ched->splitText($length);
pri;
var_dump($im);
clearstatcache();
var_dump(isset($_POST['foo']));
$dom->loadHTML($html);
var_dump( addslashes($str) );
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
$callable($nodes);
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
var_dump($b->test);
var_dump($s["010"], isset($s["010"]));
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
test2();
pcntl_sigwaitinfo($a,$a);
set_time_limit(5);
print_r($str_instead);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
fclose($this->stream);
var_dump(substr($hash, -1, 1) !== "\0");
define("TEST",2);
var_dump($rit->valid());
var_dump($rf->getNumberOfParameters());
sprintf('%3$s, %2$s %1$s', "a", "b");
var_dump( end($array_test) );
var_dump($create);
var_dump( range(7.0, 1.0, 6.5) );
$stmt->closeCursor();
curl_setopt($ch, CURLOPT_VERBOSE, true);
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
var_dump($_a, $_b);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
function f_5() {
    var_dump(class_exists("TestClass", true));
}
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
__();
setStyleAndThickness($im, $black, 6);
ob_end_flush();
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
var_dump($a["10"], isset($a["10"]));
printf("[008] PS and non-PS results differ, dumping data\n");
var_dump($a);
dumpNodeList($dom->getElementsByTagName("HTML"));
var_dump($array);
trycatch_dump(
    fn(;
var_dump(spl_autoload_unregister($callback2));
fflush($stream);
test($nodes, "manipulation combined with querying", function ($n) {
    $n->addAttribute("attr", "value");
    (bool) $n["attr"];
    $n->addChild("child", "value");
    $n->outer[]->inner = "foo";
    (bool) $n->outer;
    (bool) $n;
    isset($n->outer);
    isset($n["attr"]);
    unset($n->outer);
    unset($n["attr"]);
    unset($n->child);
});
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
session_start();
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
dumpNodeList($dom->getElementsByTagName("bar:html"));
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
$t->test();
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
fclose($fp);
var_dump(file_get_contents($uri));
var_dump($r[$ref]);
$dt->sub($interval);
var_dump($list->offsetExists($x));
