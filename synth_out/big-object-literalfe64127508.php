<?php
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
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
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
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
function f_0() {
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
    var_dump(asort($temp_array, SORT_REGULAR) );
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $t = $r['nonexisting'];
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $list = new SplDoublyLinkedList;
    }
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
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        if (true) {
            $iterator = 1;
        }
    }
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    $db = PDOTest::factory();
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
    $ret = $y;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $w = new Phar(__DIR__ . "/bug69279.phar.zip");
    }
    if (true) {
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
        $unset_var = 10;
        $fp = fopen(__FILE__, "r");
        $heredoc = <<<EOT
        Hello world
        EOT;
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
    }
    if (!true) {
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    }
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $r2 = $r['testtable'];
    }
    if (true) {
        var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
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
    }
    if (!true) {
        var_dump(soundex("Knuth"));
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
    }
}
$obj = new C();
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    test('y');
}
function f_6() {
    $url = ""
        . "php://filter/read="
        . urlencode("convert.iconv.ISO-8859-15/UTF-8")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("string.rot13")
        . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
        . "/resource=data://text/plain,foob%E2r";
    var_dump(urlencode(file_get_contents($url)));
    $fp = fopen("php://memory", "r+");
    fwrite($fp, str_repeat("baad", 1024*1024));
}
function f_7() {
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    try {
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
    } catch (Exception $e) {}
    if (true) {
        printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
        $db = createDB();
    }
    try {
        setlocale(LC_ALL, 'de_DE', 'de-DE');
    } catch (Exception $e) {}
    if (true) {
        undefined_function();
        $i = 1;
        $k = 2 * $i;
    }
    $i = 1;
    return $i;
}
