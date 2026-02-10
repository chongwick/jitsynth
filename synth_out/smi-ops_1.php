<?php
$iterator = 1;
$tz1 = new DateTimeZone('Europe/Berlin');
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
var_dump(count($cert_data['extracerts']));
function f_0() {
    return 1;
}
function f_1() {
    return get_class($object);
}
function f_2() {
    return "Class A object";
}
function f_3() {
    return call_user_func_array($this->callback, $invocation->parameters);
}
print_r($client->GetExpressCheckoutDetails());
$dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
display($res);
var_dump($a);
fwrite($fd, "foo");
printf("Content-Type OK" . PHP_EOL);
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
var_dump(json_last_error() === JSON_ERROR_UTF16);
var_dump(serialize($a));
$reflector->initializeLazyObject($obj);
var_dump($value);
printf("printf test 4:%.10f\n", 10.0/3);
function f_4() {
    return true;
}
function f_5() {
    return '';
}
function f_6() {
    return;
}
function f_7() {
    return $db;
}
=> imagecreatefromgd2part($file, 0,0, -25, 10),
    fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
);

unlink($file);
?>;
var_dump($dom->lookupNamespaceURI(""));
curl_setopt($curl, CURLOPT_PRIVATE, "123");
unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
var_dump($stmt->nextRowset());
ini_set('precision', $i);
$tester->expectLogNotice($userMessage, 'cccc');
test("http://php.net\\@aliyun.com/aaa.do");
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
file_put_contents($tmpFileIn, $originalEnvelopeData);
function f_8() {
    return $response;
}
function f_9() {
    return $this->values[$name];
}
function f_10() {
    return serialize(clone $this->b);
}
function f_11() {
    return;
}
function f_12() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_13() {
    return $this;
}
function f_14() {
    return [$this];
}
function f_15() {
    return false;
}
imagepng($im, $dest);
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
set_error_handler(function($_, $m) { throw new Exception($m); });
var_dump(-2147483647 % -1);
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
var_dump($array);
var_dump($headers2['Title']);
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
var_dump( strftime($value) );
var_dump(gzfile(__DIR__."/data/test.txt.gz"));
printf("Field        : %d\n", $field_idx);
$client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
define('OBJECT_COUNT', 10000);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
showFirstTwoItems($ai);
$reflector->getMethod('test')->invoke($obj, $obj);
var_dump($ar);
$tester->request(connKeepAlive: true)->expectBody('1');
$phar->setDefaultStub(str_repeat('a', 401));
var_dump($namespaceless->lookupNamespaceURI(NULL));
var_dump(soundex("Gauss"));
gzpassthru($h);
printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
            $host, $user, $db, $port, $socket);
