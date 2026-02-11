<?php
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
class Test {
    public static function __callStatic($method, $args) {}
    public function __call($method, $args) {}
}
function do_throw() { throw new Exception; }
class foo
{
  function __toString() {
    return "Object";
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
function crash()
{
    $notDefined[$i] = 'test';
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
class C extends stdClass {
    public int $a;
}
function foo1($e) {
    var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
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
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
function f_0() {
    function f_1() {
    }
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    $code = null;
    $err = null;
    var_dump(pfsockopen('udp://127.0.0.1', '63844', $code, $err, -1));
}
function f_2() {
    function f_3() {
        function f_4() {
            function f_5() {
            }
            $conn = odbc_connect($dsn, $user, $pass);
            odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
        }
        zerofill(9, $link, 'DOUBLE');
    }
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
}
function f_6() {
    var_dump(error_reporting());
}
function f_7() {
    function f_8() {
    }
    $iterator = 1;
    return "key";
}
function f_9() {
    (new Test)->bar(do_throw());
}
function f_10() {
    $db = MySQLPDOTest::factory();
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im = ImageCreateTrueColor(10, 10);
    imagepng($im, $dest);
}
function f_11() {
    $dt = new DateTime('@1604215800');
    $dt->setTimezone(new DateTimeZone('America/Boise'));
}
function f_12() {
    $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
    $object1 = new foo();
    $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
        '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
        '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
        '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
        '996def90090303b7ad';
    $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
    $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
        '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
        'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
        '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
        'b81747c4c447a941f3';
    var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
}
function f_13() {
    $pdo = MySQLPDOTest::factory();
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
function f_14() {
    function f_15() {
    }
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
    var_dump($value);
}
function f_16() {
    function f_17() {
        $x = 1;
        $x += 0;
        ++$x;
        return $x;
    }
    function f_18() {
    }
    $a=glob("./*.jpeg");
    test([0], [1], 2);
}
function f_19() {
    $im = imagecreatetruecolor(1, 1);
    imagescale($im, 1, 1, IMG_BICUBIC_FIXED);
}
function f_20() {
    function f_21() {
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
        if (true) {
            var_dump(pack('x') === "\0");
        }
        if (!true) {
            if (true) {
                $arg = new Stdclass();
                print_r($arg);
            }
            if (!true) {
                $tester = new FPM\Tester($cfg);
                $tester->start();
                if (true) {
                    $cert = file_get_contents(__DIR__ . "/public.crt");
                }
                if (!true) {
                    $date = '7.8.2010';
                    $unixtime = strtotime($date);
                    $date = new DateTime('@'.$unixtime);
                }
            }
        }
        return 42;
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
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI(NULL));
}
function f_22() {
    $fi = new finfo(FILEINFO_MIME_TYPE);
    $empty = "";
    var_dump(openssl_pkcs7_verify($empty, 0));
}
function f_23() {
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
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER));
}
$userMessage = "'user' directive is ignored when FPM is not running as root";
function f_24() {
    echo "Step must be within the range of input parameters\n";
}
function f_25() {
    catch (\ValueError $e) {
        echo $e->getMessage() . "\n";
    }
    echo $e->getMessage() . "\n";
}
$result = get_declared_classes();
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
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
function f_26() {
    crash();
}
function f_27() {
    $browser=get_browser(NULL, true);
    $index_array = array (1, 2, 3);
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    echo get_class($e), ': ', $e->getMessage(), "\n";
}
class C_28 {
    public function m_29() {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, true);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
    }
}
function f_30() {
    catch (TypeError $e) {
                echo $e->getMessage(), "\n";
            }
    echo $e->getMessage(), "\n";
}
function f_31() {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
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
    echo __METHOD__, "\n";
}
function f_32() {
    $im = imagecreate(800, 800);
    $black = imagecolorallocate($im, 0, 0, 0);
    try {
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $stmt->execute();
    } catch (Exception $e) {}
    if (true) {
        for ($i_33 = 0; $i_33 < 10; $i_33++) {
            $test = array("A\x00B" => "Hello world");
            var_dump($test);
        }
        if (true) {
            for ($i_34 = 0; $i_34 < 10; $i_34++) {
                $row_stmt = null;
                var_dump($row_stmt);
            }
        }
        $array = [0];
    }
    stream_filter_register('user_filter','user_filter');
}
function f_35() {
    $addr = '::1';
    try {
    } catch (Exception $e) {}
    if (true) {
        var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
        $found = false;
    }
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("bar:HTML"));
}
function f_36() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $res = $stmt->fetchAll();
    try {
        $a[10] = "42";
        $i = "010";
        var_dump($a[$i], isset($a[$i]));
    } catch (Exception $e) {}
    if (true) {
        $array = [0];
        $ar = array_values($array);
        var_dump($ar);
        $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
        $envelopeData = file_get_contents($tmpFileOut2);
    }
    $conn = pg_connect($conn_str);
    $table='test_68638';
    var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
}
function f_37() {
    function f_38() {
    }
    $attr = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
        PDO::ATTR_STRINGIFY_FETCHES => true,
    ];
    $pdo = MySQLPDOTest::factoryWithAttr($attr);
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
    $list = new SplDoublyLinkedList();
    $list->push('f');
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, false);
    $doc = new \DOMDocument();
    $target = $doc->documentElement->lastChild;
    var_dump($target);
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
function f_39() {
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    try {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN));
        phpinfo(INFO_VARIABLES);
    } catch (Exception $e) {}
    if (true) {
        $link = mysqli_init();
        $japanese_so = pack('H4', '835c');
        var_dump($link->real_escape_string($japanese_so) === $japanese_so);
    }
}
function f_40() {
    $ar1 = array("row1" => 2, "row2" => 1);
    try {
        var_dump(strncmp("test ", "e", -1));
        $db = getDbConnection();
        var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    } catch (Exception $e) {}
    if (true) {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Maxlength    : %d\n", $field->max_length);
    }
}
function f_41() {
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
    try {
        var_dump(__METHOD__);
        $oneeighty = M_PI;
    } catch (Exception $e) {}
    if (true) {
        $reflector = new ReflectionClass(C::class);
        $obj = new C();
        $reflector->resetAsLazyProxy($obj, function ($obj) {
            });
    }
    if (true) {
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d1 = $prefix . "フォルダ";
        unlink("$d1\\test1.txt");
    }
}
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
setlocale(LC_ALL, 'de_DE', 'de-DE');
var_dump( range(1.0, 7.0, 6.5) );
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
printf("printf test 22:%016x\n", 170);
$zip = new ZipArchive();
$zip->close();
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'eeee');
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
var_dump(file_get_contents($pkcsfile));
$list = new SplDoublyLinkedList;
$list->add(1, 1);
$r = new ReflectionClass('Test2');
var_dump($r->getStaticProperties());
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
printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $field->name, $flags_found);
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
undefined_function('Null');
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->getTimeZone()->getID());
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
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "length: %d\n", count($r) );
var_dump(c1::$a2);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
$array = new ArrayObject();
var_dump($array->offsetExists('key'));
test("str");
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
mysqli_free_result($res);
var_dump( range('A', 'H', 10.0**400) );
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, NULL, "html", "3"));
$notDefined[$i] = 'test';
$textascii = 'This is an "example" of using DOM splitText';
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
var_dump($arg);
$a = new DateTime("2009-01-01", null);
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
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$dom = new DOMDocument;
$tag = $dom->appendChild($dom->createElement("style"));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, -1));
$deflator = deflate_init(ZLIB_ENCODING_RAW);
$s = 'C:15:"ReflectionClass":0:{}';
catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
$im1 = imagecreatetruecolor(10,100);
$loop_counter = 1;
try {
    try {
        $datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
        echo $datePost->format("r"), "\n";
    } catch (Exception $e) {}
    if (true) {
    }
} catch (Exception $e) {}
if (true) {
    $ao = new ArrayObject(new C);
}
$db = createDB();
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
unserialize('O:17:"Random\Randomizer":1:{i:0;a:2:{s:3:"foo";N;s:6:"engine";O:32:"Random\Engine\Xoshiro256StarStar":2:{i:0;a:0:{}i:1;a:4:{i:0;s:16:"7520fbc2d6f8de46";i:1;s:16:"84d2d2b9d7ba0a34";i:2;s:16:"d975f36db6490b32";i:3;s:16:"c19991ee16785b94";}}}}');
$rows = array();
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct(1);
});
$now = new DateTimeImmutable();
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
$version = mysqli_get_server_version($link);
$var = -PHP_INT_MAX - 1;
range($var,1,$var);
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177();
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
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
$b = new SplObjectStorage();
$tbl = "test";
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
$trace_file = '/tmp/mysqli_debug_phpt.trace';
unlink($trace_file);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
unlink("$d0\\test0.txt");
$a = new Test();
var_dump($a->value);
$i = "010";
$g = 'hi';
$reflector = new ReflectionClass(C::class);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("htML"));
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
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
$filename = __DIR__ . '/私はガラスを食べられます_003.xml';
$xmlstring = '<?xml version="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($filename, $xmlstring);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
var_dump(stream_copy_to_stream($input, $output, 10240, 0x200));
$res = [];
display($res);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$conn = pg_connect($conn_str);
$array = new ArrayObject();
var_dump($array->offsetExists('nokey'));
$dir_handle = opendir( __DIR__ );
$c = new C();
$propReflector = new ReflectionProperty($c, 'dyn');
$propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
var_dump(odbc_result($res, 'whatever'));
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$reader = XMLReader::fromUri($filename);
$reader->close();
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
$array_object = array();
global $box;
$box->value = null;
$browser=get_browser(NULL, true);
$id_1_date = '2014-09-23';
$id_2_date = '2014-09-24';
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
$test = array(
  'a' => 1,
  'b' => 2,
  'c' => 3,
  'd' => 4,
);
foreach($test as $kk => $vv) {
        echo $test[$kk];
        if ($kk == $k) $test[$kk] = 0;
    }
