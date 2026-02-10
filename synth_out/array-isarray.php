<?php
ini_set('mysqlnd.fetch_data_copy', true);
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class derived extends base {
    function show() {
        echo "derived\n";
    }
    function test() {
        echo "test\n";
        $this->show();
        parent::test();
        parent::show();
    }
}
$t = new derived();
$t->test();
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
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
$struct = $ffi->new('struct bug_gh16013_int_struct');
var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
$link = mysqli_init();
$japanese_so = pack('H4', '835c');
var_dump($link->real_escape_string($japanese_so) === $japanese_so);
$list = new SplDoublyLinkedList();
$list->push('f');
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
var_dump(@$obj->dynamic++);