var_dump($foo);
function f_16() {
    return 'B';
}
function f_17() {
    return new Exception;
}
function f_18() {
    return 5;
}
function f_19() {
    return str_repeat('a', 1);
}
$stmt->execute();
rmdir($dest . '/test');
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
$zip->close();
printf("# %s:\n", $name);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump(test($x));
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
stream_filter_register('user_filter','user_filter');
var_dump( rtrim($obj, "tc") );
var_dump($x);
curl_exec($ch);
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$args[] = "-c";
var_dump(sin($threesixty));
$iterator = 1;
$InvMocker->addMatcher($OuterMatcher);
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
unserialize('a:2:{i:0;O:9:"000000000":10000000');
$x = match (true) {};
var_dump(sprintf("%X", 12));
$rs = pg_query($conn, "SELECT * FROM $table");
$iterator++;
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
$foo->bar[] = 'bar';
$counter++;
openssl_seal($_, $_, $_, array_fill(0,64,0));
var_dump ( rtrim("rtrim test   \t\0 ") );
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
array_multisort($sort, $data);
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
$sh->read("");
imagesetthickness($im, $thickness);
var_dump(__METHOD__);
$headers = ['Host: okey.com'];
var_dump($sends1);
display($res);
printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
$tester->close();
var_dump( range(1.0, 7.0, 10.0**400) );
$child->testIsCallable();
print_r($g);
var_dump($dom->lookupNamespaceURI("xml"));
$B = new B();
$tester->start();
$context = stream_context_create($arr);
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
$arr = array('a', 'b');
var_dump(debug_backtrace());
$res = pg_query($dbh, 'SELECT test_notice()');
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
list($c,$d) = is_array($arr)?: NULL;
set_error_handler(function($_, $m) { throw new Exception($m); });
function f_20() {
    $loop_counter = 1;
    $callback2 = [$o, 'trampoline2'];
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
    $style[$i++] = $color;
    var_dump( gmstrftime($value, $timestamp) );
    var_dump(ob_get_contents());
    $b->attach($object);
    var_dump($arg);
    var_dump(openssl_x509_parse($pem_cert));
    var_dump(__METHOD__);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    $zip->close();
    test("http://test@[::1]");
    var_dump(gzeof($h));
    var_dump( array_reverse($array, true) );
    $link->set_charset('sjis');
    dirs as $d) {;
    var_dump( end($test_array[1]) );
    var_dump($dom->lookupNamespaceURI("xml"));
    test("http://test@[::1]");
    var_dump($namespaceless->lookupNamespaceURI(""));
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    $match->invoked($invocation);
    file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
    crash();
    printf("# Proxy:\n");
    $phar->setDefaultStub(str_repeat('a', 400));
    var_dump(filter_input(INPUT_SERVER, "HTTP_X_FORWARDED_FOR", FILTER_UNSAFE_RAW));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    unlink($outfile);
    var_dump($rit->key());
    stream_filter_register('user_filter','user_filter');
    var_dump($client->__getLastResponse());
    $doc->loadXML('<a>foo<last/></a>');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    $a->gen();
    var_dump(intlcal_get_error_message(null));
    ob_start();
    ;
    var_dump(c1::$a3);
    setStyleAndThickness($im, $black, 4);
    fclose($this->stream);
    (stat("$d0\\test0.txt")) > 0);
