<?php
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
var_dump(http_get_last_response_headers());
$text = 'This is an ‘example’ of using DOM splitText';
$st
rt = 30;
$le
gth = 3;

$d
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($text);
$do
ched = $node->splitText($start);
$ma
ched->splitText($length);
pri;
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
var_dump($res);
$fp = fopen (__FILE__, "r");
fclose($fp);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
    php_cli_server_start($code, null, $args);
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    est0.txt");
    unlink("$d1\\;
    $xml = '<?xml version="1.0" encoding="utf-8" ?>
    <test>
    </test>';
    $root = simplexml_load_string($xml);
    $root->__construct("malformed");
    var_dump((new Exception)->getTrace());
}
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
$func_argvs = [
    [ 'bug_gh9090_void_none',         [ ]                           ],
    [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
    [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
];
foreach ($func_ptrs as $func_ptr) {
    foreach ($func_argvs as $func_argv) {
        [ $func, $argv ] = $func_argv;

        $ok = true;
        try {
            $ffi->$func_ptr = $ffi->$func;
            call_user_func_array($ffi->$func_ptr, $argv);
        } catch (FFI\Exception $e) {
            $ok = false;
        }

        printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    }
}
foreach ($func_argvs as $func_argv) {
        [ $func, $argv ] = $func_argv;

        $ok = true;
        try {
            $ffi->$func_ptr = $ffi->$func;
            call_user_func_array($ffi->$func_ptr, $argv);
        } catch (FFI\Exception $e) {
            $ok = false;
        }

        printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    }
[ $func, $argv ] = $func_argv;
$ok = false;
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
$re = new ReflectionExtension("hash");
var_dump($re->getConstants());
var_dump(c1::$a3);
set_time_limit(5);
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
var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
$file_handle = fopen(__FILE__, "r");
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump(@$obj->dynamic++);
    var_dump($obj);
}
printf("# %s:\n", $name);
var_dump(strncmp("test ", "e", -1));
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
var_dump($r["bug69279.txt"]->isCompressed());
public function __construct($b)
        {
            global $y;
            $y++;

            $this->foo = self::A + $b;
        }
$this->foo = self::A + $b;
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$priorityQueue = new SplPriorityQueue();
var_dump($priorityQueue->getExtractFlags());
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$list = [];
$list[] = $it->getSubPathname();
$host = curl_cli_server_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
foreach($arrays as $array) {
  echo "-- Iteration $iterator --\n";
  // with default argument
  echo "- with default argument -\n";
  var_dump( array_reverse($array) );
  // with all possible arguments
  echo "- with \$preserve keys = true -\n";
  var_dump( array_reverse($array, true) );
  echo "- with \$preserve_keys = false -\n";
  var_dump( array_reverse($array, false) );
  $iterator++;
}
var_dump( array_reverse($array) );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOfBig = 'select * from t';
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$stmt = $pdo->prepare($reqOfBig, $attrs);
var_dump(intlcal_get_error_message(null));
$host = curl_cli_server_start();
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->execute();
public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
public function callback(&$a, &$b, $c) {
        $b = 1;
    }
$b = 1;
public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
$arguments = array($a, $b, $c);
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
$tester->expectLogStartNotices();
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
var_dump(-2147483648 % -1);
$ar1 = array("row1" => 2, "row2" => 1);
var_dump($ar1);
register_shutdown_function('exploDe');
$i = 1;
$x = 2;
var_dump($i=$x);
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
test($nodes, "var_dump", fn ($n) => var_dump($n));
var_dump(json_decode('"\ud834"'));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$db = MySQLPDOTest::factory();
foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
    print_r($row);
}
print_r($row);
$db = MySQLPDOTest::factory();
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$zip = new ZipArchive();
$zip->setPassword('bar');
$code = null;
$err = null;
var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(NULL));
$rc = new ReflectionClass(B::class);
var_dump($rc->getStaticProperties());
var_dump ( rtrim("rtrim test        ", " ") );
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
class C {
    public $a;
    public int $b = 1;

