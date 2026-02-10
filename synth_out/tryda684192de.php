<?php
function f_0() {
    $pdo = MySQLPDOTest::factory();
    try {
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SELECT test_notice()');
        $row = pg_fetch_row($res, 0);
    } catch (Exception $e) {}
    if (true) {
        public function offsetExists($index): bool {
                return isset($this->array[$index]);
            }
        public function offsetGet($index): mixed {
                return $this->array[$index];
            }
        return $this->array[$index];
    }
    $t = new stdClass;
    return $t;
}
function f_1() {
    try {
        return "testObject";
    } catch (Exception $e) {}
    if (true) {
        return 'A';
    }
}
class di extends DateInterval {
    public $unit = 1;
}
$I = new di('P10D');
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $code = <<<EOT
    <?php
    echo "Test\n";
    EOT;
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
    mysqli_free_result($res);
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    var_dump(json_decode('[]', false, 0x100000000));
}
$batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
$batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
file_put_contents($batch_file_path, $batch_file_content);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
fclose($input);
$array_object = array();
var_dump($array_object);
function f_3() {
    try {
        return $i;
    } catch (Exception $e) {}
    if (true) {
        $options = stream_context_get_options($this->context);
    }
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 32 ]);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
function f_4() {
    try {
        $argv = array(1, 2, 3);
        var_dump($argv);
    } catch (Exception $e) {}
    if (true) {
        $a = 1;
        return [0, $a];
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
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
var_dump( array_intersect($arr1, $arr2, $arr1) );
$curl = curl_init("http://www.google.com");
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->getTimeZone()->getID());
function f_5() {
    $obj = unserialize('O:8:"00000000":');
    try {
        echo "test\n";
    } catch (Exception $e) {}
    if (true) {
        $dom = Dom\HTMLDocument::createEmpty();
        dumpNodeList($dom->getElementsByTagName("foo:html"));
        try {
            function test_error_handler($err_no, $err_msg, $filename, $linenum) {
                if (error_reporting() & $err_no) {
                    // report non-silenced errors
                    echo "Error: $err_no - $err_msg, $filename($linenum)\n";
                }
            }
            echo "Error: $err_no - $err_msg, $filename($linenum)\n";
        } catch (Exception $e) {}
        if (true) {
            debug_print_backtrace();
        }
        $cert = file_get_contents(__DIR__ . "/public.crt");
        $priv = file_get_contents(__DIR__ . "/private.crt");
        $extracert = file_get_contents(__DIR__ . "/cert.crt");
        $pass = "qwerty";
        openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
    }
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
}
Foo::$bar = 'new';
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
function t1()
{
    ob_start("test");
    echo "Hello from t1 1 ";
        echo "Hello from t1 2 ";
        ob_end_flush();
}
t1();
extract($GLOBALS, EXTR_REFS);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
$dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
var_dump($dt);
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
var_dump($temp_array);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
function f_6() {
    try {
        try {
            return 0;
        } catch (Exception $e) {}
        if (true) {
            return 0;
        }
    } catch (Exception $e) {}
    if (true) {
        return 'printer';
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
ob_flush();
function f_7() {
    $data = ["k" => 0, 1, 2, 3];
    $cow_copy = $data;
    try {
        try {
            return 0;
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
}
$ninety = M_PI /2.0;
var_dump(sin($ninety));
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
function f_8() {
    $counter = 1;
    $counter++;
    try {
        $iterator = 1;
        $iterator++;
        if (true) {
            function test($s, $mode)
            {
                return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
            }
            return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
        }
    } catch (Exception $e) {}
    if (true) {
        $count = 1;
        $count ++;
    }
    static function comp_func_cr($a, $b) {
            if ($a->priv_member === $b->priv_member) return 0;
            return ($a->priv_member > $b->priv_member) ? 1 : -1;
        }
    return ($a->priv_member > $b->priv_member) ? 1 : -1;
}
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$fp = fopen($log_file, 'w+');
fwrite($fp, "test");
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump(strlen($phar->getStub()));
function f_9() {
    try {
        C::$p++;
        if (true) {
            return new stdClass();
        }
    } catch (Exception $e) {}
    if (true) {
        $loop_counter = 1;
        $loop_counter++;
    }
    $counter = 1;
    $counter++;
    return $a;
}
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
var_dump(spl_autoload_unregister($callback1));
checktimeout($s, 500);
function f_10() {
    ++$failuresNb;
    $fd = fopen('php://memory','w');
    while (true) {
        break;  // avoid infinite loop
        try {
            $count = 1;
            $count++;
            if (true) {
                return "Class A object";
            }
            $xml = '
            <data id="1">
                <key>value</key>
            </data>
            ';
            $obj = simplexml_load_string($xml);
        } catch (Exception $e) {}
        if (true) {
            $iterator = 1;
            $iterator++;
        }
    }
    return true;
}
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
var_dump(exif_read_data(__DIR__.'/image021.tiff'));
function f_11() {
    $fp = php_cli_server_connect();
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            if (true) {
                return false;
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
            $expected_flags = trim(str_replace('NO_DEFAULT_VALUE', '', $expected_flags));
        } catch (Exception $e) {}
        if (true) {
            $loop_counter = 1;
            $loop_counter++;
        }
        ++$failuresNb;
    }
    $i = 1;
    return $i;
}
$fp = php_cli_server_connect();
fclose($fp);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
function f_12() {
    foreach ($offsets as $dimension) {
        $container = false;
        $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    for ($i_13 = 0; $i_13 < 10; $i_13++) {
        try {
            $count = 1;
            $count++;
            $iterator = 1;
            $iterator++;
        } catch (Exception $e) {}
        if (true) {
            $y = 0;
            global $y;
            $y++;
        }
        $iterator = 1;
        $iterator++;
    }
    return [(array)$this];
}
$list = new SplDoublyLinkedList();
$list->push('f');
$fn = "bug71263.bz2";
unlink($fn);
function f_14() {
    $a = [1,2,3];
    try {
        $counter = 1;
        $counter++;
        try {
            $count = 1;
            $count ++;
            if (true) {
                return [(array)$this];
            }
        } catch (Exception $e) {}
        if (true) {
            $halves[0] = $halves[1] = 0;
            $halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
            $halves[0] = $halves[1] = 0;
            $halves[(int) (mt_rand(0, $max - 1) / ($max / 2))]++;
        }
    } catch (Exception $e) {}
    if (true) {
        $i=0;
        $i++;
    }
    return 0;
}
$wrong = "wrong";
var_dump(openssl_pkcs7_verify($wrong, 0));
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
function f_15() {
    try {
        $loop_counter = 1;
        $loop_counter++;
        try {
            ++$failuresNb;
            ++$failuresNb;
            if (true) {
                function lookup($s){
                       return match($s){
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6,
                        7 => 7,
                        8 => 8,
                        9 => 9,
                        10 => 10,
                        11 => 11,
                        12 => 12,
                        13 => 13,
                        14 => 14,
                        15 => 15,
                        16 => 16,
                        17 => 17,
                        18 => 18,
                        19 => 19,
                        20 => 20,
                        21 => 21,
                        22 => 22,
                        23 => 23,
                        24 => 24,
                        25 => 25,
                        26 => 26,
                        27 => 27,
                        28 => 28,
                        29 => 29,
                        30 => 30,
                        31 => 31,
                        32 => 32,
                        33 => 33,
                        34 => 34,
                        35 => 35,
                        36 => 36,
                        37 => 37,
                        38 => 38,
                        39 => 39,
                        40 => 40,
                        41 => 41,
                        42 => 42,
                        43 => 43,
                        44 => 44,
                        45 => 45,
                        46 => 46,
                        47 => 47,
                        48 => 48,
                        49 => 49,
                        50 => 50,
                        51 => 51,
                        52 => 52,
                        53 => 53,
                        54 => 54,
                        55 => 55,
                        56 => 56,
                        57 => 57,
                        58 => 58,
                        59 => 59,
                        60 => 60,
                        61 => 61,
                        62 => 62,
                        63 => 63,
                        64 => 64,
                        65 => 65,
                        66 => 66,
                        67 => 67,
                        68 => 68,
                        69 => 69,
                        70 => 70,
                        71 => 71,
                        72 => 72,
                        73 => 73,
                        74 => 74,
                        75 => 75,
                        76 => 76,
                        77 => 77,
                        78 => 78,
                        79 => 79,
                        80 => 80,
                        81 => 81,
                        82 => 82,
                        83 => 83,
                        84 => 84,
                        85 => 85,
                        86 => 86,
                        87 => 87,
                        88 => 88,
                        89 => 89,
                        90 => 90,
                        91 => 91,
                        92 => 92,
                        93 => 93,
                        94 => 94,
                        95 => 95,
                        96 => 96,
                        97 => 97,
                        98 => 98,
                        99 => 99,
                        100 => 100,
                        101 => 101,
                        102 => 102,
                        103 => 103,
                        104 => 104,
                        105 => 105,
                        106 => 106,
                        107 => 107,
                        108 => 108,
                        109 => 109,
                        110 => 110,
                        111 => 111,
                        112 => 112,
                        113 => 113,
                        114 => 114,
                        115 => 115,
                        116 => 116,
                        117 => 117,
                        118 => 118,
                        119 => 119,
                        120 => 120,
                        121 => 121,
                        122 => 122,
                        123 => 123,
                        124 => 124,
                        125 => 125,
                        126 => 126,
                        127 => 127,
                        128 => 128,
                        129 => 129,
                        130 => 130,
                        131 => 131,
                        132 => 132,
                        133 => 133,
                        134 => 134,
                        135 => 135,
                        136 => 136,
                        137 => 137,
                        138 => 138,
                        139 => 139,
                        140 => 140,
                        141 => 141,
                        142 => 142,
                        143 => 143,
                        144 => 144,
                        145 => 145,
                        146 => 146,
                        147 => 147,
                        148 => 148,
                        149 => 149,
                        150 => 150,
                        151 => 151,
                        152 => 152,
                        153 => 153,
                        154 => 154,
                        155 => 155,
                        156 => 156,
                        157 => 157,
                        158 => 158,
                        159 => 159,
                        160 => 160,
                        161 => 161,
                        162 => 162,
                        163 => 163,
                        164 => 164,
                        165 => 165,
                        166 => 166,
                        167 => 167,
                        168 => 168,
                        169 => 169,
                        170 => 170,
                        171 => 171,
                        172 => 172,
                        173 => 173,
                        174 => 174,
                        175 => 175,
                        176 => 176,
                        177 => 177,
                        178 => 178,
                        179 => 179,
                        180 => 180,
                        181 => 181,
                        182 => 182,
                        183 => 183,
                        184 => 184,
                        185 => 185,
                        186 => 186,
                        187 => 187,
                        188 => 188,
                        189 => 189,
                        190 => 190,
                        191 => 191,
                        192 => 192,
                        193 => 193,
                        194 => 194,
                        195 => 195,
                        196 => 196,
                        197 => 197,
                        198 => 198,
                        199 => 199,
                        200 => 200,
                        201 => 201,
                        202 => 202,
                        203 => 203,
                        204 => 204,
                        205 => 205,
                        206 => 206,
                        207 => 207,
                        208 => 208,
                        209 => 209,
                        210 => 210,
                        211 => 211,
                        212 => 212,
                        213 => 213,
                        214 => 214,
                        215 => 215,
                        216 => 216,
                        217 => 217,
                        218 => 218,
                        219 => 219,
                        220 => 220,
                        221 => 221,
                        222 => 222,
                        223 => 223,
                        224 => 224,
                        225 => 225,
                        226 => 226,
                        227 => 227,
                        228 => 228,
                        229 => 229,
                        230 => 230,
                        231 => 231,
                        232 => 232,
                        233 => 233,
                        234 => 234,
                        235 => 235,
                        236 => 236,
                        237 => 237,
                        238 => 238,
                        239 => 239,
                        240 => 240,
                        241 => 241,
                        242 => 242,
                        243 => 243,
                        244 => 244,
                        245 => 245,
                        246 => 246,
                        247 => 247,
                        248 => 248,
                        249 => 249,
                        250 => 250,
                        251 => 251,
                        252 => 252,
                        253 => 253,
                        254 => 254,
                        255 => 255,
                        256 => 256,
                        257 => 257,
                        258 => 258,
                        259 => 259,
                        260 => 260,
                        261 => 261,
                        262 => 262,
                        263 => 263,
                        264 => 264,
                        265 => 265,
                        266 => 266,
                        267 => 267,
                        268 => 268,
                        269 => 269,
                        270 => 270,
                        271 => 271,
                        272 => 272,
                        273 => 273,
                        274 => 274,
                        275 => 275,
                        276 => 276,
                        277 => 277,
                        278 => 278,
                        279 => 279,
                        280 => 280,
                        281 => 281,
                        282 => 282,
                        283 => 283,
                        284 => 284,
                        285 => 285,
                        286 => 286,
                        287 => 287,
                        288 => 288,
                        289 => 289,
                        290 => 290,
                        291 => 291,
                        292 => 292,
                        293 => 293,
                        294 => 294,
                        295 => 295,
                        296 => 296,
                        297 => 297,
                        298 => 298,
                        299 => 299,
                        300 => 300,
                        301 => 301,
                        302 => 302,
                        303 => 303,
                        304 => 304,
                        305 => 305,
                        306 => 306,
                        307 => 307,
                        308 => 308,
                        309 => 309,
                        310 => 310,
                        311 => 311,
                        312 => 312,
                        313 => 313,
                        314 => 314,
                        315 => 315,
                        316 => 316,
                        317 => 317,
                        318 => 318,
                        319 => 319,
                        320 => 320,
                        321 => 321,
                        322 => 322,
                        323 => 323,
                        324 => 324,
                        325 => 325,
                        326 => 326,
                        327 => 327,
                        328 => 328,
                        329 => 329,
                        330 => 330,
                        331 => 331,
                        332 => 332,
                        333 => 333,
                        334 => 334,
                        335 => 335,
                        336 => 336,
                        337 => 337,
                        338 => 338,
                        339 => 339,
                        340 => 340,
                        341 => 341,
                        342 => 342,
                        343 => 343,
                        344 => 344,
                        345 => 345,
                        346 => 346,
                        347 => 347,
                        348 => 348,
                        349 => 349,
                        350 => 350,
                        351 => 351,
                        352 => 352,
                        353 => 353,
                        354 => 354,
                        355 => 355,
                        356 => 356,
                        357 => 357,
                        358 => 358,
                        359 => 359,
                        360 => 360,
                        361 => 361,
                        362 => 362,
                        363 => 363,
                        364 => 364,
                        365 => 365,
                        366 => 366,
                        367 => 367,
                        368 => 368,
                        369 => 369,
                        370 => 370,
                        371 => 371,
                        372 => 372,
                        373 => 373,
                        374 => 374,
                        375 => 375,
                        376 => 376,
                        377 => 377,
                        378 => 378,
                        379 => 379,
                        380 => 380,
                        381 => 381,
                        382 => 382,
                        383 => 383,
                        384 => 384,
                        385 => 385,
                        386 => 386,
                        387 => 387,
                        388 => 388,
                        389 => 389,
                        390 => 390,
                        391 => 391,
                        392 => 392,
                        393 => 393,
                        394 => 394,
                        395 => 395,
                        396 => 396,
                        397 => 397,
                        398 => 398,
                        399 => 399,
                        400 => 400,
                        401 => 401,
                        402 => 402,
                        403 => 403,
                        404 => 404,
                        405 => 405,
                        406 => 406,
                        407 => 407,
                        408 => 408,
                        409 => 409,
                        410 => 410,
                        411 => 411,
                        412 => 412,
                        413 => 413,
                        414 => 414,
                        415 => 415,
                        416 => 416,
                        417 => 417,
                        418 => 418,
                        419 => 419,
                        420 => 420,
                        421 => 421,
                        422 => 422,
                        423 => 423,
                        424 => 424,
                        425 => 425,
                        426 => 426,
                        427 => 427,
                        428 => 428,
                        429 => 429,
                        430 => 430,
                        431 => 431,
                        432 => 432,
                        433 => 433,
                        434 => 434,
                        435 => 435,
                        436 => 436,
                        437 => 437,
                        438 => 438,
                        439 => 439,
                        440 => 440,
                        441 => 441,
                        442 => 442,
                        443 => 443,
                        444 => 444,
                        445 => 445,
                        446 => 446,
                        447 => 447,
                        448 => 448,
                        449 => 449,
                        450 => 450,
                        451 => 451,
                        452 => 452,
                        453 => 453,
                        454 => 454,
                        455 => 455,
                        456 => 456,
                        457 => 457,
                        458 => 458,
                        459 => 459,
                        460 => 460,
                        461 => 461,
                        462 => 462,
                        463 => 463,
                        464 => 464,
                        465 => 465,
                        466 => 466,
                        467 => 467,
                        468 => 468,
                        469 => 469,
                        470 => 470,
                        471 => 471,
                        472 => 472,
                        473 => 473,
                        474 => 474,
                        475 => 475,
                        476 => 476,
                        477 => 477,
                        478 => 478,
                        479 => 479,
                        480 => 480,
                        481 => 481,
                        482 => 482,
                        483 => 483,
                        484 => 484,
                        485 => 485,
                        486 => 486,
                        487 => 487,
                        488 => 488,
                        489 => 489,
                        490 => 490,
                        491 => 491,
                        492 => 492,
                        493 => 493,
                        494 => 494,
                        495 => 495,
                        496 => 496,
                        497 => 497,
                        498 => 498,
                        499 => 499,
                        500 => 500,
                        501 => 501,
                        502 => 502,
                        503 => 503,
                        504 => 504,
                        505 => 505,
                        506 => 506,
                        507 => 507,
                        508 => 508,
                        509 => 509,
                        510 => 510,
                        511 => 511,
                        512 => 512,
                        513 => 513,
                    };
                }
                return match($s){
                        1 => 1,
                        2 => 2,
                        3 => 3,
                        4 => 4,
                        5 => 5,
                        6 => 6,
                        7 => 7,
                        8 => 8,
                        9 => 9,
                        10 => 10,
                        11 => 11,
                        12 => 12,
                        13 => 13,
                        14 => 14,
                        15 => 15,
                        16 => 16,
                        17 => 17,
                        18 => 18,
                        19 => 19,
                        20 => 20,
                        21 => 21,
                        22 => 22,
                        23 => 23,
                        24 => 24,
                        25 => 25,
                        26 => 26,
                        27 => 27,
                        28 => 28,
                        29 => 29,
                        30 => 30,
                        31 => 31,
                        32 => 32,
                        33 => 33,
                        34 => 34,
                        35 => 35,
                        36 => 36,
                        37 => 37,
                        38 => 38,
                        39 => 39,
                        40 => 40,
                        41 => 41,
                        42 => 42,
                        43 => 43,
                        44 => 44,
                        45 => 45,
                        46 => 46,
                        47 => 47,
                        48 => 48,
                        49 => 49,
                        50 => 50,
                        51 => 51,
                        52 => 52,
                        53 => 53,
                        54 => 54,
                        55 => 55,
                        56 => 56,
                        57 => 57,
                        58 => 58,
                        59 => 59,
                        60 => 60,
                        61 => 61,
                        62 => 62,
                        63 => 63,
                        64 => 64,
                        65 => 65,
                        66 => 66,
                        67 => 67,
                        68 => 68,
                        69 => 69,
                        70 => 70,
                        71 => 71,
                        72 => 72,
                        73 => 73,
                        74 => 74,
                        75 => 75,
                        76 => 76,
                        77 => 77,
                        78 => 78,
                        79 => 79,
                        80 => 80,
                        81 => 81,
                        82 => 82,
                        83 => 83,
                        84 => 84,
                        85 => 85,
                        86 => 86,
                        87 => 87,
                        88 => 88,
                        89 => 89,
                        90 => 90,
                        91 => 91,
                        92 => 92,
                        93 => 93,
                        94 => 94,
                        95 => 95,
                        96 => 96,
                        97 => 97,
                        98 => 98,
                        99 => 99,
                        100 => 100,
                        101 => 101,
                        102 => 102,
                        103 => 103,
                        104 => 104,
                        105 => 105,
                        106 => 106,
                        107 => 107,
                        108 => 108,
                        109 => 109,
                        110 => 110,
                        111 => 111,
                        112 => 112,
                        113 => 113,
                        114 => 114,
                        115 => 115,
                        116 => 116,
                        117 => 117,
                        118 => 118,
                        119 => 119,
                        120 => 120,
                        121 => 121,
                        122 => 122,
                        123 => 123,
                        124 => 124,
                        125 => 125,
                        126 => 126,
                        127 => 127,
                        128 => 128,
                        129 => 129,
                        130 => 130,
                        131 => 131,
                        132 => 132,
                        133 => 133,
                        134 => 134,
                        135 => 135,
                        136 => 136,
                        137 => 137,
                        138 => 138,
                        139 => 139,
                        140 => 140,
                        141 => 141,
                        142 => 142,
                        143 => 143,
                        144 => 144,
                        145 => 145,
                        146 => 146,
                        147 => 147,
                        148 => 148,
                        149 => 149,
                        150 => 150,
                        151 => 151,
                        152 => 152,
                        153 => 153,
                        154 => 154,
                        155 => 155,
                        156 => 156,
                        157 => 157,
                        158 => 158,
                        159 => 159,
                        160 => 160,
                        161 => 161,
                        162 => 162,
                        163 => 163,
                        164 => 164,
                        165 => 165,
                        166 => 166,
                        167 => 167,
                        168 => 168,
                        169 => 169,
                        170 => 170,
                        171 => 171,
                        172 => 172,
                        173 => 173,
                        174 => 174,
                        175 => 175,
                        176 => 176,
                        177 => 177,
                        178 => 178,
                        179 => 179,
                        180 => 180,
                        181 => 181,
                        182 => 182,
                        183 => 183,
                        184 => 184,
                        185 => 185,
                        186 => 186,
                        187 => 187,
                        188 => 188,
                        189 => 189,
                        190 => 190,
                        191 => 191,
                        192 => 192,
                        193 => 193,
                        194 => 194,
                        195 => 195,
                        196 => 196,
                        197 => 197,
                        198 => 198,
                        199 => 199,
                        200 => 200,
                        201 => 201,
                        202 => 202,
                        203 => 203,
                        204 => 204,
                        205 => 205,
                        206 => 206,
                        207 => 207,
                        208 => 208,
                        209 => 209,
                        210 => 210,
                        211 => 211,
                        212 => 212,
                        213 => 213,
                        214 => 214,
                        215 => 215,
                        216 => 216,
                        217 => 217,
                        218 => 218,
                        219 => 219,
                        220 => 220,
                        221 => 221,
                        222 => 222,
                        223 => 223,
                        224 => 224,
                        225 => 225,
                        226 => 226,
                        227 => 227,
                        228 => 228,
                        229 => 229,
                        230 => 230,
                        231 => 231,
                        232 => 232,
                        233 => 233,
                        234 => 234,
                        235 => 235,
                        236 => 236,
                        237 => 237,
                        238 => 238,
                        239 => 239,
                        240 => 240,
                        241 => 241,
                        242 => 242,
                        243 => 243,
                        244 => 244,
                        245 => 245,
                        246 => 246,
                        247 => 247,
                        248 => 248,
                        249 => 249,
                        250 => 250,
                        251 => 251,
                        252 => 252,
                        253 => 253,
                        254 => 254,
                        255 => 255,
                        256 => 256,
                        257 => 257,
                        258 => 258,
                        259 => 259,
                        260 => 260,
                        261 => 261,
                        262 => 262,
                        263 => 263,
                        264 => 264,
                        265 => 265,
                        266 => 266,
                        267 => 267,
                        268 => 268,
                        269 => 269,
                        270 => 270,
                        271 => 271,
                        272 => 272,
                        273 => 273,
                        274 => 274,
                        275 => 275,
                        276 => 276,
                        277 => 277,
                        278 => 278,
                        279 => 279,
                        280 => 280,
                        281 => 281,
                        282 => 282,
                        283 => 283,
                        284 => 284,
                        285 => 285,
                        286 => 286,
                        287 => 287,
                        288 => 288,
                        289 => 289,
                        290 => 290,
                        291 => 291,
                        292 => 292,
                        293 => 293,
                        294 => 294,
                        295 => 295,
                        296 => 296,
                        297 => 297,
                        298 => 298,
                        299 => 299,
                        300 => 300,
                        301 => 301,
                        302 => 302,
                        303 => 303,
                        304 => 304,
                        305 => 305,
                        306 => 306,
                        307 => 307,
                        308 => 308,
                        309 => 309,
                        310 => 310,
                        311 => 311,
                        312 => 312,
                        313 => 313,
                        314 => 314,
                        315 => 315,
                        316 => 316,
                        317 => 317,
                        318 => 318,
                        319 => 319,
                        320 => 320,
                        321 => 321,
                        322 => 322,
                        323 => 323,
                        324 => 324,
                        325 => 325,
                        326 => 326,
                        327 => 327,
                        328 => 328,
                        329 => 329,
                        330 => 330,
                        331 => 331,
                        332 => 332,
                        333 => 333,
                        334 => 334,
                        335 => 335,
                        336 => 336,
                        337 => 337,
                        338 => 338,
                        339 => 339,
                        340 => 340,
                        341 => 341,
                        342 => 342,
                        343 => 343,
                        344 => 344,
                        345 => 345,
                        346 => 346,
                        347 => 347,
                        348 => 348,
                        349 => 349,
                        350 => 350,
                        351 => 351,
                        352 => 352,
                        353 => 353,
                        354 => 354,
                        355 => 355,
                        356 => 356,
                        357 => 357,
                        358 => 358,
                        359 => 359,
                        360 => 360,
                        361 => 361,
                        362 => 362,
                        363 => 363,
                        364 => 364,
                        365 => 365,
                        366 => 366,
                        367 => 367,
                        368 => 368,
                        369 => 369,
                        370 => 370,
                        371 => 371,
                        372 => 372,
                        373 => 373,
                        374 => 374,
                        375 => 375,
                        376 => 376,
                        377 => 377,
                        378 => 378,
                        379 => 379,
                        380 => 380,
                        381 => 381,
                        382 => 382,
                        383 => 383,
                        384 => 384,
                        385 => 385,
                        386 => 386,
                        387 => 387,
                        388 => 388,
                        389 => 389,
                        390 => 390,
                        391 => 391,
                        392 => 392,
                        393 => 393,
                        394 => 394,
                        395 => 395,
                        396 => 396,
                        397 => 397,
                        398 => 398,
                        399 => 399,
                        400 => 400,
                        401 => 401,
                        402 => 402,
                        403 => 403,
                        404 => 404,
                        405 => 405,
                        406 => 406,
                        407 => 407,
                        408 => 408,
                        409 => 409,
                        410 => 410,
                        411 => 411,
                        412 => 412,
                        413 => 413,
                        414 => 414,
                        415 => 415,
                        416 => 416,
                        417 => 417,
                        418 => 418,
                        419 => 419,
                        420 => 420,
                        421 => 421,
                        422 => 422,
                        423 => 423,
                        424 => 424,
                        425 => 425,
                        426 => 426,
                        427 => 427,
                        428 => 428,
                        429 => 429,
                        430 => 430,
                        431 => 431,
                        432 => 432,
                        433 => 433,
                        434 => 434,
                        435 => 435,
                        436 => 436,
                        437 => 437,
                        438 => 438,
                        439 => 439,
                        440 => 440,
                        441 => 441,
                        442 => 442,
                        443 => 443,
                        444 => 444,
                        445 => 445,
                        446 => 446,
                        447 => 447,
                        448 => 448,
                        449 => 449,
                        450 => 450,
                        451 => 451,
                        452 => 452,
                        453 => 453,
                        454 => 454,
                        455 => 455,
                        456 => 456,
                        457 => 457,
                        458 => 458,
                        459 => 459,
                        460 => 460,
                        461 => 461,
                        462 => 462,
                        463 => 463,
                        464 => 464,
                        465 => 465,
                        466 => 466,
                        467 => 467,
                        468 => 468,
                        469 => 469,
                        470 => 470,
                        471 => 471,
                        472 => 472,
                        473 => 473,
                        474 => 474,
                        475 => 475,
                        476 => 476,
                        477 => 477,
                        478 => 478,
                        479 => 479,
                        480 => 480,
                        481 => 481,
                        482 => 482,
                        483 => 483,
                        484 => 484,
                        485 => 485,
                        486 => 486,
                        487 => 487,
                        488 => 488,
                        489 => 489,
                        490 => 490,
                        491 => 491,
                        492 => 492,
                        493 => 493,
                        494 => 494,
                        495 => 495,
                        496 => 496,
                        497 => 497,
                        498 => 498,
                        499 => 499,
                        500 => 500,
                        501 => 501,
                        502 => 502,
                        503 => 503,
                        504 => 504,
                        505 => 505,
                        506 => 506,
                        507 => 507,
                        508 => 508,
                        509 => 509,
                        510 => 510,
                        511 => 511,
                        512 => 512,
                        513 => 513,
                    };
            }
        } catch (Exception $e) {}
        if (true) {
            $counter = 1;
            $counter++;
        }
    } catch (Exception $e) {}
    if (true) {
        $iterator = 1;
        $iterator++;
    }
    ++$testCasesTotal;
    ++$testCasesTotal;
    return "key";
}
$dbh = @pg_connect($conn_str);
pg_close($dbh);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Charsetnr    : %d\n", $field->charsetnr);
function f_16() {
    $data_comp_func = 'compare_function';
    $date1 = new DateTime("Tuesday");
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            try {
                $iterator = 1;
                $iterator++;
                if (true) {
                    function Test($param) {
                        global $g;
                        $g = $param->strA."\n".$param->strB."\n";
                        return $g;
                    }
                    $g = $param->strA."\n".$param->strB."\n";
                    return $g;
                }
                $time = '2000-01-01 00:00:00.000000';
            } catch (Exception $e) {}
            if (true) {
                $counter = 1;
                $counter++;
            }
        } catch (Exception $e) {}
        if (true) {
            $counter = 1;
            $counter++;
        }
    }
    return "testObject";
}
var_dump(-2147483647 % -1);
var_dump(json_decode('"\ud834"'));
function f_17() {
    $s1 = "some string";
    while (true) {
        break;  // avoid infinite loop
        try {
            $iterator = 1;
            $iterator++;
            try {
                $loop_counter = 1;
                $loop_counter++;
                if (true) {
                    $a = 1;
                    return $a;
                }
                $cfg = <<<EOT
                [global]
                error_log = {{FILE:LOG}}
                [unconfined]
                listen = {{ADDR}}
                pm = static
                pm.max_children = 1
                catch_workers_output = yes
                EOT;
            } catch (Exception $e) {}
            if (true) {
                $iterator = 1;
                $iterator++;
            }
        } catch (Exception $e) {}
        if (true) {
            $loop_counter = 1;
            $loop_counter++;
        }
        $count = 1;
        $count++;
    }
    $x = 1.0;
    $x += 0;
    return ++$x;
}
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w->compressFiles(Phar::GZ);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
$tbl = "test";
$b = $a;
$infile = __DIR__.'/bug34704私はガラスを食べられます.jpg';
var_dump(exif_read_data;
try {
    $lazy = true;
    $mem = $lazy ? 0 : 1;
    $mem0 = $mem;
} catch (Exception $e) {}
if (true) {
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
    $envelopeData = file_get_contents($tmpFileOut2);
}
if (true) {
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    $instance = new Foo();
}
$readonly_anon = new readonly class {
    public int $field;
    function __construct() {
        $this->field = 2;
    }
};
$readonly_anon->field = 123;
var_dump($readonly_anon->field);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
class D {
    public string $prop;
}
$d = new D();
var_dump($d);
function f_18() {
    try {
        return $this->test;
    } catch (Exception $e) {}
    if (true) {
        try {
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
        } catch (Exception $e) {}
        if (true) {
            return "concreteClass";
        }
    }
}
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
function f_19() {
    try {
        return 1;
    } catch (Exception $e) {}
    if (true) {
        try {
            return 5;
        } catch (Exception $e) {}
        if (true) {
        }
    }
    return 0;
}
$obj = unserialize('O:8:"00000000":');
var_dump($obj);
function f_20() {
    do {
        try {
            return [$this];
        } catch (Exception $e) {}
        if (true) {
            try {
                public function getHash($object): string { return get_class($object); }
                return get_class($object);
            } catch (Exception $e) {}
            if (true) {
            }
        }
    } while (false);
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
$db = PDOTest::factory();
$db->exec("INSERT INTO test36428 (a) VALUES ('xyz')");
