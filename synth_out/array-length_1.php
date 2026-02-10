<?php
$index_array = array (1, 2, 3);
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
($prefix);

?>;
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
var_dump( strtr($str, $from, $to) );
set_error_handler('test_error_handler');
$httpContext = [
    'http' => [
        'protocol_version'	=> '1.1',
        'method'			=> 'GET',
        'header'			=> &$headers,
        'follow_location'	=> 0,
        'max_redirects'		=> 0,
        'ignore_errors'		=> true,
        'timeout'			=> 60,
    ],
];
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
$ai->rewind();
gzclose($h);
unlink($filename);
var_dump($obj);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    test();
    ched = $node->splitText($start);
$ma;
    $root = simplexml_load_string($xml);
    var_dump($create);
}
$ffi = FFI::cdef($h);
$sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$id = $db->lastInsertId();
$file_handle = fopen(__FILE__, "r");
$f->start();
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
$phar->setDefaultStub(str_repeat('a', 401));
unlink($fn);
ith_cp($d0, 65001);
get_basename_;
printf("Field        : %d\n", $field_idx);
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$id_2_date = '2014-09-24';
$d->prop = $c;
$xml = simplexml_load_string($xmlString);
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
$b->rewind();
var_dump(unserialize(serialize($obj)));
var_dump($i=$x);
file_put_contents($tmpFileIn, $originalEnvelopeData);
setStyleAndThickness($im, $black, 4);
ame, $xmlstring);

$reader = new XMLReade;
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$res[] = $re;
$found_flags = $unexpected_flags = '';
$ffi = FFI::cdef($header, ffi_get_php_dll_name());
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$diff = $ago->diff($now, true);
$counter = 1;
$from = ini_get('sendmail_from');
$meta_res = $stmt->result_metadata();
$x = new SoapClient(__DIR__."/bug27722.wsdl");
$c = new C();
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
var_dump($x);
test('Ghost', $obj);
$reflector->resetAsLazyGhost($obj, function () {});
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
file_put_contents($fn, $compressed);
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
var_dump($child);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$mysql->close();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
$rc = new ReflectionClass(B::class);
debug_zval_dump($references);
var_dump($dom->lookupNamespaceURI(NULL));
$result = $stmt->get_result();
$box->value = null;
printf("pdo.dsn.mysql=%s\n", $dsn);
printf("[003] Trace file '%s' has not been created\n", $trace_file);
$code = null;
var_dump(odbc_result($res, 'whatever'));
var_dump(isset($_POST['foo']));
$loop_counter = 1;
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
$reflector->initializeLazyObject($obj);
$ao = new ArrayObject(new C);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    var_dump(test());
    $obj = new C();
    $x = (object)['y' => 'foobar'];
    call_user_func('bar','second try');
}
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
mysqli_free_result($res);
