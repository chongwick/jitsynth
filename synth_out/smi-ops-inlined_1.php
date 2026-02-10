<?php
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
$link = mysqli_init();
$reflector = new ReflectionClass(DateTime::class);
$reflector = new ReflectionClass(C::class);
$to = $users[0];
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
function f_0() {
    return false;
}
function f_1() {
    return $response;
}
function f_2() {
    return $instance->bar;
}
function f_3() {
    return $i;
}
ini_set('precision', $i);
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
var_dump($readonly_anon->field);
var_dump($dom->getElementById('x')?->nodeName);
var_dump(preg_match_all($regex, $subject, 'test'));
ob_end_flush();
$zip->close();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
define('OBJECT_COUNT', 10000);
var_dump(gc_collect_cycles());
printf("Orgname      : %s\n", $field->orgname);
clearstatcache();
function f_4() {
    return get_class($object);
}
function f_5() {
    return str_repeat('a', 1);
}
function f_6() {
    return 0;
}
function f_7() {
    return true;
}
var_dump($diff);
var_dump($res);
file_put_contents($filename, $xmlstring);
var_dump($b, $GLOBALS['b'], $c);
ob_end_clean();
byRef(C[0]);
var_dump($a);
set_include_path(__DIR__.'/bug39542;.');
set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
var_dump($this->getConst());
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
function f_8() {
    return true;
}
function f_9() {
    return 0;
}
function f_10() {
    return 'printer';
}
function f_11() {
    return 0;
}
function f_12() {
    return $this->stub->invoke($invocation);
}
function f_13() {
    return $db;
}
function f_14() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_15() {
    return array($expected_flags, $unexpected_flags, $found_flags);
}
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
fclose($output);
$dom->getElementById('x')->removeAttribute('xml:id');
var_dump(preg_match_all($regex, $subject, 'test'));
mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
var_dump($dom->getElementById('x')?->nodeName);
$db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
$a->TestFunc();
unlink($fn);
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
file_get_contents('dummy://foo', false, $context);
var_dump($obj);
$stmt->execute();
ar_dump($dn = realpath;
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
var_dump(expm1($value));
printf("Flags        : %d\n", $field->flags);
var_dump(sprintf("%%%.2f", 1.23456789e10));
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
printf("%s: %s\n", $e::class, $e->getMessage());
$server->handle($HTTP_RAW_POST_DATA);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
function f_16() {
    return $db;
}
function f_17() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_18() {
    return "testObject";
}
function f_19() {
    return "Object";
}
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
var_dump($stmt->nextRowset());
print_r($row);
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
$tester->expectLogStartNotices();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
rewind($fp);
showFirstTwoItems($ai);
ob_start();
ini_set('mysqlnd.fetch_data_copy', true);
undefined_function('Null');
var_dump($a + $s1);
$y = 0;
$file_path = __DIR__;
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
$list = [];
grapheme_strpos(1,1,2147483648);
$diff = $ago->diff($now, true);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$i = 0;
file_get_contents('dummy://foo', false, $context);
$arc_name = __DIR__ . "/bug40228.zip";
$iterator++;
var_dump(soundex("Hilbert") == soundex("Ladd"));
$object1 = new foo();
$y++;
var_dump($stmt->nextRowset());
$a = 1;
var_dump(sin($ninety));
var_dump($link->real_escape_string($japanese_so) === $japanese_so);
var_dump(`$php -n -v`);
ob_clean();
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$dt->add(new DateInterval('PT1H'));
trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$bar = new DateTime();
var_dump(self::$x);
$response = ob_get_contents();
$arg->name = array();
$fp = fopen("php://memory", "r+");
var_dump(soundex("Hilbert"));
$message = 'hello';
$values =  array (
  //Decimal values
  0,
  1,
  12345,
  -12345,

  //Octal values
  02,
  010,
  030071,
  -030071,

  //Hexadecimal values
  0x0,
  0x1,
  0xABCD,
  -0xABCD
);
$heredoc_needle = <<<EOD
^^&*(
EOD;
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function f_20() {
    $a[$i] = Array(1);
    $browser=get_browser(NULL, true);
    $bar = (int)$foo;
    $heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
    crash();
    session_write_close();
    zerofill(6, $link, 'INTEGER');
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
    var_dump($dom->getElementById('x')?->nodeName);
    phpinfo(INFO_VARIABLES);
    var_dump($row);
    );
    var_dump($d == get_base;
    shmop_delete($shm_id1);
    register_shutdown_function('timE');
    printf("# %s:\n", $name);
    var_dump($value);
    $s->attach($s);
    $val->dump();
    _set_lc_messages($dbh);
    var_dump($oIntlDateFormatter->getTimeZone()->getID());
    var_dump($temp_array);
    );
    var_dump($d == get_base;
    unlink($filename);
    var_dump(gethostbyname($host));
    define ('foobar', 1);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    var_dump($dom->getElementById('x')?->nodeName);
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    ame, $xmlstring);

$reader = new XMLReade;
    var_dump(ob_get_contents());
    dir($d1);
    $tester->expectLogTerminatingNotices();
    print_r($res);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
    $tester->request(connKeepAlive: true)->expectBody('1');
    proc_close($proc);
    set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
    var_dump(json_decode('[]', false, 0x100000000));
    $tester->expectLogStartNotices();
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
    var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
    (new B)->foo();
    printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
    $tester->terminate();
    $msgfmt->parse('abc');
    define("TEST",2);
    var_dump(fseek($fp, -32, SEEK_CUR));
    printf("printf test 25:%-2s\n", "gazonk");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    var_dump( is_array ($type) );
    var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
    $b->bar();
    foo();
    var_dump($body->lookupNamespaceURI("a"));
    var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    curl_setopt($ch, CURLOPT_USERNAME, null);
    preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump($obj);
    $stmt->execute();
    var_dump($originalEnvelopeData === $envelopeData);
    ob_end_flush();
    $db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
    foo(false, false);
    var_dump("DB::__construct() called");
    ini_set('display_errors',true);
    extract($GLOBALS, EXTR_REFS);
    phpinfo(INFO_MODULES);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    var_dump(sprintf("%X", 12));
    var_dump($test);
    test();
    print_r($data);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    ->appendChild($node);

pr;
    imagesetthickness($im, $thickness);
    $container->appendChild(createElement($dom, "foo:HTML", "6"));
    $ffi->bug79177();
    var_dump(
    $obj,
    $obj->{42}
);
    set_exception_handler("foo");
    $sibling->common();
    curl_exec($ch);
    imagecolorallocate($im, 255, 255, 255);
    fwrite($fp, str_repeat("baad", 1024*1024));
    $this->timestamp = $timestamp;
    $HTTP_RAW_POST_DATA = <<<EOF
<?xml version="1.0" encoding="ISO-8859-1"?>
<SOAP-ENV:Envelope
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:si="http://soapinterop.org/xsd">
  <SOAP-ENV:Body>
    <ns1:test xmlns:ns1="http://testuri.org"/>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOF;
    $stmt->execute();
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    print_r($priorityQueue->top());
    var_dump( gmdate($value, $timestamp) );
    var_dump($test);
    var_dump($list->serialize());
    range(0, pow(2.0, 100000000));
    set_error_handler(function($_, $m) { throw new Exception($m); });
    closedir($dfp);
    var_dump($temp_array);
    mt_srand(1234567890);
    date_default_timezone_set('Europe/Kiev');
    $dt->add(new DateInterval('PT1M'));
    var_dump( end($array_test) );
    printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
    dirs as $d) {;
    $b->aa();
    mysqli_free_result($res);
    var_dump($prefixed->lookupNamespaceURI(""));
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    var_dump( range(1.0, 7.0, 6.5) );
    print_r($str_instead);
    $o->foo();
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    mysqli_free_result($res);
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    setlocale(LC_ALL, 'de_DE', 'de-DE');
    call_user_func("static::ok");
    var_dump($data);
    test('sensitive');
    $dt->add(new DateInterval('PT1H'));
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    var_dump($client->__getLastRequestHeaders());
    $tag->append("foo");
    $mailBox->logout();
    $oIntlDateFormatter->setTimeZone('Europe/Berlin');
    file_put_contents($batch_file_path, $batch_file_content);
    st1.txt");

var_dump(cou;
    mdir($prefi;
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    var_dump($array[$a]);
    date_default_timezone_set("Asia/Calcutta");
    var_dump ( rtrim("rtrim test   \t\0 ") );
    $tester->close();
    ar_dump($dn = realpath;
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
    stream_filter_register('user_filter','user_filter');
    ob_end_flush();
    var_dump(sprintf("%%", 1.23456789e10));
    test($nodes, "attributes", fn ($n) => $n->attributes());
    var_dump(sprintf("%%", 1.23456789e10));
    var_dump(__METHOD__);
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
    var_dump($readonly_anon->field);
    ob_end_clean();
    printf("[010] Found unexpected field '%s'\n", $field->name);
    var_dump($client->__getLastResponse());
    test(3);
    $ai->rewind();
    var_dump($stmt->execute([1]));
    $dom->loadXML('<root><child/></root>');
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    var_dump(odbc_result($res, 'whatever'));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
    session_start();
    var_dump(foo());
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    var_dump($db->query('SELECT * FROM test_33689'));
    bar();
    putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
    ame, $xmlstring);

$reader = new XMLReade;
    var_dump($array[$a]);
    var_dump($temp_array);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    printf("printf test 18:%16b\n", 170);
    $dom->loadXML('<root><child/></root>');
    $tester->terminate();
    $h = <<<'EOD'
void (*bug_gh9090_void_none_ptr)();
void (*bug_gh9090_void_int_char_ptr)(int, char *);
void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
void (*bug_gh9090_void_char_int_ptr)(char *, int);
int (*bug_gh9090_int_int_char_ptr)(int, char *);

void bug_gh9090_void_none();
void bug_gh9090_void_int_char(int i, char *s);
void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
EOD;
    $simpleInterval = new DateInterval("P2D");
    $res = [];
    $empty = "";
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
    var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
    unlink($trace_file);
    ini_set("intl.error_level", E_WARNING);
    fclose($fp);
    $tester->close();
    $stmt->execute([ 0 ]);
    var_dump($r);
    var_dump($_POST);
    var_dump($a);
    imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
    var_dump( gmdate($value, $timestamp) );
    var_dump( end($array_test) );
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    var_dump(openssl_pkcs7_verify($eml, 0));
    var_dump(expm1($value));
    imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
    pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
    st1.txt");

var_dump(cou;
    showFirstTwoItems($ai);
    php_cli_server_start($code, null, $args);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
    var_dump(gzeof($h));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    $dateperiod->__unserialize([
		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
	]);
    $link->set_charset('sjis');
    var_dump($dt);
    var_dump(json_decode('{"":"value", "key":"value"}', true));
    $reflector->resetAsLazyGhost($obj, function () {});
    printf("printf test 27:%3\$d %d %d\n", 1, 2, 3);
    var_dump($dt);
    printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
    test("http://t[est@::1]");
    fclose($fp);
    test();
    var_dump($args);
    undefined_function();
    var_dump($client->__getLastResponse());
    extract($GLOBALS, EXTR_REFS);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
    date_default_timezone_set("UTC");
    var_dump($value);
    $sh->open('path', 'name');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    var_dump(str_contains($response, "authorization"));
    date_default_timezone_set('UTC');
    imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
    byReference($array);
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
    session_start();
    $list->push('o');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    fclose($fp);
    $reflector->initializeLazyObject($obj);
    var_dump( range('A', 'H', 10.0**400) );
    $msgfmt->parse('abc');
    printf("printf test 9:<%-20s>\n", "bar");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    var_dump(range(1.5, 3.5, -1.5));
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    fwrite($fp, "I am the LOB data");
    var_dump($shm_id1);
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    var_dump($array[$a]);
    var_dump($arg);
    var_dump($diff->invert, $diff->s, $diff->f);
    test($box);
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
    (function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    var_dump(unserialize(serialize($obj)));
    foo();
    var_dump( is_array ($type) );
    var_dump(asort($temp_array) );
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
    foo();
    var_dump(test());
    $attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
    while (true) {
        break;  // avoid infinite loop
        $count ++;
    }
    $a = new PDO("sqlite::memory:");
    $arr = [$class];
    $c = new C();
    $temp_array = $array;
    $reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
    var_dump(gzread($h, 0));
    foo();
    printf("printf test 21:%016b\n", 170);
    printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
    var_dump($date1->format('D') == $date2->format('D'));
    var_dump(strncasecmp("test ", "E", 10));
    test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
    var_dump($date1->format('D') == $date2->format('D'));
    var_dump($a);
    $phar->setDefaultStub('my/custom/thingy.php');
    var_dump(__METHOD__);
    imagepng($im, $dest);
    var_dump((new Exception)->getTrace());
    var_dump($rit->key());
    set_time_limit(5);
    set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    var_dump(openssl_x509_parse($pem_cert));
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
    test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
    register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
    mkdir($targetDir, 0777, true);
    var_dump($headers1['Title'][0] === '?');
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
    printf("Table        : %s\n", $field->table);
    var_dump(dom_import_simplexml($attr)->textContent);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
    $tester->terminate();
    var_dump ( rtrim("rtrim test$#@", "#@$") );
    session_set_save_handler(new \SessionHandler(), true);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump(gc_collect_cycles());
    var_dump(substr_count("aaa", "a", 0, 0));
    fclose($stream);
    $tester->terminate();
    var_dump( range(7.0, 1.0, 6.5) );
    fclose($fp);
    var_dump($ffi->bug_gh16013_return_bool());
    $a->test(new C());
    gzclose($h);
    var_dump( range(1, 7, fdiv(0, 0)) );
    byRef(C[0]);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
    $f->__invoke(do_throw());
    print_r($row);
    printf("Orgtable     : %s\n", $field->orgtable);
    $this->mysqli->close();
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
    printf("printf test 6:%-010.2f\n", 2.5);
    $a->test(new C());
    var_dump($a->value);
    $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
    var_dump(array_search('foo', $result));
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    unlink($filename);
    var_dump(openssl_pkcs7_verify($wrong, 0));
    var_dump($headers2['Title']);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
    $list->pop();
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    printf("[008] PS and non-PS results differ, dumping data\n");
    $tester->close();
    session_start();
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    var_dump(session_cache_expire());
    unlink($contentfile);
    gzpassthru($h);
    fflush($stream);
    ob_flush();
    $tester->close();
    var_dump($a);
    var_dump($body->lookupNamespaceURI("a"));
    mysqli_free_result($res);
    mysqli_close($link);
    $ai->seek(0);
    var_dump($d);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    var_dump($stmt->execute([1]));
    stream_filter_register('user_filter','user_filter');
    $dimension = &$offset;
    var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
    phpinfo(INFO_VARIABLES);
}
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
function f_21() {
    function f_22() {
        $ai->current();
        var_dump( strtok("\0") );
        if (true) {
            openssl_pkcs12_read($p12_contents, $cert_data, $password);
        }
        if (!true) {
            $this->server->handle($request);
        }
    }
    for ($i_23 = 0; $i_23 < 10; $i_23++) {
        $tester->close();
        $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
    }
    for ($i_24 = 0; $i_24 < 10; $i_24++) {
        imagescale($im, 1, 1, -10);
        printf("[003] Trace file '%s' has not been created\n", $trace_file);
    }
    for ($i_25 = 0; $i_25 < 10; $i_25++) {
        var_dump($s);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    }
}
var_dump($x);
function f_26() {
    return $arg;
}
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
