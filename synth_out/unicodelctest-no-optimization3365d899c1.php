<?php
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
class C {
    public int $a;
}
class Foo {
    public $dummy1;
    public $dummy2;
}
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
$doc = new \DOMDocument();
$host = curl_cli_server_start();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $heredoc = <<<EOT
    key
    EOT;
    $a = array(1,2,3);
    $s1 = "some string";
    var_dump($a + $s1);
}
function f_1() {
    return "Class A object";
}
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, EMPTY_BLOB()) RETURNING val INTO :blob");
md5('foo');
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $r = new ReflectionClass('stdClass');
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    var_dump($client->__getLastResponse());
}
$create = 'CREATE TABLE test(id INT, ';
function f_3() {
    $timeZone = new DateTimeZone('UTC');
    $b = new B();
    $plain = "The quick brown fox jumps over the lazy dog.";
    $compressed = (string) bzcompress($plain);
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    $argv = null;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    return true;
}
function f_4() {
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
    }
    if (true) {
        $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    }
    if (true) {
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
    }
    if (true) {
        $japanese_so = pack('H4', '835c');
    }
    return 1;
}
function f_5() {
    $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
    $needle = array(
      //regular strings
      'l',
      'L',
      'HELLO',
      'hEllo',
    
      //escape characters
      '\t',
      '\T',
      '     ',
      '\n',
      '\N',
      '
    ',  //new line
    
      //nulls
      '\0',
    
      //boolean false
      FALSE,
      false,
    
      //empty string
      '',
    
      //special chars
      ' ',
      '$',
      ' $',
      '&',
      '!#',
      '%\o',
      '\o,',
      '()',
      '*+',
      '+',
      '-',
      '.',
      '.;',
      ':;',
      ';',
      '<=>',
      '>',
      '=>',
      '?',
      '@',
      '@hEllo',
    
      '12345', //decimal numeric string
      '\x23',  //hexadecimal numeric string
      '#',  //hexadecimal numeric string
      '\101',  //octal numeric string
      'A',
      '456HEE',  //numerics + chars
      42, //needle as int(ASCII value of '*')
      $haystack  //haystack as needle
    );
    $deflator = deflate_init(ZLIB_ENCODING_RAW);
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $obj = new testObject();
        $dsn = ini_get('pdo.dsn.mysql');
        $found = ($dsn !== false);
        $timestamp = "2005-11-08T11:22:07+03:00";
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            ob_end_clean();
            $obj = new C();
        }
        $dt = new DateTime('@1604219400');
        $dt->setTimezone(new DateTimeZone('UTC'));
        $f = new Foo;
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
            if (true) {
                $heredoc = <<<EOT
                hello world
                EOT;
            }
            $file_handle = fopen(__FILE__, "r");
            $values = array (
              /* integers */
              0,  // zero as argument
              000000123,  //octal value of 83
              123000000,
              -00000123,  //octal value of 83
              -12300000,
              0xffffff,  //hexadecimal value
              123456789,
              1,
              -1,
            
              /* floats */
              -0.0,
              +0.0,
              1.234,
              -1.234,
              -2.000000,
              2.0000000,
              -4.0001e+5,
              4.0001E+5,
              6.99999989,
              -.5,
              .567,
              -.6700000e-3,
              -.6700000E+3,
              1E-5,
              -1e+5,
              1e+5,
              1E-5,
            
              /* strings */
              "",
              '',
              " ",
              ' ',
              "0",
              "\0",
              '\0',
              "\t",
              '\t',
              "PHP",
              'PHP',
              "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
            
              /* boolean */
              TRUE,
              FALSE,
              true,
              false,
            
              /* arrays */
              array(),
              array(NULL),
              array(true),
              array(""),
              array(''),
              array(array(1, 2), array('a', 'b')),
              array("test" => "is_array", 1 => 'One'),
              array(0),
              array(-1),
              array(10.5, 5.6),
              array("string", "test"),
              array('string', 'test'),
            
              /* resources */
              $file_handle
            );
            if (true) {
                $style = array();
                $i = 0;
                $style[$i++] = IMG_COLOR_TRANSPARENT;
            }
        }
        $foo = new Foo;
        $reflector = new ReflectionClass(C::class);
        $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
        $fmt2 = clone $fmt;
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            define("FOO", "okey");
            $obj = new testObject();
            $obj->setTest('test');
            $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
            $phar = new Phar($fname);
            var_dump($phar->getStub());
        }
    }
}
function f_10() {
    $style = array();
    $i = 0;
    $style[$i++] = $color;
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
    var_dump($ffi->bug_gh16013_return_short());
}
function f_11() {
    return true;
}
function f_12() {
    return "Object";
}
