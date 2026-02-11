<?php
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
class Foo {
  public $bar = "bat";
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $f_base = "67647私はガラスを食べられます.mov";
        $f = __DIR__ . DIRECTOR
        _SEPARATOR . $f_base;
        
        /* Streams mb path sup
        _MIME_TYPE);
        var_dump($fi->file($f))
        
        
        ?>
        +++DONE+++;
    }
}
 ($dirs as $d) {
;
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
$bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
    $cdata = $ffi->new('int32_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
$obj = new testObject();
$obj2 = unserialize(serialize($obj));
$dest = __DIR__ . "/bug40228";
rmdir($dest);
$heredoc = <<<EOT
hello world
EOT;
$i= DateInterval::createFromDateString('2 days');
var_dump($i);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$res = [];
$res[] = $stmt->fetch();
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->before('bar', $doc->documentElement->firstChild, 'baz');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$dom = Dom\HTMLDocument::createEmpty();
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
$x[""][] = 1;
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$res = [];
$date = new DateTime("28-July-2008");
$other = new DateTime("31-July-2008");
$diff = date_diff($date, $other);
var_dump($diff);
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
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
$foo = new Foo;
$baz = (float)$foo;
printf("printf test 4:%.10f\n", 10.0/3);
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w->compressFiles(Phar::GZ);
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$create = 'CREATE TABLE test(id INT, ';
foreach ($column_def as $v) {
        $create .= sprintf('%s, ', $v);
    }
$create .= sprintf('%s, ', $v);
$create = sprintf('%s)', substr($create, 0, -2));
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
