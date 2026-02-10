<?php
function f_0() {
    function f_1() {
    }
    list(
    '' => $foo,
    $bar
) = $array;
    $a->rewind();
}
function f_2() {
    function f_3() {
        function f_4() {
            function f_5() {
            }
            $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
        }
        var_dump(json_last_error() === JSON_ERROR_UTF16);
    }
    $client->getQuote("ibm");
}
function f_6() {
    restore_exception_handler();
}
function f_7() {
    function f_8() {
    }
    $multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
    return empty($this->extData);
}
function f_9() {
    set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
}
function f_10() {
    $to = "specials";
    var_dump(error_get_last());
}
function f_11() {
    php_cli_server_start($code, null, $args);
}
function f_12() {
    $host = PHP_CLI_SERVER_HOSTNAME;
    $now = new DateTime('2018-11-03 11:34:20.781751');
    print_r($stmt->getColumnMeta(0));
}
function f_13() {
    $containers = array();
    validate((object) []);
}
function f_14() {
    function f_15() {
    }
    fclose($fp);
}
function f_16() {
    function f_17() {
        return get_class($object);
    }
    function f_18() {
    }
    $filename = "bug51997.bz2";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
}
function f_19() {
    php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
}
function f_20() {
    function f_21() {
        $root = simplexml_load_string($xml);
        if (true) {
            mysqli_free_result($res);
        }
        if (!true) {
            if (true) {
                var_dump( array_reverse($array, false) );
            }
            if (!true) {
                ini_set('display_errors',true);
                if (true) {
                    $cainfo = array();
                }
                if (!true) {
                    $bert = "file://" . __DIR__ . "/bug41033.pem";
                }
            }
        }
        return "Object";
    }
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
}
function f_22() {
    $a = new A();
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
}
function f_23() {
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    var_dump('ERR');
}
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

       // array with object, unset variable and resource variable
       array(@$unset_var => "hello", $fp => 'resource'),

       // array with mixed keys