var_dump(coun;
    zerofill(10, $link, 'DOUBLE PRECISION');
    mt_srand(1234567890);
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    var_dump(pcntl_wexitstatus($status));
    $a->rewind();
    $it->next();
    printf("printf test 6:%-010.2f\n", 2.5);
    var_dump( strtr($str, $from, $to) );
    var_dump(foo());
    var_dump($this->getConst());
    var_dump( array_intersect($arr1, $arr2) );
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    zerofill(8, $link, 'FLOAT');
    var_dump( end($array_test) );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    $tester->start();
    $w->compressFiles(Phar::GZ);
    $document->loadHTMLFile($uri);
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
    $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
    debug_zval_dump( $value );
    printf("# Ghost:\n");
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
    foo(true, false);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
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
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
    var_dump($headers1['Author'][0] === '?');
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
    set_exception_handler("foo");
    odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
    spl_autoload_register(function ($name) {
});
    var_dump(A::fromArray(['a' => 'foo']));
    test();
    printf("Field        : %d\n", $field_idx);
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    var_dump($b, $GLOBALS['b'], $c);
    $m['data2'] = 200;
    $res = [];
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    mysqli_fetch_field($res);
    $a->test("test");
    var_dump(openssl_pkcs7_verify($empty, 0));
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    $phar->stopBuffering();
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    var_dump( is_array ($var_array) );
    $stmt->execute();
    $reflector->resetAsLazyProxy($obj, function () {});
    var_dump($diff->invert, $diff->s, $diff->f);
    var_dump($i);
    $dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
    var_dump($foo);
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    printf("Flags        : %d\n", $field->flags);
    var_dump($pdo->query('SELECT 42')->fetchColumn(0));
    spl_autoload_register($callback1);
    var_dump((new Exception)->getTrace());
    var_dump(test());
    st1.txt");

var_dump(cou;
    var_dump(preg_match_all($regex, $subject, 'test'));
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    var_dump($stmt->execute([1]));
    var_dump($dom->lookupNamespaceURI("xml"));
    ob_start();
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
    unlink($filename);
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
    ob_start();
    var_dump($prefixed->lookupNamespaceURI(NULL));
    fwrite($stream,"sdfgdfg");
    printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    printf("[001] %s, [%s] %s\n",
                $e->getMessage(),
                (is_object($db)) ? $db->errorCode() : 'n/a',
                (is_object($db)) ? implode(' ', $db->errorInfo()) : 'n/a');
    fwrite($fp, str_repeat("baad", 1024*1024));
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
    var_dump( strtok($string, "\0") );
    var_dump($dom->saveHTML($node));
    ini_set("session.save_handler","files");
    var_dump($obj->getTest());
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    var_dump(sin($sixty));
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    var_dump($headers1['Title'][0] === '?');
    curl_exec($curl);
    var_dump( is_array ($var_array) );
    var_dump($prefixed->lookupNamespaceURI("a"));
    $dom->documentElement->appendChild($test1);
    t2();
    $link->real_query($sql);
    $mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
    var_dump($dom->lookupNamespaceURI(""));
    $f->start();
    $tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    var_dump($args);
    printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
    var_dump(strncmp("test ", "e", 0));
    var_dump(__METHOD__);
    imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
    test("http://test@127.0.0.1");
    var_dump(substr_compare('/', '/asd', 0, 4));
    file_put_contents($batch_file_path, $batch_file_content);
    var_dump(sprintf("%030.-15s", $tempstring));
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    var_dump($obj);
    extract(Foo::bar());
    var_dump($temp_array);
    var_dump($array[$a]);
    var_dump(sprintf("%030.-15s", $tempstring));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
    testLastInsertId($db);
    var_dump($stmt->execute([1]));
    var_dump(mhash(133, 1086849124, 133));
    bzclose($bz);
    openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
    spl_autoload_register($callback2);
    $varchar_col = odbc_result($res, "VARCHAR_COL");
    $gen3 = $closure2();
    $iterator = 1;
    $cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
    $fmt2 = clone $fmt;
    rename("phar://a.phar/x", "phar://a.phar/y");
    __();
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    var_dump($e->getCode());
    var_dump( array_udiff($array1, $value, $data_comp_func) );
    var_dump(-2147483647 % -1);
    print_r(stream_context_get_options($context));
    print_r($tmp);
    $dom->loadXML('<root><child/></root>');
    debug_zval_dump($test);
    $db->exec('INSERT INTO test_33689 VALUES(1)');
    var_dump($value);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
    $dt->add(new DateInterval('PT1H'));
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    $phar->stopBuffering();
    (new B)->foo();
    bzwrite($bz, $str);
    does_not_work();
    var_dump($stmt->execute([1]));
    $prop->setRawValue($a, 1);
    var_dump($info['buffer_size']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    var_dump($type->childNodes);
    mysqli_free_result($res);
    var_dump($value);
    crash();
    debug_zval_dump($test);
    var_dump(spl_autoload_functions());
    var_dump(array_pop($input), $input);
    $this->server->handle($request);
    $stmt->execute([ 15 ]);
    var_dump(gzread($h, 5));
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    setlocale(LC_ALL, 'de_DE', 'de-DE');
    printf("[005] [%d] %s\n", $link->errno, $link->error);
    set_time_limit(5);
    printf("Table        : %s\n", $field->table);
    ob_end_clean();
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
    printf("%s: %s\n", $e::class, $e->getMessage());
    ->appendChild($node);

pr;
    closedir($dir);
    var_dump( end($resources) );
    zerofill(4, $link, 'MEDIUMINT');
    ($filename);
?>;
    var_dump(str_contains($response, "authorization"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump(asort($temp_array, SORT_REGULAR) );
    $server->handle($HTTP_RAW_POST_DATA);
    var_dump($rf->getNumberOfParameters());
    printf("printf test 12:%5.2f\n", -12.34);
    var_dump($data);
    var_dump($row);
    var_dump( range(1.0, 7.0, fdiv(0, 0)) );
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    var_dump( array_reverse($array, false) );
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    var_dump($ar);
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
    var_dump($e->getMessage());
    showFirstTwoItems($ai);
    fclose($input);
    set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
    $dateperiod->__unserialize(['start' => $date]);
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    printf("Name         : %s\n", $field->name);
    => imagecreatefromgd2part($file, 0,0, -25, 10),
    fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
);

unlink($file);
?>;
    $tester->close();
    rmdir($dest . '/test');
    var_dump($output);
    var_dump($phar->getStub());
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
    fclose($stream);
    printf("printf test 18:%16b\n", 170);
    var_dump(is_callable(array($this, 'parent::testIsCallable')));
    var_dump($obj2->getTest());
    $gen = bar();
    while (true) {
        break;  // avoid infinite loop
        $count ++;
    }
    $var = -PHP_INT_MAX - 1;
    $y = 0;
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    _dump(chdir($now));
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    var_dump(strncasecmp("test ", "E", 10));
    $child->testIsCallable2();
    ini_set("soap.wsdl_cache_enabled",0);
    var_dump( array_unshift($temp_array, $var) );
    test('<?php echo "1";//2');
    call_user_func(array("static","ok"));
    var_dump(preg_replace_callback_array([], []));
    var_dump(preg_match_all($regex, $subject, 'test'));
    printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $field->name, $flags_found);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
    var_dump ( rtrim("rtrim test$#@", "#@$") );
    var_dump($rc->getStaticProperties());
    unlink($contentfile);
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
    var_dump(file_exists($filename));
    spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    array_splice($GLOBALS,0,count($GLOBALS));
    printf("%s: %s\n", $e::class, $e->getMessage());
    imagepng($im, $dest);
    chdir($oldcwd);
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    var_dump(gzread($h, 8));
    var_dump(class_exists("TestClass", true));
    var_dump($a);
    $stmt->execute();
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    _set_lc_messages($dbh);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    class_alias( 'stdClass', 'bool' );
    array_splice($GLOBALS,0,count($GLOBALS));
    $f->__invoke($t->bar(Test::foo(do_throw())));
    $list->pop();
    foo(false, true);
    $t->test();
    var_dump(intlcal_is_weekend(1));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
    dir($d1);
    var_dump($r[$ref]);
    test("http://t[est@[::1");
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    var_dump(array_column($array, 'superhero'));
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
    define ('foobar', 1);
    $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
    var_dump($foo);
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
    error_reporting(E_ALL);
    ;

mkdir($d0);
    $it->rewind();
    var_dump($date->format("D") == $date2->format("D"));
    $reflector->getMethod('test')->invoke($obj, $obj);
    var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
    var_dump($temp_array);
    pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
    printf("# Ghost:\n");
    debug_zval_dump( $value );
    setStyleAndThickness($im, $black, 6);
    var_dump($row);
    $a->bar();
    var_dump(array_map(assert(...), [true, true, false]));
    setStyleAndThickness($im, $black, 4);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    zerofill(5, $link, 'INT');
    printf("%s: %s\n", $e::class, $e->getMessage());
    dir($d1);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    test(1);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
    $dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
    var_dump($anon->field);
    ImageFillToBorder($im, 5, 5, $bordercolor, $color);
    pg_insert($conn,$table, array('id' => 2, 'value' => 10));
    range($var,1,$var);
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    boo();
    $stmt->execute();
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    dumpNodeList($dom->getElementsByTagName("bar:html"));
    $link->close();
}
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
function f_21() {
    function f_22() {
        var_dump( end($resources) );
        $a->rewind();
        if (true) {
            var_dump($link->real_escape_string($japanese_so) === $japanese_so);
        }
        if (!true) {
            pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
        }
    }
    for ($i_23 = 0; $i_23 < 10; $i_23++) {
        php_cli_server_start($code, null, $args);
        $InvMocker->addMatcher($OuterMatcher);
    }
    for ($i_24 = 0; $i_24 < 10; $i_24++) {
        var_dump(mhash(133, 1086849124, 133));
        mt_srand(1234567890);
    }
    for ($i_25 = 0; $i_25 < 10; $i_25++) {
        unlink($tmpFileIn);
        t2();
    }
}
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
function f_26() {
    return ++$x;
}
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
function f_27() {
    $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
    return 42;
}
var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
function f_28() {
    return call_user_func_array($this->callback, $invocation->parameters);
}
printf("printf test 25:%-2s\n", "gazonk");
print_r(get_object_vars($obj));
$f->__invoke(do_throw());
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
function f_29() {
    return "Class A object";
}
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
var_dump( end($array_object) );
