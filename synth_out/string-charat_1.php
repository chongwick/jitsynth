<?php
$stmt = $mysql->prepare("SELECT id FROM temp");
function f_0() {
    return 42;
}
function f_1() {
    return true;
}
$ar1 = array("row1" => 2, "row2" => 1);
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
$object1 = new foo();
function f_2() {
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    $this->server->handle($request);
    var_dump(spl_autoload_unregister($callback1));
    var_dump($html);
    var_dump(mysqli_get_server_version($link));
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    print_r($browser);
    var_dump($arg);
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    $phar->stopBuffering();
    $this->mysqli->close();
    $zip->addFromString('foo.txt', 'foo bar foobar');
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
    var_dump(__METHOD__);
    var_dump($obj->a);
    var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
    test('y');
    var_dump( range('A', 'H', 0.0) );
    printf("printf test 31:%.17g\n", INF);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
    $stmt->closeCursor();
    var_dump(lookup(510));
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    var_dump($obj->a);
    var_dump( strftime($value) );
    $stmt->execute([ 0 ]);
    var_dump(spl_autoload_unregister($callback2));
    $phar->setDefaultStub(str_repeat('a', 401));
    restore_exception_handler();
    $dom->documentElement->appendChild($test1);
    ;
    unlink($filename);
    print_r($data);
    var_dump(A::$x);
    fffff);
imagegd2($im1, $file);
    $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:html", "9"));
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    ched->splitText($length);
pri;
    var_dump($headers2['Title']);
}
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
var_dump('ERR');
$array = new ArrayObject();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $foo = new Foo;
}
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    var_dump(lookup(510));
    $tester->close();
}
$c->prop1 = 'hello world';
function f_5() {
    var_dump( strrchr($special_chars_str, $needle) );
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
    set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
    pg_insert($conn,$table, array('id' => 3, 'value' => 15));
    $zip->extractTo(__DIR__);
    $dateperiod->__unserialize(['start' => $now, 'end' => $date]);
    printf("printf test 7:%010.2f\n", 2.5);
    date_default_timezone_set("Asia/Calcutta");
    file_get_contents('dummy://foo', false, $context);
    $phar->addFromString('test.txt', 'text');
    array_map(array('Element', 'CallBack'), $arr);
    $tester->request(connKeepAlive: true)->expectBody('1');
    var_dump($diff->h);
    $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
    restore_exception_handler();
    var_dump($im);
    closedir( $dir_handle );
    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
}
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
    printf("printf test 11: 123456789012345678901234567890\n");
    var_dump($d);
}
$expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
function f_7() {
    $d0 = $prefix . "ソフト";
$d1 =;
    $ffi = FFI::cdef($header, 'php_zend_test.dll');
    $valid_objects = array(
  new stdclass,
  new foo,
  new concreteClass,
  new Value,
  new myClass,
  $myClass_object,
  $myClass_object->foo_object,
  $myClass_object->public_var1,
  $foo_object,
  $Value_object,
  $concreteClass_object
);
    $gen3 = $closure2();
    try {
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            if (true) {
                $style[$i++] = IMG_COLOR_TRANSPARENT;
            }
            $auz = new DateTime($time, $tz_aus);
            $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        }
    } catch (Exception $e) {}
    if (true) {
        $fmt2 = clone $fmt;
    }
    if (true) {
        $threesixty = M_PI * 2.0;
    }
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
    $link->close();
    var_dump((new Exception)->getTrace());
}
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
function f_9() {
    $x = 1;
    $obj = simplexml_load_string($xml);
    $expected = str_repeat('0', $length - strlen($insert));
    $varOutput = ob_get_contents();
    try {
        for ($i_10 = 0; $i_10 < 10; $i_10++) {
            if (true) {
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
            }
            $obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
            ++$failuresNb;
        }
    } catch (Exception $e) {}
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
    }
    if (true) {
        $b = NULL;
    }
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
}
imagecolorallocate($im, 255, 255, 255);
$i= DateInterval::createFromDateString('2 days');
function f_11() {
    $wrong = "wrong";
    $numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
    $dsn = ini_get('pdo.dsn.mysql');
    $obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
    try {
        for ($i_12 = 0; $i_12 < 10; $i_12++) {
            if (true) {
                $_b = $b;
            }
            $isEmpty = $MySQL_Ext->isEmpty();
            $count++;
        }
    } catch (Exception $e) {}
    if (true) {
        $context = stream_context_create(['dummy' => ['foo' => 'bar']]);
    }
    var_dump( array_reverse($array, false) );
    var_dump( array_fill($start_key , $num , $val) );
    var_dump(soundex("Knuth")       == soundex("Kant"));
}
ob_start(function() {
    declare(ticks=1);
    register_tick_function(
       function() { }
    );
});
function f_13() {
    $diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $i = 1;
    $reqOfBig = 'select * from t';
    try {
        for ($i_14 = 0; $i_14 < 10; $i_14++) {
            if (true) {
                $i = 0;
            }
            $ar[] = 1;
            $count++;
        }
    } catch (Exception $e) {}
    if (true) {
        $phar['a.php'] = '<php echo "this is a\n"; ?>';
    }
    printf("printf test 23:%016X\n", 170);
    validate((object) []);
    printf("Charsetnr    : %d\n", $field->charsetnr);
}
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
function f_15() {
    ttributeNo(1);
            echo $reade;
    $test = function (#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
};
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            $count = 1;
            $c->prop2 = 'hello world';
        }
        $index_array = array (1, 2, 3);
    }
    printf("Flags        : %d\n", $field->flags);
    var_dump(-2147483648 % -1);
    $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
}
fffff);
imagegd2($im1, $file);
function f_17() {
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $baz = (float)$foo;
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            gth = 3;

$d;
            $d = new DateTime('2014-12-24 13:00:00', $tz1);
        }
        $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
    }
    var_dump($i=$x);
    printf("printf test 10: 123456789012345\n");
    $I->unit++;
}
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
