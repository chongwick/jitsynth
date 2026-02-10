<?php
c1::$a2[] = 1;
$pdo = MySQLPDOTest::factoryWithAttr($attr);
print_r( $r['testvector'] );
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
$client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
$obj->c = 1;
$meta_res = $stmt->result_metadata();
$temp_array = $array;
$x = match (true) {};
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
var_dump($ffi->bug_gh16013_return_short());
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
EOT;
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
var_dump(ob_get_contents());
imagealphablending($im, true);
var_dump( range('A', 'H', fdiv(0, 0)) );
$iterator = 1;
$insert->execute();
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
validate((object) []);
imagesavealpha($im, true);
ob_end_clean();
ame, $xmlstring);

$reader = new XMLReade;
$x = match (true) {};
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$num = 100000;
$datefmt->parse('abc');
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
var_dump($obj->a);
$flags[MYSQLI_ON_UPDATE_NOW] = 'ON_UPDATE_NOW';
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
set_time_limit(5);
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
var_dump($dom->getElementById('x')?->nodeName);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
var_dump(str_contains($response, "authorization"));
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);
var_dump($diff->invert, $diff->s, $diff->f);
var_export($test);
var_dump($obj);
$test[]=$test2;
display([ $stmt2->fetch() ]);
var_dump(json_decode('[]', false, 0x100000000));
var_dump($node->textContent);
$s = "X";
$c(false);
test();
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$a[0] = $x;
ob_clean();
print_r($str_instead);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
$userMessage = "'user' directive is ignored when FPM is not running as root";
setlocale(LC_ALL, "C");
imageline($im, 600, 700, 100, 200, IMG_COLOR_STYLED);
var_dump($r->getStaticProperties());
$x = new SoapClient(__DIR__."/bug27722.wsdl");
set_exception_handler(function () { print "EX\n"; });
printf("printf test 5:%-10.2f\n", 2.5);
var_dump( end($array_test) );
$timeZone = new DateTimeZone('UTC');
openssl_seal($_, $_, $_, array_fill(0,64,0));
test($box);
var_dump($dom->lookupNamespaceURI(""));
$response = array(
    'a' => 'b'
);
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump('ERR');
$foo[$j++] = $i++;
var_dump($pdo->query('SELECT 1;')->fetchAll());
st1.txt");

