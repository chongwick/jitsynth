<?php
fffff);
imagegd2($im1, $file);
var_dump($r[$ref]);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
$db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
var_dump(ini_get('mysqlnd.debug'));
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
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
printf("Content-Type Default OK" . PHP_EOL);
$fiber->start();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
dumpNodeList($dom->getElementsByTagName("html"));
var_dump(serialize($a));
var_dump(spl_autoload_unregister($callback2));
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
var_dump( end($test_array) );
fflush($stream);
test('Ghost', $obj);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
$a->rewind();
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
$it->next();
var_dump($obj->a);
ini_set('display_errors',true);
var_dump($dt);
var_dump(session_cache_expire());
pcntl_sigwaitinfo($a,$a);
$tester->start();
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
var_dump($shm_id2);
ob_start("test");
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
var_dump($http_response_header);
printf("[010] Found unexpected field '%s'\n", $field->name);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$db->query('DROP PROCEDURE IF EXISTS testSp');
var_dump($prefixed->lookupNamespaceURI(""));
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
var_dump(range(1, 3, -1));
$dt->sub($interval);
crash();
var_dump(pg_last_notice($dbh));
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
var_dump(nl2br($str) );
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
$insert->execute();
var_dump($prefixed->lookupNamespaceURI(NULL));
stream_wrapper_register('dummy', DummyWrapper::class);
sprintf('%$s, %2$s %1$s', "a", "b");
var_dump($s[$i], isset($s[$i]));
ob_end_flush();
unlink($filename);
(new ReflectionFunction($function))->invokeArgs($args);
printf("printf test 22:%016x\n", 170);
test(2);
printf("%0\$s", 1);
fclose($file_handle);
does_not_work();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump(baz());
showFirstTwoItems($ai);
var_dump($function($compressed));
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
reset( $array_test );
$tester->close();
imagesavealpha($im, true);
$phar->stopBuffering();
var_dump($shm_id1);
curl_exec($ch);
var_dump(gzeof($h));
debug_zval_dump( $value );
ini_set("intl.error_level", E_WARNING);
var_dump(baz());
unlink($filename);
var_dump(-2147483647 % -1);
shmop_delete($shm_id1);
var_dump(error_reporting());
$a->TestFunc();
var_dump($prefixed->lookupNamespaceURI(NULL));
$dom->loadXML('<root><child/></root>');
mysqli_close($link);
fclose($fp);
printf("printf test 4:%.10f\n", 10.0/3);
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
var_dump($s);
var_dump( strtr($str, $from, $to) );
var_dump($body->lookupNamespaceURI(NULL));
var_dump(-9_223_372_036_860_776_000 % -1);
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
(new Test)->bar(do_throw());
php_cli_server_start($code, null, $args);
foo();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
ob_end_flush();
var_dump(json_encode($arr));
$tester->close();
showFirstTwoItems($ai);
$tester->expectLogStartNotices();
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
set_include_path(__DIR__.'/bug39542;.');
ini_set("session.save_handler","files");
$phar->setDefaultStub();
var_dump($rc->getStaticProperties());
var_dump(test());
->appendChild($node);

