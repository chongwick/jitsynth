<?php
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class di extends DateInterval {
    public $unit = 1;
}
function test() {
    $dtor = new class { function __destruct() { throw new Exception; } };
    $a = 1;
    return [0, $a];
}
function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
function callback(&$a, &$b, $c) {
        $b = 1;
    }
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
class myClass
{
  var       $foo_object;
  public    $public_var;
  public    $public_var1;
  private   $private_var;
  protected $protected_var;

  function __construct ( ) {
    $this->foo_object = new foo();
    $this->public_var = 10;
    $this->public_var1 = new foo();
    $this->private_var = new foo();
    $this->protected_var = new foo();
  }
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class C {
    public private(set) string $prop1 {
        set => $value;
    }
    public private(set) string $prop2 {
        get => $this->prop2;
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function foo(int $x) {
    $a[0] = $x;
    $a[1] = 5;
    echo $a[1];
    $a->foo = 5;
    echo $a[1];
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
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class P {
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class A {
    public function __call($name, $args) {
        eval('$args = array(); var_dump(debug_backtrace());');
    }
}
function gen() { yield; }
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
class D {
    public string $prop;
}
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
function genResponses($server) {
    $uri = 'http://' . stream_socket_get_name($server, false);
    yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
    $xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
    // Missing content-type in actual response.
    yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
}
function f_0() {
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $dfp = opendir ( __DIR__ );
    $x = 1.0;
    $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
    $reflector = new ReflectionClass(C::class);
    $x = 2;
    $PHP_SELF = 1;
    $references = array();
    $idx = 0;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    $references[$idx]['row_copy'] 	= $rows[$i];
    $class = new SomeClass;
    $arr = [$class];
    $container = false;
    $I = new di('P10D');
    $I->unit = 42;
    $arr = array(
    0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
    0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
    0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
    0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
    0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
    0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
    0x2020 => array(0x86, "DAGGER"),
    0x2021 => array(0x87, "DOUBLE DAGGER"),
    0x20AC => array(0x88, "EURO SIGN"),
    0x2030 => array(0x89, "PER MILLE SIGN"),
    0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
    0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
    0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
    0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
    0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
    0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
    0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
    0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
    0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
    0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
    0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
    0x2022 => array(0x95, "BULLET"),
    0x2013 => array(0x96, "EN DASH"),
    0x2014 => array(0x97, "EM DASH"),
    //0x98	      	#UNDEFINED
    0x2122 => array(0x99, "TRADE MARK SIGN"),
    0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
    0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
    0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
    0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
    0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
    0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
    0x00A0 => array(0xA0, "NO-BREAK SPACE"),
    0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
    0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
    0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
    0x00A4 => array(0xA4, "CURRENCY SIGN"),
    0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
    0x00A6 => array(0xA6, "BROKEN BAR"),
    0x00A7 => array(0xA7, "SECTION SIGN"),
    0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
    0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
    0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
    0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
    0x00AC => array(0xAC, "NOT SIGN"),
    0x00AD => array(0xAD, "SOFT HYPHEN"),
    0x00AE => array(0xAE, "REGISTERED SIGN"),
    0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
    0x00B0 => array(0xB0, "DEGREE SIGN"),
    0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
    0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
    0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
    0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
    0x00B5 => array(0xB5, "MICRO SIGN"),
    0x00B6 => array(0xB6, "PILCROW SIGN"),
    0x00B7 => array(0xB7, "MIDDLE DOT"),
    0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
    0x2116 => array(0xB9, "NUMERO SIGN"),
    0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
    0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
    0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
    0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
    0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
    0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
    0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
    0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
    0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
    0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
    0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
    0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
    0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
    0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
    0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
    0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
    0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
    0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
    0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
    0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
    0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
    0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
    0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
    0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
    0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
    0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
    0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
    0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
    0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
    0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
    0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
    0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
    0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
    0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
    0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
    0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
    0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
    0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
    0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
    0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
    0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
    0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
    0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
    0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
    0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
    0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
    0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
    0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
    0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
    0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
    0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
    0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
    0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
    0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
    0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
    0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
    0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
    0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
    0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
    0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
    0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
    0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
    0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
    0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
    0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
    0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
    0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
    0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
    0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
    0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
    );
    foreach ($arr as $u => $v) {
        $ent = sprintf("&#x%X;", $u);
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        $d = unpack("H*", $res);
        echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);
    
        $ent = sprintf("&#x%X;", $v[0]);
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        if ($res[0] != "&" || $res[1] != "#")
            $res = unpack("H*", $res)[1];
        echo sprintf("%s => %s\n\n", $ent, $res);
    }
    $ent = sprintf("&#x%X;", $u);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
    $containers = array();
    $x = test();
    $time = '2000-01-01 00:00:00.000000';
    $tz_us = new DateTimeZone('America/Los_Angeles');
    $us = new DateTime($time, $tz_us);
    $interval = new DateInterval('P1D');
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
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dbh = @pg_connect($conn_str);
    $b = 1;
    $arguments = array($a, $b, $c);
    $text = '<p>hello world &trade;</p>';
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    $array1 = array(1, 2);
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
    $simpleInterval = new DateInterval("P2D");
    $a = 'ok';
    $_a = $a;
    $shm_key = ftok(__FILE__, 'p');
    $conn = pg_connect($conn_str);
    $table='test_68638';
    $rs = pg_query($conn, "SELECT * FROM $table");
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    $container = false;
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $strings_with_nulls = array(
                       "\0",
                       '\0',
                               "hello\0world",
                               "\0hel\0lo",
                               "hello\0",
                               "\0\0hello\tworld\0\0",
                               "\\0he\0llo\\0",
                               'hello\0\0'
                               );
    $b = new SplObjectStorage();
    $obj = unserialize('O:8:"00000000":');
    $input[] = &$input;
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = php_ini_loaded_file();
    $class = new SomeClass;
    $arr = [$class];
    $dir_handle = opendir( __DIR__ );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    foreach ($dirs as $d) {
        mkdir($prefix . $d);
    }
    foreach ($dirs as $d) {
        $now = $prefix . $d;
        var_dump(chdir($now));
        var_dump($dn = realpath("."));
        var_dump($d == get_basename_with_cp($dn, 65001, false));
    }
    $now = $prefix . $d;
    $plain = "The quick brown fox jumps over the lazy dog.";
    $ar1 = array(1, 2);
    $arr = array(
    0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
    0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
    0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
    0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
    0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
    0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
    0x2020 => array(0x86, "DAGGER"),
    0x2021 => array(0x87, "DOUBLE DAGGER"),
    0x20AC => array(0x88, "EURO SIGN"),
    0x2030 => array(0x89, "PER MILLE SIGN"),
    0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
    0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
    0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
    0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
    0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
    0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
    0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
    0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
    0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
    0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
    0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
    0x2022 => array(0x95, "BULLET"),
    0x2013 => array(0x96, "EN DASH"),
    0x2014 => array(0x97, "EM DASH"),
    //0x98	      	#UNDEFINED
    0x2122 => array(0x99, "TRADE MARK SIGN"),
    0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
    0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
    0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
    0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
    0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
    0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
    0x00A0 => array(0xA0, "NO-BREAK SPACE"),
    0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
    0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
    0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
    0x00A4 => array(0xA4, "CURRENCY SIGN"),
    0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
    0x00A6 => array(0xA6, "BROKEN BAR"),
    0x00A7 => array(0xA7, "SECTION SIGN"),
    0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
    0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
    0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
    0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
    0x00AC => array(0xAC, "NOT SIGN"),
    0x00AD => array(0xAD, "SOFT HYPHEN"),
    0x00AE => array(0xAE, "REGISTERED SIGN"),
    0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
    0x00B0 => array(0xB0, "DEGREE SIGN"),
    0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
    0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
    0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
    0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
    0x00B5 => array(0xB5, "MICRO SIGN"),
    0x00B6 => array(0xB6, "PILCROW SIGN"),
    0x00B7 => array(0xB7, "MIDDLE DOT"),
    0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
    0x2116 => array(0xB9, "NUMERO SIGN"),
    0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
    0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
    0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
    0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
    0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
    0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
    0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
    0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
    0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
    0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
    0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
    0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
    0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
    0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
    0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
    0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
    0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
    0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
    0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
    0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
    0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
    0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
    0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
    0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
    0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
    0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
    0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
    0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
    0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
    0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
    0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
    0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
    0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
    0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
    0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
    0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
    0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
    0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
    0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
    0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
    0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
    0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
    0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
    0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
    0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
    0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
    0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
    0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
    0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
    0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
    0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
    0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
    0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
    0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
    0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
    0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
    0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
    0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
    0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
    0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
    0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
    0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
    0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
    0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
    0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
    0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
    0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
    0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
    0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
    0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
    );
    foreach ($arr as $u => $v) {
        $ent = sprintf("&#x%X;", $u);
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        $d = unpack("H*", $res);
        echo sprintf("%s: %s => %s\n", $v[1], $ent, $d[1]);
    
        $ent = sprintf("&#x%X;", $v[0]);
        $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
        if ($res[0] != "&" || $res[1] != "#")
            $res = unpack("H*", $res)[1];
        echo sprintf("%s => %s\n\n", $ent, $res);
    }
    $ent = sprintf("&#x%X;", $v[0]);
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $res = unpack("H*", $res)[1];
    c1::$a3[] = 1;
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['superhero'] = 'robin';
    $batch_file_content = <<<EOT
    @echo off
    powershell -Command "Write-Output '%0%'"
    powershell -Command "Write-Output '%1%'"
    EOT;
    $s = "1234567890a";
    $pem_cert = '
    -----BEGIN CERTIFICATE-----
    MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
    UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
    ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
    L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
    VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
    DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
    6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
    MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
    NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
    Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
    KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
    MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
    HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
    XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
    l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
    +Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
    QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
    AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
    FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
    dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
    y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
    LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
    MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
    ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
    c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
    MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
    L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
    BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
    ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
    J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
    HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
    Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
    lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
    -----END CERTIFICATE-----
    ';
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $gen = bar();
    $empty = "";
    $reflection = new ReflectionClass('\DateTime');
    $mutable = $reflection->newInstanceWithoutConstructor();
    $immutable = \DateTimeImmutable::createFromInterface($mutable);
    $a = "20";
    $b = "30";
    $result = range($a, $b);
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array(&$ar1);
    $a->foo = 5;
    $res = [];
    $rc = new ReflectionClass('Foo');
    $fp = fopen (__FILE__, "r");
    $doc = new \DOMDocument();
    $wsdl = __DIR__."/bug35142.wsdl";
    $myClass_object = new myClass();
    $date = new DateTime("28-July-2008");
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $fn = function() { return static::name(); };
    $EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
    $a = "lest";
    $a[0] = "f";
    $bar = new DateTime();
    $list = new MyObjectStorage();
    $list2 = clone $list;
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $c = new C();
    $c->prop2 = 'hello world';
    $textascii = 'This is an "example" of using DOM splitText';
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    $users = MailBox::USERS;
    $to = $users[0];
    $bcc = $users[2];
    foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
        $mailBox = MailBox::login($mailAddress);
        $mail = $mailBox->getMailsBySubject($subject);
        $mailBox->logout();
    
        if ($mail->isAsExpected($from, $to, $subject, $message)) {
            echo "Found the email. {$recipient} received.\n";
        }
    
        if ($mail->getHeader('X-Mailer') === $xMailer) {
            echo "The specified x-Mailer exists.\n\n";
        }
    }
    $mailBox = MailBox::login($mailAddress);
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
    begin
            RAISE NOTICE ''11111'';
            return ''f'';
    end;
    ' LANGUAGE plpgsql;");
    $a[0] = $x;
    $array = [];
    list(
        '' => $foo,
        $bar
    ) = $array;
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $rc = new ReflectionClass('Foo');
    $foo = new Foo;
    $bar = (int)$foo;
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
    $values = ini_get_all();
    $sh = new SessionHandler;
    $attrs = [];
    $i=0;
    $before = memory_get_usage();
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
    $obj = new Test;
    A::$a = 'A new';
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago, true);
    $dir = opendir('foo://bar');
    $wrapper = stream_get_meta_data($dir)['wrapper_data'];
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $dtor = new class { function __destruct() { throw new Exception; } };
    $loop_counter = 1;
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $strtotime_timestamp = strtotime ("Monday", $tStamp);
    $oIntlDateFormatter = new IntlDateFormatter("en_GB");
    $tests = array(
        1 => array(
            '$6$saltstring',
            'Hello world!',
            '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
        ),
        2 => array(
            '$6$rounds=10000$saltstringsaltstring',
            'Hello world!',
            '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
        ),
        3 => array(
            '$6$rounds=5000$toolongsaltstring',
            'This is just a test',
            '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
        ),
        4 => array(
            '$6$rounds=1400$anotherlongsaltstring',
            'a very much longer text to encrypt.  This one even stretches over morethan one line.',
            '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
        ),
        5 => array(
            '$6$rounds=77777$short',
            'we have a short salt string but not a short password',
            '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
        ),
        6 => array(
            '$6$rounds=123456$asaltof16chars..',
            'a short string',
            '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
        ),
        7 => array(
            '$6$$bar$',
            'foo',
            '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
        ),
        8 => array(
            '$6$rounds=10$roundstoolow',
            'the number of rounds is too low',
            '*0'
        ),
        8 => array(
            '$6$rounds=1000000000$roundstoohigh',
            'the number of rounds is too high',
            '*0'
        ),
    );
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
    $list = [];
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
    $flags[8192] = 'ON_UPDATE_NOW';
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $foo = new Foo();
    $loop_counter = 1;
    $sh = new SessionHandler;
    $fn = function() { return static::name(); };
    $cfg['main'] = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    log_level = notice
    include = {{INCLUDE:CONF}}
    EOT;
    $eml = __DIR__ . "/signed.eml";
    $iterator = 1;
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOfBig = 'select * from t';
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    $stmt = $pdo->prepare($reqOfBig, $attrs);
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $object1 = new foo();
    $array_object = array();
    $array_object[0] = &$object1;
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $rc = new ReflectionClass('Foo');
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    $field = mysqli_fetch_field_direct($res, 1);
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now, true);
    $reflector = new ReflectionClass(DateTime::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $pass	= PDO_MYSQL_TEST_PASS;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $reader = XMLReader::fromUri($filename);
    $h = <<<'EOD'
    void (*bug_gh9090_void_none_ptr)();
    void (*bug_gh9090_void_int_char_ptr)(int, char *);
    void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
    void (*bug_gh9090_void_char_int_ptr)(char *, int);
    int (*bug_gh9090_int_int_char_ptr)(int, char *);
    
    void bug_gh9090_void_none();
    void bug_gh9090_void_int_char(int i, char *s);
    void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
    EOD;
    $ffi = FFI::cdef($h);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $im = ImageCreateTrueColor(10, 10);
    $color = ImageColorAllocateAlpha($im, 0, 0, 0, 1);
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $ar2 = array(1, 2);
    $a = [1,2,3];
    $i = 1;
    $k = 2 * $i;
    $a[$k] = $i;
    $res = [];
    $unset_var = 10;
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
    
           // array with unset variable
    /*10*/ array( @$unset_var => "hello"),
    
           // array with mixed keys
    /*11*/ array('hello' => 1,  "fruit" => 2.2,
                 133 => "int",
                 @$unset_var => "unset", $heredoc => "heredoc")
    );
    $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
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
    $b = 'ok';
    $_b = $b;
    $i = 0;
    $j = 0;
    $foo = new FooBar();
    $foo[$j++] = $i++;
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $Value_object = new Value();
    $i = 1;
    $k = 2 * $i;
    $ch = curl_init("https://localhost/userpwd");
    $response = curl_exec($ch);
    $i = 1;
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $b = 'x';
    $foo = new FooBar();
    $found = false;
    $wrong = "wrong";
    $conn = pg_connect($conn_str);
    $hash = password_hash(
        "php",
        PASSWORD_ARGON2I,
        ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
    );
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $found = true;
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    $t = new base();
    $sort = array(1, 5, 2, 4, 3);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $f = function () {};
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $c = new C();
    $a = 1;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = dynamic
    pm.max_children = 5
    pm.start_servers = 1
    pm.min_spare_servers = 1
    pm.max_spare_servers = 3
    EOT;
    $input[] = &$input;
    $array = [0];
    $now = new DateTimeImmutable();
    $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, "SELECT * FROM bug80147");
    $references = array();
    $idx = 0;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
    $a = new A();
    $before = memory_get_usage();
    $arr  = array("test");
    $xMailer = 'bug80706_x_mailer';
    $res = [];
    $output = array();
    $x = new stdClass();
    $fd = fopen('php://memory','w');
    $values =  array (
      //Decimal values
      0,
      1,
      12345,
      -12345,
    
      //Octal values
      02,
      010,
      030071,
      -030071,
    
      //Hexadecimal values
      0x0,
      0x1,
      0xABCD,
      -0xABCD
    );
    $inner = 'r:2;';
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = php_ini_loaded_file();
    $o = new SplFileInfo('.');
    $object = new StdClass();
    $object->a = str_repeat("a", 2);
    $array = [];
    list(
        '' => $foo,
        $bar
    ) = $array;
    $GLOBALS['a'] = "bug\n";
    $reqOfBig = 'select * from t';
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $fp = fopen (__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $depth0 = "depth02";
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $it = new RecursiveIteratorIterator($iterator);
    $gen = gen();
    $s = 'C:15:"ReflectionClass":0:{}';
    $i = 0;
    $date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
    $version = mysqli_get_server_version($link);
    $strings_with_nulls = array(
                       "\0",
                       '\0',
                               "hello\0world",
                               "\0hel\0lo",
                               "hello\0",
                               "\0\0hello\tworld\0\0",
                               "\\0he\0llo\\0",
                               'hello\0\0'
                               );
    $a = new B;
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
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $data = array_unique($data, flags: SORT_REGULAR);
    $d = new D();
    $d->prop = 'foo';
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data3'] = 300;
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
    $a = "lest";
    $pdo = MySQLPDOTest::factory();
    $var = -PHP_INT_MAX - 1;
    $halves[0] = $halves[1] = 0;
    $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
    $halves[0] = $halves[1] = 0;
    $reflector = new ReflectionClass(C::class);
    $c = new C();
    $document = new \DOMDocument();
    $strA = 'test &amp; test';
    $cfg = <<<EOT
    [global]
    error_log = {{FILE:LOG}}
    [unconfined]
    listen = {{ADDR}}
    pm = static
    pm.max_children = 1
    catch_workers_output = yes
    EOT;
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $fi = new finfo(FILEINFO_MIME_TYPE);
    $found = true;
    $foo = new Foo;
    $dir_handle = opendir( __DIR__ );
    $errcontext = '';
    $users = MailBox::USERS;
    $from = ini_get('sendmail_from');
    $bcc = $users[2];
    $xMailer = 'bug80706_x_mailer';
    $headers = "From: {$from}\r\n"
        . "Bcc: {$bcc}\r\n"
        . "X-Mailer: {$xMailer}";
    $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
        '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
        '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
        '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
        '996def90090303b7ad';
    $document = new \DOMDocument();
    $special_chars_str = <<<EOD
    Example of heredoc string contains
    $#%^*&*_("_")!#@@!$#$^^&*(special)
    chars.
    EOD;
    $heredoc_needle = <<<EOD
    ^^&*(
    EOD;
    $needles = array(
      "!@@!",
      '_',
      '("_")',
      "$*",
      "(special)",
      $heredoc_needle,  //needle as heredoc string
      $special_chars_str  //needle as haystack
    );
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
    $columns = array(
            'INT DEFAULT NULL' => 'NUM',
            'INT NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE NUM',
            'INT NOT NULL DEFAULT 1' => 'NOT_NULL NUM',
            'INT UNSIGNED DEFAULT NULL' => 'UNSIGNED NUM',
            'INT UNSIGNED NOT NULL'	=> 'NOT_NULL UNSIGNED NO_DEFAULT_VALUE NUM',
            'INT UNSIGNED NOT NULL DEFAULT 1' => 'NOT_NULL UNSIGNED NUM',
            'INT UNSIGNED ZEROFILL DEFAULT NULL' => 'UNSIGNED ZEROFILL NUM',
            'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY' => 'NOT_NULL PRI_KEY UNSIGNED AUTO_INCREMENT NUM PART_KEY',
            'CHAR(1) DEFAULT NULL'	=> '',
            'CHAR(1) NOT NULL' => 'NOT_NULL NO_DEFAULT_VALUE',
            'VARBINARY(127) DEFAULT NULL' => 'BINARY',
            'BLOB'	=> 'BLOB BINARY',
            'TINYBLOB'	=> 'BLOB BINARY',
            'MEDIUMBLOB'	=> 'BLOB BINARY',
            'LONGBLOB'	=> 'BLOB BINARY',
            'TEXT'	=> 'BLOB',
            'TINYTEXT'	=> 'BLOB',
            'MEDIUMTEXT'	=> 'BLOB',
            'LONGTEXT'	=> 'BLOB',
            'SET("one", "two")'	=> 'SET',
            'SET("one", "two") NOT NULL'	=> 'NOT_NULL SET NO_DEFAULT_VALUE',
            'SET("one", "two") NOT NULL DEFAULT "one"'	=> 'NOT_NULL SET',
            'ENUM("one", "two")'	=> 'ENUM',
            'ENUM("one", "two") NOT NULL' => 'NOT_NULL ENUM NO_DEFAULT_VALUE',
            'ENUM("one", "two") NOT NULL DEFAULT "one"' => 'NOT_NULL ENUM',
            'TINYINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'SMALLINT UNIQUE' => 'UNIQUE_KEY NUM PART_KEY',
            'MEDIUMINT UNIQUE DEFAULT 1' => 'UNIQUE_KEY NUM PART_KEY',
            'BIGINT UNSIGNED UNIQUE DEFAULT 100' => 'UNIQUE_KEY UNSIGNED NUM PART_KEY',
            'BIT' => 'UNSIGNED',
            'VARCHAR(2) NOT NULL PRIMARY KEY' => 'NOT_NULL PRI_KEY NO_DEFAULT_VALUE PART_KEY'
        );
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
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    foreach ($columns as $column_def => $expected_flags) {
            if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
                printf("[002] %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
            if (!mysqli_query($link, $create)) {
                // Server might not support it - skip
                continue;
            }
    
            if (!$res = mysqli_query($link, 'SELECT * FROM test')) {
                printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            $field = mysqli_fetch_field_direct($res, 1);
            if (!is_object($field)) {
                printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
            if ($field->name != 'col1') {
                printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
                continue;
            }
    
            /*
            TODO
            Unfortunately different server versions give you slightly different
            results.The test does not yet fully reflect all server changes/bugs etc.
            */
            switch ($column_def) {
                case 'INT UNSIGNED NOT NULL':
                case 'INT NOT NULL':
                case 'CHAR(1) NOT NULL':
                case 'SET("one", "two") NOT NULL':
                case 'ENUM("one", "two") NOT NULL':
                    $version = mysqli_get_server_version($link);
                    if ($version < 50000) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
                    }
                    break;
    
                case 'BIT':
                    $version = mysqli_get_server_version($link);
                    if (($version <= 50114 && $version > 50100) || ($version == 50200)) {
                        // TODO - check exact version!
                        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
                    }
    
                default:
                    break;
            }
    
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
            if ($unexpected_flags) {
                printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                    $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
            }
            if ($missing_flags) {
                printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $column_def, $flags_found);
                var_dump($create);
                var_dump(mysqli_get_server_version($link));
                die($missing_flags);
            }
    
            mysqli_free_result($res);
        }
    $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
    $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
    $a = "20";
    $x = 2;
    $a = new A();
    $rounds = [
        'disp', // Correct.
        3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
        null, // No callback. Hopefully this clears everything.
        'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
    ];
    $i = 1;
    $k = 2 * $i;
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    $num = 100000;
    $a = Array();
    for ($i=0; $i<$num; $i++) {
      $a[$i] = Array(1);
    }
    $a[$i] = Array(1);
    $count = 1;
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $foo = new Foo();
    $timestamp = "2005-11-08T11:22:07+03:00";
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
    $flags[8192] = 'ON_UPDATE_NOW';
    $s = "X";
    $x = new SoapClient(__DIR__."/bug27722.wsdl");
    $a = new A();
    $a->prop = new B();
    $reflector = new ReflectionClass(DateTime::class);
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    $response = ob_get_contents();
    $time = '9999-11-33';
    $reader = new XMLReader();
    $attr = $reader->moveToNextAttribute();
    $_ENV = [];
    $uri = 'http://' . stream_socket_get_name($server, false);
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $s1 = "some string";
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $obj = new C();
        var_dump($obj);
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$res = [];
$res[] = $stmt->fetch();
$user = PDO_MYSQL_TEST_USER;
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
var_dump($namespaceless->lookupNamespaceURI(""));
pcntl_wait($status);
