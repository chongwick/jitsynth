<?php
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
abstract class abstractClass
{
  abstract protected function getClassName();
  public function printClassName () {
    echo $this->getClassName() . "\n";
  }
}
class concreteClass extends abstractClass
{
  protected function getClassName() {
    return "concreteClass";
  }
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
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
class A {
    public function __call($name, $args) {
        for ($i = 0; $i < 5; $i++) {
            yield $i;
        }
    }
}
class di extends DateInterval {
    public $unit = 1;
}
class A1 {
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
}
class B1 extends A1 {
	public function test(){	parent::test();	}
}
function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
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
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
class B extends A {
    static function name() { return 'B'; }
}
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
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
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
class overloaded
{
  private $values;
  function __construct()
  {
    $this->values = array('a' => 0);
  }
  function __set($name, $value)
  {
    print "set $name = $value ($name was ".$this->values[$name].")\n";
    $this->values[$name] = $value;
  }
  function __get($name)
  {
    print "get $name (returns ".$this->values[$name].")\n";
    return $this->values[$name];
  }
}
class Box {
    public ?Test $value;
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
function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
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
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
$needle = base64_decode('44CC');
function f_0() {
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $data_comp_func = 'compare_function';
    $magic_file = __DIR__ . '/bug79283.db';
    $loop_counter = 1;
    $strA = 'test &amp; test';
    $myClass_object = new myClass();
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    $conn = odbc_connect($dsn, $user, $pass);
    $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
    $varchar_col = odbc_result($res, "VARCHAR_COL");
    $field = mysqli_fetch_field_direct($res, 1);
    $bytes = str_repeat("*", 65536);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $concreteClass_object = new concreteClass();
    if (true) {
        $lazy = true;
        $mem = $lazy ? 0 : 1;
        $dom = Dom\HTMLDocument::createEmpty();
        $dom = new DOMDocument;
        $tag = $dom->appendChild($dom->createElement("style"));
        $html = simplexml_import_dom($tag);
        $err = null;
        $dt = new DateTime('first day of January 2011');
        $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
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
        $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
        <books></books>';
        $tStamp = mktime (17, 17, 17, 10, 27, 2004);
        $strtotime_timestamp = strtotime ("Monday", $tStamp);
        $str = <<<EOD
        us
        ing heredoc string
        EOD;
    }
    if (!true) {
        define("FOO", "okey");
        $reflector = new ReflectionClass(C::class);
        $various_arrays = array (
          array(5 => 55,  66, 22, 33, 11),
          array ("a" => "orange",  "banana", "c" => "apple"),
          array(1, 2, 3, 4, 5, 6),
          array("first", 5 => "second", "third"),
          array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
          array('bar' => 'baz', "foo" => 1),
          array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
        );
        $class = new SomeClass;
        $arr = [$class];
        $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
        $isEmpty = $MySQL_Ext->isEmpty();
        $file_path = __DIR__;
        $reflector = new ReflectionClass(C::class);
        $ret = $y;
        $date = new DateTimeImmutable('2022-10-09 02:41:54.515330', new DateTimeZone('America/Los_Angeles'));
        $response = array(
            'a' => 'b'
        );
        $i = 1;
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
        if (true) {
            $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
            $args[] = php_ini_loaded_file();
            $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
            unlink($tmpFileOut2);
            $db = PDOTest::factory();
            $db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
            $str = 'Hello World';
            $shm_key = ftok(__FILE__, 'p');
            $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
            shmop_delete($shm_id1);
            $a = new A();
            $I = new di('P10D');
            $test1 = new B1;
            $test1->test();
            mt_srand(1234567890);
        }
        $x = (object)['y' => 'foobar'];
        if (true) {
            $file_handle = fopen(__FILE__, "r");
            if (true) {
                $depth0 = "depth02";
                $depth1 = "depth1";
                $depth2 = "depth2";
                $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
                mkdir($targetDir, 0777, true);
            }
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
            $elem->ThrowException();
            $fd = fopen('php://memory','w');
            fwrite($fd, "foo");
            var_dump(array_map(assert(...), [true, true, false]));
            $arr = array(
                range(1, 5),
                range(1, 5),
                range(1, 5),
                range(1, 5),
                range(1, 5),
            );
            $ch = curl_init();
            $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
            curl_setopt($ch, CURLOPT_FILE, $fp);
            $o = new TrampolineTest();
            $callback1 = [$o, 'trampoline1'];
            var_dump(spl_autoload_unregister($callback1));
            $conn = pg_connect($conn_str);
            $table='test_68638';
            $rs = pg_query($conn, "SELECT * FROM $table");
            $ao = new ArrayObject(new C);
            $ai = $ao->getIterator();
            showFirstTwoItems($ai);
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
            printf("[002] %s [%d] %s\n", $column_def,
                            mysqli_errno($link), mysqli_error($link));
            set_include_path(__DIR__.'/bug39542:.');
            $bytes = str_repeat("*", 65536);
            $hash = password_hash(
                "php",
                PASSWORD_ARGON2I,
                ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
            );
            var_dump(substr($hash, -1, 1) !== "\0");
            $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
            $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
            var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
            $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
            $cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
            session_set_save_handler(new \SessionHandler(), true);
            $pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
            $filename = "bug51997.bz2";
            $bz = bzopen($filename, "w");
            bzclose($bz);
            $fn = function() { return static::name(); };
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
            $reflector = new ReflectionClass(C::class);
            var_dump(mhash(133, 1086849124, 133));
        }
        $res = [];
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
        printf("# %s\n", $name);
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
        $x = 'abc';
        printf("printf test 1:%s\n", "simple string");
        printf("printf test 22:%016x\n", 170);
        var_dump ( rtrim("rtrim test   \t\0 ") );
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
        var_dump($value);
        $var = -PHP_INT_MAX - 1;
        range($var,1,$var);
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
        $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
            $cdata = $ffi->new('int32_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
        (new B)->foo();
        var_dump(http_get_last_response_headers());
        $dsn = ini_get('pdo.dsn.mysql');
        $found = ($dsn !== false);
        set_exception_handler(null);
        global $box;
        $box->value = null;
        var_dump($box->value = new Test);
        $str = <<<EOD
        us
        ing heredoc string
        EOD;
        var_dump( rtrim($str, "ing") );
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
        $replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
        for($index = 0; $index < count($str_arr); $index++) {
          echo "-- Iteration $count --\n";
        
          $str = $str_arr[$index];  //getting the array element in 'str' variable
        
          //strtr() call in three args syntax form
          var_dump( strtr($str, $from, $to) );
        
          //strtr() call in two args syntax form
          var_dump( strtr($str, $replace_pairs) );
        
          $count++;
        }
        $str = $str_arr[$index];
        var_dump( strtr($str, $replace_pairs) );
        $im = imagecreate(800, 800);
        imagecolorallocate($im, 255, 255, 255);
        $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                             array(), "php", "");
        foreach( $search_arr as $value ) {
          echo "\n-- Iteration $i --\n";
          /* replace the string in array */
          var_dump( str_replace($value, "FOUND", $search_arr, $count) );
          var_dump( $count );
          $i++;
        }
        var_dump( str_replace($value, "FOUND", $search_arr, $count) );
        $db = getDbConnection();
        var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
        $fiber = new Fiber(function (): void {
            $self = Fiber::getCurrent();
            $self->resume();
        });
        var_dump(substr_count("", "a", 0, 0));
        $db = PDOTest::factory();
        $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
        $r = new ResourceBundle( 'en_US', BUNDLE );
        $offset = 'teststring';
        $ref = &$offset;
        var_dump($r[$ref]);
        $dsn = ini_get('pdo.dsn.mysql');
        var_dump( range(1, 7, 10.0**400) );
        $link = mysqli_init();
        $japanese_so = pack('H4', '835c');
        var_dump($link->real_escape_string($japanese_so) === $japanese_so);
        $empty_string = <<<EOT
        EOT;
        $blank_line = <<<EOT
        
        EOT;
        $multiline_string = <<<EOT
        <html>Roy&#039;s height &gt; Sam&#039;s height
        13 &lt; 25
        1111 &amp; 0000 = 0000
        &quot;This is a double quoted string&quot;
        EOT;
        $diff_whitespaces = <<<EOT
        <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
        1111\t\t &amp; 0000\v\v = \f0000
        &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
        EOT;
        $numeric_string = <<<EOT
        <html>11 &lt; 12. 123 string 4567
        &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
        EOT;
        $quote_char_string = <<<EOT
        <html>&lt; This's a string with quotes:
        "strings in double quote" &amp;
        'strings in single quote' &quot;
        this\line is &#039;single quoted&#039; /with\slashes </html>
        EOT;
        $res_heredoc_strings = array(
          //heredoc strings
          $empty_string,
          $blank_line,
          $multiline_string,
          $diff_whitespaces,
          $numeric_string,
          $quote_char_string
        );
        for($index =0; $index < count($res_heredoc_strings); $index ++) {
          echo "-- Iteration $count --\n";
          var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
          $count++;
        }
        var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
        does_not_work();
        $wsdl = __DIR__."/bug35142.wsdl";
        $fp = fopen('php://input', 'r+');
        var_dump("DB::__construct() called");
        catch (\Error $e) {
            var_dump($e);
        }
        var_dump($e);
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        var_dump($phar->getStub());
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        var_dump($oIntlDateFormatter->parse('America/Los_Angeles', $offset1));
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
        $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
            $cdata = $ffi->new('int32_t');
            $cdata->cdata = $val;
            return $cdata;
        };
        var_dump(($bug_gh16013_callback_struct->return_int32)(-100000));
        $style = array();
        imagesetstyle($im, $style);
        $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
        fclose($fp);
        test([0], [1], 2);
        zerofill(3, $link, 'SMALLINT');
        php_cli_server_start(<<<'SCRIPT'
            ini_set('display_errors', 0);
            switch($_SERVER["REQUEST_URI"]) {
                    case "/parse":
                            try {
                                eval("this is a parse error");
                            } catch (ParseError $e) {
                            }
                            echo "OK\n";
                            break;
                    case "/fatal":
                            eval("foo();");
                            echo "OK\n";
                            break;
                    case "/compile":
                            eval("class foo { final private final function bar() {} }");
                            echo "OK\n";
                            break;
                    case "/fatal2":
                            foo();
                            echo "OK\n";
                            break;
                    default:
                            return false;
            }
        SCRIPT
        );
        printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
        var_dump(range('a', 'c', -1));
        $html = <<<HTML
        <div id="test"><span>hi there</span></div>
        HTML;
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->loadHTML($html);
        if (true) {
            $dom = new DOMImplementation();
            $type = $dom->createDocumentType('html');
            ini_set("soap.wsdl_cache_enabled",0);
            $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
            fclose($fp);
            $code = null;
            $err = null;
            pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
            set_error_handler(function() {
                (y);
            });
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $reqOfBig = 'select * from t';
            $attrs = [ PDO::ATTR_PREFETCH => 0 ];
            $stmt = $pdo->prepare($reqOfBig, $attrs);
            $mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
            $array = [0];
            $ar = array_values($array);
            $ar[] = 1;
            $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
            $im = ImageCreateTrueColor(10, 10);
            imagepng($im, $dest);
            $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
            $xml = simplexml_load_string($xmlString);
            $nodes = $xml->a->b;
            test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
        }
    }
}
$total = 10000;
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $unset_var = 10;
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $time = '9999-11-33';
    var_dump($x);
    $pdo = MySQLPDOTest::factory();
    $pdo->query('CREATE TABLE bug79596 (broken FLOAT(2,1))');
    $conn = pg_connect($conn_str);
    $table='test_68638';
    pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $now->diff($ago);
    var_dump($diff->invert, $diff->s, $diff->f);
    clearstatcache();
    $ar1 = array("row1" => 2, "row2" => 1);
}
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $test = new overloaded();
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $x = new stdClass();
    global $box;
    $box = new Box();
    test($box);
    $db = getDbConnection();
    $sql = '
        SET NOCOUNT ON
        SELECT 0 AS [result]
    ';
    $stmt = $db->query($sql);
    $stmt->closeCursor();
    $array1 = array(1, 2);
    $data_compare_func = 'compare_function';
    $key_compare_func = 'compare_function';
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
    foreach($inputs as $key =>$value) {
        echo "\n--$key--\n";
        try {
            var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
        } catch (TypeError $e) {
            echo $e->getMessage(), "\n";
        }
    }
    var_dump( array_uintersect_uassoc($array1, $value, $data_compare_func, $key_compare_func) );
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
}
$fi = new finfo(FILEINFO_MIME_TYPE);
$ok = false;
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump($foo);
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$stmt->execute();
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
test('sensitive');
$dom = new DOMImplementation();
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
$start_key = 0;
$num = 2;
$unset_var = 10;
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
var_dump( array_fill($start_key , $num , $val) );
$fd = fopen('php://memory','w');
fwrite($fd, "foo");
var_dump(-9_223_372_036_860_776_000 % -1);
$reflector = new ReflectionClass(C::class);
ini_set("soap.wsdl_cache_enabled",0);
test(1);
$data = [
    "name" => ["family" => AF_INET6, "addr" => "::1"],
    "buffer_size" => 2000,
    "controllen" => socket_cmsg_space(IPPROTO_IPV6, IPV6_PKTINFO) +
            socket_cmsg_space(IPPROTO_IPV6, IPV6_TCLASS),
];
print_r($data);
printf("printf test 10: 123456789012345\n");
sprintf('%$s, %2$s %1$s', "a", "b");
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
$field = mysqli_fetch_field_direct($res, 1);
$expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
$expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags, $flags);
printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books></books>';
file_put_contents($filename, $xmlstring);
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
var_dump($ffi->bug_gh16013_return_bool());
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
foreach( $strings_with_nulls as $string )  {
  echo "\n--- Iteration $counter ---\n";
  var_dump( strtok($string, "\0") );
  for($count = 1; $count <= 5; $count++)  {
    var_dump( strtok("\0") );
  }
  $counter++;
}
var_dump( strtok($string, "\0") );
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca)));
$ar1 = array("row1" => 2, "row2" => 1);
var_dump(array_multisort($ar1));
$f = __DIR__."/data/test.txt.gz";
date_default_timezone_set('UTC');
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
error_reporting(E_ALL);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Name         : %s\n", $field->name);
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d1 = $prefix . "フォルダ";
mkdir($d1);
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$x = 1;
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI("a"));
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
var_dump($body->lookupNamespaceURI(""));
ini_set('session.serialize_handler', 'php_serialize');
ob_end_flush();
var_dump( range(1.0, 7.0, 6.5) );
printf("printf test 16:%x\n", 170);
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
$a = new Test();
var_dump($a->value);
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
$ok = false;
var_dump($obj);
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
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
$canary = new Canary(null);
$iterable = f($canary);
$iterable->current();
ini_set("soap.wsdl_cache_enabled",0);
var_dump ( rtrim("rtrim test        ", " ") );
