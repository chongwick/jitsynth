<?php
#[AllowDynamicProperties]
class C {
    public $a = 1;
}
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
function f_0() {
    return true;
}
function f_1() {
    return $i;
}
$str = "repeater id='loopt' dataSrc=subject columns=2";
$unset_var = 10;
class classWithToString
{
    public function __toString() {
        return "Class A object";
    }
}
class classWithoutToString
{
}
$heredoc = <<<EOT
hello world
EOT;
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);
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

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

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
$offset3 = PHP_INT_MAX * 16;
function f_2() {
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
    foreach ($arrays as $sub_array){
      echo "-- Iteration $counter --\n";
      var_dump( end($sub_array) );
      /* ensure that internal pointer is moved to last element */
      var_dump( current($sub_array) );
      $counter++;
    }
    var_dump( end($sub_array) );
    ob_flush();
    php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    var_dump($obj);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    function display($res)
    {
    	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
    }
    display($pdo->query("select * from t2")->fetchAll());
    ob_end_clean();
    printf("printf test 19:%16x\n", 170);
    ob_clean();
    printf("printf test 2:%d\n", 42);
    set_include_path(__DIR__.'/bug39542:.');
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@::1]");
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($contentfile);
    $fp = fopen (__FILE__, "r");
    fclose($fp);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
    $html = simplexml_import_dom($tag);
    var_dump($html);
    class A {
        static function name() { return 'A'; }
        function foo() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        function bar() {
            $fn = static function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
        static function baz() {
            $fn = function() { return static::name(); };
            echo static::name() . ' vs ' . $fn() . "\n";
        }
    }
    class B extends A {
        static function name() { return 'B'; }
    }
    (new B)->baz();
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(NULL));
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $it->next();
    class A {
        private static $x = 1;
    }
    class B extends A {
        function bar() {
            var_dump(self::$x);
        }
    }
    $a = new B;
    $a->bar();
    $counter = 0;
    ob_start(function ($buffer) use (&$c, &$counter) {
            $c = 0;
            ++$counter;
    }, 1);
    $db = PDOTest::factory();
    $db->beginTransaction();
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->stopBuffering();
    var_dump ( rtrim("rtrim test   " , "") );
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
    printf("[004] Fetching the meta data failed, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    file_put_contents($tmpFileIn, $originalEnvelopeData);
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->close();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
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
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    $ar1 = array("row1" => 2, "row2" => 1);
    $args = array($ar1);
    var_dump(call_user_func_array("array_multisort", $args));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
    class A {
        public $b;
    }
    $a = new A;
    var_dump(serialize($a));
    pcntl_wait($status);
    function get() {
        $t = new stdClass;
        $t->prop = $t;
        return $t;
    }
    var_dump(get());
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump($phar->getStub());
    var_dump($http_response_header);
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
    test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
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
    printf("[003] Can't select from table, %s [%d] %s\n", $column_def,
                    mysqli_errno($link), mysqli_error($link));
    class_alias( 'stdClass', 'bool' );
    function test()
    {
        echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
    }
    test();
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
}
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
$stmt->closeCursor();
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
$sort = array(1, 5, 2, 4, 3);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    class cr {
        private $priv_member;
        function __construct($val) {
            $this->priv_member = $val;
        }
        static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
        static function comp_func_cr2($a, $b) {
            echo ".";
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member < $b->priv_member) ? 1 : -1;
        }
        function dump() {
            echo $this->priv_member . "\n";
        }
    }
    $a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
    $GLOBALS['b'] = 2;
    $b = &$GLOBALS['b'];
}
$time = '2000-01-01 00:00:00.000000';
$tz_us = new DateTimeZone('America/Los_Angeles');
$us = new DateTime($time, $tz_us);
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( reset($array_test) );
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
}
$a = [1,2,3];
$i = 1;
$k = 2 * $i;
$a[$k] = $i;
function f_5() {
    $array = array('f' => "first", "s" => 'second', 1, 2.222);
    $temp_array = $array;
    var_dump($temp_array);
    $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
    var_dump(file_exists($filename));
    function byReference( & $array){
        foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    }
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
    byReference($array);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
    $dt = new DateTime('@1604215800');
    $dt->add(new DateInterval('PT1H'));
    function foo() {
        $x = 1.0;
        $x += 0;
        return ++$x; // mem -> reg, reg
    }
    var_dump(foo());
    $link->close();
    set_error_handler('error_handler');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub(str_repeat('a', 401));
    $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
    $date2 = new DateTime("Sat 19 November 2011");
    var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
    printf("printf test 11: 123456789012345678901234567890\n");
    printf("[005] [%d] %s\n", $link->errno, $link->error);
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
    $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
    $im1 = imagecreatetruec
    lor(10,100);
    imagefill($im1, 0,0, 0x
    trycatch_dump(
        fn(;
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    $dom = new DOMDocument;
    $dom->loadXML(<<<XML
    <root>
        <test1 xml:id="x"/>
        <test2 attr="x"/>
    </root>
    XML);
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->add($interval);
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    var_dump(gzfile(__DIR__."/data/test.txt.gz", true));
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
    <books></books>';
    file_put_contents($filename, $xmlstring);
}
$iterator = 1;
function f_7() {
    $zip = new ZipArchive();
    $rc = new ReflectionClass('Foo');
    $sixty = M_PI / 3.0;
    $im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
    try {
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            if (true) {
                lor(10,100);
                imagefill($im1, 0,0, 0x;
            }
            function test() {
                $dtor = new class { function __destruct() { throw new Exception; } };
                $a = 1;
                return [0, $a];
            }
            $x = test();
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
    }
    if (true) {
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
        $foo = new FooBar();
    }
    spl_autoload_register(function ($name) {
        if ($name == "B") {
            eval ("abstract class B extends A { }");
        } else if ($name == "A") {
            eval ("abstract class A { use T { T::__construct as __asconstruct; }}");
        } else if ($name == "T") {
            eval ("trait T { public function __construct() { } }");
        }
        return TRUE;
    });
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    session_start();
}
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
function f_9() {
    $host = PHP_CLI_SERVER_HOSTNAME;
    class relay
    {
       public function __get( $name )
       {
           main::$dataAccessor = new dataAccessor;
       }
    }
    main::$dataAccessor = new relay();
    $dt = new DateTime('first day of January 2011');
    $dir = opendir('foo://bar');
    try {
        for ($i_10 = 0; $i_10 < 10; $i_10++) {
            if (true) {
                $blank_line = <<<EOT
                
                EOT;
            }
            $GLOBALS['b'] = 3;
            $loop_counter = 1;
            $loop_counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $field = mysqli_fetch_field_direct($res, 1);
    }
    if (true) {
        class testObject extends ArrayObject {
            protected $test;
        
            public function getTest() {
                return $this->test;
            }
        
            public function setTest($test) {
                $this->test = $test;
            }
        }
        $obj = new testObject();
        $obj2 = unserialize(serialize($obj));
    }
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $server = new soapserver(null,array('uri'=>"http://testuri.org"));
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
    $server->handle($HTTP_RAW_POST_DATA);
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
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    setStyleAndThickness($im, $black, 4);
}
$dt = new DateTime('first day of January 2011');
var_dump($dt);
$filename = __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.zip';
function f_11() {
    $res = [];
    $res[] = $re;
    $a = date_create("2009-01-01", null);
    $reflector = new ReflectionClass(C::class);
    $anon = new class {
        public int $field;
        function __construct() {
            $this->field = 2;
        }
    };
    try {
        for ($i_12 = 0; $i_12 < 10; $i_12++) {
            if (true) {
                $users = MailBox::USERS;
                $to = $users[0];
                $bcc = $users[2];
                $subject = 'mail_bug80706';
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
                $mail = $mailBox->getMailsBySubject($subject);
            }
            class C {
                private $priv1 = 'secret1';
                private $priv2 = 'secret2';
                public $pub1 = 'public1';
                public $pub2 = 'public2';
                public $pub3 = 'public3';
                public $pub4 = 'public4';
            }
            $ao = new ArrayObject(new C);
            $loop_counter = 1;
            $loop_counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $empty_webp = __DIR__ . "/gh13774.webp";
    }
    class TestSoapClient extends SoapClient
    {
        public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
        {
            return <<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <SOAP-ENV:Envelope
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:ns="urn:ebay:api:PayPalAPI">
      <SOAP-ENV:Body id="_0">
        <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
          <Timestamp>2008-06-23T14:51:08Z</Timestamp>
          <Ack>Success</Ack>
          <CorrelationID>ae013a0ccdf13</CorrelationID>
          <Version>50.000000</Version>
          <Build>588340</Build>
          <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
            <Token>EC-11Y75137T2399952C</Token>
            <PayerInfo>
              <Payer>example@example.com</Payer>
              <PayerID>MU82WA43YXM9C</PayerID>
              <PayerStatus>verified</PayerStatus>
            </PayerInfo>
          </GetExpressCheckoutDetailsResponseDetails>
        </GetExpressCheckoutDetailsResponse>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    XML;
        }
    }
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    print_r($client->GetExpressCheckoutDetails());
    date_default_timezone_set("Asia/Calcutta");
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
}
$sh = new SessionHandler;
$sh->read("");
function f_13() {
    );
    if (!$reader->open($fil
    ttribute('idx');
                echo $reade;
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
    $num = 100000;
    for ($i=0; $i<$num; $i++) {
      $a[$i] = Array(1);
    }
    for ($i=0; $i<$num; $i++) {
      $b[$i] = $a[$i][0];
    }
    for ($i=0; $i<$num; $i++) {
      $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
    }
    $b[$i] = "12345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890";
    try {
        for ($i_14 = 0; $i_14 < 10; $i_14++) {
            if (true) {
                $db = MySQLPDOTest::factory();
                $stmt = $db->prepare('SELECT * FROM test_33689');
                $tmp = $stmt->getColumnMeta(0);
            }
            $doc = new \DOMDocument();
            $target = $doc->documentElement->lastChild;
            ++$testCasesTotal;
        }
    } catch (Exception $e) {}
    if (true) {
        $db = PDOTest::factory();
        $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
    }
    $o = new SplFileInfo('.');
    var_dump((bool) $o);
    $wrong = "wrong";
    var_dump(openssl_pkcs7_verify($wrong, 0));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY));
}
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
var_dump($body->lookupNamespaceURI("a"));
function f_15() {
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    for ($i_16 = 0; $i_16 < 10; $i_16++) {
        if (true) {
            #[AllowDynamicProperties]
            class C {
                public $a = 1;
            }
            $c = new C();
            $c->dyn = 1;
            $file_handle = fopen(__FILE__, "r");
            $dir_handle = opendir( __DIR__ );
            $resources = array($file_handle, $dir_handle);
        }
        $this->callInitiator = "IVR";
    }
    $db = getDbConnection();
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $tester = new FPM\Tester($cfg);
    $userMessage = "'user' directive is ignored when FPM is not running as root";
    $tester->expectLogNotice($userMessage, 'bbbb');
    $iterator = 1;
    $iterator++;
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
function f_17() {
    class C {
        public private(set) string $prop1 {
            set => $value;
        }
        public private(set) string $prop2 {
            get => $this->prop2;
        }
    }
    $c = new C();
    $c->prop2 = 'hello world';
    $dbh = @pg_connect($conn_str);
    for ($i_18 = 0; $i_18 < 10; $i_18++) {
        if (true) {
            $bytes = str_repeat("*", 65536);
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
        }
        $rm = new ReflectionMethod(Collator::class, 'getSortKey');
    }
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    $loop_counter = 1;
    $loop_counter++;
}
$curl = curl_init("http://www.google.com");
curl_exec($curl);
