<?php
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump($s);
printf("printf test 11: 123456789012345678901234567890\n");
var_dump( current($sub_array) );
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
;
var_dump( range(1.0, 7.0, 0.0) );
set_exception_handler(function () { print "EX\n"; });
printf("printf test 16:%x\n", 170);
$client->getQuote("ibm");
printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
byVal(C[0]);
var_dump(expm1($value));
array_map(array('Element', 'CallBack'), $arr);
pg_free_result($res);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
$tester->terminate();
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
$a->TestFunc();
rewind($fp);
$cl->fpassthru();
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
var_dump($rc->getStaticProperties());
printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
curl_setopt($ch, CURLOPT_VERBOSE, true);
$a->rewind();
$tester->expectLogNotice($userMessage, 'bbbb');
var_dump(gzread($h, 8));
var_dump($output);
mkdir($targetDir, 0777, true);
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
var_dump( strrchr($haystack, $needle[$index]) );
var_dump($body->lookupNamespaceURI(NULL));
(new B)->bar();
ith_cp($d1, 65001);

touch("$d0\\;
call_user_func('bar','second try');
call_user_func(array("static","ok"));
test($box);
var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
var_dump($e->getCode());
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
zerofill(7, $link, 'BIGINT');
test('<?php echo "1";//2');
error_reporting(E_ALL);
printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
var_dump(expm1($value));
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
$sh->read("");
restore_exception_handler();
var_dump($c);
$db->beginTransaction();
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
$root->__construct("malformed");
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
print_r($data);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
zerofill(5, $link, 'INT');
dumpNodeList($dom->getElementsByTagName("html"));
sprintf('%$s, %2$s %1$s', "a", "b");
setlocale(LC_ALL, 'de_DE', 'de-DE');
var_dump(openssl_pkcs7_verify($eml, 0));
test('<?php echo 3; // 4 ?>5');
var_dump(spl_autoload_unregister($callback2));
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
undefined_function();
grapheme_stripos(1,1,2147483648);
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
unserialize('a:2:{i:0;O:9:"000000000":10000000');
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
fclose($fp);
$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
var_dump(
    $obj,
    $obj->{42}
);
foo(false, false);
sprintf('%3$s, %2$s %1$s', "a", "b");
var_dump($client->__getLastResponseHeaders());
var_dump($create);
$list->add(1, 1);
printf("printf test 32:%.17g\n", -INF);
$mailBox->logout();
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
var_dump($type->childNodes);
var_dump($obj);
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
$pdo->exec("create temp table t (n int, t text)");
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
$sh->read("");
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
var_dump( strtr($str, $replace_pairs) );
var_dump(c1::$a1);
var_dump ( rtrim("rtrim test   \t\0 ") );
var_dump($array[$a]);
gc_collect_cycles();
var_dump(count($cert_data['extracerts']));
foo(false, false);
var_dump(test());
var_dump( strrchr($special_chars_str, $needle) );
boo();
var_dump ( rtrim("rtrim test0123456789", "0..9") );
mysqli_query($link, 'ALTER TABLE test DROP zero');
test("http://test@127.0.0.1");
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
printf("printf test 9:<%-20s>\n", "bar");
var_dump($s["10"], isset($s["10"]));
printf("printf test 18:%16b\n", 170);
var_dump(pcntl_wexitstatus($status));
var_dump($r->getStaticProperties());
ob_start();
odbc_fetch_row($res);
var_dump(gzeof($h));
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
var_dump(soundex("Euler")       == soundex("Ellery"));
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
$dt->add(new DateInterval('PT1M'));
var_dump(array_search('foo', $result));
$phar->stopBuffering();
ob_end_flush();
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
var_dump(json_last_error_msg());
var_dump(error_get_last());
var_dump(sprintf("%%%.2f", 1.23456789e10));
$f->start();
$c("abc");
var_dump(test($x));
var_dump(unserialize($s));
something();
var_dump($_a, $_b);
gzclose($h);
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
$it->rewind();
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump($obj);
$o->foo();
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
var_dump($headers1['Title'][0] === '?');
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$b->bar();
$reflector->initializeLazyObject($obj);
var_dump( strtr($str, $replace_pairs) );
imagepng($im, $dest);
var_dump( is_array ($type) );
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
var_dump(ftp_mkdir($ftp, 'CVS'));
fwrite($stream,"sdfgdfg");
var_dump(gzread($h, 8));
);
    var_dump($d == get_base;
var_dump($obj);
printf("[002] [%d] %s\n", $link->errno, $link->error);
$val->dump();
$client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
fwrite($stream,"sdfgdfg");
$it->next();
$link->real_query($sql);
var_dump($foo);
$dom->getElementById('x')->removeAttribute('xml:id');
$cl->fpassthru();
byRef(C[0]);
$zip->close();
print_r(stream_context_get_options($context));
var_dump(str_contains($response, "authorization"));
$element->prepend('x', new DOMEntity);
$list->pop();
$dt->setTimezone(new DateTimeZone('UTC'));
$fiber->start();
trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
$db->setNoticeCallback($callback);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
var_dump(-9_223_372_036_860_776_000 % -1);
var_dump($namespaceless->lookupNamespaceURI(NULL));
set_time_limit(5);
printf("printf test 16:%x\n", 170);
var_dump($dt);
printf("printf test 15:%b\n", 170);
openssl_error_string();
pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
var_dump($readonly_anon->field);
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
error_reporting(0);
ini_set("intl.error_level", E_WARNING);
printf("[005] [%d] %s\n", $link->errno, $link->error);
$f->start();
var_dump($dom->lookupNamespaceURI(""));
printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
est1.txt");

rmdir($d0);
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
var_dump(strlen($phar->getStub()));
$dom->documentElement->appendChild($test1);
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
imagesetstyle($im, $style);
printf("printf test 32:%.17g\n", -INF);
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
call_user_func("static::ok");
var_dump(odbc_result($res, 'whatever'));
reset( $array_test );
var_dump($e->getCode());
mysqli_close($link);
var_dump(getopt("abcd"));
var_dump( strrchr($haystack, $needle[$index]) );
($prefix);

?>;
var_dump($rm->getNumberOfRequiredParameters());
(stat("$d0\\test0.txt")) > 0);

