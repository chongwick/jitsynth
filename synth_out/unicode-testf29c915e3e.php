<?php
$rf = new ReflectionFunction('collator_get_sort_key');
$ftp = ftp_connect('127.0.0.1', $port);
class overloaded
{
  private $values;
  function __construct()
  {
    $this->values = array('a' => 0);
  }
  function __set($name, $value)
  {
    print "set $name = $value ($name was ".$this->values[$name].")\n";
    $this->values[$name] = $value;
  }
  function __get($name)
  {
    print "get $name (returns ".$this->values[$name].")\n";
    return $this->values[$name];
  }
}
$test = new overloaded();
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$unset_var = 10;
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
$ffi = FFI::cdef($header, 'php_zend_test.dll');
$pass	= PDO_MYSQL_TEST_PASS;
$a = 1;
$offset3 = PHP_INT_MAX * 16;
$arr = array('http'=>
                        array(
                                'follow_location'=>0,
                        )
                );
$pass = "qwerty";
function f_0() {
    $name = "foo";
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
    $dir = opendir('foo://bar');
    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $a[10] = "42";
        if (true) {
            $dom = new DOMDocument;
            $tag = $dom->appendChild($dom->createElement("style"));
            $html = simplexml_import_dom($tag);
        }
        $iterator = 1;
        $iterator++;
    }
    $file_handle = fopen(__FILE__, "r");
    $values = array (
      /* integers */
      0,  // zero as argument
      000000123,  //octal value of 83
      123000000,
      -00000123,  //octal value of 83
      -12300000,
      0xffffff,  //hexadecimal value
      123456789,
      1,
      -1,
    
      /* floats */
      -0.0,
      +0.0,
      1.234,
      -1.234,
      -2.000000,
      2.0000000,
      -4.0001e+5,
      4.0001E+5,
      6.99999989,
      -.5,
      .567,
      -.6700000e-3,
      -.6700000E+3,
      1E-5,
      -1e+5,
      1e+5,
      1E-5,
    
      /* strings */
      "",
      '',
      " ",
      ' ',
      "0",
      "\0",
      '\0',
      "\t",
      '\t',
      "PHP",
      'PHP',
      "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
    
      /* boolean */
      TRUE,
      FALSE,
      true,
      false,
    
      /* arrays */
      array(),
      array(NULL),
      array(true),
      array(""),
      array(''),
      array(array(1, 2), array('a', 'b')),
      array("test" => "is_array", 1 => 'One'),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test'),
    
      /* resources */
      $file_handle
    );
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            function foo() {
              var_dump("hello");
            }
            foo();
        }
    }
    function test($s) {
      echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
    }
    test('<?php echo "1";//2');
    return $this->getInt();
}
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
$a = new A();
$a->prop = new B();
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
function __construct($val) {
        $this->priv_member = $val;
    }
$this->priv_member = $val;
var_dump(range('z', 'a', 100));
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$domd = new DOMDocument();
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
var_dump($body->lookupNamespaceURI("a"));
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
var_dump($_SESSION);
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$code = <<<'PHP'
/* Receive */
$content = trim(file_get_contents("php://input")) . PHP_EOL;
PHP;
php_cli_server_start($code, null, $args);
ob_start();
var_dump($row['bit_column_1']);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca)));
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
ini_set('display_errors',true);
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
}
$foo = new Mock_MethodCallbackByReference_7b180d26();
$InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
$foo->inv_mocker = $InvMocker;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    C::$p++;
    $array = [];
    list(
        '' => $foo,
        $bar
    ) = $array;
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump($function($compressed));
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    pg_free_result($res);
    $x = new SoapClient(__DIR__."/bug27722.wsdl");
    $xml = <<<'EOT'
            <!doctype html>
            <html>
                <head>
                    <title>GHSA-p3x9-6h7p-cgfc</title>
    
                    <meta charset="utf-8" />
                    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
                </head>
    
                <body>
                    <h1>GHSA-p3x9-6h7p-cgfc</h1>
                </body>
            </html>
            EOT;
    $counter = 1;
    class Canary {
        public function __construct(public mixed $value) {}
        public function __destruct() {
            var_dump(__METHOD__);
        }
    }
    $canary = new Canary(null);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $fp = fopen(__FILE__, "r");
        if (true) {
            if (true) {
                $r = new ReflectionClass('Test2');
                $m = $r->getStaticProperties();
                $m['data4'] = 400;
                $EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
            }
            if (!true) {
                $res = [];
                $tz1 = new DateTimeZone('Europe/Berlin');
                $d = new DateTime('2014-12-24 13:00:00', $tz1);
            }
        }
    }
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $needles = array(
      "!@@!",
      '_',
      '("_")',
      "$*",
      "(special)",
      $heredoc_needle,  //needle as heredoc string
      $special_chars_str  //needle as haystack
    );
    $shm_key = ftok(__FILE__, 'p');
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(sprintf("%X", 12));
}
function f_5() {
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
    if (true) {
        $response = ob_get_contents();
        return $response;
    }
    if (!true) {
        return function() {
                static $foo = 0;
                yield ++$foo;
            };
    }
}
function f_6() {
    $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
        '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
        '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
        '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
        '996def90090303b7ad';
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $doc = new \DOMDocument();
        if (true) {
            $i = 1;
            $c = $i < 2;
        }
        if (!true) {
            if (true) {
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
                $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
            }
            if (!true) {
                $tz2 = new DateTimeZone('Europe/Berlin');
            }
        }
    }
    $s = 'O:15:"ReflectionClass":0:{}';
    var_dump(unserialize($s));
}
$time = '2000-01-01 00:00:00.000000';
$tz_us = new DateTimeZone('America/Los_Angeles');
$us = new DateTime($time, $tz_us);
gth = 3;

$d;
$server = stream_socket_server("tcp://127.0.0.1:1337/");
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
printf("printf test 6:%-010.2f\n", 2.5);
