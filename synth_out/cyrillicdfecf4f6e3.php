<?php
class Box {
    public ?Test $value;
}
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
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
class A {
    public $b;
}
function test2() {
    $x = test();
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
class MethodCallbackByReference {
    public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
    public function callback(&$a, &$b, $c) {
        $b = 1;
    }
}
function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
function callback(&$a, &$b, $c) {
        $b = 1;
    }
class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
    public $inv_mocker;
    public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
}
function foo($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
class derived extends base {
    function show() {
        echo "derived\n";
    }
    function test() {
        echo "test\n";
        $this->show();
        parent::test();
        parent::show();
    }
}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
$box = new Box();
$box->value = new Test;
$b = new SplObjectStorage();
$references = array();
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
$flags[MYSQLI_ON_UPDATE_NOW] = 'ON_UPDATE_NOW';
$r = new ResourceBundle( 'en_US', BUNDLE );
$r2 = $r['testtable'];
function f_0() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $res = [];
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
        $pdo = new \PDO($dsn, null, null);
        $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
        $test_fl_escaped = escapeshellarg($test_fl);
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
        $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $errorHandler = new ErrorHandler();
        $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
        $envelopeData = file_get_contents($tmpFileOut2);
        $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
        trycatch_dump(
            fn() => imagecreatefromgd2part($file, 0,0, -25, 10),
            fn() => imagecreatefromgd2part($file, 0,0, 10, -25)
        );
        $text = '<p>hello world &trade;</p>';
        $dom = new DOMDocument('1.0', 'UTF-8');
        $node = $dom->getElementById('test');
        $node->textContent = $text;
        var_dump($node->textContent == $text);
        var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
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
        var_dump(array_column($array, 'superhero'));
        $offsets = array(20, 21, 22, 53, 54);
        foreach($offsets as $i) {
            echo "\n-- Offset is $i --\n";
            echo "--Multibyte String:--\n";
            try {
                var_dump( mb_strpos($string_mb, $needle, $i, 'UTF-8') );
            } catch (\ValueError $e) {
                echo $e->getMessage() . \PHP_EOL;
            }
            echo"--ASCII String:--\n";
            try {
                var_dump(mb_strpos('This is na English ta', 'a', $i));
            } catch (\ValueError $e) {
                echo $e->getMessage() . \PHP_EOL;
            }
        }
        var_dump(mb_strpos('This is na English ta', 'a', $i));
        $datatypes = array(
                MYSQLI_TYPE_TINY => "TINY",
                MYSQLI_TYPE_SHORT => "SHORT",
                MYSQLI_TYPE_LONG => "LONG",
                MYSQLI_TYPE_FLOAT => "FLOAT",
                MYSQLI_TYPE_DOUBLE => "DOUBLE",
                MYSQLI_TYPE_TIMESTAMP => "TIMESTAMP",
                MYSQLI_TYPE_LONGLONG => "LONGLONG",
                MYSQLI_TYPE_INT24 => "INT24",
                MYSQLI_TYPE_DATE => "DATE",
                MYSQLI_TYPE_TIME => "TIME",
                MYSQLI_TYPE_DATETIME => "DATETIME",
                MYSQLI_TYPE_YEAR => "YEAR",
                MYSQLI_TYPE_ENUM => "ENUM",
                MYSQLI_TYPE_SET	=> "SET",
                MYSQLI_TYPE_TINY_BLOB => "TINYBLOB",
                MYSQLI_TYPE_MEDIUM_BLOB => "MEDIUMBLOB",
                MYSQLI_TYPE_LONG_BLOB => "LONGBLOB",
                MYSQLI_TYPE_BLOB => "BLOB",
                MYSQLI_TYPE_VAR_STRING => "VAR_STRING",
                MYSQLI_TYPE_STRING => "STRING",
                MYSQLI_TYPE_NULL => "NULL",
                MYSQLI_TYPE_NEWDATE => "NEWDATE",
                MYSQLI_TYPE_GEOMETRY => "GEOMETRY",
            );
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Type         : %d (%s)\n", $field->type, (isset($datatypes[$field->type])) ? $datatypes[$field->type] : 'unknown');
        $interval = new DateInterval('P1D');
        $dt = new DateTime('first day of January 2011');
        $dt->add($interval);
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("htML"));
        $total = 10000;
        $halves[0] = $halves[1] = 0;
        $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
        printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
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
        var_dump($namespaceless->lookupNamespaceURI(NULL));
        $list = [];
        asort($list);
        $xml = '<?xml version="1.0" encoding="utf-8" ?>
        <test>
        </test>';
        $root = simplexml_load_string($xml);
        $root->__construct("malformed");
        if (true) {
            $zip = new ZipArchive();
            $zip->setPassword('bar');
            zerofill(5, $link, 'INT');
        }
    }
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Flags        : %d\n", $field->flags);
    }
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $dt = new DateTime('@1604219400');
    $dt->setTimezone(new DateTimeZone('UTC'));
    if (true) {
        $obj = new Test;
        var_dump($obj);
    }
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    print_r( $r['testvector'] );
    test(2);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} finally {
    		print "handle first\n";
    		return "ok";
    	}
    })();
    $inputs = array(
        '<frameset > </frameset>',
        '<html><frameset> </frameset> </html',
    );
    foreach ($inputs as $input) {
    
        $t = tidy_parse_string($input);
        $t->cleanRepair();
        var_dump(tidy_get_body($t));
    }
    $t = tidy_parse_string($input);
    $t->cleanRepair();
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
    printf("[005] Field information seems wrong, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $a = new A;
    var_dump($a);
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    printf("printf test 19:%16x\n", 170);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    test2();
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
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $ok = false;
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
    $bug_gh16013_callback_struct->return_enum = function($val) use($ffi) {
        $cdata = $ffi->new('enum bug_gh16013_enum');
        $cdata->cdata = $val;
        return $cdata;
    };
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
    $b = 1;
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $a = $b = $c = 0;
    $foo->bar($a, $b, $c);
    $dir_handle = opendir( __DIR__ );
    closedir( $dir_handle );
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    $ffi->bug79177();
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    $t = new derived();
    $t->test();
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    $foo->inv_mocker = $InvMocker;
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    $curl = curl_init("http://www.google.com");
    curl_exec($curl);
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
    $stmt->execute();
    foo();
    $priorityQueue = new SplPriorityQueue();
    $priorityQueue->insert("b", 2);
    $conn = odbc_connect($dsn, $user, $pass);
    $array = array("test" => 1);
    $a = "lest";
    var_dump($array[$a]);
    var_dump($c);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    gzclose($h);
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut2);
    $db = PDOTest::factory();
    $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $test = function (#[SensitiveParameter] $sensitive)
        {
            debug_print_backtrace();
            var_dump(debug_backtrace());
            var_dump((new Exception)->getTrace());
        };
        $priorityQueue = new SplPriorityQueue();
        $assoc_array = array ('one' => 1, 'two' => 2);
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $c = new C();
            $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $reqOfBig = 'select * from t';
            $attrs = [ PDO::ATTR_PREFETCH => 0 ];
            $stmt = $pdo->prepare($reqOfBig, $attrs);
            $mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
            $x = 1.0;
            $instance = new Foo();
            $dom = Dom\HTMLDocument::createEmpty();
            $container = $dom->appendChild(createElement($dom, "container"));
            $container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "bar:HTML", "8"));
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
            $obj = new C();
            var_dump($obj);
            printf("printf test 12:%5.2f\n", -12.34);
            $zip = new ZipArchive();
            $zip->close();
        }
    }
}
