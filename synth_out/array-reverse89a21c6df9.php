<?php
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
class B extends P {
    protected function common() {
        echo __METHOD__, "\n";
    }
}
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function test(#[SensitiveParameter] $sensitive)
{
    debug_print_backtrace();
    var_dump(debug_backtrace());
    var_dump((new Exception)->getTrace());
}
printf("printf test 24:%.5s\n", "abcdefghij");
class_alias( 'stdClass', '_' );
$a = new A();
$a->test(new B());
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$arr = array('a', 'b');
$arr();
ob_start();
set_error_handler(function($_, $m) { throw new Exception($m); });
$blank_line = <<<EOD

EOD;
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
foreach($needles as $needle) {
  var_dump( strrchr($blank_line, $needle) );
}
var_dump( strrchr($blank_line, $needle) );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
function f_0() {
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $struct = $ffi->new('struct bug_gh16013_int_struct');
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $auz = new DateTime($time, $tz_aus);
    $us = new DateTime($time, $tz_us);
    $diff = $auz->diff($us);
    $b = "30";
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    foo(false, true);
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
function f_1() {
    $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
    $count = 1;
    printf("printf test 21:%016b\n", 170);
    $gen = gen();
    $a = bar($gen);
    $a->rewind();
    $im = ImageCreateTrueColor(10, 10);
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    ImageFillToBorder($im, 5, 5, $bordercolor, $color);
    var_dump(strlen(file_get_contents('php://input')));
}
var_dump(http_get_last_response_headers());
function f_2() {
    $a = 'ok';
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $i = 0;
        $trace_file = '/tmp/mysqli_debug_phpt.trace';
        printf("[003] Trace file '%s' has not been created\n", $trace_file);
        $inputs = array(
              // Predefined Date constants
              'DATE_ATOM Constant' => DATE_ATOM,
              'DATE_COOKIE Constant' => DATE_COOKIE,
              'DATE_RFC822 Constant' => DATE_RFC822,
              'DATE_RFC850 Constant' => DATE_RFC850,
              'DATE_RFC1036 Constant' => DATE_RFC1036,
              'DATE_RFC1123 Constant' => DATE_RFC1123,
              'DATE_RFC2822 Constant' => DATE_RFC2822,
              'DATE_RFC3339 Constant' => DATE_RFC3339,
              'DATE_RSS Constant' => DATE_RSS,
              'DATE_W3C Constant' => DATE_W3C,
        );
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmdate($value, $timestamp) );
              var_dump( gmdate($value) );
        }
        var_dump( gmdate($value) );
        $arr  = array("test");
        list($c,$d) = is_array($arr)?: NULL;
        test('sensitive');
        $db = PDOTest::factory();
        $fp = tmpfile();
        $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
        $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
        $client = new soapclient(NULL, [
          'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
          'uri' => 'misc-uri',
          'soap_version' => SOAP_1_2,
          'user_agent' => 'Vincent JARDIN, test headers',
          'trace' => true, /* record the headers before sending */
          'stream_context' => stream_context_create([
            'http' => [
              'header' => sprintf("MIME-Version: 1.0\r\n"),
              'content_type' => sprintf("Multipart/Related")
            ],
          ]),
        ]);
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
        test('Ghost', $obj);
        $client = new soapclient(NULL, [
          'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
          'uri' => 'misc-uri',
          'soap_version' => SOAP_1_2,
          'user_agent' => 'Vincent JARDIN, test headers',
          'trace' => true, /* record the headers before sending */
          'stream_context' => stream_context_create([
            'http' => [
              'header' => sprintf("MIME-Version: 1.0\r\n"),
              'content_type' => sprintf("Multipart/Related")
            ],
          ]),
        ]);
        $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $xml = simplexml_load_string($xmlString);
        $nodes = $xml->a->b;
        test($nodes, "children", fn ($n) => $n->children());
        $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
        $filename = __DIR__ . '/bug77432.phar';
        $phar = new Phar($filename);
        $phar->startBuffering();
        grapheme_stripos(1,1,2147483648);
    }
}
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
