<?php
class C {
    function __serialize(): array {
        global $list;
        $list->pop();
        return [];
    }
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
class Test{
	public $value = 11.3;

	public function TestFunc() {
		$this->value -= 10;
	}
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
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
function do_throw() { throw new Exception; }
class classA
{
  public function __toString() {
    return "key";
  }
}
function bar() {
    boo();
}
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
$im = imagecreatetruecolor(1, 1);
imagescale($im, 0, 1, 0);
$b = 'ok';
$_b = $b;
$fp = fopen('php://input', 'r+');
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
grapheme_stripos(1,1,2147483648);
$array = new ArrayObject();
var_dump($array->offsetExists('nokey'));
$db = getDbConnection();
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$utfl = __DIR__ . "/sni_server_uk.pem";
$q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
error_reporting(0);
var_dump( range(1.0, 7.0, 10.0**400) );
$oneeighty = M_PI;
$counter = 1;
$counter++;
$_ = str_repeat("A", 512);
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
pg_free_result($res);
$date = '7.8.2010';
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "CREATE TABLE $tbl (bit_column_1 bit(16) NOT NULL) DEFAULT CHARSET=utf8";
$mysqli->query($sql);
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$HTTP_RAW_POST_DATA = <<<EOF
<?xml version="1.0" encoding="ISO-8859-1"?>
<SOAP-ENV:Envelope
  SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:si="http://soapinterop.org/xsd">
  <SOAP-ENV:Body>
    <ns1:test xmlns:ns1="http://testuri.org"/>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
EOF;
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
$bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
$bug_gh16013_callback_struct->return_float = function($val) use($ffi) {
    $cdata = $ffi->new('float');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_float)(12.34));
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
$a = new Test();
var_dump($a->value);
var_dump ( rtrim("rtrim test        ", true) );
var_dump(strncasecmp("test ", "E", 0));
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
var_dump(($bug_gh16013_callback_struct->return_enum)($ffi->BUG_GH16013_B));
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
$rf = new ReflectionFunction('collator_get_sort_key');
$db = MySQLPDOTest::factory();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
mkdir($prefix);
(new B)->bar();
var_dump(soundex("Knuth")       == soundex("Kant"));
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
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$server->addfunction("test");
$i = 0;
extract(Foo::bar());
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
$A = new A();
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
var_dump( range(1.0, 7.0, fdiv(0, 0)) );
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgname      : %s\n", $field->orgname);
$im = imagecreate(800, 800);
imageline($im, 550, 750,  50, 250, IMG_COLOR_STYLED);
(new Test)->bar(do_throw());
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data2'] = 200;
$search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
$unset_var = 10;
$heredoc = <<<EOT
key
EOT;
$fp = fopen(__FILE__, "r");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  try {
      var_dump( array_key_exists($input, $search) );
  } catch (TypeError $exception) {
      echo $exception->getMessage() . "\n";
  }
  $iterator++;
}
var_dump( array_key_exists($input, $search) );
(new Test)->bar(do_throw());
$a = 'ok';
$b = 'ok';
$_a = $a;
$_b = $b;
var_dump($_a, $_b);
try {
    define('OBJECT_COUNT', 10000);
    $list = [];
    asort($list);
} catch (Exception $e) {}
if (true) {
    bar();
}
try {
    $fp = fopen('php://input', 'r+');
    var_dump(fseek($fp, -1, SEEK_SET));
    $im = imagecreate(800, 800);
    imageline($im, 200, 100, 700, 100, IMG_COLOR_STYLED);
} catch (Exception $e) {}
if (true) {
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Table        : %s\n", $field->table);
}
