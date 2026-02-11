<?php
class A {
    public $a;
}
class foo
{
  function __toString() {
    return "Object";
  }
}
function gen() { yield; }
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
class ErrorHandler {
    private $private = 'THIS IS PRIVATE'."\n";

    function __construct() {
        set_error_handler(
            function ($errno, $errstr, $errfile, $errline) {
                $this->handleError($errno, $errstr, $errfile, $errline);
            }
        );
    }

    private function handleError($errno, $errstr, $errfile, $errline, $errmodule = null) {
        echo __METHOD__. " dealing with error $errstr\n";

        // This attribute is no longer accessible in this object.  Same for other
        // objects and their private attributes once we reach in this state.
        echo $this->private;
    }
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
class B extends A
{
    private $test;
}
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
function f_0() {
    return "testObject";
}
function f_1() {
    $str = 'Hello World';
    $shm_key = ftok(__FILE__, 'p');
    $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
    $argv = null;
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
    $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
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
    foreach($arrays as $array) {
      echo "-- Iteration $iterator --\n";
    
      /* with default argument */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var) );
    
      // dump the resulting array
      var_dump($temp_array);
    
      /* with optional arguments */
      // returns element count in the resulting array after arguments are pushed to
      // beginning of the given array
      $temp_array = $array;
      var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    
      // dump the resulting array
      var_dump($temp_array);
      $iterator++;
    }
    $temp_array = $array;
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $a = "lest";
        $a[0] = "f";
        $error = error_get_last();
        $b = new A();
        $prop = new ReflectionProperty($b, 'dyn');
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        $array = [0];
        $ar = array_values($array);
        $values = ini_get_all();
        $func_ptrs = [
            'bug_gh9090_void_none_ptr',
            'bug_gh9090_void_int_char_ptr',
            'bug_gh9090_void_int_char_var_ptr',
            'bug_gh9090_void_char_int_ptr',
            'bug_gh9090_int_int_char_ptr',
        ];
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
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
        ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
        $f_base = "67647私はガラスを食べられます.mov";
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
        $gen = (function() {
            yield from (function() { yield; })();
        })();
        $fiber = new Fiber(function() use ($gen) {
            $gen->current();
        });
        $extracert = file_get_contents(__DIR__ . "/cert.crt");
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $object1 = new foo();
        $ar1 = array(1, 2);
        $unset_var = 10;
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
        $varchar_col = odbc_result($res, "VARCHAR_COL");
        $gen = gen();
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
        $db = PDOTest::factory();
        $res = $db->query("SELECT a FROM test36428");
        $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
        $OuterMatcher->methodNameMatcher = null;
        $cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
        $errorHandler = new ErrorHandler();
        $error = error_get_last();
        $reflection = new ReflectionClass('\DateTimeImmutable');
        $immutable = $reflection->newInstanceWithoutConstructor();
        $invalid_files = array(
          0,
          1234,
          -2.34555,
          TRUE,
          FALSE,
          " ",
        );
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $tmp = $stmt->getColumnMeta(0);
        $doc = new \DOMDocument();
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $create = 'CREATE TABLE test(id INT, ';
        foreach ($column_def as $v) {
                $create .= sprintf('%s, ', $v);
            }
        $create .= sprintf('%s, ', $v);
        $create = sprintf('%s)', substr($create, 0, -2));
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $create = 'CREATE TABLE test(id INT, ';
        foreach ($column_def as $v) {
                $create .= sprintf('%s, ', $v);
            }
        $create .= sprintf('%s, ', $v);
        $create = sprintf('%s)', substr($create, 0, -2));
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
        $res = [];
        $res[] = $stmt->fetch();
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
        $length = 3;
        $textascii = 'This is an "example" of using DOM splitText';
        $start = 30;
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->createTextNode($textascii);
        $matched = $node->splitText($start);
        $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
        $object = new StdClass();
        $object->a = str_repeat("a", 2);
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        $offset3 = PHP_INT_MAX * 16;
        $rounds = [
            'disp', // Correct.
            3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
            null, // No callback. Hopefully this clears everything.
            'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
        ];
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $attrs = [ PDO::ATTR_PREFETCH => 0 ];
        $reflector = new ReflectionClass(C::class);
        $notDefined[$i] = 'test';
        $time = '9999-11-33';
        $a = &$value->a;
        $b = new B;
        $filename = "bug51997.bz2";
        $bz = bzopen($filename, "w");
        $g = $param->strA."\n".$param->strB."\n";
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
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $list = new MyObjectStorage();
        $r = new Phar(__DIR__ . "/bug69279.phar.zip");
        $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $utfl = __DIR__ . "/sni_server_uk.pem";
        $index_array = array (1, 2, 3);
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
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
        $res = [];
        $gen = gen();
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        $halves[0] = $halves[1] = 0;
        $a = array(1,2,3);
        $s1 = "some string";
        $c = $a + $s1;
        $fp = fopen (__FILE__, "r");
        $reflector = new ReflectionClass(DateTime::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $obj = $reflector->newLazyProxy(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $a = 2;
        $table='test_68638';
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        $c = new C();
        $x = new SoapClient(__DIR__."/bug27722.wsdl");
        $_SERVER = [ 'test' => 'test' ];
    }
    return '';
}
function f_3() {
    return;
}
function f_4() {
    return "Class A object";
}
function f_5() {
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
function f_6() {
    return new stdClass();
}
function f_7() {
    return true;
}
function f_8() {
    $data_comp_func = 'compare_function';
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
    return "Object";
}
function f_9() {
    return ($a->priv_member < $b->priv_member) ? 1 : -1;
}
function f_10() {
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
    $iterator = 1;
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
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
    return 0;
}
function f_12() {
    $file_handle = fopen(__FILE__, "r");
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        $errorHandler = new ErrorHandler();
    }
    return "Class A object";
}
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
foreach ($tests as $iter => $t) {
    $res = crypt($t[1], $t[0]);
    if ($res != $t[2]) echo "Iteration $iter failed.
Expected: <$t[2]>
Got       <$res>\n";
}
$res = crypt($t[1], $t[0]);
for ($i_14 = 0; $i_14 < 10; $i_14++) {
    $magic_file = __DIR__ . '/bug79283.db';
    $finfo = new finfo(FILEINFO_NONE, $magic_file);
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
rmdir($d0);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
