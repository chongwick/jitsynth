<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
class Foo {
  public $bar = "bat";
}
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
$domd = new DOMDocument();
$heredoc = <<<EOT
hello world
EOT;
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
function f_0() {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $compressed = (string) bzcompress($plain);
    $compressed[strlen($compressed) - 15] = 'X';
    var_dump(json_decode('[]', false, 0x100000000));
    return true;
}
function f_1() {
    $a = date_create("2009-01-01", null);
    $obj = new C();
    var_dump($obj->a);
    $response = ob_get_contents();
    return $response;
}
$class = new SomeClass;
$arr = [$class];
var_dump(json_encode($arr));
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
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
$foo = new Foo;
$baz = (float)$foo;
var_dump($baz);
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
var_dump(strlen(file_get_contents('php://input')));
$class = new SomeClass2;
$arr = [$class];
var_dump(json_encode($arr));
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
foreach ($various_arrays as $array) {
  echo "\n-- Iteration $count --\n";

  echo "- With default sort_flag -\n";
  $temp_array = $array;
  var_dump(asort($temp_array) );
  var_dump($temp_array);

  echo "- Sort_flag = SORT_REGULAR -\n";
  $temp_array = $array;
  var_dump(asort($temp_array, SORT_REGULAR) );
  var_dump($temp_array);
  $count++;
}
$temp_array = $array;
var_dump($temp_array);
var_dump( range(7.0, 1.0, 6.5) );
$pass = "qwerty";
test($p12, $pass);
$array1 = array(1, 2);
$data_compare_func = 'compare_function';
$key_compare_func = 'compare_function';
$unset_var = 10;
$heredoc = <<<EOT
hello world
EOT;
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
foreach($inputs as $key =>$value) {
    echo "\n--$key--\n";
    try {
        var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
mysqli_close($link);
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
printf("printf test 19:%16x\n", 170);
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
$bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
    $cdata = $ffi->new('float');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
define("TEST",2);
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
$eml = __DIR__ . "/signed.eml";
$empty = "";
var_dump(openssl_pkcs7_verify($eml, 0, $empty));
$fp = tmpfile();
rewind($fp);
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
$obj = new C();
var_dump($obj);
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
var_dump($data);
$tester = new FPM\Tester($cfg);
$tester->start();
(new B)->foo();
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
spl_autoload_register();
printf("printf test 25:%-2s\n", "gazonk");
test('sensitive');
var_dump(strncasecmp("test ", "E", -1));
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
printf("[002] [%d] %s\n", $link->errno, $link->error);
openssl_pkcs12_read($p12_contents, $cert_data, $password);
printf("printf test 16:%x\n", 170);
$code = null;
$err = null;
var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
chdir(__DIR__);
spl_autoload_register(function ($name) {
    spl_autoload_unregister("spl_autoload_call");
});
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
get_basename_with_cp($d0, 65001);
$offsets = array(20, 21, 22, 53, 54);
$string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
$needle = base64_decode('44CC');
foreach($offsets as $i) {
    echo "\n-- Offset is $i --\n";
    echo "--Multibyte String:--\n";
    try {
        var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
    echo"--ASCII String:--\n";
    try {
        var_dump(mb_strpos('This is na English ta', 'a', $i));
    } catch (\ValueError $e) {
        echo $e->getMessage() . \PHP_EOL;
    }
}
var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
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
var_dump($body->lookupNamespaceURI(""));
rename("phar://a.phar/x", "phar://a.phar/y");
printf("printf test 26:%2\$d %1\$d\n", 1, 2);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
var_dump($diff->invert, $diff->s, $diff->f);
var_dump(range(1, 3, -1));
printf("printf test 23:%016X\n", 170);
$dt = new DateTime('@1604215800');
$dt->setTimezone(new DateTimeZone('America/Boise'));
var_dump(-2147483648 % -1);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_binmode($res, ODBC_BINMODE_RETURN);
$fp = tmpfile();
fwrite($fp, "I am the LOB data");
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
