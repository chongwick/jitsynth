<?php
$box = new Box();
function f_0() {
    if (true) {
        return 0;
    }
    return true;
}
function f_1() {
    function f_2() {
        $dtor = new class { function __destruct() { throw new Exception; } };
        return false;
    }
    function f_3() {
        fclose($fp);
        var_dump($ffi->bug_gh16013_return_char());
        var_dump($shm_id1);
        var_dump( get_class($value) );
    }
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    var_dump($data);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
    zerofill(2, $link, 'TINYINT');
    if (true) {
        return true;
    }
    var_dump($function($compressed));
    $this->server->handle($request);
    var_dump($e->getMessage());
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
}
$me = new static;
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
$dt->setTimezone(new DateTimeZone('America/Boise'));
print_r($str_instead);
$it->next();
;
$this->server->handle($request);
mt_srand(1234567890);
var_dump($prefixed->lookupNamespaceURI("a"));
var_dump($http_response_header);
imagepalettetotruecolor($im);
$ai->rewind();
dumpNodeList($dom->getElementsByTagName("bar:html"));
$phar->setDefaultStub(str_repeat('a', 401));
curl_setopt($ch, CURLOPT_PASSWORD, null);
var_dump( strftime($value, $timestamp) );
$tester->expectLogNotice($userMessage, 'cccc');
var_dump( array_intersect($arr1, $arr2) );
var_dump($rm->getNumberOfRequiredParameters());
$foo->bar($a, $b, $c);
var_dump(__METHOD__);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
restore_exception_handler();
date_default_timezone_set("Europe/Lisbon");
var_dump($obj);
closedir($dfp);
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump($d->getTimezone(), $tz2);
gzpassthru($h);
var_dump(sprintf("%030.-15s", $tempstring));
$fn = function() { return static::name(); };
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$zip->open($filename);
var_dump($list2->offsetExists($x));
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
printf("[005] [%d] %s\n", $link->errno, $link->error);
var_dump($a[$i], isset($a[$i]));
var_dump(ftp_mkdir($ftp, 'CVS'));
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
fclose($input);
session_set_save_handler(new MySessionHandler());
var_dump($stmt->nextRowset());
dumpNodeList($dom->getElementsByTagName("bar:HTML"));
$test('sensitive');
var_dump("DB::__construct() called");
var_dump(range('z', 'a', 100));
$c(false);
zerofill(10, $link, 'DOUBLE PRECISION');
php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
rmdir($dest);
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
var_dump(test($x));
var_dump(ini_get('mysqlnd.debug'));
ini_set("session.save_handler","files");
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$link->real_query($sql);
fclose( $file_handle );
$res[] = $re;
var_dump(array_map(assert(...), [true, true, false]));
fclose($fp);
printf("printf test 8:<%20s>\n", "foo");
test();
var_dump(-2147483648 % -1);
$db->exec('CREATE TABLE test_33689 (bar INT NOT NULL)');
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
var_dump(range('a', 'z', 100));
var_dump($a);
var_dump($i);
var_dump($array);
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
clearstatcache();
$this->mysqli->close();
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
$server->handle($HTTP_RAW_POST_DATA);
fclose($fp);
printf("Decimals     : %d\n", $field->decimals);
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
$tester->request(connKeepAlive: true)->expectBody('1');
$zip->open($arc_name, ZIPARCHIVE::CREATE);
var_dump(strncmp("test ", "e", -1));
var_dump(`$php -n -v`);
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
var_dump($diff);
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
var_dump(new FooBar);
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
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
printf("printf test 25:%-2s\n", "gazonk");
unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
var_dump($client->__getLastResponse());
var_dump(foo());
printf("printf test 1:%s\n", "simple string");
display($res);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$tester->expectLogStartNotices();
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
test('Ghost', $obj);
$ffi->bug79177();
var_dump($phar->getStub());
$zip->extractTo($dest);
var_export($test);
printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
var_dump(json_last_error() === JSON_ERROR_UTF16);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
showFirstTwoItems($ai);
$tester->close();
var_dump($array);
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$link->set_charset('sjis');
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
zerofill(3, $link, 'SMALLINT');
$result->close();
foo(true, false);
closedir($dfp);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
var_dump($r["bug69279.txt"]->isCompressed());
var_dump($array[$a]);
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
unlink($trace_file);
var_dump(unserialize($s));
var_dump(sin($oneeighty));
ob_end_clean();
var_dump($box->value = new Test);
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
var_dump(strncasecmp("test ", "E", -1));
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
printf("Flags        : %d\n", $field->flags);
set_error_handler('my_error_handler');
mt_srand(1234567890);
var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
var_dump(strlen(file_get_contents('php://input')));
var_dump($i);
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
range($var,1,$var);
var_dump( array_reverse($array, true) );
var_dump( gmstrftime($value) );
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
var_dump ( $vars );
var_dump(class_exists("TestClass", true));
var_dump(json_decode('"\ud834"'));
var_dump($value);
curl_setopt($curl, CURLOPT_PRIVATE, "123");
imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
gzclose($h);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump($rm->getNumberOfParameters());
var_dump($row_stmt);
$m['data2'] = 200;
var_dump(gc_collect_cycles());
var_dump($dom->getElementById('x')?->nodeName);
$phar->stopBuffering();
var_dump($dt);
var_dump(array_column($array, 'superhero'));
var_dump(range(1, 3, -1));
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
rewind($fp);
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
bzclose($bz);
var_dump(http_get_last_response_headers());
test([0], [1], [2]);
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
var_dump($diff->invert, $diff->s, $diff->f);
var_dump(call_user_func_array("array_multisort", $args));
rewind($fp);
;
printf("# Proxy:\n");
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
);
    var_dump($d == get_base;
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
var_dump( array_reverse($array, false) );
file_get_contents('dummy://foo', false, $context);
test();
var_dump( range(7.0, 1.0, 6.5) );
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$stmt->execute([ 15 ]);
foo(true, true);
var_dump(error_get_last());
var_dump($fi->file($f));
$this->public_var = 10;
chdir(__DIR__);
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
var_dump($body->lookupNamespaceURI("a"));
var_dump($baz);
var_dump($baz);
$reader->close();
ini_set("intl.error_level", E_WARNING);
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
var_dump($type->childNodes);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
showFirstTwoItems($ai);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump( rtrim("234\x0005678\x0000efgh\xijkl\x0n1", "\x0n1") );
$zip->extractTo(__DIR__);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
var_dump($r[$ref]);
var_dump($obj);
var_dump($obj);
var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
var_dump($prefixed->lookupNamespaceURI("a"));
var_dump(count($cert_data['extracerts']));
var_dump(spl_autoload_unregister($callback1));
$zip->setPassword('bar');
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
pcntl_wait($status);
fwrite($fd, "foo");
var_dump($phar->getStub());
printf("printf test 4:%.10f\n", 10.0/3);
$phar->stopBuffering();
http_server_kill($pid);
$test2->test();
printf("[008] PS and non-PS results differ, dumping data\n");
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
$gen = gen();
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
$c(false);
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
var_dump($foo[0]);
something();
printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
$a->rewind();
$zip->open($filename);
;

?>;
t3();
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
unlink($fn);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(gethostbyname($host));
call_user_func("static::ok");
setlocale(LC_ALL, "C");
$callable($nodes);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
var_dump($r[$ref]);
set_exception_handler(null);
pcntl_wait($status);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
var_dump(sin($thirty));
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
printf("printf test 10: 123456789012345\n");
fclose($fp);
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
printf("printf test 7:%010.2f\n", 2.5);
var_dump(isset($_POST['foo']));
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
spl_autoload_register(function ($name) {
    if ($name == "B") {
        eval ("abstract class B extends A { }");
    } else if ($name == "A") {
        eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
    } else if ($name == "T") {
        eval ("trait T { public function __construct() { } }");
    }
    return TRUE;
});
foo();
$stmt->execute();
var_dump($stmt->fetchAll());
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$reqOfBig = 'select * from t';
var_dump($document->saveHTML());
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
var_dump($dom->getElementById('x')?->nodeName);
var_dump($this->getConst());
$f->resume();
mysqli_close($link);
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
$zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
test(1);
test($nodes, "children", fn ($n) => $n->children());
zerofill(8, $link, 'FLOAT');
$infile));
?>;
unserialize('a:2:{i:0;O:9:"000000000":10000000');
var_dump($priorityQueue->getExtractFlags());
display($res);
var_dump($i);
var_dump($row);
var_dump(urlencode(file_get_contents($url)));
$datefmt->parse('abc');
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
$phar->addFromString('test.txt', 'text');
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
var_dump($im);
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
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
->appendChild($node);