var_dump(cou;
var_dump(array_map(assert(...), [true, true, false]));
$canary = new Canary(null);
grapheme_stripos(1,1,2147483648);
var_dump(json_last_error() === JSON_ERROR_UTF16);
var_dump( end($test_array[1]) );
$res = [];
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile));
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
    $cdata = $ffi->new('uint32_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump($ffi->bug_gh16013_return_int());
var_dump($value);
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
var_dump(filter_var("", FILTER_SANITIZE_ENCODED));
$dbh = @pg_connect($conn_str);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
ini_set('mysqlnd.fetch_data_copy', true);
test();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
stream_wrapper_register('dummy', DummyWrapper::class);
var_dump($dom->lookupNamespaceURI(""));
dir($d1);
$mysqli->query($sql);
var_dump(($bug_gh16013_callback_struct->return_int8)(-4));
var_dump($br);
$certificateGenerator = new CertificateGenerator();
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
lor(10,100);
imagefill($im1, 0,0, 0x;
var_dump('ERR');
$logOnEvent = new LogOnEvent(34567, $timestamp);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
$auz = new DateTime($time, $tz_aus);
var_dump(gzread($h, -1));
$var = 10;
test($nodes, "children", fn ($n) => $n->children());
test('Proxy', $obj);
$reflector = new ReflectionClass(C::class);
fwrite($fp, str_repeat("baad", 1024*1024));
setStyleAndThickness($im, $black, 4);
$sql = "DROP TABLE IF EXISTS $tbl";
var_dump(asort($temp_array, SORT_REGULAR) );
curl_setopt($ch, CURLOPT_VERBOSE, true);
var_dump( range(1, 7, 10.0**400) );
foo();
var_dump( strftime($value) );
$phar->setDefaultStub();
var_dump(json_decode('{"key":"value", "":"value"}', true));
var_dump( is_array ($type) );
imagescale($im, 1, 0, 0);
var_dump($im);
ched->splitText($length);
pri;
http_server_kill($pid);
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
var_dump(spl_autoload_unregister($callback2));
$reflector->resetAsLazyGhost($obj, function () {});
$db->query('DROP PROCEDURE IF EXISTS testSp');
var_dump(sprintf("%030.-15s", $tempstring));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump( range(1, 7, 10.0**400) );
ob_end_clean();
$fiber->start();
$link->close();
printf("printf test 4:%.10f\n", 10.0/3);
fwrite($stream,"sdfgdfg");
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
printf("printf test 19:%16x\n", 170);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
var_dump($dom->getElementById('x')?->nodeName);
zerofill(11, $link, 'DECIMAL');
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
mysqli_free_result($res);
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
var_dump($stmt->nextRowset());
var_dump(foo());
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
fclose($fp);
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
var_dump(gzeof($h));
var_dump(serialize($a));
imagecolorallocate($im, 255, 255, 255);
var_dump(A::$x);
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
checktimeout($s, 500);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
unlink($filename);
imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump( array_reverse($array, true) );
printf("printf test 11: 123456789012345678901234567890\n");
$w->compressFiles(Phar::GZ);
var_dump($b->test);
mdir($prefi;
foo(true, true);
printf("%s: %s\n", $e::class, $e->getMessage());
mysqli_close($link);
var_dump($arg);
var_dump(unserialize($s));
var_dump(sin($thirty));
var_dump( strftime($value) );
var_dump( gmdate($value, $timestamp) );
$tester->start();
printf("printf test 8:<%20s>\n", "foo");
printf("Field        : %d\n", $field_idx);
$tester->expectLogStartNotices();
var_dump( array_fill($start_key , $num , $val) );
openssl_error_string();
var_dump($target);
unlink($contentfile);
var_dump($phar->getStub());
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
var_dump($list2->offsetExists($x));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
fclose($fp);
pg_insert($conn,$table, array('id' => 3, 'value' => 15));
var_dump($ar1);
$tester
    ->request('', ['SCRIPT_FILENAME' => null])
    ->expectHeader('Status', '404 Not Found')
    ->expectError('Primary script unknown');
$stmt->execute();
debug_print_backtrace();
var_dump(sin($ninety));
var_dump($client->__getLastResponse());
print_r($client->GetExpressCheckoutDetails());
var_dump( range(1, 7, 10.0**400) );
stream_get_line($fp, 1024*1024*2, "aaaa");
var_dump($row);
var_dump($rm->getNumberOfParameters());
var_dump(gzread($h, -1));
zerofill(7, $link, 'BIGINT');
printf("printf test 12:%5.2f\n", -12.34);
session_set_save_handler(new MySessionHandler());
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
    $cdata = $ffi->new('uint32_t');
    $cdata->cdata = $val;
    return $cdata;
};
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $fiber = $iterable = $canary = null;
        $gen1 = $closure1();
        $resources = array($file_handle, $dir_handle);
        var_dump( current($resources) );
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        (new Test)->bar(do_throw());
    }
}
var_dump(soundex("Knuth"));
$arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with unset variable
/*10*/ array( @$unset_var => "hello"),

       // array with mixed keys
/*11*/ array('hello' => 1,  "fruit" => 2.2,
             133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
$errorHandler = new ErrorHandler();
var_dump($dom->getElementById('x')?->nodeName);
$t = tidy_parse_string($input);
$this->public_var1 = new foo();
$s->attach($s);
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
var_dump($initialRequest ? $x : $y);
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
var_dump(gzeof($h));
var_dump( array_reverse($array, false) );
openssl_error_string();
ob_end_clean();
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
var_dump(__METHOD__);
var_dump(json_encode($arr));
++$testCasesTotal;
$iterator++;
$iterator++;
$I->unit++;
$counter++;
$iterator++;
++$test->a;
var_dump( strftime($value, $timestamp) );
var_dump($shm_id2);
extract($GLOBALS, EXTR_REFS);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN));
var_dump($data);
printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
