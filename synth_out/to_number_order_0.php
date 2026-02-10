<?php
$d = new DateTime('2014-12-24 13:00:00', $tz1);
$box = new Box();
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$reflector = new ReflectionClass(C::class);
$data = [
    Test::COURSES_ADMIN,
    Test::COURSES_REPORTING_ACCESS,
    Test::BUNDLES_ADMIN,
    Test::USERS_ADMIN,
    Test::B2B_DASHBOARD_ACCESS,
    Test::B2B_DASHBOARD_ACCESS,
    Test::INSTRUCTORS_ADMIN,
    &$instructorsAdmin,
    Test::COUPONS_ADMIN,
    Test::AUTHENTICATED,
];
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
call_user_func("static::ok");
var_dump($_POST);
$style = array();
var_dump(spl_autoload_unregister($callback1));
var_dump($temp_array);
$canary = new Canary(null);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
c1::$a2[] = 1;
$dom->getElementById('x')->removeAttribute('xml:id');
var_dump(range(1.5, 3.5, -1.5));
$ch = curl_init("https://localhost/userpwd");
printf("%-10s => %s\n", $test, date(DATE_ISO8601, $t));
rewind($fp);
$tz2 = new DateTimeZone('Europe/Berlin');
var_dump(strncmp("test ", "e", 0));
$reflector->resetAsLazyGhost($obj, function () {});
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
$i = 0;
$array = [0];
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
$GLOBALS['a'] = "bug\n";
$nodes = $xml->a->b;
$i = "010";
$row = $res->fetch_array();
$options = stream_context_get_options($this->context);
$dir_handle = opendir( __DIR__ );
$addr = '::1';
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
bzclose($bz);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
ttributeNo(0);
            echo $reade;
$datefmt->parse('abc');
$reflector->resetAsLazyProxy($obj, function () {});
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
$sibling->common();
ob_end_flush();
$code = null;
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
var_dump ( rtrim("rtrim test   \t\0 ") );
$heredoc_needle = <<<EOD
^^&*(
EOD;
dumpNodeList($dom->getElementsByTagName("foo:html"));
var_dump((new Exception)->getTrace());
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
printf("printf test 1:%s\n", "simple string");
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
$w->compressFiles(Phar::GZ);
$var = 10;
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
var_dump($value);
$bytes = str_repeat("*", 65536);
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
printf("%s: %s\n", $e::class, $e->getMessage());
$needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
print_r(get_object_vars($obj));
$reflector->initializeLazyObject($obj);
$cpca = __DIR__ . "/san-cert.pem";
debug_print_backtrace();
zerofill(2, $link, 'TINYINT');
$a = bar($gen);
md5('foo');
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
rewind($fp);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = get_declared_classes();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
$varOutput = ob_get_contents();
unlink($tmpFileOut2);
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTOR;
$this->audienceMemberId = $audienceMemberId;
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$list->push('o');
$tester->expectLogStartNotices();
$dfp = opendir ( __DIR__ );
var_dump(getopt("abcd"));
var_dump(mb_strpos('This is na English ta', 'a', $i));
$d = new D();
openssl_seal($_, $_, $_, array_fill(0,64,0));
$obj = new C();
var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
var_dump(preg_replace_callback_array([], []));
$data = array('first', 'fifth', 'second', 'forth', 'third');
printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
var_dump($stmt->nextRowset());
test($nodes, "attributes", fn ($n) => $n->attributes());
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
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
foo(true, false);
$res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
$stmt->execute([ 32 ]);
pcntl_sigwaitinfo($a,$a);
$a = 4;
test('Ghost', $obj);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
function f_0() {
    $flags = array(
        MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
        MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
        MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
        MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
        MYSQLI_BLOB_FLAG => 'BLOB',
        MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
        MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
        MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
        MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
        MYSQLI_SET_FLAG	=> 'SET',
        MYSQLI_NUM_FLAG => 'NUM',
        MYSQLI_PART_KEY_FLAG => 'PART_KEY',
        // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
        (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
        (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
        (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
        // MYSQLI_BINCMP_FLAG
    );
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $stmt->execute();
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    var_dump($data);
    $dir_handle = opendir( __DIR__ );
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    $a = new A();
    printf( "testarray: %s\n", $r2[2] );
    $tester->expectLogStartNotices();
    $dbConnection = new Com('ADODB.Connection');
    ini_set("session.save_handler","files");
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
    $list2 = clone $list;
    set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    $this->vars[$name] = $val;
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
    setStyleAndThickness($im, $black, 4);
    $this->values[$name] = $value;
    test("http://t[est@[::1]");
    var_dump($ffi->bug_gh16013_return_int());
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
}
var_dump(tidy_get_body($t));
