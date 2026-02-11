<?php
class C extends stdClass {
    public int $a;
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class classA
{
  public function __toString() {
    return "key";
  }
}
function dumpElement() {
    list($value) = yield;
    var_dump($value);
}
function test2() {
    $x = test();
}
class A {
    public $a;
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
class Foo {
    public function __destruct() {
        debug_print_backtrace();
    }
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
class string1 {
  public function __toString() {
    return "Object";
  }
}
$res = [];
$res[] = $re;
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
$a = new PDO("sqlite::memory:");
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
$obj = new C();
$reflector = new ReflectionClass(C::class);
$a = 2;
$arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
$thirty = M_PI / 6.0;
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
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
function f_0() {
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    $rounds = [
        'disp', // Correct.
        3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
        null, // No callback. Hopefully this clears everything.
        'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
    ];
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $re = new ReflectionExtension("hash");
        if (true) {
            $index_array = array (1, 2, 3);
        }
        $counter = 1;
        $counter++;
    }
    $o = new TrampolineTest();
    $callback2 = [$o, 'trampoline2'];
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
            $fp = fopen($log_file, 'w+');
            fwrite($fp, "test");
        }
    }
    $sh = new SessionHandler;
    session_set_save_handler($sh);
    return [];
}
$ar2 = array(1, 2);
$f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$reflector = new ReflectionClass(C::class);
var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$list = [];
$list[] = $it->getSubPathname();
$key_compare_func = 'compare_function';
ob_start();
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
$zip = new ZipArchive();
$zip->open($filename);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$date1 = new DateTime("Tuesday");
$date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
var_dump($date1->format('D') == $date2->format('D'));
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
$xml = '
<data id="1">
    <key>value</key>
</data>
';
$obj = simplexml_load_string($xml);
print_r(get_object_vars($obj));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
var_dump(soundex("Gauss")       == soundex("Ghosh"));
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
$o = new SplFileInfo('.');
var_dump((bool) $o);
$var = -PHP_INT_MAX - 1;
range($var,1,$var);
$generator = dumpElement();
$output = array();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $iterator = 1;
    $iterator++;
    $output = array();
    test2();
    $invalid_files = array(
      0,
      1234,
      -2.34555,
      TRUE,
      FALSE,
      " ",
    );
    foreach( $invalid_files as $invalid_file ) {
      var_dump( is_executable($invalid_file) );
      clearstatcache();
    }
    var_dump( is_executable($invalid_file) );
    var_dump ( $vars );
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
    $ch = curl_init("https://localhost/userpwd");
    $response = curl_exec($ch);
    $c = new C();
    $b = new A();
    $b->dyn = 1;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        if (true) {
            if (true) {
                $fp = php_cli_server_connect();
                $heredoc = <<<EOT
                hello world
                EOT;
            }
            if (!true) {
                $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
                $foo = new FooBar();
            }
        }
    }
    $max = 0x66666666;
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $tag->append("foo");
}
function f_5() {
    $ninety = M_PI /2.0;
    if (true) {
        return "Class A object";
    }
    if (!true) {
        return "testObject";
    }
}
function f_6() {
    $foo = new Foo();
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $dsn = ini_get('pdo.dsn.mysql');
        if (true) {
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
        }
        if (!true) {
            if (true) {
                $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
            }
            if (!true) {
                $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
            }
        }
    }
    $filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
    $zip = new ZipArchive();
    $zip->open($filename);
}
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$canary = new Canary(null);
$iterable = f($canary);
$fiber = $iterable = $canary = null;
$obj = new string1;
$depth0 = "depth02";
$depth1 = "depth1";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(""));