/*11*/ array('hello' => 1, "fruit" => 2.2,
             $fp => 'resource', 133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
function f_24() {
    echo "caught\n";
}
function f_25() {
    echo $e->getMessage(), "\n";
}
$dfp = opendir ( __DIR__ );
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$reflector = new ReflectionClass(C::class);
function f_26() {
    printf("printf test 2:%d\n", 42);
}
function f_27() {
    $version = mysqli_get_server_version($link);
    $string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
    echo "error :".$fErrStr."\n";
}
class C_28 {
    public function m_29() {
        zerofill(8, $link, 'FLOAT');
        dumpNodeList($dom->getElementsByTagName("HTml"));
    }
}
function f_30() {
    echo "{$dt->format('Y-m-d H:i:s T')} | {$dt->getTimestamp()}\n\n";
}
function f_31() {
    $varOutput = ob_get_contents();
    $org_a = $GLOBALS['a'];
    echo "\n";
}
function f_32() {
    $code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
    try {
        var_dump(ini_get('mysqlnd.debug'));
    } catch (Exception $e) {}
    if (true) {
        for ($i_33 = 0; $i_33 < 10; $i_33++) {
            var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
        }
        if (true) {
            for ($i_34 = 0; $i_34 < 10; $i_34++) {
                ob_end_flush();
            }
        }
        $dom = Dom\HTMLDocument::createEmpty();
    }
    restore_exception_handler();
}
function f_35() {
    $html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
    try {
    } catch (Exception $e) {}
    if (true) {
        var_dump(call_user_func_array("array_multisort", $args));
        $g = 'hi';
    }
    spl_autoload_register(function ($name) {
});
}
function f_36() {
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
    try {
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
    } catch (Exception $e) {}
    if (true) {
        php_cli_server_start($code, null, $args);
        $num = 2;
    }
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
}
function f_37() {
    function f_38() {
    }
    $us = new DateTime($time, $tz_us);
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $test('sensitive');
    zerofill(2, $link, 'TINYINT');
    $a = new A();
    var_dump( current($resources) );
}
$a = $b = $c = 2;
function f_39() {
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    try {
        zerofill(3, $link, 'SMALLINT');
        $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    } catch (Exception $e) {}
    if (true) {
        unlink($filename);
    }
}
function f_40() {
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    try {
        var_dump(strncmp("test ", "e", -1));
        $match->invoked($invocation);
    } catch (Exception $e) {}
    if (true) {
        var_dump($ffi->bug_gh16013_return_char());
    }
}
function f_41() {
    $generator = dumpElement();
    try {
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
        $stmt = $db->prepare("CALL testSp()");
    } catch (Exception $e) {}
    if (true) {
        printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
    }
    if (true) {
        var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    }
}
var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
session_start();
var_dump(gzeof($h));
$phar->startBuffering();
$dom->getElementById('x')->remove();
session_set_save_handler(new MySessionHandler());
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$oIntlDateFormatter->setPattern('VV');
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
$fiber->start();
$ffi->bug79177();
gc_collect_cycles();
ob_start();
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
mysqli_free_result($res);
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
var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
ob_clean();
fclose($f);
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
var_dump($target);
$zip->setPassword('bar');
ob_start();
var_dump($s["010"], isset($s["010"]));
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
http_server_kill($pid);
debug_zval_dump($test);
var_dump($list->offsetExists($x));
$_b = $b;
$headers = ['Host: okey.com'];
$host = PHP_CLI_SERVER_HOSTNAME;
test(2);
$file_handle = fopen(__FILE__, "r");
$bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
    $cdata = $ffi->new('uint16_t');
    $cdata->cdata = $val;
    return $cdata;
};
$mail = $mailBox->getMailsBySubject($subject);
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
$reflector->initializeLazyObject($obj);
$test[$kk] = 0;
$bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
    return $val;
};
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
setlocale(LC_ALL, "C");
$test_fl_escaped = escapeshellarg($test_fl);
$obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
try {
    try {
        echo "\n";
    } catch (Exception $e) {}
    if (true) {
    }
} catch (Exception $e) {}
if (true) {
    $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
}
var_dump(soundex("Gauss")       == soundex("Ghosh"));
$s = 'O:15:"ReflectionClass":0:{}';
var_dump($html);
$a->foo = 5;
$list = new SplDoublyLinkedList();
session_write_close();
$b = 'ok';
ini_set("soap.wsdl_cache_enabled",0);
var_dump($ffi->bug_gh16013_return_enum());
$struct = $ffi->new('struct bug_gh16013_int_struct');
var_dump($temp_array);
$link->real_query($sql);
$start = memory_get_usage() + 1024;
$args = [1, &$bar];
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
var_dump( end($resources) );
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
$link->close();
var_dump($dom->lookupNamespaceURI(NULL));
$ch = curl_init("https://localhost/username");
$date_format = DATE_RFC2822;
$instance = new Foo();
$priorityQueue->insert("a", 1);
validate((object) []);
$offset3 = PHP_INT_MAX * 16;
var_dump($val);
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
unlink($contentfile);
$GLOBALS['a'] = 1;
var_dump($prefixed->lookupNamespaceURI("a"));
byVal(C[0]);
var_dump($type->childNodes);
$stmt = $pdo->query($reqOf3);
printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $field->name, $flags_found);
$ago = new DateTime('2018-11-03 11:34:20.000000');
var_dump($dom->saveHTML($node));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$count = 1;
$priorityQueue->insert("a", 1);
var_dump(gzread($h, 5));
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
$tester = new FPM\Tester($cfg, $code);
$mailBox = MailBox::login($mailAddress);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump($argv);
$users = MailBox::USERS;
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
try {
    $dt->setTimezone(new DateTimeZone('America/Boise'));
    printf("printf test 25:%-2s\n", "gazonk");
} catch (Exception $e) {}
if (true) {
    preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
}
$fp = fopen(__FILE__, "r");
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
try {
    unlink($fn);
} catch (Exception $e) {}
if (true) {
    $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
}
$res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
$stmt->bind_result($id);
php_cli_server_start(<<<PHP
http_response_code(426);
PHP
);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
$unset_var = 10;
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
var_dump($e);
$array_object[0] = &$object1;
try {
    function f_42() {
        test('Ghost', $obj);
    }
    function f_43() {
        echo $i->format("%d"), "\n";
    }
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {}
if (true) {
}
[ $func, $argv ] = $func_argv;
function f_44() {
    function f_45() {
    }
    $row = $res->fetch_array();
    $a->bar();
}
var_dump($priorityQueue->getExtractFlags());
$array = [0];
try {
    class C_46 {
        public function m_47() {
        }
    }
    set_exception_handler("foo");
} catch (Exception $e) {}
if (true) {
}
$readonly_anon->field = 123;
