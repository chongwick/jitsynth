<?php
class D {
    public string $prop;
}
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, -1));
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_any([$key => 1], static fn () => true));
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
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
var_dump($ffi->bug_gh16013_return_char());
ob_end_clean();
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("foo:HTML"));
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$d = new D();
var_dump($d);
$obj = new Test;
var_dump($obj);
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
file_put_contents($batch_file_path, $batch_file_content);
print_r($str_instead);
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$g = $param->strA."\n".$param->strB."\n";
print_r($g);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
mkdir($prefix);
test([0], [1], 2);
pcntl_sigwaitinfo($a,$a);
print_r($str_instead);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
var_dump(foo());
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
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
ob_end_clean();
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
var_dump($rm->getNumberOfRequiredParameters());
var_dump( range(7.0, 1.0, 6.5) );
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
$list = new MyObjectStorage();
$list2 = clone $list;
$eml = __DIR__ . "/signed.eml";
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElement($dom, "HTML", "1"));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
var_dump($br);
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
register_shutdown_function('timE');
function f_0() {
    $t = new stdClass;
    return $t;
}
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";
  // with default argument
  echo "- with default argument -\n";
  var_dump( array_reverse($array) );
  // with all possible arguments
  echo "- with \$preserve keys = true -\n";
  var_dump( array_reverse($array, true) );
  echo "- with \$preserve_keys = false -\n";
  var_dump( array_reverse($array, false) );
  $iterator++;
}
var_dump( array_reverse($array, false) );
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
