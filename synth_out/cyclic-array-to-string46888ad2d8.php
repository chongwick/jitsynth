<?php
$GLOBALS['b'] = 2;
$org_b = $GLOBALS['b'];
$link = mysqli_init();
$japanese_so = pack('H4', '835c');
var_dump($link->real_escape_string($japanese_so) === $japanese_so);
var_dump(session_cache_limiter());
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
$bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
    $cdata = $ffi->new('uint16_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
function crash()
{
    $notDefined[$i] = 'test';
}
crash();
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
printf("printf test 20:%16X\n", 170);
$haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
$needle = array(
  //regular strings
  'l',
  'L',
  'HELLO',
  'hEllo',

  //escape characters
  '\t',
  '\T',
  '     ',
  '\n',
  '\N',
  '
',  //new line

  //nulls
  '\0',

  //boolean false
  FALSE,
  false,

  //empty string
  '',

  //special chars
  ' ',
  '$',
  ' $',
  '&',
  '!#',
  '%\o',
  '\o,',
  '()',
  '*+',
  '+',
  '-',
  '.',
  '.;',
  ':;',
  ';',
  '<=>',
  '>',
  '=>',
  '?',
  '@',
  '@hEllo',

  '12345', //decimal numeric string
  '\x23',  //hexadecimal numeric string
  '#',  //hexadecimal numeric string
  '\101',  //octal numeric string
  'A',
  '456HEE',  //numerics + chars
  42, //needle as int(ASCII value of '*')
  $haystack  //haystack as needle
);
for($index=0; $index<count($needle); $index++) {
  echo "\n-- Iteration $count --\n";
  var_dump( strrchr($haystack, $needle[$index]) );
  $count ++;
}
var_dump( strrchr($haystack, $needle[$index]) );
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
var_dump($arg);
var_dump( range(1.0, 7.0, 0.0) );
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
$list = new MyObjectStorage();
$list->attach(new TestObject());
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
$fiber->start();
printf("printf test 29:%2\$-2d %1\$2d\n", 1, 2);
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
}
t1();
class Box {
    public ?Test $value;
}
global $box;
function test($box) {
    var_dump($box->value = new Test);
}
$box = new Box();
test($box);
$container = false;
$fp = fopen(__DIR__."/test2.csv", "r");
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 401));
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
var_dump(strncmp("test ", "e", 10));
$a = simplexml_load_string("<a><b><c/></b></a>");
$a=glob("./*.jpeg");
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
display($pdo->query("select * from t2")->fetchAll());
$host = "localhost\0.example.com";
var_dump(gethostbyname($host));
#[\Deprecated(1234)]
function test() {
}
test();
