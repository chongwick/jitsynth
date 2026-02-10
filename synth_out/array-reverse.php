<?php
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
$stmt->execute();
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
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
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://t[est@127.0.0.1");
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
$headers = ['Host: okey.com'];
$httpContext = [
    'http' => [
        'protocol_version'	=> '1.1',
        'method'			=> 'GET',
        'header'			=> &$headers,
        'follow_location'	=> 0,
        'max_redirects'		=> 0,
        'ignore_errors'		=> true,
        'timeout'			=> 60,
    ],
];
$context = stream_context_create($httpContext);
print_r(stream_context_get_options($context));
function f_0() {
    $before = memory_get_usage();
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
    $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
        $cdata = $ffi->new('enum bug_gh16013_enum');
        $cdata->cdata = $val;
        return $cdata;
    };
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
    ob_clean();
    $fp = fopen("php://memory", "r+");
    fwrite($fp, str_repeat("baad", 1024*1024));
}
mysqli_close($link);
function f_1() {
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $x = new stdClass();
    $list = new SplDoublyLinkedList;
    var_dump($list->serialize());
    class ParentClass { }
    class ChildClass extends ParentClass {
        public function testIsCallable() {
            var_dump(is_callable(array($this, 'parent::testIsCallable')));
        }
        public function testIsCallable2() {
            var_dump(is_callable(array($this, 'static::testIsCallable2')));
        }
    }
    $child = new ChildClass();
    $child->testIsCallable();
    var_dump(array_map(assert(...), [true, true, false]));
    function crash()
    {
        $notDefined[$i] = 'test';
    }
    crash();
}
session_start();
function f_2() {
    $now = new DateTimeImmutable('2022-10-10 08:41:54.534620', new DateTimeZone('UTC'));
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $str = 'Hello World';
        $shm_key = ftok(__FILE__, 'p');
        $shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
        $priorityQueue = new SplPriorityQueue();
        $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
        rt = 30;
        $le
        gth = 3;
        
        $d
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do
        ched = $node->splitText($start);
        $ma
        ched->splitText($length);
        pri;
        $plain = "The quick brown fox jumps over the lazy dog.";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        $compressed[strlen($compressed)-2] = 'X';
        $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
        $stmt = $mysql->prepare("SELECT id FROM temp");
        $stmt->execute();
        $array1 = array(1, 2);
        $data_compare_func = 'compare_function';
        $key_compare_func = 'compare_function';
        $unset_var = 10;
        class classWithToString
        {
            public function __toString() {
                return "Class A object";
            }
        }
        class classWithoutToString
        {
        }
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
        function f() {
            Fiber::suspend();
        }
        function g() {
            (new Fiber(function() {
                global $f;
                var_dump((new ReflectionFiber($f))->getTrace());
            }))->start();
        }
        $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
        $test = array("A\x00B" => "Hello world");
        debug_zval_dump($test);
        $im = imagecreate(800, 800);
        imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
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
        function test(string $name, object $obj) {
            printf("# %s\n", $name);
        
            $reflector = new ReflectionClass(C::class);
            try {
                $reflector->initializeLazyObject($obj);
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        
            try {
                var_dump(unserialize(serialize($obj)));
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        }
        $reflector = new ReflectionClass(C::class);
        $reflector->initializeLazyObject($obj);
    }
}
openssl_error_string();
