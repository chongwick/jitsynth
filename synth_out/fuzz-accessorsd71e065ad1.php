<?php
$bar = new DateTime();
$args = [1, &$bar];
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$db = createDB();
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
$id = $db->lastInsertId();
function f_0() {
    try {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
        $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
        
        mkdir($prefix);
        foreach ($
        mkdir($prefix . $d);
        }
        
        $old_cwd = getcwd();
        forea
        _cwd = getcwd();
        for;
    } catch (Exception $e) {}
    if (true) {
        $t = new stdClass;
        return $t;
    }
}
function f_1() {
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
    $found_flags .= $name . ' ';
    $expected_flags = trim(str_ireplace($name, '', $expected_flags));
    $unexpected_flags .= $name . ' ';
    return array($expected_flags, $unexpected_flags, $found_flags);
}
$unset_var = 10;
class test
{
  var $t = 10;
  function __toString()
  {
    return "testObject";
  }
}
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
for($index = 0; $index < count($values); $index ++)
{
  echo "-- Iteration $counter --\n";
  $val = $values[$index];

  var_dump( array_fill($start_key , $num , $val) );

  $counter++;
}
$val = $values[$index];
$textascii = 'This is an "example" of using DOM splitText';
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($textascii);
$do;
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
$iterator = 1;
$x = new stdClass();
function f_2() {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $array = new ArrayObject();
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
        $ffi = FFI::cdef($header);
        class A {
            public $a;
        }
        $b = new A();
        for ($i_4 = 0; $i_4 < 10; $i_4++) {
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
            $obj = NULL;
            for ($i_5 = 0; $i_5 < 10; $i_5++) {
                $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
                class C extends stdClass {
                    public int $a;
                }
                $reflector = new ReflectionClass(C::class);
                $obj = new C();
                $reflector->resetAsLazyProxy($obj, function () {
                    return new C();
                });
            }
            for ($i_6 = 0; $i_6 < 10; $i_6++) {
                $dom = new DOMDocument;
                $element = $dom->appendChild($dom->createElement('root'));
                try {
                    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
                    $tbl = "test";
                    $sql = "DROP TABLE IF EXISTS $tbl";
                    $mysqli->query($sql);
                } catch (Exception $e) {}
                if (true) {
                }
            }
        }
    }
}
var_dump(soundex("Gauss"));
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
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
foreach($arrays as $arr2) {
  echo "-- Iterator $iterator --\n";

  // Calling array_intersect() with default arguments
  var_dump( array_intersect($arr1, $arr2) );

  // Calling array_intersect() with more arguments.
  // additional argument passed is the same as $arr1 argument
  var_dump( array_intersect($arr1, $arr2, $arr1) );
  $iterator++;
}
var_dump( array_intersect($arr1, $arr2) );
