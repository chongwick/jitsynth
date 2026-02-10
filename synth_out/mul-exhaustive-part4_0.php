<?php
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
function f_0() {
    if (true) {
        return $this->stub->invoke($invocation);
    }
    return serialize($this->data);
}
function f_1() {
    function f_2() {
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        return <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:ns="urn:ebay:api:PayPalAPI">
  <SOAP-ENV:Body id="_0">
    <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
      <Timestamp>2008-06-23T14:51:08Z</Timestamp>
      <Ack>Success</Ack>
      <CorrelationID>ae013a0ccdf13</CorrelationID>
      <Version>50.000000</Version>
      <Build>588340</Build>
      <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
        <Token>EC-11Y75137T2399952C</Token>
        <PayerInfo>
          <Payer>example@example.com</Payer>
          <PayerID>MU82WA43YXM9C</PayerID>
          <PayerStatus>verified</PayerStatus>
        </PayerInfo>
      </GetExpressCheckoutDetailsResponseDetails>
    </GetExpressCheckoutDetailsResponse>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
    }
    function f_3() {
        test('<?php echo 3; // 4 ?>5');
        var_dump(lookup(510));
        printf("# %s\n", $name);
        var_dump( gmstrftime($value, $timestamp) );
    }
    fclose($fp);
    display([ $stmt2->fetch() ]);
    $stmt->execute([ 0 ]);
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    if (true) {
        return true;
    }
    file_put_contents($magic_file, "
0	regex	\\0\\0\\0\\0	Test
");
    var_dump(-9_223_372_036_860_776_000 % -1);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
$date = '7.8.2010';
$priorityQueue->insert("a", 1);
php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
$it->rewind();
$array->offsetSet('key', 'value');
$this->mysqli->close();
$zip->extractTo(__DIR__);
set_error_handler(function() {
    (y);
});
var_dump(fseek($fp, -32, SEEK_CUR));
var_dump(http_get_last_response_headers());
display($res);
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
$array->offsetSet('key', 'value');
var_dump($diff);
printf("[008] PS and non-PS results differ, dumping data\n");
printf("%s: %s\n", $e::class, $e->getMessage());
test("http://t[est@::1]");
var_dump(substr_count("aaa", "a", 0, 0));
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
var_dump($array_object);
printf("# %s:\n", $name);
var_dump(1);
$link->set_charset('sjis');
chdir(__DIR__);
var_dump($prefixed->lookupNamespaceURI("a"));
$tester->terminate();
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
chdir($oldcwd);
var_dump($_POST);
ob_flush();
var_dump( current($resources) );
var_dump(preg_match_all($regex, $subject, 'test'));
var_dump(substr_compare('/', '/asd', 0, 4));
print_r($browser);
$tester->expectLogNotice($userMessage, 'bbbb');
var_dump($dom->lookupNamespaceURI(NULL));
var_dump($readonly_anon->field);
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
$phar->setDefaultStub(str_repeat('a', 400));
foo(true, false);
var_dump(strncasecmp("test ", "E", -1));
$this->show();
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
var_dump($row);
$val->dump();
pcntl_wait($status);
var_dump($e);
var_dump($r->getStaticProperties());
var_dump("DB::__construct() called");
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$dt->add(new DateInterval('PT1M'));
$arguments = array($a, $b, $c);
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
$link->close();
$this->mysqli->close();
$tester->expectLogNotice($userMessage, 'bbbb');
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
var_dump('ERR');
var_dump($array[$a]);
showFirstTwoItems($ai);
fclose($input);
var_dump($options['dummy']['foo']);
$c("abc");
printf("%s: %s\n", $e::class, $e->getMessage());
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
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
fwrite($stream,"sdfgdfg");
ini_set('mysqlnd.fetch_data_copy', true);
print_r($I);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
var_dump(range(1, 3, -1));
$list->next();
var_dump(strncmp("test ", "e", 10));
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump(soundex("Gauss"));
$stmt->close();
$pdo->exec("insert into t select n + 1, 'non '||t from t");
test("http://t[est@::1]");
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
var_dump((bool) $o);
ob_start();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
zerofill(2, $link, 'TINYINT');
$dom->loadHTML($html);
$phar->addFromString('test.txt', 'text');
$tester->request(connKeepAlive: true)->expectBody('1');
$tester->close();
var_dump($r);
var_dump(__METHOD__);
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
var_dump(foo());
var_dump($anon->field);
fclose( $file_handle );
rewind($fp);
var_dump($anon->field);
var_dump( end($array_test) );
$reflector->resetAsLazyProxy($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    return new C();
});
$link->close();
printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
var_dump(sin($ninety));
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
unlink($trace_file);
mysqli_free_result($res);
$this->audienceMemberId = $audienceMemberId;
$phar->setDefaultStub();
printf("printf test 22:%016x\n", 170);
var_dump($a["010"], isset($a["010"]));
printf("[001] %s, [%s] %s\n",
                $e->getMessage(),
                (is_object($db)) ? $db->errorCode() : 'n/a',
                (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
krsort($flags);
var_dump( $count );
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
var_dump(gzeof($h));
fclose($fp);
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
$mysqli->query($sql);
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump( $count );
register_shutdown_function('ABC');
var_dump($target);
printf("# %s\n", $name);
var_dump(strncmp("test ", "e", 0));
validate((object) []);
$tester->close();
$t->test();
fclose($output);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
$tester->expectLogNotice($userMessage, 'eeee');
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
phpinfo(INFO_MODULES);
crash();
var_dump( array_intersect($arr1, $arr2) );
dumpNodeList($dom->getElementsByTagName("bar:HTML"));
var_dump(session_save_path());
var_dump(sin($oneeighty));
$stmt->execute();
$link->close();
grapheme_strpos(1,1,2147483648);
var_dump($i);
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
$tester->close();
register_shutdown_function('ABC');
var_dump(gzeof($h));
$reflector->getMethod('test')->invoke($obj, $obj);
imagecolorallocate($im, 255, 255, 255);
$target->before('bar', $doc->documentElement->firstChild, 'baz');
printf("# Ghost:\n");
var_dump($obj);
var_dump( gmdate($value) );
$tester->close();
test('Ghost', $obj);
define ('foobar', 1);
var_dump(array_all([$key => 1], static fn () => false));
var_dump(array_pop($input), $input);
var_dump(gc_collect_cycles());
printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
var_dump( is_object($object) );
$phar->setDefaultStub();
$ai = $ao->getIterator();
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump($obj);
foo(true, true);
var_dump($headers2['Title']);
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
imagescale($im, 1, 0, 0);
bar('first try');
var_dump($target);
restore_exception_handler();
test(1);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(range(1.5, 3.5, -1.5));
setStyleAndThickness($im, $black, 2);
printf( "testbin: %s\n", bin2hex($r['testbin']) );
define("TEST",3);
$c("abc");
dumpNodeList($dom->getElementsByTagName("htML"));
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
var_dump($temp_array);
$dateperiod->__unserialize(['start' => $date]);
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$list->attach(new TestObject());
var_dump($foo);
;
mkdir($targetDir, 0777, true);
$list->push('f');
zerofill(6, $link, 'INTEGER');
var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
var_dump(json_decode('"\ud834"'));
test($box);
test($nodes, "attributes", fn ($n) => $n->attributes());
$test2->test();
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump( end($array_test) );
(new Test)->bar(do_throw());
var_dump( end($test_array) );
var_dump($namespaceless->lookupNamespaceURI(""));
var_dump(spl_autoload_functions());
mt_srand(1234567890);
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
var_dump(error_get_last());
fclose($file_handle);
$pdo->exec("insert into t values (0, 'original')");
var_dump ( rtrim("rtrim test        ", true) );
$zip->close();
print_r($data);
var_dump(fseek($fp, -32, SEEK_CUR));
var_dump( array_key_exists($input, $search) );
$phar->startBuffering();
var_dump(empty($obj[$name]));
foo();
var_dump($_POST);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
stream_wrapper_register('dummy', DummyWrapper::class);
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
var_dump(openssl_pkcs7_verify($wrong, 0));
call_user_func_array($ffi->$func_ptr, $argv);
var_dump(array_pop($input), $input);
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(spl_autoload_unregister($callback2));
printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
error_reporting(E_ALL);
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
bzclose($bz);
var_dump( reset($array_test) );
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
var_dump(openssl_pkcs7_verify($empty, 0));
pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
ini_set('precision', $i);
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
var_dump( is_executable($invalid_file) );
var_dump($headers1['Author'][0] === '?');
var_dump(intlcal_get_error_message(null));
var_dump($body->lookupNamespaceURI("a"));
var_dump($value);
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
var_dump(substr_count("aaa", "a", 0, 0));
debug_zval_dump($references);
$it->next();
dumpNodeList($dom->getElementsByTagName("HTML"));
var_dump(sprintf("%.988f", 1.23456789e10));
var_dump(str_contains($response, "authorization"));
checktimeout($s, 500);
var_dump(soundex("Hilbert"));
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
var_dump(debug_backtrace());
set_include_path(__DIR__.'/bug39542:.');
printf("# %s\n", $name);
$f->start();
curl_setopt($curl, CURLOPT_PRIVATE, "123");
var_dump(unserialize(serialize($obj)));
$res->free();
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
dumpNodeList($dom->getElementsByTagName("HTML"));
define('OBJECT_COUNT', 10000);
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
$tester->expectLogStartNotices();
var_dump("DB::__construct() called");
fclose($fp);
$tester->start();
var_dump(new Foo);
var_dump( gmdate($value, $timestamp) );
var_dump(range('a', 'c', -1));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
$file = __DIR__ . "/bug71127.inc";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
$dt->setTimezone(new DateTimeZone('UTC'));
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
var_dump($bar);
$val->dump();
debug_zval_dump($references);
printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$this->server->handle($request);
var_dump(serialize($r));
var_dump($rm->getNumberOfParameters());
date_default_timezone_set("Asia/Calcutta");
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
var_dump(unserialize($s));
var_dump(mhash(133, 1086849124, 133));
zerofill(3, $link, 'SMALLINT');
var_dump($array->offsetExists('key'));
foo(true, true);
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
var_dump( end($array_test) );
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
var_dump(soundex("Lloyd"));
$pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
var_dump($ar);
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
var_dump(soundex("Hilbert") == soundex("Ladd"));
var_dump($pdo->query('SELECT 1;')->fetchAll());
foo();
fclose($fp);
printf("# Ghost:\n");
showFirstTwoItems($ai);
print_R($foo);
var_dump($before === $after);
var_dump($dom->lookupNamespaceURI(""));
ob_start("test");
ob_end_clean();
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
session_write_close();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
var_dump($a[$i], isset($a[$i]));
test('Ghost', $obj);
$phar->setDefaultStub();
session_set_save_handler(new \SessionHandler(), true);
zerofill(2, $link, 'TINYINT');
var_dump(gzeof($h));
sprintf('%3$s, %2$s %1$s', "a", "b");
spl_autoload_register();
printf("# Ghost:\n");
var_dump( get_class($value) );
var_dump( is_object($object) );
$phar->stopBuffering();
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
$array = [0];
gzpassthru($h);
$phar->stopBuffering();
var_dump(fseek($fp, -32, SEEK_CUR));
$a->gen();
ob_start("test");
var_dump(get());
var_dump($db->query('SELECT * FROM test_33689'));
var_dump($rc->getStaticProperties());
var_dump(preg_replace_callback_array([], []));
print_r($str_instead);
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
spl_autoload_register();
var_dump($obj);
var_dump( array_reverse($array, false) );
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
ini_set("soap.wsdl_cache_enabled",0);
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
var_dump(gzeof($h));
var_dump($a);
var_dump(sprintf("%030.-15s", $tempstring));
var_dump(gc_collect_cycles());
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
var_dump(spl_autoload_functions());
var_dump( range('A', 'H', 0.0) );
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
byReference($array);
set_error_handler(function() {
    (y);
});
test(3);
var_dump($array);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
var_dump(gzeof($h));
$tester->expectLogStartNotices();
var_dump(sprintf("%%%.2f", 1.23456789e10));
ini_set("session.save_handler","files");
fclose($file_handle);
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
printf("Table        : %s\n", $field->table);
touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
var_dump(error_get_last());
var_dump(-2147483647 % -1);
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
test('Ghost', $obj);
$dom->getElementById('x')->removeAttribute('xml:id');
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
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
test($p12, $pass);
$mysql->close();
$dateperiod->__unserialize(['start' => $date]);
var_dump($list2->offsetExists($x));
file_put_contents($empty_webp, "");
var_dump($a);
var_dump($obj2->getTest());
var_dump(gethostbyname($host));
http_server_kill($pid);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
$temp_array = $array;
$list->pop();
;
$c("abc");
fflush($stream);
$doc->loadXML('<a>foo<last/></a>');
$tester->expectLogNotice($userMessage, 'aaaa');
var_dump(sin($thirty));
var_dump(strncasecmp("test ", "E", 0));
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
var_dump(soundex("Hilbert"));
var_dump( strrchr($haystack, $needle[$index]) );
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
var_dump($obj);
var_dump( array_reverse($array) );
var_dump($test);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
test('Proxy', $obj);
$zip->close();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
var_dump(defined('SO_REUSEPORT'));
checktimeout($s, 500);
byRef(C[0]);
set_error_handler(function() {
    (y);
});
var_dump(soundex("Euler")       == soundex("Ellery"));
odbc_fetch_row($res);
$dt->sub($interval);
bzwrite($bz, $str);
var_dump($re->getConstants());
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
does_not_work();
var_dump(foo());
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
var_dump(1);
var_dump($anon->field);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
var_dump( is_object($object) );
var_dump(soundex("Hilbert") == soundex("Ladd"));
$list->add(1, 1);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
dumpNodeList($dom->getElementsByTagName("foo:html"));
var_dump ( rtrim("rtrim test        ", " ") );
$list->push('f');
var_dump($b, $GLOBALS['b'], $c);
var_dump( is_array ($var_array) );
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
crash();
dumpNodeList($dom->getElementsByTagName("HTml"));
var_dump($stmt->fetch());
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
var_dump(serialize($r));
var_dump($finfo->buffer("buffer\n"));
mysqli_free_result($res);
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
var_dump(__METHOD__);
test($p12, $pass);
