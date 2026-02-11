<?php
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
function test() {
    byVal(C[0]);
    try {
        byRef(C[0]);
    } catch (Error $e) {
        echo $e->getMessage(), "\n";
    }
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
function f_0() {
    $file_path = __DIR__;
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
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
    printf("[008] PS and non-PS results differ, dumping data\n");
}
$rc = new ReflectionClass(B::class);
var_dump($rc->getStaticProperties());
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
pcntl_wait($status);
function f_1() {
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
    http_server_kill($pid);
    var_dump(json_decode('"\ud834"'));
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Author'][0] === '?');
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $ai->current();
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "html", "3"));
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
var_dump(__METHOD__);
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
function f_2() {
    $data_compare_func = 'compare_function';
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    mkdir($d0);
    var_dump(soundex("Euler")       == soundex("Ellery"));
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
}
test('y');
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
mysqli_free_result($res);
