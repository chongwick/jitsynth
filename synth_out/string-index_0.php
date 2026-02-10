<?php
$html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
var_dump(__METHOD__);
fclose($fp);
mysqli_query($link, 'ALTER TABLE test DROP zero');
var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    printf("# Proxy:\n");
    var_dump( range(1, 7, 0) );
    var_dump(gc_collect_cycles());
    var_dump($phar->getStub());
}
var_dump($readonly_anon->field);
$sh->write("foo", "bar");
closedir($dfp);
var_dump(str_contains($response, "authorization"));
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$child->testIsCallable();
$strA = 'test &amp; test';
$tester->start();
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
$phar = new Phar($fname);
var_dump(json_last_error_msg());
var_dump($prop->getRawValue($a));
var_dump($a["10"], isset($a["10"]));
ttribute('idx');
            echo $reade;
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump($phar->getStub());
$x = 1;
$dt->add(new DateInterval('PT1H'));
$dir_handle = opendir( __DIR__ );
var_dump($stmt->fetchAll());
$this->logOnEvent = $logOnEvent;
zerofill(9, $link, 'DOUBLE');
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
ini_set("intl.error_level", E_WARNING);
var_dump(dom_import_simplexml($attr)->textContent);
printf("printf test 22:%016x\n", 170);
var_dump(substr_count("", "a", 0, 0));
unlink($tmpFileOut2);
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
var_dump(new Test);
test();
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
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
var_dump(empty($obj[$name]));
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
test("http://t[est@[::1");
$f->__invoke($t->bar(Test::foo(do_throw())));
unlink($tmpFileOut);
var_dump(range('a', 'c', -1));
imagesetstyle($im, $style);
var_dump(substr_count("aaa", "a", 0, 0));
var_dump(http_get_last_response_headers());
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
odbc_binmode($res, ODBC_BINMODE_RETURN);
var_dump($i=1);
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
var_dump($rc->getStaticProperties());
register_shutdown_function('exploDe');
$stmt->closeCursor();
$stmt->execute();
$y++;
var_dump($target);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
debug_print_backtrace();
$baz = (float)$foo;
printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
$f = __DIR__."/data/test.txt.gz";
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$d->prop = $c;
test('Ghost', $obj);
$tester->expectLogStartNotices();
$EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
$heredoc = <<<EOT
hello world
EOT;
var_dump($dom->lookupNamespaceURI(""));
var_dump(error_get_last());
$reflector = new ReflectionClass(C::class);
$w["bug69279.txt"] = "Sample content.";
var_dump(__METHOD__);
define ('foobar', 1);
$box->value = new Test;
$target = $doc->documentElement->lastChild;
var_dump($row['bit_column_1']);
printf("# Ghost:\n");
$bert = "file://" . __DIR__ . "/bug41033.pem";
printf("Decimals     : %d\n", $field->decimals);
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
$arguments = array($a, $b, $c);
var_dump($array[$a]);
print_r($arg);
$host = PHP_CLI_SERVER_HOSTNAME;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $addr = '::1';
    $found = false;
}
$subject = 'string';
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    ;

mkdir($d0);
    var_dump($obj);
}
$ancestry = $child->xpath('ancestor-or-self::*');
$loop_counter = 1;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $res = $db->query("SELECT a FROM test36428");
    $array1 = array(1, 2);
    $dom->strictErrorChecking = false;
    $this->logOnEvent = $logOnEvent;
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
}
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$now = new DateTimeImmutable();
$date2 = new DateTime("Fri 19 November 2011");
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $errcontext = '';
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $ent = sprintf("&#x%X;", $v[0]);
    $prefix . "フォルダ";

mkdir($prefi;
    fflush($stream);
}
$res = [];
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$generator = dumpElement();
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    $generator = dumpElement();
    $tmp = $stmt->getColumnMeta(0);
    $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
    set_time_limit(5);
}
$create = 'CREATE TABLE test(id INT, ';
$o = new C;
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    $this->public_var = 10;
    $class = new SomeClass2;
    $dom = new DOMDocument;
    printf("printf test 15:%b\n", 170);
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$a[10] = "42";
$this->vars[$name] = $val;
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    $array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    $xml = '
<data id="1">
    <key>value</key>
</data>
';
    $tags = exif_read_data($mixedEndiannessFile, 'EXIF', true, false);
    var_dump( strrchr($special_chars_str, $needle) );
}
$document = new \DOMDocument();
$interval = new DateInterval('P1D');
$x = new stdClass();
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $w["bug69279.txt"] = "Sample content.";
    $datefmt2 = clone $datefmt;
    $t = strtotime("2005-12-22 ". $test);
    $t = new base();
    zerofill(6, $link, 'INTEGER');
}
$gen1 = $closure1();
$ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
$ftp = ftp_connect('127.0.0.1', $port);
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $arg = new Stdclass();
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $res = mail($to, $subject, $message, $headers);
    $strA = 'test &amp; test';
    restore_exception_handler();
}
ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file;
$reflection = new ReflectionClass('\DateTimeImmutable');
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
$datatypes = array(
        MYSQLI_TYPE_TINY => "TINY",
        MYSQLI_TYPE_SHORT => "SHORT",
        MYSQLI_TYPE_LONG => "LONG",
        MYSQLI_TYPE_FLOAT => "FLOAT",
        MYSQLI_TYPE_DOUBLE => "DOUBLE",
        MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
        MYSQLI_TYPE_LONGLONG => "LONGLONG",
        MYSQLI_TYPE_INT24 => "INT24",
        MYSQLI_TYPE_DATE => "DATE",
        MYSQLI_TYPE_TIME => "TIME",
        MYSQLI_TYPE_DATETIME => "DATETIME",
        MYSQLI_TYPE_YEAR => "YEAR",
        MYSQLI_TYPE_ENUM => "ENUM",
        MYSQLI_TYPE_SET	=> "SET",
        MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
        MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
        MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
        MYSQLI_TYPE_BLOB => "BLOB",
        MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
        MYSQLI_TYPE_STRING => "STRING",
        MYSQLI_TYPE_NULL => "NULL",
        MYSQLI_TYPE_NEWDATE => "NEWDATE",
        MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
    );
for ($i_10 = 0; $i_10 < 10; $i_10++) {
    $conn = odbc_connect($dsn, $user, $pass);
    $date2 = new DateTime("Fri 19 November 2011");
    [ $func, $argv ] = $func_argv;
    $unset_array = array(10);
    byRef(C[0]);
}
$foo = new Foo();
$tbl = "test";
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    $dom = new DOMDocument;
    $pid = pcntl_fork();
    var_dump(gc_collect_cycles());
}