unlink("$d0\;
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
$link->real_query($sql);
date_default_timezone_set('UTC');
var_dump( range(1.0, 7.0, 6.5) );
var_dump(scandir(''));
var_dump($x);
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
var_dump(debug_backtrace());
$link->real_query($sql);
var_dump(error_get_last());
var_dump($client->__getLastRequestHeaders());
unlink($tmpFileIn);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump($obj->a);
var_dump($date1->format('D') == $date2->format('D'));
print_r($row);
var_dump($row['bit_column_1']);
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
$prop->setRawValue($a, 1);
var_dump( end($array_test) );
printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
$phar->setDefaultStub(str_repeat('a', 401));
var_dump(pg_last_notice($dbh));
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump( range(1, 7, 10.0**400) );
$phar->setDefaultStub(str_repeat('a', 400));
mysqli_free_result($res);
fwrite($fp, "I am the LOB data");
var_dump(file_exists($filename));
$s->attach($s);
var_dump(range(1, 3, -1));
set_include_path(__DIR__.'/bug39542:.');
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
imagesetthickness($im, $thickness);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
var_dump($diff->h);
var_dump($priorityQueue->getExtractFlags());
var_dump($_POST);
zerofill(7, $link, 'BIGINT');
var_dump($foo);
var_dump(sin($thirty));
var_dump(yield from g());
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$this->show();
var_dump($array->offsetExists('nokey'));
$f->resume();
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
var_dump( reset($array_test) );
var_dump(mhash(133, 1086849124, 133));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
var_dump( gmstrftime($value) );
var_dump($dom->lookupNamespaceURI(NULL));
fwrite($fp, "I am the LOB data");
set_error_handler('error_handler');
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
var_dump ( rtrim("rtrim test0123456789", "0..9") );
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
$link->real_query($sql);
pcntl_sigwaitinfo($a,$a);
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
var_dump(range(1, 3, -1));
print_r($tmp);
md5('foo');
var_dump($list->offsetExists($x));
ob_start("test");
chdir($oldcwd);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
var_dump(gzeof($h));
$stmt->execute();
printf("printf test 4:%.10f\n", 10.0/3);
ini_set('display_errors',true);
byRef(C[0]);
test();
var_dump(session_cache_limiter());
$tester->terminate();
var_dump($prefixed->lookupNamespaceURI(NULL));
var_dump(range('a', 'z', 100));
$target->before('bar', $doc->documentElement->firstChild, 'baz');
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
zerofill(9, $link, 'DOUBLE');
grapheme_strpos(1,1,2147483648);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
var_dump($i=1);
$f->resume();
(new B)->baz();
$tester->expectLogStartNotices();
foo(true, false);
fclose($f);
spl_autoload_register(function ($name) {
});
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
var_dump($r);
var_dump(spl_autoload_functions());
showFirstTwoItems($ai);
var_dump(expm1($value));
dumpNodeList($dom->getElementsByTagName("bar:html"));
define ('foobar', 1);
var_dump($obj->getTest());
var_dump($rc->getStaticProperties());
unlink($fn);
var_dump(soundex("Lloyd")       == soundex("Ladd"));
var_dump($b, $GLOBALS['b'], $c);
rewind($fp);
var_dump(substr($hash, -1, 1) !== "\0");
var_dump($_SESSION);
ob_end_flush();
var_dump($dom->lookupNamespaceURI(NULL));
var_dump(preg_match_all($regex, $subject, 'test'));
