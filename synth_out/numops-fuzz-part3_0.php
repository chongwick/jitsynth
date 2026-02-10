<?php
function f_0() {
    $r = new ReflectionClass('Test2');
    $box->value = new Test;
    var_dump( strrchr($blank_line, $needle) );
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
    dumpNodeList($dom->getElementsByTagName("HTml"));
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    $b->attach($object);
    var_dump($_a, $_b);
    $mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
    date_default_timezone_set("Asia/Calcutta");
    ob_start("test");
    fclose($r);
    $tester->expectLogStartNotices();
    unlink($filename);
    printf("%0\$s", 1);
    var_dump(test());
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    $db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
    $stmt->execute();
    register_shutdown_function('timE');
    var_dump(sprintf("%.988f", 1.23456789e10));
    setlocale(LC_ALL, "C");
    var_dump($obj);
    ini_set("intl.error_level", E_WARNING);
    var_dump(test($x));
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
    imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
    set_error_handler('test_error_handler');
    file_put_contents($fn, $compressed);
    $list->add(1, 1);
    set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
    var_dump($stmt->execute([1]));
    var_dump($http_response_header);
    $t->cleanRepair();
    set_exception_handler(function () { print "EX\n"; });
    display($res);
    printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
    var_dump(array_all([$key => 1], static fn () => false));
    $db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
    boo();
    var_dump(array_column($array, 'superhero'));
    var_dump($h1->length);
    $stmt->execute();
    printf("[008] PS and non-PS results differ, dumping data\n");
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    fclose($fp);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
    printf("%s: %s\n", $e::class, $e->getMessage());
    display([ $stmt1->fetch() ]);
    test("http://t[est@::1]");
    $phar->setDefaultStub(str_repeat('a', 400));
    var_dump($temp_array);
    $b->rewind();
    test('<?php echo 3; // 4 ?>5');
    bar();
    var_dump(spl_autoload_functions());
    $arr();
    $ai->current();
    var_dump(openssl_pkcs7_verify($wrong, 0));
    var_dump(-9_223_372_036_860_776_000 % -1);
    $test2->test();
    test($box);
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    var_dump($obj);
    printf("printf test 9:<%-20s>\n", "bar");
    register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
    var_dump($foo);
    register_shutdown_function('ABC');
    test([0], [1], [2]);
    var_dump(json_last_error_msg());
    var_dump($child);
    var_dump(openssl_x509_parse($pem_cert));
    var_dump($box->value = new Test);
    $stmt->close();
    var_dump($org_a, $org_b);
    dumpNodeList($dom->getElementsByTagName("HTml"));
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . 'getSubPathname_test_1.tmp');
    var_dump(session_cache_expire());
    $a->test("test");
    set_exception_handler(function () { print "EX\n"; });
    var_dump($dt);
    var_dump(ftp_mkdir($ftp, 'CVS'));
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    bzclose($bz);
    var_dump($i);
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump( array_fill($start_key , $num , $val) );
    $arr();
    var_dump($array->offsetExists('key'));
    set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
    var_dump($array->offsetExists('key'));
    test("http://t[est@[::1]");
    var_dump($obj->a);
    set_exception_handler("foo");
    var_dump( end($array_test) );
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    $f->start();
    $tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    var_dump ( rtrim("rtrim test   \t\0 ") );
    restore_exception_handler();
    $mysql->close();
    unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
    $stmt->execute([ 15 ]);
    var_dump($temp_array);
    var_dump($baz);
    var_dump($b->test);
    test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    restore_exception_handler();
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    var_dump($before === $after);
    foo();
    $tester->start();
    ini_set('mysqlnd.fetch_data_copy', true);
    ob_start("test");
    pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
    var_dump(tidy_get_body($t));
    t3();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
    });
    dirs as $d) {;
    var_dump($ar1);
    var_dump( end($resources) );
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
    var_dump( get_class($value) );
    var_dump($stmt->fetchAll());
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
    $root->__construct("malformed");
    var_dump( reset($array_test) );
    var_dump( array_udiff($array1, $value, $data_comp_func) );
    var_dump(get_class_vars(C::class));
    var_dump($argv);
    var_dump(gc_collect_cycles());
    var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
    date_default_timezone_set('UTC');
    mt_srand(1234567890);
    var_dump($array);
    est0.txt");
unlink("$d1\\;
    printf("printf test 15:%b\n", 170);
    var_dump(sin($ninety));
    gzclose($h);
    $pdo->exec("create temp table t2 as select 678 n, 'ok' status");
    printf("printf test 2:%d\n", 42);
    foo(false, true);
    var_dump(soundex("Gauss"));
    call_user_func('bar','second try');
    $mysqli->query($sql);
    $callable($nodes);
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    var_dump( range(1.0, 7.0, 0.0) );
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    var_dump($ar1);
    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
    var_dump($row);
    fclose($fp);
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump($dom->lookupNamespaceURI("xml"));
    var_dump( strrchr($haystack, $needle[$index]) );
    printf("[010] Found unexpected field '%s'\n", $field->name);
    var_dump($headers2['Author']);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    var_dump($dt);
    set_exception_handler(null);
    class_alias( 'stdClass', 'bool' );
    $tag->append("foo");
    var_dump(__METHOD__);
    var_dump(openssl_pkcs7_verify($wrong, 0));
    printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
    foo(true, true);
    ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
    $tester->close();
    var_dump(debug_backtrace());
    var_dump(__METHOD__);
    test($box);
    chdir(__DIR__);
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    zerofill(12, $link, 'DEC');
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    est1.txt");

rmdir($d0);
    php_cli_server_start('foo bar');
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    var_dump($obj);
    setlocale(LC_ALL, "C");
    var_dump((new Exception)->getTrace());
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    zerofill(12, $link, 'DEC');
    var_dump($initialRequest ? $x : $y);
    printf("printf test 25:%-2s\n", "gazonk");
    $server->addfunction("test");
    var_dump($child);
    set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
    var_dump($br);
    var_dump( range('A', 'H', 0) );
    var_dump($foo);
    var_dump(call_user_func_array("array_multisort", $args));
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    var_dump(-2147483647 % -1);
    $val->dump();
    $this->server->addFunction('Test');
    $stmt->execute();
    var_dump(scandir(''));
    $pdo->exec("insert into t values (0, 'original')");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
    printf("printf test 14:%c\n", 64);
    $db->setNoticeCallback($callback);
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    http_server_kill($pid);
    var_dump($baz);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    var_dump($dom->lookupNamespaceURI("xmlns"));
    zerofill(5, $link, 'INT');
    $dom->getElementById('x')->removeAttribute('xml:id');
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
    printf("printf test 4:%.10f\n", 10.0/3);
    var_dump($function($compressed));
    $this->server->handle($request);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    var_dump(session_cache_limiter());
    var_dump($array->offsetExists('nokey'));
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    var_dump( strftime($value) );
    $reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $mysqli->query($sql);
    var_dump($foo);
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $stmt->bind_result($id);
    var_dump(json_decode('{"":"value"}', true));
    var_dump($a["010"], isset($a["010"]));
    imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
    $tester->terminate();
    byRef(C[0]);
    ob_clean();
    $ai->current();
    $a->test(new B());
    var_dump($row['bit_column_1']);
    var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    var_dump ( rtrim("rtrim test   \t\0 ") );
    $b->aa();
    ched->splitText($length);
pri;
    $o->foo();
    var_dump(json_last_error() === JSON_ERROR_UTF16);
    zerofill(2, $link, 'TINYINT');
    $db->beginTransaction();
    var_dump($d->getTimezone(), $tz2);
    $list->push('f');
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    print_r($tmp);
    $stmt->execute();
    call_user_func("static::ok");
    var_dump($list2->offsetExists($x));
    var_dump(unserialize($s));
    printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    var_dump($dom->getElementById('x')?->nodeName);
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    ob_clean();
    imagecolorallocate($im, 255, 255, 255);
    var_dump(ini_get('mysqlnd.debug'));
    bar();
    printf("[008] PS and non-PS results differ, dumping data\n");
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    phpinfo(INFO_VARIABLES);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    rs as $d) {;
    pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    var_dump(gzeof($h));
    test($nodes, "children", fn ($n) => $n->children());
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump(substr_count("aaa", "a", 0, 0));
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    $oIntlDateFormatter->setPattern('VV');
    var_dump( array_key_exists($input, $search) );
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    var_dump($phar->getStub());
    $tester->expectLogStartNotices();
    $tester->expectLogStartNotices();
    restore_exception_handler();
    var_dump(session_cache_expire());
    var_dump(sprintf("%X", 12));
    printf("printf test 26:%2\$d %1\$d\n", 1, 2);
    trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
    $tester->start();
    test2();
    var_dump(substr_count("aaa", "a", 0, 0));
    $list->push('f');
    var_dump($array[$a]);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump($readonly_anon->field);
    zerofill(6, $link, 'INTEGER');
    var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
    var_dump("DB::__construct() called");
    $b->execute(array (5));
    call_user_func(array("static","ok"));
    $o->foo();
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump(substr_compare('/', '/asd', 0, 4));
    ame, $xmlstring);

$reader = new XMLReade;
    var_dump( addslashes($str) );
    var_dump(
    $obj,
    $obj->{42}
);
    $stmt->execute([ 32 ]);
    var_dump(`$php -n -v`);
    stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
    pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
    var_dump($obj);
    sprintf('%$s, %2$s %1$s', "a", "b");
    fclose( $file_handle );
    var_dump(sin($sixty));
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    var_dump(version_compare('1.2', '2.1', '??'));
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    unlink($filename);
    debug_print_backtrace();
    var_dump( range('A', 'H', 10.0**400) );
    define("FOO", "okey");
    print_r($browser);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    validate((object) []);
    var_dump($fi->file($f));
    var_dump($stmt->nextRowset());
    stream_get_line($fp, 1024*1024*2, "aaaa");
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    var_dump(strlen($phar->getStub()));
    dir($d1);
    var_dump(spl_autoload_unregister($callback1));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    $val->dump();
    set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
    test("http://t[est@127.0.0.1");
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    var_dump(urlencode(file_get_contents($url)));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
    t3();
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
    set_error_handler(function() {
    (y);
});
    test($nodes, "asXml", fn ($n) => $n->asXml());
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    unlink($filename);
    printf("printf test 23:%016X\n", 170);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    var_dump($anon->field);
    test("http://t[est@[::1]");
    imagepalettetotruecolor($im);
    var_dump($r["bug69279.txt"]->isCompressed());
    $phar->stopBuffering();
    var_dump($a);
    debug_zval_dump( $value );
    var_dump ( rtrim("rtrim test   \t\0 ") );
    ini_set('mysqlnd.fetch_data_copy', true);
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
    var_dump(strncmp("test ", "e", -1));
    var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
    $tester->close();
    var_dump($diff->invert, $diff->s, $diff->f);
    set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
    stream_wrapper_register('dummy', DummyWrapper::class);
    $obj->setTest('test');
    stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
    set_exception_handler(null);
    $dt->sub($interval);
    var_dump($ffi->bug_gh16013_return_char());
    $mysqli->query($sql);
    printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
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
    var_dump(file_exists($filename));
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    var_dump($http_response_header);
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    ini_set('session.serialize_handler', 'php_serialize');
    test($nodes, "children", fn ($n) => $n->children());
    extract($GLOBALS, EXTR_REFS);
    $zip->extractTo($dest);
    $element->prepend('x', new DOMEntity);
    imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
    var_dump($list2->offsetExists($x));
    var_dump(sin($threesixty));
    $stmt->execute([ 32 ]);
    printf("printf test 22:%016x\n", 170);
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    var_dump($a + $s1);
    $tester->expectLogTerminatingNotices();
    printf("Charsetnr    : %d\n", $field->charsetnr);
    vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
    var_dump($info['used_memory'] + $info['free_memory']);
    var_dump(strlen(file_get_contents('php://input')));
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
    $tester->expectLogTerminatingNotices();
    var_dump( array_udiff($array1, $value, $data_comp_func) );
    byVal(C[0]);
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    var_dump(lookup(513));
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
    var_dump($phar->getStub());
    call_user_func("static::ok");
    test(1);
    var_dump(gc_collect_cycles());
    $tester->request(connKeepAlive: true)->expectBody('1');
    var_dump(soundex("Lloyd")       == soundex("Ladd"));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    file_get_contents('dummy://foo', false, $context);
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
    unlink($filename);
    var_dump(__METHOD__);
    var_dump( array_intersect($arr1, $arr2) );
    $a->next();
    var_dump($dom->saveHTML($node));
    var_dump($dom->saveHTML($node));
    var_dump($temp_array);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    var_dump(file_get_contents($uri));
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
    var_dump(is_callable(array($this, 'static::testIsCallable2')));
    var_dump($r->getStaticProperties());
    $b->execute(array (5));
    $server->addfunction("test");
    var_dump( strtok($string, "\0") );
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    gzclose($h);
    var_dump( end($array_object) );
    define("FOO", "okey");
    $a->bar();
    var_dump($a);
    var_dump(@$obj->dynamic++);
    $zip->close();
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    var_dump($s);
    $stmt->execute();
    test($nodes, "asXml", fn ($n) => $n->asXml());
    var_dump($res);
    test("http://t[est@[::1]");
    $phar->setDefaultStub('my/custom/thingy.php');
    pcntl_sigwaitinfo($a,$a);
    var_dump(__METHOD__);
    var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    t3();
    php_cli_server_start('foo bar');
    printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
    var_dump($html);
    highlight_string($string, true);
    var_dump($dt);
    spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    php_cli_server_start('http_response_code(422);');
    rmdir($dest . '/test');
    imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    $dom->getElementById('x')->remove();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    var_dump($s[$i], isset($s[$i]));
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    var_dump($node->textContent == $text);
    zerofill(6, $link, 'INTEGER');
    does_not_work();
    setStyleAndThickness($im, $black, 2);
    var_dump("DB::__construct() called");
    set_exception_handler(function () { print "EX\n"; });
    var_dump(class_exists("TestClass", true));
    $sh->write("foo", "bar");
    var_dump($value);
    var_dump(array_any([$key => 1], static fn () => true));
    error_reporting(E_ALL);
    var_dump($dom->lookupNamespaceURI(""));
    $mysqli->query($sql);
    $sh->open('path', 'name');
    var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
    var_dump($info['buffer_size']);
    var_dump($obj->a);
    $datefmt->parse('abc');
    $dateperiod->__unserialize(['start' => $date]);
    var_dump(soundex("Hilbert"));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    var_dump(__METHOD__);
    closedir( $dir_handle );
    $stmt->closeCursor();
    var_dump(-2147483647 % -1);
    $zip->setPassword('bar');
    var_dump(substr($hash, -1, 1) !== "\0");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    $reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
    printf("%s: %s\n", $e::class, $e->getMessage());
    something();
    var_dump($stmt->fetchAll());
    var_dump('ERR');
    foo();
    $dom->getElementById('x')->removeAttribute('xml:id');
    unlink($tmpFileOut);
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    $tag->append("foo");
    $reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
    ob_end_flush();
    var_dump($value);
    var_dump($obj);
    est0.txt");
unlink("$d1\\;
    $foo->bar($a, $b, $c);
    var_dump(error_get_last());
    var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
    var_dump($rf->getNumberOfParameters());
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
    $ai->seek(0);
    asort($list);
    set_error_handler(function($_, $m) { throw new Exception($m); });
    set_error_handler('my_error_handler');
    var_dump(substr_count("", "a", 0, 0));
    file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
    ob_end_clean();
    unlink($filename);
    printf("printf test 2:%d\n", 42);
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    $priorityQueue->insert("a", 1);
    var_dump(file_exists($filename));
    var_dump($options['dummy']['foo']);
    file_get_contents('dummy://foo', false, $context);
    var_dump( current($resources) );
    var_dump(pack('x') === "\0");
    var_dump(new FooBar);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    t3();
    test('Proxy', $obj);
    $db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
    var_dump(mhash(133, 1086849124, 133));
    $datefmt->parse('abc');
    _set_lc_messages($dbh);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    var_dump($dom->getElementById('x')?->nodeName);
    $child->testIsCallable();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $tester->terminate();
    file_put_contents($batch_file_path, $batch_file_content);
    imagescale($im, 1, 1, -10);
    ?>
+++DONE+++;
    unserialize('a:2:{i:0;O:9:"000000000":10000000');
    var_dump($date1->format('D') == $date2->format('D'));
    foo();
    $phar->addFromString('test.txt', 'text');
    $oIntlDateFormatter->setPattern('VV');
    var_dump($h1->length);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    dumpNodeList($dom->getElementsByTagName("html"));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
    date_default_timezone_set('Europe/Kiev');
    ob_start();
    $list->rewind();
    $db->query('DROP PROCEDURE IF EXISTS testSp');
    phpinfo(INFO_VARIABLES);
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    var_dump($d);
    var_dump(getopt("abcd"));
    $reflector->initializeLazyObject($obj);
    odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
    byVal(C[0]);
    var_dump($a);
    var_dump(json_last_error() === JSON_ERROR_UTF16);
    php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
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
    var_dump($obj);
    $o->foo();
    fwrite($fp, "test");
    var_dump($r[$ref]);
    $element->prepend('x', new DOMEntity);
    validate((object) []);
    var_dump(test($x));
    fclose($r);
    foo(false, true);
    printf("[008] PS and non-PS results differ, dumping data\n");
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
    printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    printf("printf test 31:%.17g\n", INF);
    $mysql->close();
    $generator->send($fixedArray);
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    test('sensitive');
    ob_clean();
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $dt->sub($interval);
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    var_dump(file_exists($filename));
    $pdo->exec("insert into t select n + 1, 'non '||t from t");
    array_splice($GLOBALS,0,count($GLOBALS));
    $foo->bar($a, $b, $c);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
    var_dump( end($array_test) );
    var_dump($box->value = new Test);
    $result->close();
    $array->offsetSet('key', 'value');
    var_dump($line);
    var_dump($stmt->fetchAll());
    php_cli_server_start($code, null, $args);
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump($x);
    $tester->start();
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    $tester->close();
    imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
    var_dump( array_intersect($arr1, $arr2) );
    var_dump($r->getStaticProperties());
    imagesetthickness($im, $thickness);
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    stream_filter_append($stream, $filter);
    __();
    $phar->stopBuffering();
    $db->beginTransaction();
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    var_dump(session_cache_expire());
    var_dump(new Test);
    imagealphablending($im, true);
    set_error_handler(function() {
    (y);
});
    stream_wrapper_register('dummy', DummyWrapper::class);
    test($p12, $pass);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    $dt->add(new DateInterval('PT1H'));
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    fclose($fp);
    printf("printf test 9:<%-20s>\n", "bar");
    $f->__invoke(do_throw());
    set_exception_handler(function () { print "EX\n"; });
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
    );
    var_dump($d == get_base;
    $client->getQuote("ibm");
    $tester->expectLogStartNotices();
    $tester->terminate();
    print_r($res);
    var_dump( gmstrftime($value) );
    $reflector->initializeLazyObject($obj);
    byRef(C[0]);
    var_dump($originalEnvelopeData === $envelopeData);
    var_dump($dom->getElementById('x')?->nodeName);
    $target->after('bar', $doc->documentElement->firstChild, 'baz');
    var_dump(preg_replace_callback_array([], []));
    var_dump(file_get_contents($uri));
    rewind($fp);
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    var_dump($info['used_memory'] + $info['free_memory']);
    $tester->start();
    test($nodes, "var_dump", fn ($n) => var_dump($n));
    var_dump(fseek($fp, -32, SEEK_CUR));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $dt->setTimezone(new DateTimeZone('UTC'));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    stream_filter_append($stream, $filter);
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    test([0], [1], [2]);
    var_dump(__METHOD__);
    var_dump($d);
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    printf("printf test 16:%x\n", 170);
    define("FOO", "okey");
    curl_exec($curl);
    var_dump( array_intersect($arr1, $arr2, $arr1) );
    test('<?php echo "1";//2');
    foo(false, true);
    var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump($foo);
    var_dump($br);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    setlocale(LC_ALL, "C");
    var_dump(gzread($h, 5));
    var_dump($ffi->bug_gh16013_return_short());
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    print_R($foo);
    $root->__construct("malformed");
    dir($d1);
    $b->aa();
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
    var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
    stream_filter_register('user_filter','user_filter');
    $t->cleanRepair();
    $link->close();
    $dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
    var_dump($b, $GLOBALS['b'], $c);
    $stmt->close();
    set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
    $b->rewind();
    var_dump(getopt("abcd"));
    mysqli_free_result($res);
    register_shutdown_function('exploDe');
    set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    spl_autoload_register();
    var_dump($ffi->bug_gh16013_return_char());
    $a->TestFunc();
    $phar->setDefaultStub();
    zerofill(4, $link, 'MEDIUMINT');
    print_r($browser);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    dirs as $d) {;
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
    var_dump(lookup(513));
    $f->__invoke(do_throw());
    dirs as $d) {;
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    gc_collect_cycles();
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    var_dump($date->format("D") == $date2->format("D"));
    setlocale(LC_ALL, 'de_DE', 'de-DE');
    var_dump($link->real_escape_string($japanese_so) === $japanese_so);
    var_dump(tidy_get_body($t));
    stream_filter_append($stream, $filter);
    pg_close($dbh);
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
    var_dump($obj);
    print_r($tmp);
    pcntl_sigwaitinfo($a,$a);
    var_dump($a);
    register_shutdown_function('timE');
    var_dump("DB::__construct() called");
    var_dump($s);
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    $reflector->resetAsLazyGhost($obj, function () {});
    var_dump($pdo->query('SELECT 1;')->fetchAll());
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
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
    var_dump(json_encode($arr));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    call_user_func_array($ffi->$func_ptr, $argv);
    $stmt->close();
    class_alias( 'stdClass', 'bool' );
    print_r($stmt->getColumnMeta(0));
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    print_r($row);
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    grapheme_strpos(1,1,2147483648);
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    $pdo->exec("create temp table t2 as select 678 n, 'ok' status");
    var_dump(-2147483648 % -2);
    $phar->stopBuffering();
    (stat("$d0\\test0.txt")) > 0);

unlink("$d0\;
    var_dump($br);
    var_dump($child);
    foo();
    ob_clean();
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    var_dump(json_decode('{"":"value"}', true));
    $tester->expectLogTerminatingNotices();
    var_dump($d->getTimezone(), $tz2);
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $fiber->start();
    zerofill(3, $link, 'SMALLINT');
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump(nl2br($str) );
    test("http://test@[::1]");
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    var_dump($line);
    zerofill(9, $link, 'DOUBLE');
    var_dump(soundex("Lukasiewicz"));
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    var_dump(lookup(510));
    reset( $array_test );
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    var_dump(substr($hash, -1, 1) !== "\0");
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    $tester->terminate();
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    $insert->execute();
    $stmt->execute();
    $foo->bar($a, $b, $c);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    test('Ghost', $obj);
    curl_exec($curl);
    var_export($test);
    var_dump(json_last_error() === JSON_ERROR_UTF16);
    $element->prepend('x', new DOMEntity);
    var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
    curl_setopt($ch, CURLOPT_PASSWORD, null);
    $dt->sub($interval);
    var_dump( end($resources) );
    set_include_path(__DIR__.'/bug39542;.');
    var_dump($options['dummy']['foo']);
    grapheme_strpos(1,1,2147483648);
    var_dump($body->lookupNamespaceURI(""));
    $mysql->query("DROP TABLE temp");
    var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
    var_dump($_SESSION);
    $this->server->addFunction('Test');
    var_dump( range(1, 7, 10.0**400) );
    $mysqli->query($sql);
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
    var_dump($diff->invert, $diff->s, $diff->f);
    debug_zval_dump( $value );
    $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    var_dump($stmt->nextRowset());
    set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
    var_dump(sin($thirty));
    $phar->setDefaultStub();
    var_dump(session_save_path());
    printf("# %s\n", $name);
    var_dump( array_reverse($array, false) );
    $db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
    zerofill(12, $link, 'DEC');
    var_dump($temp_array);
    $it->rewind();
    ob_start();
    $client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    var_dump($rf->getNumberOfParameters());
    $val->dump();
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
    var_dump($diff);
    $res->free();
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump($finfo->buffer("buffer\n"));
    $phar->stopBuffering();
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    test();
    var_dump($array->offsetExists('key'));
    var_dump(session_save_path());
    var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
    $priorityQueue->insert("a", 1);
    var_dump($ffi->bug_gh16013_return_bool());
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
    var_dump( end($array_test) );
    set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
    var_dump(serialize($a));
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    fclose($stream);
    var_dump($i=1);
    var_dump(asort($temp_array) );
    grapheme_strpos(1,1,2147483648);
    $dateperiod->__unserialize(['start' => $now, 'end' => $date]);
    date_default_timezone_set("UTC");
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    printf("[001] %s, [%s] %s\n",
                $e->getMessage(),
                (is_object($db)) ? $db->errorCode() : 'n/a',
                (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
    $reflector->initializeLazyObject($obj);
    var_dump($box->value = new Test);
    $list->rewind();
    printf("Field        : %d\n", $field_idx);
    $reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
    byRef(C[0]);
    $list->add(0, new C);
    fclose($output);
    bar('first try');
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
    $dom->loadHTML($html);
    printf("%s: %s\n", $e::class, $e->getMessage());
    imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
    $tester
    ->request('', ['SCRIPT_FILENAME' => null])
    ->expectHeader('Status', '404 Not Found')
    ->expectError('Primary script unknown');
    var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    var_dump($anon->field);
    var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    var_dump(json_encode($arr));
    var_dump($im);
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    var_dump(__METHOD__);
    var_dump(soundex("Gauss"));
    test([0], [1], 2);
    fclose($fp);
    var_dump(new FooBar);
    $link->close();
    test();
    $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
    var_dump(soundex("Lukasiewicz"));
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    gzclose($h);
    $zip->setPassword('bar');
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
    var_dump($row);
    var_dump($prop->getRawValue($a));
    t2();
    imagesetstyle($im, $style);
    var_dump((bool) $o);
    var_dump($br);
    $reflector->initializeLazyObject($obj);
    var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    set_error_handler("customErrorHandler");
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    stream_get_line($fp, 1024*1024*2, "aaaa");
    _set_lc_messages($dbh);
    printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    $dom->getElementById('x')->remove();
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump(session_save_path());
    session_start();
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
    spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
    closedir($dfp);
    var_dump("done");
    printf("printf test 12:%5.2f\n", -12.34);
    session_set_save_handler(new MySessionHandler());
    $target->before('bar', $doc->documentElement->firstChild, 'baz');
    var_export($test);
    php_cli_server_start('foo bar');
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    var_dump("hello");
    fclose($fp);
    date_default_timezone_set('UTC');
    printf("Orgname      : %s\n", $field->orgname);
    does_not_work();
    var_dump( array_unshift($temp_array, $var) );
    print_r($str_instead);
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
    printf("Orgtable     : %s\n", $field->orgtable);
    register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
    var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
    var_dump(gzread($h, 0));
    printf("printf test 16:%x\n", 170);
    var_dump(test());
    $priorityQueue->insert("c", 0);
    unlink($fn);
    t3();
    fffff);
imagegd2($im1, $file);
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
    var_dump($anon->field);
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    ($prefix);

?>;
    var_dump ( rtrim("rtrim test        ", true) );
    var_dump(preg_replace_callback_array([], ''));
    var_dump(substr_count("", "a", 0, 0));
    $list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
    test(3);
    $client->Add();
    var_dump(soundex("Hilbert"));
    $tester->expectLogNotice($userMessage, 'eeee');
    printf("%s: %s\n", $e::class, $e->getMessage());
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump(substr_count("aaa", "a", 0, 0));
    var_dump($prefixed->lookupNamespaceURI("a"));
    $infile));
?>;
    var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
    $this->show();
    var_dump( array_reverse($array) );
    var_dump( current($resources) );
    $dateperiod->__unserialize(['start' => $date]);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    bzclose($bz);
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    var_dump($type->childNodes);
    var_dump( range(7.0, 1.0, 6.5) );
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    var_dump($stmt->fetch());
    unlink($outfile);
    rewind($fp);
    $dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MAX/100000)+1);
    var_dump(file_exists($filename));
    var_dump(c1::$a1);
    var_dump($obj->a);
    var_dump($rm->getNumberOfRequiredParameters());
    set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    unlink($fn);
    $sh->open('path', 'name');
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $w->compressFiles(Phar::GZ);
    $this->mysqli->close();
    set_error_handler('test_error_handler');
    var_dump(foo());
    php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
    t1();
    var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
    mysqli_close($link);
    var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
    $element->prepend('x', new DOMEntity);
    gc_collect_cycles();
    var_dump($array_object);
    printf("printf test 25:%-2s\n", "gazonk");
    $list->rewind();
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    fclose($fp);
    fflush($stream);
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    imagepng($im, $dest);
    gzpassthru($h);
    $a->TestFunc();
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    var_dump($r->getStaticProperties());
    var_dump($obj);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    printf("printf test 6:%-010.2f\n", 2.5);
    var_dump(strncasecmp("test ", "E", 10));
    testLastInsertId($db);
    imagepng($im, $dest);
    printf("printf test 14:%c\n", 64);
    var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
    $it->next();
    $server->handle($HTTP_RAW_POST_DATA);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    zerofill(7, $link, 'BIGINT');
    $child->testIsCallable();
    http_server_kill($pid);
    fclose($fp);
    printf("printf test 25:%-2s\n", "gazonk");
    $f->start();
    var_dump(soundex("Hilbert"));
    var_dump($dom->getElementById('x')?->nodeName);
    fclose($fp);
    var_dump($data);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    ob_start("test");
    $phar->startBuffering();
    zerofill(4, $link, 'MEDIUMINT');
    var_dump(pg_last_notice($dbh));
    var_dump(nl2br($str) );
    bar('first try');
    var_dump($temp_array);
    var_dump( end($array_test) );
    var_dump($value);
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    var_dump($obj);
    var_dump($options['dummy']['foo']);
    $f->__invoke($t->bar(Test::foo(do_throw())));
    _set_lc_messages($dbh);
    var_dump(getenv("HTTP_X_FORWARDED_FOR"));
    var_dump($namespaceless->lookupNamespaceURI(NULL));
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
    gzclose($h);
    $container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    printf("printf test 21:%016b\n", 170);
    var_dump(mhash(133, 1086849124, 133));
    foo();
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    printf("printf test 11: 123456789012345678901234567890\n");
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $root->__construct("malformed");
    var_dump($rf->getNumberOfRequiredParameters());
    var_dump($r->getStaticProperties());
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
    var_dump($this->getConst());
    printf("printf test 24:%.5s\n", "abcdefghij");
    pg_insert($conn,$table, array('id' => 2, 'value' => 10));
    printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    var_dump(preg_match_all($regex, $subject, 'test'));
    $a->TestFunc();
    printf("printf test 15:%b\n", 170);
    var_dump( range(1, 7, fdiv(0, 0)) );
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    var_dump($obj->a);
    print_r($tmp);
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
    pg_close($dbh);
    $f->__invoke(do_throw());
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
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    var_dump(file_exists($filename));
    var_dump(sin($ninety));
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    var_dump($dom->lookupNamespaceURI("a"));
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    unlink($filename);
    $priorityQueue->insert("c", 0);
    chdir($oldcwd);
    var_dump(is_callable(array($this, 'parent::testIsCallable')));
    printf("Orgtable     : %s\n", $field->orgtable);
    printf("printf test 1:%s\n", "simple string");
    $child->testIsCallable2();
    test2();
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    mysqli_close($link);
    printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
    setlocale(LC_ALL, "C");
    var_dump($row);
    var_dump(range('a', 'z', 100));
    $f->start();
    var_dump($dom->lookupNamespaceURI(NULL));
    printf("printf test 13:%5d\n", -12);
    var_dump($dom->getElementById('x')?->nodeName);
    test("http://t[est@[::1");
    $tester->terminate();
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    var_dump(strncmp("test ", "e", -1));
    var_dump($output);
    $tester->expectLogStartNotices();
    var_dump( addslashes($str) );
    var_dump( range(1.0, 7.0, 0.0) );
    var_dump( array_unshift($temp_array, $var) );
    print_r($row);
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
    var_dump( end($resources) );
    var_dump($diff->h);
    var_dump($dom->getElementById('x')?->nodeName);
    var_dump(sin($ninety));
    imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
    printf("printf test 15:%b\n", 170);
    var_dump($client->__getLastResponse());
    var_dump($im);
    printf("[010] Found unexpected field '%s'\n", $field->name);
    error_reporting(0);
    $link->close();
    var_dump($array[$a]);
    var_dump( range(1, 7, 10.0**400) );
    var_dump($b, $GLOBALS['b'], $c);
    var_dump($array->offsetExists('key'));
    $stmt->closeCursor();
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    var_dump($a + $s1);
    test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
}
var_dump(strncasecmp("test ", "E", -1));
