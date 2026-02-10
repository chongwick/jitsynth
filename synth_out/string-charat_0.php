<?php
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
function f_0() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_1() {
    return true;
}
$temp_array = $array;
$arr  = array("test");
$num = 100000;
function f_2() {
    fclose($fp);
    zerofill(4, $link, 'MEDIUMINT');
    crash();
    gzclose($h);
    $callable($nodes);
    $mysqli->query($sql);
    fclose($fp);
    var_dump($array->offsetExists('key'));
    var_dump(baz());
    dumpNodeList($dom->getElementsByTagName("html"));
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    unlink($trace_file);
    print_r($browser);
    $link->close();
    var_dump("done");
    printf("[002] %s [%d] %s\n", $column_def,
                mysqli_errno($link), mysqli_error($link));
    printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
    var_dump($obj);
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    test('Proxy', $obj);
    var_dump(asort($temp_array) );
    $doc->loadXML('<a>foo<last/></a>');
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    range($var,1,$var);
    var_dump($bar);
    call_user_func("static::ok");
    printf("printf test 26:%2\$d %1\$d\n", 1, 2);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    $c("abc");
    printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
    php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
    var_dump(range('z', 'a', 100));
    test('y');
    test($p12, $pass);
    ini_set("intl.error_level", E_WARNING);
    $t->test();
    set_exception_handler("foo");
    var_dump(gzread($h, 0));
    var_dump($baz);
}
file_put_contents($magic_file, "
0	regex	\\0\\0\\0\\0	Test
");
ob_start();
$db = MySQLPDOTest::factory();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $ancestry = $child->xpath('ancestor-or-self::*');
    $found = false;
}
$x = new SoapClient('http://i_dont_exist.com/some.wsdl');
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
}
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

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

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
function f_5() {
    var_dump(openssl_x509_parse($pem_cert));
    set_include_path(__DIR__.'/bug39542:.');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
    var_dump(spl_autoload_unregister($callback1));
    php_cli_server_start('http_response_code(422);');
    var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
    $doc->loadXML('<a>foo<last/></a>');
    $stmt->closeCursor();
    var_dump($row['bit_column_1']);
    var_dump($a->value);
    file_put_contents($empty_webp, "");
    $o->foo();
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
    var_dump ( rtrim("rtrim test   \t\0 ") );
    zerofill(5, $link, 'INT');
    var_dump(debug_backtrace());
    rename("phar://a.phar/x", "phar://a.phar/y");
    curl_exec($ch);
    printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
}
$dt->setTimezone(new DateTimeZone('UTC'));
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $link->real_query($sql);
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
    printf("Orgname      : %s\n", $field->orgname);
}
$ch = curl_init();
function f_7() {
    $assoc_array = array ('one' => 1, 'two' => 2);
    $instance = new Foo();
    ttribute('idx');
            echo $reade;
    $this->version = $version;
    try {
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            if (true) {
                $element = $dom->appendChild($dom->createElement('root'));
            }
            $create = sprintf('%s)', substr($create, 0, -2));
            ++$x;
        }
    } catch (Exception $e) {}
    if (true) {
        $domd = new DOMDocument();
    }
    if (true) {
        list($a,$b) = is_array($arr)? $arr : $arr;
    }
    var_dump(gethostbynamel($host));
    $this->show();
    set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
}
var_dump($db->query('SELECT * FROM test_33689'));
function f_9() {
    $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
    $item['nanana'] = 'batman';
    $GLOBALS["obj"] = 24;
    $url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
    try {
        for ($i_10 = 0; $i_10 < 10; $i_10++) {
            if (true) {
                $rm = new ReflectionMethod(Collator::class, 'getSortKey');
            }
            $fp = php_cli_server_connect();
            $count ++;
        }
    } catch (Exception $e) {}
    if (true) {
        $found = ($dsn !== false);
    }
    if (true) {
        $class = new SomeClass;
    }
    curl_setopt($ch, CURLOPT_USERPWD, null);
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    test('Proxy', $obj);
}
test("str");
$a = test();
function f_11() {
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    $dom = new DOMDocument;
    $attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
    $obj = new C();
    try {
        for ($i_12 = 0; $i_12 < 10; $i_12++) {
            if (true) {
                $box->value = null;
            }
            $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
            $loop_counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $db = MySQLPDOTest::factory();
    }
    printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                    $unexpected_flags, $field->name, $flags_found);
    time_nanosleep(0, 1000000000);
    var_dump(gzeof($h));
}
var_dump( end($array_test) );
function f_13() {
    $str = 'Hello World';
    $ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
    $array_object = array();
    $this->timestamp = $timestamp;
    try {
        for ($i_14 = 0; $i_14 < 10; $i_14++) {
            if (true) {
                $message = 'hello';
            }
            $item['superhero'] = 'robin';
            ++$testCasesTotal;
        }
    } catch (Exception $e) {}
    if (true) {
        $im = imagecreate(800, 800);
    }
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    var_dump(-2147483648 % -1);
    printf("%s: %s\n", $e::class, $e->getMessage());
}
var_dump($diff->invert, $diff->s, $diff->f);
function f_15() {
    $magic_file = __DIR__ . '/bug79283.db';
    $arg->name = array();
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            $ent = sprintf("&#x%X;", $v[0]);
            $r = new ReflectionClass('Test2');
        }
        $curl = curl_init("http://www.google.com");
    }
    var_dump( gmdate($value) );
    register_shutdown_function(function () {
    echo "register_shutdown_function()\n";
    throw new \Exception('shutdown');
});
    $count++;
}
bar();
function f_17() {
    $loop_counter = 1;
    rt = 30;
$le;
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            $list2 = clone $list;
            $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
        }
        = new DOMDocument('1.0', 'UTF-8');
$no;
    }
    var_dump(ftp_mkdir($ftp, 'CVS'));
    $a->rewind();
    $test->a++;
}
(new Test)->bar(do_throw());
