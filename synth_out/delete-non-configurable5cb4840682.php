<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
class classA
{
  public function __toString() {
    return "key";
  }
}
class A
{
    public string $prop;
}
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
$conn = odbc_connect($dsn, $user, $pass);
$db = PDOTest::factory();
$res = $db->query("SELECT a FROM test36428");
$loop_counter = 1;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(pack('x') === "\0");
    $dest = __DIR__ . "/bug40228";
    $zip = new ZipArchive;
    $zip->extractTo($dest);
    printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
    $fp = fopen("php://memory", "r+");
    rewind($fp);
}
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testarray'];
printf( "testarray: %s\n", $r2[2] );
mysqli_free_result($res);
$doc = new \DOMDocument();
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $tz1 = new DateTimeZone('Europe/Berlin');
    printf("printf test 4:%.10f\n", 10.0/3);
}
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $tester = new FPM\Tester($cfg);
    $tester->expectLogTerminatingNotices();
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
    var_dump($body->lookupNamespaceURI(NULL));
    $res = [];
    display($res);
    $zip = new ZipArchive();
    $zip->close();
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    $test('sensitive');
}
catch (Error $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
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
var_dump($ffi->bug_gh16013_return_char());
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
$a = new A();
$ch = curl_init("https://localhost/username");
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( reset($array_test) );
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("a", 1);
var_dump("hello");
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