    public function __construct(int $a) {
        var_dump(__METHOD__);
        $this->a = $a;
        $this->b = 2;
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
test('Proxy', $obj);
var_dump($_SESSION);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump($row['bit_column_1']);
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$tester = new FPM\Tester($cfg);
$tester->terminate();
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'aaaa');
catch (\Error $e) {
    var_dump($e);
}
var_dump($e);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
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
$create = sprintf('CREATE TABLE test(id INT, col1 %s)', $column_def);
var_dump($create);
$i = 0;
$i++;
$dom = Dom\HTMLDocument::createEmpty();
var_dump($dom->lookupNamespaceURI(NULL));
var_dump ( rtrim("rtrim test        ", " ") );
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump ( rtrim("rtrim test        ", " ") );
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$res = [];
$res[] = $stmt->fetch();
php_cli_server_start('foo bar');
$textascii = 'This is an "example" of using DOM splitText';
rt = 30;
$le
 = new DOMDocument('1.0', 'UTF-8');
$no
e = $dom->createTextNode($textascii);
$do
ched = $node->splitText($start);
$ma;
printf("printf test 32:%.17g\n", -INF);
$host = curl_cli_server_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
$reflector = new ReflectionClass(C::class);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$sh = new SessionHandler;
$sh->write("foo", "bar");
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
(stat("$d0\\test0.txt")) > 0);