pr;
var_dump(gzread($h, -1));
var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
var_dump($h1->length);
ob_end_clean();
var_dump(session_save_path());
var_dump($body->lookupNamespaceURI(""));
var_dump ( rtrim("rtrim test$#@", "#@$") );
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
print_r($row);
$stmt->execute();
$a->prop = new B();
var_dump($dom->getElementById('x')?->nodeName);
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
var_dump("DB::__construct() called");
$phar->stopBuffering();
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
$val->dump();
error_reporting(0);
printf("printf test 8:<%20s>\n", "foo");
var_dump($c);
$dt->setTimezone(new DateTimeZone('America/Boise'));
$document->loadHTMLFile($uri);
var_dump($obj);
restore_exception_handler();
call_user_func(array("static","ok"));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$priorityQueue->insert("c", 0);
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
array_splice($GLOBALS,0,count($GLOBALS));
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
ini_set("intl.error_level", E_WARNING);
var_dump($b->test);
$dom->loadXML('<root><child/></root>');
printf("printf test 1:%s\n", "simple string");
highlight_string($string, true);
printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
$phar->setDefaultStub('my/custom/thingy.php');
mysqli_close($link);
var_dump(sin($threesixty));
var_dump(lookup(513));
call_user_func(array("static","ok"));
var_dump(isset($_POST['foo']));
date_default_timezone_set('UTC');
setStyleAndThickness($im, $black, 2);
var_dump(openssl_pkcs7_verify($eml, 0));
printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
var_dump( is_object($object) );
error_reporting(E_ALL);
list(
    '' => $foo,
    $bar
) = $array;
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
var_dump(mysqli_get_server_version($link));
$stmt->execute();
$result->close();
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
$tester->expectLogNotice($userMessage, 'eeee');
$container->appendChild(createElementNS($dom, NULL, "html", "3"));
var_dump($dom->lookupNamespaceURI(NULL));
var_dump( range(1, 7, 10.0**400) );
$server->addfunction("test");
(new B)->baz();
$link->close();
var_dump( is_object($type) );
var_dump($bar);
$dt->add(new DateInterval('PT1M'));
var_dump($dom->getElementById('x')?->nodeName);
$root->__construct("malformed");
$foo->bar($a, $b, $c);
grapheme_strpos(1,1,2147483648);
file_get_contents('dummy://foo', false, $context);
odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
var_dump($res);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
ob_start(function() {
    declare(ticks=1);
    register_tick_function(
       function() { }
    );
});
var_dump(openssl_x509_parse($pem_cert));
var_dump($e);
$zip->close();
var_dump($line);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$phar->stopBuffering();
setStyleAndThickness($im, $black, 2);
$a->test("test");
fwrite($fp, "I am the LOB data");
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
ob_flush();
checktimeout($s, 500);
$counter = 0;
$db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
var_dump($prefixed->lookupNamespaceURI(""));
$phar->stopBuffering();
file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
$db->exec('INSERT INTO test_33689 VALUES(1)');
$child->testIsCallable2();
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
var_dump(range(1.5, 3.5, -1.5));
foo(false, false);
foo();
printf("printf test 10: 123456789012345\n");
imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
var_dump(gc_collect_cycles());
var_dump($obj);
printf("printf test 13:%5d\n", -12);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
$ai->rewind();
file_put_contents($magic_file, "
0	regex	\\0\\0\\0\\0	Test
");
var_dump($data);
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
$tester->terminate();
var_dump($headers1['Title'][0] === '?');
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
var_dump(spl_autoload_unregister($callback1));
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
var_dump(http_get_last_response_headers());
$val->dump();
var_dump(soundex("Hilbert"));
date_default_timezone_set('UTC');
foo();
closedir($dfp);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
bzclose($bz);
var_dump($stmt->nextRowset());
var_dump(mb_strpos('This is na English ta', 'a', $i));
var_dump(debug_backtrace());
date_default_timezone_set('UTC');
var_dump($arg);
var_dump(pcntl_wexitstatus($status));
$input[] = &$input;
$it->rewind();
var_dump($target);
test();
clearstatcache();
var_dump($c);
file_put_contents($tmpFileIn, $originalEnvelopeData);
file_put_contents($empty_webp, "");
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
setlocale(LC_ALL, "C");
;
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
et_basename;
var_dump($client->__getLastResponse());
file_put_contents($batch_file_path, $batch_file_content);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump($dom->getElementById('x')?->nodeName);
restore_exception_handler();
$dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
var_dump( end($array_object) );
http_server_kill($pid);
var_dump($fi->file($f));
fclose($file_handle);
var_dump($stmt->execute([1]));
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
var_dump($dom->lookupNamespaceURI(NULL));
var_dump($d);
var_dump(intlcal_get_error_message(null));
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(soundex("Lloyd"));
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
var_dump(sin($sixty));
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
foo();
var_dump($_a, $_b);
$reflector->resetAsLazyProxy($obj, function () {});
pg_free_result($res);
$phar->startBuffering();
var_dump($prefixed->lookupNamespaceURI(NULL));
$zip->open($filename);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
