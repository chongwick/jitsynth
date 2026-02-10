<?php
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
$class = new SomeClass2;
$arr = [$class];
var_dump(json_encode($arr));
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
call_user_func('bar','second try');
define("FOO", "okey");
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
var_dump($im);
public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
var_dump($foo);
$obj = unserialize('O:8:"00000000":');
var_dump($obj);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$interval = new DateInterval('P1D');
$dt = new DateTime('first day of January 2011');
$dt->add($interval);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
var_dump($c);
printf("Content-Type OK" . PHP_EOL);
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
function foo(Closure $c = Foo::myMethod(...)) {
    var_dump($c);
    $c("abc");  
}
var_dump($c);
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
fseek($bz, 0, SEEK_CUR);
var_dump(soundex("Knuth"));
mysqli_free_result($res);
stream_wrapper_register('dummy', DummyWrapper::class);
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
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
$file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
$im1 = imagecreatetruec
=> imagecreatefromgd2part($file, 0,0, -25, 10),
    fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
);

unlink($file);
?>;
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
$loop_counter = 1;
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
boo();
function boo(){
    debug_print_backtrace();
};
$ar1 = array("row1" => 2, "row2" => 1);
var_dump(array_multisort($ar1));
printf("printf test 24:%.5s\n", "abcdefghij");
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
$bytes = str_repeat("*", 65536);
$lazy = true;
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
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
$headers = $client->__getLastRequestHeaders();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
gc_collect_cycles();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 401));
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
var_dump($ffi->bug_gh16013_return_enum());
function f_0() {
    return true;
}
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
class foo
{
// no members
}
$fp = fopen (__FILE__, "r");
$dfp = opendir ( __DIR__ );
$unset_object = new foo();
$not_objects = array (
  0,
  -1,
  0.1,
  -10.0000000000000000005,
  10.5e+5,
  0xFF,
  0123,
  $fp,  // resource
  $dfp,
  array(),
  array("string"),
  "0",
  "1",
  "",
  true,
  NULL,
  null,
  @$unset_object, // unset object
  @$undefined_var, // undefined variable
);
foreach ($not_objects as $type ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_object($type) );
}
var_dump( is_object($type) );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
$fp = fopen(__FILE__, "r");
fclose($fp);