$test[$kk] = 0;
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
try {
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0)";
    $mysqli->query($sql);
    ini_set("session.save_handler","files");
} catch (Exception $e) {}
if (true) {
    $res = [];
    display($res);
}
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
try {
    $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $fi = new finfo(FILEINFO_MIME_TYPE);
    var_dump($fi->file($f));
} catch (Exception $e) {}
if (true) {
    $counter = 1;
}
$array_object = array();
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileIn);
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
$b = 'ok';
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
var_dump($prefixed->lookupNamespaceURI(""));
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
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
try {
    function f_42() {
        $timestamp = mktime(8, 8, 8, 8, 8, 2008);
        $inputs = array(
              // Predefined Date constants
              'DATE_ATOM Constant' => DATE_ATOM,
              'DATE_COOKIE Constant' => DATE_COOKIE,
              'DATE_RFC822 Constant' => DATE_RFC822,
              'DATE_RFC850 Constant' => DATE_RFC850,
              'DATE_RFC1036 Constant' => DATE_RFC1036,
              'DATE_RFC1123 Constant' => DATE_RFC1123,
              'DATE_RFC2822 Constant' => DATE_RFC2822,
              'DATE_RFC3339 Constant' => DATE_RFC3339,
              'DATE_RSS Constant' => DATE_RSS,
              'DATE_W3C Constant' => DATE_W3C,
        );
        foreach($inputs as $key =>$value) {
              echo "\n--$key--\n";
              var_dump( gmdate($value, $timestamp) );
              var_dump( gmdate($value) );
        }
        var_dump( gmdate($value, $timestamp) );
    }
    function f_43() {
        echo hash('ripemd160', 'a') . "\n";
    }
    ini_set('mysqlnd.fetch_data_copy', true);
} catch (Exception $e) {}
if (true) {
}
$string_mb = base64_decode('5pel5pys6Kqe44OG44Kt44K544OI44Gn44GZ44CCMDEyMzTvvJXvvJbvvJfvvJjvvJnjgII=');
function f_44() {
    function f_45() {
    }
    $ar1 = array("row1" => 2, "row2" => 1);
    grapheme_strpos(1,1,2147483648);
}
var_dump($foo);
$a = &$value->a;
try {
    class C_46 {
        public function m_47() {
        }
    }
    mysqli_free_result($res);
} catch (Exception $e) {}
if (true) {
}
$xMailer = 'bug80706_x_mailer';