pr;
closedir($dfp);
var_dump($dom->getElementById('x')?->nodeName);
extract(Foo::bar());
$doc->loadXML('<a>foo<last/></a>');
var_dump((new Exception)->getTrace());
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
bar();
$mysql->close();
var_dump($body->lookupNamespaceURI("a"));
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$zip->extractTo(__DIR__);
$b->rewind();
foo();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$test('sensitive');
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
ob_start();
printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
ini_set('display_errors',true);
zerofill(10, $link, 'DOUBLE PRECISION');
imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
var_dump($_POST);
$zip->close();
var_dump(class_exists("TestClass", true));
var_dump( array_unshift($temp_array, $var) );
var_dump($dom->getElementById('x')?->nodeName);
debug_zval_dump($test);
$dt->add(new DateInterval('PT1H'));
var_dump($argv);
var_dump(unserialize($s));
gzclose($h);
var_dump(__METHOD__);
var_dump($dt);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
test("http://t[est@[::1");
var_dump( end($test_array) );
$doc->loadXML('<a>foo<last/></a>');
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
var_dump($dom->getElementById('x')?->nodeName);
test(1);
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
class_alias( 'stdClass', 'bool' );
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
var_dump($foo);
var_dump($dom->getElementById('x')?->nodeName);
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$InvMocker->addMatcher($OuterMatcher);
var_dump(soundex("Gauss")       == soundex("Ghosh"));
var_dump( addslashes($str) );
mysqli_free_result($res);
var_dump($r);
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
var_dump($x);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt->close();
date_default_timezone_set('UTC');
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
shmop_delete($shm_id1);
$prop->setRawValue($a, 1);
$container->appendChild(createElement($dom, "HTML", "1"));
var_dump(-2147483648 % -2);
var_dump($arg);
http_server_kill($pid);
var_dump($value);
var_dump($body->lookupNamespaceURI("a"));
$tester->terminate();
var_dump(range('a', 'z', 100));
ini_set("intl.error_level", E_WARNING);
var_dump(spl_autoload_functions());
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
var_dump(pack('x') === "\0");
var_dump( gmstrftime($value, $timestamp) );
var_dump($e);
array_map(array('Element', 'CallBack'), $arr);
var_dump($diff->invert, $diff->s, $diff->f);
http_server_kill($pid);
var_dump($x->prop);
printf("[010] Found unexpected field '%s'\n", $field->name);
var_dump(1);
$reflector->resetAsLazyGhost($obj, function ($obj) {
    });
var_dump((bool) $o);
var_dump($rm->getNumberOfRequiredParameters());
(stat("$d0\\test0.txt")) > 0);

unlink("$d0\;
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
var_dump(intlcal_get_error_message(null));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt->execute();
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
var_dump($temp_array);
var_dump(__METHOD__);
$tester->start();
imagescale($im, 1, 1, -10);
set_exception_handler(null);
var_dump($ffi->bug_gh16013_return_enum());
test([0], [1], 2);
var_dump(test());
$priorityQueue->insert("b", 2);
test('Ghost', $obj);
test($p12, $pass);
$a->rewind();
set_error_handler(function() {
    (y);
});
showFirstTwoItems($ai);
var_dump(__METHOD__);
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
var_dump(ini_get('mysqlnd.debug'));
fclose($fp);
display($res);
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
setStyleAndThickness($im, $black, 4);
var_dump(c1::$a1);
var_dump(spl_autoload_unregister($callback1));
$phar->startBuffering();
session_start();
var_dump(pg_last_notice($dbh));
var_dump( gmdate($value, $timestamp) );
$tester->close();
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
date_default_timezone_set("UTC");
$ffi->bug79177();
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump(ini_get('mysqlnd.debug'));
bar();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump($row);
var_dump(ini_get('mysqlnd.debug'));
var_dump(range('a', 'c', -1));
var_dump($_SESSION);
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
var_dump( array_key_exists($input, $search) );
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
var_dump($res);
printf("%s: %s\n", $e::class, $e->getMessage());
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
var_dump($dom->lookupNamespaceURI("xmlns"));
openssl_seal($_, $_, $_, array_fill(0,64,0));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump($function($compressed));
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
$match->invoked($invocation);
var_dump($body->lookupNamespaceURI(""));
$tester->terminate();
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$o->foo();
var_dump(expm1($value));
printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
php_cli_server_start('http_response_code(422);');
$list->push('o');
$pdo->exec("insert into t select n + 1, 'non '||t from t");
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump(range('a', 'z', 100));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
rmdir($dest . '/test/empty');
(new B)->baz();
printf("printf test 21:%016b\n", 170);
var_dump($obj);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(dom_import_simplexml($attr)->textContent);
$tag->append("foo");
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
var_dump($dom->getElementById('x')?->nodeName);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
var_dump( strtr($str, $replace_pairs) );
printf("printf test 31:%.17g\n", INF);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
var_dump($s);
var_dump($data);
var_dump($oIntlDateFormatter->getTimeZone()->getID());
call_user_func_array($ffi->$func_ptr, $argv);
var_dump($c);
$doc->loadXML('<a>foo<last/></a>');
$reflector->initializeLazyObject($obj);
