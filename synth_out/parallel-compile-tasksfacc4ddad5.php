<?php
function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
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
class FooBar implements ArrayAccess {
    private $array = array();

    public function offsetExists($index): bool {
        return isset($this->array[$index]);
    }

    public function offsetGet($index): mixed {
        return $this->array[$index];
    }

    public function offsetSet($index, $value): void {
        echo __METHOD__ . "($index, $value)\n";
        $this->array[$index] = $value;
    }

    public function offsetUnset($index): void {
        throw new Exception('FAIL');
        unset($this->array[$index]);
    }

}
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Author'][0] === '?');
var_dump(sprintf("%%%.2f", 1.23456789e10));
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$col = imagecolorat($im2, 5, 5);
$color = imagecolorsforindex($im2, $col);
function f_0() {
    return "Object";
}
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
var_dump(count(stat("$d0\\test0.txt")) > 0);
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
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
var_dump($foo);
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
mkdir($d0);
$i = 0;
$j = 0;
$foo = new FooBar();
$foo[$j++] = $i++;
$dest = __DIR__ . "/bug40228";
$GLOBALS['b'] = 2;
$org_b = $GLOBALS['b'];
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 0, 0);
date_default_timezone_set("Asia/Calcutta");
$interval = new DateInterval('P1D');
var_dump(class_exists("TestClass", true));
function f_1() {
    class C_2 {
    }
}
function f_3() {
    function f_4() {
        $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
        $arc_name = __DIR__ . "/bug40228.zip";
    }
    $a = 1;
    return [0, $a];
}
