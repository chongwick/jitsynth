<?php
class C {
    public int $a;
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
class A {
    public $a;
}
function gen() {
    yield 0;
    yield from gen();
}
$length = 3;
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
var_dump($stmt->execute([1]));
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
$array = [0];
$ar = array_values($array);
$ar[] = 1;
$text = '<p>hello world &trade;</p>';
function f_0() {
    $pdo = MySQLPDOTest::factory();
    $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $a = 1;
    return $a;
}
function f_1() {
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
    return function() {
            static $foo = 0;
            yield ++$foo;
        };
}
$ar1 = array("row1" => 2, "row2" => 1);
$args = array(&$ar1);
$style = array();
$i = 0;
$style[$i++] = IMG_COLOR_TRANSPARENT;
$obj = new string1;
$class = new SomeClass2;
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$bar = new DateTime();
$cert = file_get_contents(__DIR__ . "/public.crt");
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
touch("$d1\\test1.txt");
$x = new X;
$x->prop = 1;
var_dump($x->prop);
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
$key_compare_func = 'compare_function';
$b = "30";
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
$bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
    $cdata = $ffi->new('uint32_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
global $list;
$list->pop();
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$ch = curl_init();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$db = MySQLPDOTest::factory();
foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}
print_r($row);
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
var_dump(file_get_contents($uri));
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$a = new A();
$cert = file_get_contents(__DIR__ . "/public.crt");
$priv = file_get_contents(__DIR__ . "/private.crt");
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
$ch = curl_init();
curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
$initialRequest = false;
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
$A = new A();
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
php_cli_server_start('echo $_SERVER["REQUEST_METHOD"];');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 128, 128));
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
$gen = gen();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
$t = new stdClass;
$t->prop = $t;
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
$GLOBALS['b'] = 2;
$org_a = $GLOBALS['a'];
$org_b = $GLOBALS['b'];
var_dump($org_a, $org_b);
$list = new SplDoublyLinkedList();
$list->push('o');
