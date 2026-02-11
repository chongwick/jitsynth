<?php
class Foo {
    public $dummy1;
    public $dummy2;
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
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
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class A {
    public $b;
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
function f_0() {
    $response = ob_get_contents();
    return $response;
}
function f_1() {
    $iterator = 1;
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
}
function f_2() {
    $ret = $y;
    $conn = odbc_connect($dsn, $user, $pass);
    $arrays = array(
      array(),
      array(NULL),
      array(null),
      array(true),
      array(""),
      array(''),
      array(array(), array()),
      array(array(1, 2), array('a', 'b')),
      array(1 => 'One'),
      array("test" => "is_array"),
      array(0),
      array(-1),
      array(10.5, 5.6),
      array("string", "test"),
      array('string', 'test')
    );
    $server = stream_socket_server("tcp://[::1]:1337/");
    $fp = fopen(__FILE__, "r");
    $subject = 'mail_bug80706';
    while (true) {
        break;  // avoid infinite loop
        $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
        $f = new Foo;
        $fp = fopen(__FILE__, "r");
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $zip = new ZipArchive;
        $gen = gen();
        $a = bar($gen);
        var_dump(foo());
        $conn = odbc_connect($dsn, $user, $pass);
        $im = imagecreate(10,10);
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct(1);
        });
        $num = 100000;
        $obj->a = 1;
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $create = 'CREATE TABLE test(id INT, ';
        foreach ($column_def as $v) {
                $create .= sprintf('%s, ', $v);
            }
        $create .= sprintf('%s, ', $v);
        $create = sprintf('%s)', substr($create, 0, -2));
        $client2 = new soapclient(NULL, [
          'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
          'uri' => 'misc-uri',
          'soap_version' => SOAP_1_2,
          'user_agent' => 'Vincent JARDIN, test headers',
          'trace' => true, /* record the headers before sending */
          'stream_context' => stream_context_create([
            'http' => [
              'header' => sprintf("MIME-Version: 1.0\r\n"),
              'content_type' => sprintf("")
            ],
          ]),
        ]);
        $client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
        $db = PDOTest::factory();
        $res = $db->query("SELECT a FROM test36428");
        $Value_object = new Value();
        $EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
        $date = new DateTime("2011-05-17T22:14:12");
        $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
        $test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
        $pkey = "-----BEGIN PRIVATE KEY-----
        MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCkmTLvUIYfqAKC
        1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt/0nbFfsFsU0/C9dXKZYD
        42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dvRTzAcnPM44GxO4y6GUW6
        un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslmSbp1XvbLsJjgV9X3ihi7
        JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1vFNAArioX5pIUIm9ahAm
        8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot8RGu89Fx6E+O5j4LwGH4
        kiYjgvYZAgMBAAECggEABO4JOGF4KOvQanB11HYNXPy4BLA5Pc0RU3M6pvKjen1m
        sdzRF5Vu/laJIkbchI0xm+Op8X7Wa+gFFBf8RLIS/QyYBCNh2Fe/74M9sYNDFxLJ
        vjBIOm6VVF1QRhMD7SwoY303adJjpkHCRMPX4z3PjLzJfPYROpsJnaWkf8GwCJ4+
        kufOhYcE8ekuLX7EzXFU74Uo0OnMEhMJgiAjlHhC21YLkgLoGq45sdktVgvD6sds
        7BcmH6oUCDCJ8wxUVM1+Ks1D3vKHfeAhCFHvj9M/lf5OWylhmQh4CQf+NMDNsAc6
        mXNIzUvZEgs/PJpd3SymHchf60m6faJtGv43GsdsgQKBgQDUx8t649O/vGRI26t4
        4XrzVC2w5271UlhFaRiH03BrV+pECVoH4bw+ZIUuGke2xe+LrNkhMNJSGcbB0WDa
        Jes+4Gf++AuSXRvMo+xHenfgUWQqYHJPkh5q6gknZ2YDfikFNLdqApXvp0m+FaVP
        +F/2HMjQfTITQgkAiEn45s4agQKBgQDGCAZkIUcdyXQTplLE0Zx1/uiTBrQGyzsb
        cDgAQIHt19wIRjoGOFatAj6TQ5gUj9Remn12v6d5Wi02i7hlu8V6O1VXLGqqeQ27
        0MHBXzrFBVljOz96D7VP5Xx0DB1cGMbtg5ivjd91OUVrwC7fbXE9sfOI1FqlTb7p
        6xi9Wl+fmQKBgGdzR/vUfqPOvVcq7gBUaAmb2KcUrj65rU753MJUy2h1EuHHRi1k
        07fl+VZD0rALJf7bp6laajcebyLWYGdPXkNwqT8ua7naaOSiogLSiSvXhoKP56PG
        H+HNLWwp+lAia2Erky0IWstsow62yWvLDyTCM+QhqlHwnh3TJVvNI1GBAoGAUl+y
        MOJ6z5Ql2aqc0UwT1i1Tlxz5s73D93Tlho1Ovp3E5Bg6OK4kt9CwMNe0IhF2GGgQ
        +l1cj6kIF6Fk8cR6r46QwDM0p3a1VMPQZNx0+NFxzkot7FsuY26lJyyG5fFUhiXw
        VE4ifoN1Mg3+MWg3657jG66hihNd77WgU9uM3TkCgYEAypuvVrfFrrtXnbEUcBHq
        mguKumn9miD9DPb6gi8ZaKOddGzw+qFPukiqi7rM3oRMg02evfK/VQC87Gmev663
        RV9sQOlB9gNlMOOw/0R3ABEWDoSRCcrLhb6Z5Y72WVnZvpTPO0cDw2i1hyaEM6d+
        2WR7c6FhRCLxG0DObEOfiO0=
        -----END PRIVATE KEY-----
        ";
        $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
        $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
        $isEmpty = $MySQL_Ext->isEmpty();
        var_dump($isEmpty);
        $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $mysqli->query('SELECT 42');
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
        php_admin_value[cgi.fix_pathinfo] = yes
        EOT;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
        $unset_var = 10;
        $heredoc = <<<EOT
        hello world
        EOT;
        $inputs = array(
        
              // int data
              'int 0' => 0,
              'int 1' => 1,
              'int 12345' => 12345,
              'int -12345' => -2345,
        
              // float data
              'float 10.5' => 10.5,
              'float -10.5' => -10.5,
              'float 12.3456789000e10' => 12.3456789000e10,
              'float -12.3456789000e10' => -12.3456789000e10,
              'float .5' => .5,
        
              // null data
              'uppercase NULL' => NULL,
              'lowercase null' => null,
        
              // boolean data
              'lowercase true' => true,
              'lowercase false' =>false,
              'uppercase TRUE' =>TRUE,
              'uppercase FALSE' =>FALSE,
        
              // empty data
              'empty string DQ' => "",
              'empty string SQ' => '',
        
              // string data
              'string DQ' => "string",
              'string SQ' => 'string',
              'mixed case string' => "sTrInG",
              'heredoc' => $heredoc,
        
              // object data
              'instance of classWithToString' => new classWithToString(),
              'instance of classWithoutToString' => new classWithoutToString(),
        
              // undefined data
              'undefined var' => @$undefined_var,
        
              // unset data
              'unset var' => @$unset_var,
        );
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
        $loop_counter = 1;
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
        $col = imagecolorat($im2, 5, 5);
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        foreach ([false, true] as $emulate) {
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
        
            try {
                $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
                $stmt->execute();
            } catch (PDOException $e) {
                var_dump('ERR');
            }
        
            $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
            $stmt->execute();
        
            var_dump($stmt->fetch());
        }
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
        $a = &$value->a;
        $max = 0x66666666;
        $fp = php_cli_server_connect();
        $o = new TrampolineTest();
        $dom = new DOMImplementation();
        $type = $dom->createDocumentType('html');
        $func_ptrs = [
            'bug_gh9090_void_none_ptr',
            'bug_gh9090_void_int_char_ptr',
            'bug_gh9090_void_int_char_var_ptr',
            'bug_gh9090_void_char_int_ptr',
            'bug_gh9090_int_int_char_ptr',
        ];
        $str = "repeater id='loopt' dataSrc=subject columns=2";
        preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
        $xml = simplexml_load_string($xmlString);
        $nodes = $xml->a->b;
        $count = 1;
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
        $res = [];
        $res[] = $re;
        $ch = curl_init("https://localhost/username");
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
        var_dump(($bug_gh16013_callback_struct->return_uint32)(100000));
        $filename = __DIR__ . '/bug77432.phar';
        $phar = new Phar($filename);
        $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
        $cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $r2 = $r['testarray'];
        c1::$a3[] = 1;
        $a = test();
        $a = new A;
        var_dump(serialize($a));
        $timestamp = mktime(8, 8, 8, 8, 8, 2008);
        $num = 100000;
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
        $code = <<<'PHP'
        /* Receive */
        $content = trim(file_get_contents("php://input")) . PHP_EOL;
        PHP;
        $values = ini_get_all();
        $dfp = opendir ( __DIR__ );
        $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
        <books><book num="1" idx="2">book1</book></books>';
        file_put_contents($filename, $xmlstring);
        $db = PDOTest::factory();
        $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
        $is_oci = $driver == 'oci';
        $b = 1;
        $db = PDOTest::factory();
        $res = $db->query("SELECT a FROM test36428");
        $arc_name = __DIR__ . "/bug40228.zip";
        $i = 1;
        $dom = new DOMDocument;
        $test1 = $dom->getElementById('x');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
        $f = __DIR__."/data/test.txt.gz";
        $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
        $oneeighty = M_PI;
        var_dump(sin($oneeighty));
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
                <<<'PHP'
                function Add() {}
                $server->addFunction('Add');
                $server->handle();
                PHP;
        php_cli_server_start($code, null, $args);
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("htML"));
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    }
}
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
