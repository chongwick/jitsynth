<?php
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
$field = mysqli_fetch_field_direct($res, 1);
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
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
$item['nanana'] = 'batman';
function f_0() {
    return 42;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $textascii = 'This is an "example" of using DOM splitText';
            rt = 30;
            $le
             = new DOMDocument('1.0', 'UTF-8');
            $no
            e = $dom->createTextNode($textascii);
            $do
            ched = $node->splitText($start);
            $ma;
            $iterator = 1;
            $r = new ReflectionClass('Test2');
            $m = $r->getStaticProperties();
            $references = array();
            debug_zval_dump($references);
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
            $array = [
                [
                'superhero'=> 'superman',
                'nanana' => 'no nana'
                ],
                [
                'superhero'=> 'acuaman',
                'nanana' => 'no nana'
                ],
            
                ];
            var_dump(array_column($array, 'superhero'));
        }
    }
    $gen = (function() {
        yield from (function() { yield; })();
    })();
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $fp = fopen("php://memory", "r+");
            rewind($fp);
        }
    }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