unlink("$d0\;
$tests = array(
    'noon', 'midnight'
);
$lazy = true;
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
$bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
    return $val;
};
$struct = $ffi->new('struct bug_gh16013_int_struct');
var_dump(($bug_gh16013_callback_struct->return_struct)($struct));
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$fp = fopen (__FILE__, "r");
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
$a = 4;
$c = $b;
$b = 'x';
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
printf("# %s\n", $name);
$data = ["k" => 0, 1, 2, 3];
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
$cl = new bug8318;
$cl->fpassthru();
var_dump(spl_autoload_functions());
$field = mysqli_fetch_field_direct($res, 1);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
    $i = 0;
    $j = 0;
    $foo = new FooBar();
    $foo[$j++] = $i++;
    class A {
        public $a;
    }
    $b = new A();
    $b->dyn = 1;
}
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
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    class TrampolineTest {
        public function __call(string $name, array $arguments) {
            echo 'Trampoline for ', $name, PHP_EOL;
        }
    }
    $o = new TrampolineTest();
    $callback1 = [$o, 'trampoline1'];
    spl_autoload_register($callback1);
    $code = null;
    $err = null;
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, NAN);
}
$dom = new DOMImplementation();
class relay
{
   public function __get( $name )
   {
       main::$dataAccessor = new dataAccessor;
   }
}
main::$dataAccessor = new relay();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
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
    $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
        $cdata = $ffi->new('int16_t');
        $cdata->cdata = $val;
        return $cdata;
    };
    $zip = new ZipArchive();
    $output = array();
    $references = array();
    $idx = 0;
    $references[$idx++]['id_copy']	= $row['id'];
    function unserialize($data) {
            session_decode($data);
        }
    session_decode($data);
}
$array1 = array(1, 2);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    $x = 1;
    $g = 'hi';
    $twoseventy = M_PI * 1.5;
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $r2 = $r['testtable'];
    printf( "testtable: %d\n", $r2['major'] );
}
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
);
if (!$reader->open($fil
ttributeNo(1);
            echo $reade;
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
$class = new SomeClass;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
            <<<'PHP'
            function Add() {}
            $server->addFunction('Add');
            $server->handle();
            PHP;
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
    $thisdir = __DIR__;
    );
    if (!$reader->open($fil
    irstAttribute();
                echo $reade;
    function foo($ref, $alt) {
        unset($GLOBALS['a']);
        unset($GLOBALS['b']);
        $GLOBALS['a'] = 1;
        $GLOBALS['b'] = 2;
    
        $org_a = $GLOBALS['a'];
        $org_b = $GLOBALS['b'];
    
        if ($ref) {
            global $a, $b;
        } else {
            /* zval temp_var(NULL); // refcount = 1
             * a = temp_var[x] // refcount = 2
             */
            $a = NULL;
            $b = NULL;
        }
    
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        if ($alt) {
            $a = &$GLOBALS['a'];
            $b = &$GLOBALS['b'];
        } else {
            extract($GLOBALS, EXTR_REFS);
        }
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $GLOBALS['b'] = 3;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $a = 4;
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
        echo "--\n";
        $c = $b;
        var_dump($b, $GLOBALS['b'], $c);
        echo "--\n";
        $b = 'x';
        var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
        echo "--\n";
        var_dump($org_a, $org_b);
        echo "----";
        if ($ref) echo 'r';
        if ($alt) echo 'a';
        echo "\n";
    }
    foo(true, true);
}
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
$data = ["k" => 0, 1, 2, 3];
$cow_copy = $data;
$reflector = new ReflectionClass(C::class);
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    $sixty = M_PI / 3.0;
    $rc = new ReflectionClass('Foo');
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
}
$this->a[] = new B(2);
class B implements Serializable
{
    public $b;

    public function __construct($c)
    {
        $this->b = new C($c);
    }

    public function serialize()
    {
        return serialize(clone $this->b);
    }

    public function unserialize($data)
    {
        $this->b = unserialize($data);
    }
};
$thirty = M_PI / 6.0;
$notDefined[$i] = 'test';
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    $found = true;
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
    $myClass_object = new myClass();
    $tStamp = mktime (17, 17, 17, 10, 27, 2004);
    $strtotime_timestamp = strtotime ("Monday", $tStamp);
    $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    var_dump($anon->field);
}
$other = new DateTime("31-July-2008");
);
if (!$reader->open($fil
ttribute('num');
            echo $reade;
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    $now = new DateTimeImmutable();
    $simpleInterval = new DateInterval("P2D");
    $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
    $dateperiod->__unserialize([
    		'start' => $now, 'end' => $now, 'current' => $now, 'interval' => $simpleInterval,
    		'recurrences' => 2, 'include_start_date' => true, 'include_end_date' => true,
    	]);
}
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
$empty = "";
class C {
    public $a;
    public int $b = 1;

    public function __construct(int $a) {
        var_dump(__METHOD__);
        $this->a = $a;
        $this->b = 2;
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C(1);
});
for ($i_9 = 0; $i_9 < 10; $i_9++) {
    $i = 0;
    $text = 'This is an ‘example’ of using DOM splitText';
    $st;
    $html = <<<HTML
    <div id="test"><span>hi there</span></div>
    HTML;
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$dom = new DOMImplementation();
$ok = false;
$GLOBALS['b'] = 2;
$b = &$GLOBALS['b'];
$c = $b;
for ($i_10 = 0; $i_10 < 10; $i_10++) {
    global $box;
    $box->value = null;
    function test() {
        try {
            return 5;
        } finally {
            try {
                echo 1;
            } finally {
                echo 2;
            }
        }
    }
    $a = test();
    $HTTP_RAW_POST_DATA = <<<EOF
    <?xml version="1.0" encoding="ISO-8859-1"?>
    <SOAP-ENV:Envelope
      SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsd="http://www.w3.org/2001/XMLSchema"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:si="http://soapinterop.org/xsd">
      <SOAP-ENV:Body>
        <ns1:test xmlns:ns1="http://testuri.org"/>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    EOF;
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
    $style = array();
    $i = 0;
    $style[$i++] = $color;
    $db = MySQLPDOTest::factory();
    foreach ($db->query('DESCRIBE test_pecl_bug_5200 phase')->fetchAll(PDO::FETCH_ASSOC) as $row) {
        print_r($row);
    }
    print_r($row);
}
class A
{
    public string $prop;
}
$a = new A();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
for ($i_11 = 0; $i_11 < 10; $i_11++) {
    $dt = new DateTime('first day of January 2011');
    $fi = new finfo(FILEINFO_MIME_TYPE);
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump($obj->a);
        var_dump($obj);
    }
    var_dump($obj);
}
