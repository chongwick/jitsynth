<?php
function f_0() {
    try {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
        function test(#[SensitiveParameter] $sensitive)
        {
            debug_print_backtrace();
            var_dump(debug_backtrace());
            var_dump((new Exception)->getTrace());
        }
        test('sensitive');
    } catch (Exception $e) {}
    if (true) {
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        $offset3 = "offset";
        $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    }
}
$unset_var = 10;
function test($p12_contents, $password) {
    openssl_pkcs12_read($p12_contents, $cert_data, $password);
    openssl_error_string();
    var_dump(count($cert_data['extracerts']));
}
openssl_pkcs12_read($p12_contents, $cert_data, $password);
$file_handle = fopen(__FILE__, "r");
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$lazy = true;
printf("# Proxy:\n");
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, EMPTY_BLOB()) RETURNING val INTO :blob");
var_dump(error_reporting());
$reflection = new ReflectionClass('\DateTimeImmutable');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$object = new StdClass();
$fp = fopen (__FILE__, "r");
fclose($fp);
$textascii = 'This is an "example" of using DOM splitText';
$fp = fopen('php://input', 'r+');
fclose($fp);
$sixty = M_PI / 3.0;
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
var_dump($obj);
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
$xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
foreach ($rit as $child) {
    $ancestry = $child->xpath('ancestor-or-self::*');
    // Exhaust internal iterator
    foreach ($ancestry as $ancestor) {
    }
}
$ancestry = $child->xpath('ancestor-or-self::*');
$dbh = @pg_connect($conn_str);
_set_lc_messages($dbh);
$bytes = str_repeat("*", 65536);
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$containers = array();
global $containers;
$containers[spl_object_hash($this)] = $this;
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
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
function test() {
    $a = 1;
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
var_dump(test());
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
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
$date = new DateTime("2011-05-17T22:14:12");
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
