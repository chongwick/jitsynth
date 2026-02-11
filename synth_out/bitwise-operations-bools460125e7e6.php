<?php
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
class A {
    public $a;
}
function gen() {
    yield 0;
    yield from gen();
}
function foo() {
  var_dump("hello");
}
$db = createDB();
function f_0() {
    $fp = php_cli_server_connect();
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
    }
    printf("printf test 17:%X\n", 170);
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
    ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
    $unset_var = 10;
    $fp = fopen(__FILE__, "r");
    $heredoc = <<<EOT
    Hello world
    EOT;
    $var = 10;
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
    foreach($arrays as $array) {
      echo "-- Iteration $iterator --\n";
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var) );
    
      // dump the resulting array
      var_dump($temp_array);
    
      /* with optional arguments */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    
      // dump the resulting array
      var_dump($temp_array);
      $iterator++;
    }
    $temp_array = $array;
    var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 1);
}
function f_1() {
    if (true) {
        $x = 1.0;
    }
    $a = 'ok';
    $b = 'ok';
    $_a = $a;
    $_b = $b;
    var_dump($_a, $_b);
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
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
    debug_print_backtrace();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $obj = new C();
    var_dump($obj->a);
    $dir_handle = opendir( __DIR__ );
    closedir( $dir_handle );
}
function f_2() {
    if (true) {
        $pid = pcntl_fork();
    }
    var_dump( range('A', 'H', 0.0) );
    stream_wrapper_register('dummy', DummyWrapper::class);
    $dom = Dom\HTMLDocument::createEmpty();
    var_dump($dom->lookupNamespaceURI(""));
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElement($dom, "HTML", "1"));
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
}
function f_3() {
    if (true) {
        $xml = '<?xml version="1.0" encoding="utf-8" ?>
        <test>
        </test>';
        $root = simplexml_load_string($xml);
    }
    $a = new A();
    $b = new A();
    $prop = new ReflectionProperty($b, 'dyn');
    $prop->setRawValue($a, 1);
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function ($obj) {
        var_dump("initializer");
        return new C();
    });
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $mysqli->query('SELECT 42');
    $obj = $res->fetch_object();
    var_dump(
        $obj,
        $obj->{42}
    );
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, -10);
}
function f_4() {
    if (true) {
        $gen = gen();
    }
    if (true) {
        $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    }
    session_write_close();
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    test('Ghost', $obj);
    var_dump($obj);
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
    restore_exception_handler();
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
}
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testarray'];
printf( "testarray: %s\n", $r2[2] );
$references = array();
debug_zval_dump($references);
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
$document = new \DOMDocument();
$document->loadHTMLFile($uri);
var_dump(json_decode('{"":"value"}', true));
var_dump(spl_autoload_functions());
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
ith_cp($d1, 65001);

touch("$d0\\;
$zip = new ZipArchive();
$zip->close();
foo();
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
