<?php
$logOnEvent = new LogOnEvent(34567, $timestamp);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $blank_line = <<<EOT

EOT;
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
    debug_print_backtrace();
    printf("printf test 2:%d\n", 42);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump(file_exists($filename));
        var_dump($obj->a);
    }
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
        $total = 10000;
        var_dump($ffi->bug_gh16013_return_bool());
        pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
            $a->test("test");
            var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
        }
    }
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $to = "specials";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
    $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
    $dt->setTimezone(new DateTimeZone('UTC'));
    $arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
    zerofill(6, $link, 'INTEGER');
    $varOutput = ob_get_contents();
    undefined_function('Null');
    $zip = new ZipArchive();
    test('sensitive');
    $loop_counter = 1;
    $w->compressFiles(Phar::GZ);
    $result = range($a, $b);
    stream_wrapper_register('dummy', DummyWrapper::class);
    $special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
    var_dump(spl_autoload_unregister($callback1));
    $x = new stdClass();
    var_dump($c);
}
function f_6() {
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $fp = php_cli_server_connect();
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_8() {
    $reflector = new ReflectionClass(C::class);
    $assoc_array = array ('one' => 1, 'two' => 2);
    $html = simplexml_import_dom($tag);
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    printf( "length: %d\n", count($r) );
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
}
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $interval = new DateInterval('P1D');
    $ch = curl_init("https://localhost/username");
    $c = new C();
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        mt_srand(1234567890);
        $r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
    }
}
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    print_r($g);
    $phar->stopBuffering();
    => imagecreatefromgd2part($file, 0,0, -25, 10),
    fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
);

unlink($file);
?>;
    var_dump(spl_autoload_functions());
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
    call_user_func(array("static","ok"));
}
rmdir($dest . '/test/empty');
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
$date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
$total = 10000;
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
function f_12() {
    try {
        var_dump(gzread($h, 0));
    } catch (Exception $e) {}
    if (true) {
        return get_class($object);
    }
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
}
extract($GLOBALS, EXTR_REFS);
spl_autoload_register(function ($name) {
});
test('Proxy', $obj);
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
