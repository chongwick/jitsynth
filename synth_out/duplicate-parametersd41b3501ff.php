<?php
class di extends DateInterval {
    public $unit = 1;
}
class A {
    public $b;
}
class SomeClass2 implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [(array)$this];
    }
}
class test {

  private function __destruct() {
  }
}
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
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
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class C extends P {
    use T;
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
function f_0() {
    $iterator = 1;
    try {
        $I = new di('P10D');
        print_r($I);
    } catch (Exception $e) {}
    if (true) {
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
        $heredoc = <<<EOT
        key
        EOT;
    }
    if (true) {
        $a = new A;
        var_dump(serialize($a));
    }
}
$filename = __DIR__ . '/bug77432.phar';
$pass = "qwerty";
$dom = Dom\HTMLDocument::createEmpty();
function f_1() {
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
    $sxe = new SimpleXMLIterator($xml);
    $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    if (true) {
        $reflector = new ReflectionClass(C::class);
    }
    if (!true) {
        if (true) {
            $class = new SomeClass2;
        }
        if (!true) {
            spl_autoload_register(function ($name) {
            });
        }
    }
    if (true) {
        if (true) {
            $obj = new test;
        }
        if (!true) {
            if (true) {
                $a = new A();
            }
            if (!true) {
                if (true) {
                    $initialRequest = false;
                }
                if (!true) {
                    var_dump(gc_collect_cycles());
                }
            }
        }
    }
    if (!true) {
        if (true) {
            if (true) {
                range(0, pow(2.0, 100000000));
                );
                if (!$reader->open($fil
                irstAttribute();
                            echo $reade;
            }
            if (!true) {
                if (true) {
                    c1::$a2[] = 1;
                    if (true) {
                        $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
                    }
                    if (!true) {
                        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
                        $phar = new Phar($fname, 0, 'a.phar');
                    }
                }
                if (!true) {
                    if (true) {
                        $cl = new bug8318;
                    }
                    if (!true) {
                        var_dump(soundex("Knuth"));
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $a = new Test();
                if (true) {
                    $now = new DateTime('2018-11-03 11:34:20.781751');
                    $ago = new DateTime('2018-11-03 11:34:20.000000');
                    $diff = $now->diff($ago, true);
                }
                if (!true) {
                    if (true) {
                        $a = [1,2,3];
                    }
                    if (!true) {
                        if (true) {
                            $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
                            $res = $mysqli->query('SELECT 42');
                        }
                        if (!true) {
                            global $list;
                            $list->pop();
                        }
                    }
                }
                $numeric_string = <<<EOT
                <html>11 &lt; 12. 123 string 4567
                &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
                EOT;
            }
            if (!true) {
                if (true) {
                    if (true) {
                        $dom = new DOMDocument;
                    }
                    if (!true) {
                        if (true) {
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
                            $field = mysqli_fetch_field_direct($res, 1);
                            $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
                            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
                        }
                        if (!true) {
                            var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
                        }
                    }
                }
                if (!true) {
                    error_reporting(E_ALL ^ E_NOTICE);
                }
            }
        }
    }
    if (true) {
        $db = MySQLPDOTest::factory();
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    if (!true) {
        var_dump(gzfile(__DIR__."/data/test.txt.gz"));
    }
}
function f_2() {
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT));
    if (true) {
        putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
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
        foreach($values as $value) {
              echo "\n-- Iteration $iterator --\n";
              var_dump( image_type_to_mime_type($value) );
              $iterator++;
        }
        var_dump( image_type_to_mime_type($value) );
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
        var_dump(gc_collect_cycles());
        $a = new Test();
        var_dump($a->value);
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
        $field = mysqli_fetch_field_direct($res, 1);
        $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
        list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
        printf("[011] Found unexpected flags '%s' for %s, found '%s'\n",
                            $unexpected_flags, $field->name, $flags_found);
    }
}
$unset_var = 10;
$values = array(

      // int data
      0,
      1,
      12345,
      -2345,

      // float data
      10.5,
      -10.5,
      10.1234567e10,
      10.7654321E-10,
      .5,

      // array data
      array(),
      array(0),
      array(1),
      array(1, 2),
      array('color' => 'red', 'item' => 'pen'),

      // null data
      NULL,
      null,

      // boolean data
      true,
      false,
      TRUE,
      FALSE,

      // empty data
      "",
      '',

      // string data
      "string",
      'string',

      // undefined data
      $undefined_var,

      // unset data
      $unset_var,
);
foreach($values as $value) {
    echo @"\nArg value: $value (type: " . gettype($value) . ")\n";
    try {
        var_dump( get_class($value) );
    } catch (TypeError $e) {
        echo $e->getMessage(), "\n";
    }
}
var_dump( get_class($value) );
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
var_dump(__METHOD__);
var_dump(error_get_last());
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
var_dump(range('a', 'c', -1));
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 15 ]);
$a = new A();
$a->test(new C());
__();
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
set_include_path(__DIR__.'/bug39542;.');
$file_handle = fopen(__FILE__, "r");
$dir_handle = opendir( __DIR__ );
$resources = array($file_handle, $dir_handle);
var_dump( current($resources) );
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, NULL, "html", "3"));
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
ob_start();
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Proxy', $obj);
var_dump(ob_get_contents());
$unset_var = 10;
$fp = fopen(__FILE__, "r");
$heredoc = <<<EOT
Hello world
EOT;
$var = 10;
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
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
var_dump(soundex("Hilbert"));
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
var_dump(asort($temp_array, SORT_REGULAR) );
