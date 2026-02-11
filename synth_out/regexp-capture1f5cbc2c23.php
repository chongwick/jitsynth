<?php
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
$im = imagecreate(800, 800);
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
test("str");
var_dump($br);
$dbh = @pg_connect($conn_str);
pg_close($dbh);
$a[10] = "42";
var_dump($a["010"], isset($a["010"]));
var_dump ( rtrim("rtrim test$#@", "#@$") );
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
fclose($f);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 0, 0);
ob_end_flush();
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
$bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump(($bug_gh16013_callback_struct->return_uint8)(4));
$db = PDOTest::factory();
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
$foo = new Foo;
var_dump($foo);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
var_dump( range(1, 7, 0) );
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
var_dump($dom->saveHTML($node));
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
