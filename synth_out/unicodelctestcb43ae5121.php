<?php
function checkFlags($reported_flags, $expected_flags, $flags) {
        $found_flags = $unexpected_flags = '';
        foreach ($flags as $code => $name) {
            if ($reported_flags >= $code) {
                $reported_flags -= $code;
                $found_flags .= $name . ' ';
                if (stristr($expected_flags, $name)) {
                    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                } else {
                    $unexpected_flags .= $name . ' ';
                }
            }
        }

        return array($expected_flags, $unexpected_flags, $found_flags);
    }
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class A
{
    public $a = array();

    public function __construct()
    {
        $this->a[] = new B(1);
        $this->a[] = new B(2);
    }
}
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
}
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
$flags = array(
        MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
        MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
        MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
        MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
        MYSQLI_BLOB_FLAG => 'BLOB',
        MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
        MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
        MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
        MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
        MYSQLI_SET_FLAG	=> 'SET',
        MYSQLI_NUM_FLAG => 'NUM',
        MYSQLI_PART_KEY_FLAG => 'PART_KEY',
        // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
        (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
        (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
        (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
        // MYSQLI_BINCMP_FLAG
    );
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
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
$struct = $ffi->new('struct bug_gh16013_int_struct');
$struct->field = 10;
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $host = PHP_CLI_SERVER_HOSTNAME;
    $request = <<<REQUEST
    GET / HTTP/1.1
    Host: $host
    
    
    REQUEST;
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
}
function f_1() {
    $instance = new Foo();
    return $instance->bar;
}
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(NULL));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $sixty = M_PI / 3.0;
    printf("printf test 17:%X\n", 170);
}
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
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
function f_3() {
    $file_handle = fopen(__FILE__, "r");
    $b = NULL;
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
    $a = 'ok';
    return $a;
}
function f_4() {
    $im = ImageCreateTrueColor(10, 10);
    if (true) {
        $obj = new C();
    }
    if (true) {
        $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        $datefmt2 = clone $datefmt;
    }
    if (true) {
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
    }
    if (true) {
        $dbConnection = new Com('ADODB.Connection');
    }
    return new stdClass();
}
function f_5() {
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
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
        return $val;
    };
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now);
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $b = 'ok';
        $o = new TrampolineTest();
        $callback2 = [$o, 'trampoline2'];
        $cfg['poolTemplate'] = <<<EOT
        [%name%]
        listen = {{ADDR[%name%]}}
        user = foo
        pm = ondemand
        pm.max_children = 5
        EOT;
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            $cert = "file://" . __DIR__ . "/cert.crt";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
            $zip = new ZipArchive();
        }
        foo();
        $cfg['poolTemplate'] = <<<EOT
        [%name%]
        listen = {{ADDR[%name%]}}
        user = foo
        pm = ondemand
        pm.max_children = 5
        EOT;
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
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
            if (true) {
                $iterator = 1;
            }
            $tempstring = "abcdefghjklmnpqrstuvwxyz";
            if (true) {
                $a = unserialize(serialize(new A()));
            }
        }
        $foo_object = new foo();
        );
        if (!$reader->open($fil
        ttribute('num');
                    echo $reade;
        $attr = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
            PDO::ATTR_STRINGIFY_FETCHES => true,
        ];
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            $s = new SplObjectStorage();
            $s->attach($s);
            $a = new Test();
            var_dump($a->value);
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
            var_dump($temp_array);
        }
    }
}
function f_10() {
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $foo->inv_mocker = $InvMocker;
    foo();
}
function f_11() {
    return "Class A object";
}
function f_12() {
    return true;
}
