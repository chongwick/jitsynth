<?php
function f_0() {
    $response = ob_get_contents();
    return $response;
}
function f_1() {
    $a[1] = 5;
    $timeZone = new DateTimeZone('UTC');
}
function f_2() {
    $notDefined[$i] = 'test';
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
    );
    if (!$reader->open($fil
    ttributeNo(1);
                echo $reade;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    $regex = '/[a-z]/';
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
    $references[$idx]['id_copy']		= $rows[$i]['id'];
    while (true) {
        break;  // avoid infinite loop
        $i = 1;
        $c = $i < 2;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
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
        $oIntlDateFormatter = new IntlDateFormatter("en_GB");
        $this->b = 2;
        $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
        $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $depth0 = "depth02";
        $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
        $it = new RecursiveIteratorIterator($iterator);
        $list = [];
        $list[] = $it->getSubPathname();
        class Test implements ArrayAccess {
            public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
            public function offsetGet($x): mixed { var_dump($x); return 42; }
            public function offsetSet($x, $y): void { }
            public function offsetUnset($x): void { }
        }
        $obj = new Test;
        $code = <<<EOT
        <?php
        echo "Test\n";
        EOT;
        class C extends stdClass {
            public int $a;
        }
        $obj = new C();
        $headers = ["Host: bad.com"];
        $cert = "file://" . __DIR__ . "/cert.crt";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
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
        $host = PHP_CLI_SERVER_HOSTNAME;
        $column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
        $create = 'CREATE TABLE test(id INT, ';
        foreach ($column_def as $v) {
                $create .= sprintf('%s, ', $v);
            }
        $create .= sprintf('%s, ', $v);
        $create = sprintf('%s)', substr($create, 0, -2));
        $compression = [
            'gz' => ['zlib.deflate', 'gzinflate'],
            'bz2' => ['bzip2.compress', 'bzdecompress']
        ];
        function __construct($wsdl) {
            parent::__construct($wsdl);
            $this->server = new SoapServer($wsdl);
            $this->server->addFunction('Test');
          }
        $this->server = new SoapServer($wsdl);
        $_SERVER = [ 'test' => 'test' ];
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do;
        $str = 'Hello World';
        $shm_key = ftok(__FILE__, 'p');
        $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
        shmop_delete($shm_id1);
        $test=array();
        $out=serialize($test);
        $depth0 = "depth02";
        $depth1 = "depth1";
        $depth2 = "depth2";
        $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
        $cfg['names'] = ['cccc', 'aaaa', 'eeee', 'dddd', 'bbbb'];
        $dt = new DateTime('@1604219400');
        $version = mysqli_get_server_version($link);
        $array = [];
        list(
            '' => $foo,
            $bar
        ) = $array;
        $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $ch = curl_init("https://localhost/userpwd");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $this->public_var = 10;
        $fn = static function() { return static::name(); };
        $dbh = @pg_connect($conn_str);
        $res = pg_query($dbh, 'SELECT test_notice()');
        $style = array();
        $i = 0;
        $style[$i++] = IMG_COLOR_TRANSPARENT;
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar['a.php'] = '<php echo "this is a\n"; ?>';
        $result = get_declared_classes();
        $r = new ResourceBundle( 'en_US', BUNDLE );
        printf( "testint: %d\n", $r['testint'] );
        $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
        $heredoc_string = <<<EOT
        This is line 1 of 'heredoc' string
        This is line 2 of "heredoc" string
        EOT;
        $heredoc_null_string =<<<EOT
        EOT;
        $str_array = array(
                            // string without any characters that can be backslashed
                            'Hello world',
        
                            // string with single quotes
                            "how're you doing?",
                            "don't disturb u'r neighbours",
                            "don't disturb u'r neighbours''",
                            '',
                            '\'',
                            "'",
        
                            // string with double quotes
                            'he said, "he will be on leave"',
                            'he said, ""he will be on leave"',
                            '"""PHP"""',
                            "",
                            "\"",
                            '"',
                    "hello\"",
        
                            // string with backslash characters
                            'Is your name Ram\Krishna?',
                            '\\0.0.0.0',
                            'c:\php\testcase\addslashes',
                            '\\',
        
                            // string with nul characters
                            'hello'.chr(0).'world',
                            chr(0).'hello'.chr(0),
                            chr(0).chr(0).'hello',
                            chr(0),
        
                            // mixed strings
                            "'\\0.0.0.0'",
                            "'\\0.0.0.0'".chr(0),
                            chr(0)."'c:\php\'",
                            '"\\0.0.0.0"',
                            '"c:\php\"'.chr(0)."'",
                            '"hello"'."'world'".chr(0).'//',
        
                    // string with hexadecimal number
                            "0xABCDEF0123456789",
                            "\x00",
                            '!@#$%&*@$%#&/;:,<>',
                            "hello\x00world",
        
                            // heredoc strings
                            $heredoc_string,
                            $heredoc_null_string
                          );
        $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
        class TestSoapClient extends SoapClient {
          private $server;
        
          function __construct($wsdl) {
            parent::__construct($wsdl);
            $this->server = new SoapServer($wsdl);
            $this->server->addFunction('Test');
          }
        
          function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        }
        $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
        $plain = "The quick brown fox jumps over the lazy dog.";
        $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
        $im = imagecreate(800, 800);
        imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
        $fp = php_cli_server_connect();
        class TrampolineTest {
            public function __call(string $name, array $arguments) {
                echo 'Trampoline for ', $name, PHP_EOL;
            }
        }
        $o = new TrampolineTest();
        $callback1 = [$o, 'trampoline1'];
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
        $meta = mysqli_fetch_fields($res);
        $meta = $meta[0];
        $length = $meta->length;
        $expected = str_repeat('0', $length - strlen($insert));
        $descriptorspec = [STDIN, STDOUT, STDOUT];
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
        $expected_flags = trim(str_replace('UNSIGNED', '', $expected_flags));
        $heredoc = <<<EOT
        Hello world
        EOT;
        $sh = new SessionHandler;
        $sh->write("foo", "bar");
        $dtor = new class { function __destruct() { throw new Exception; } };
        $zip = new ZipArchive();
        $header = <<<HEADER
        extern int *(*bug79177_cb)(void);
        void bug79177(void);
        HEADER;
        $ffi = FFI::cdef($header);
        $ffi->bug79177_cb = function() {
            throw new \RuntimeException('Not allowed');
        };
        $this->guid = 1;
        $this->public_var = 10;
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
        var_dump(lookup(513));
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
        class SomeClass implements JsonSerializable {
            public function jsonSerialize(): mixed {
                return [get_object_vars($this)];
            }
        }
        $class = new SomeClass;
        $arr = [$class];
        class foo
        {
        // no members
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
        $foo_object = new foo();
        $Value_object = new Value();
        $concreteClass_object = new concreteClass();
        $valid_objects = array(
          new stdclass,
          new foo,
          new concreteClass,
          new Value,
          new myClass,
          $myClass_object,
          $myClass_object->foo_object,
          $myClass_object->public_var1,
          $foo_object,
          $Value_object,
          $concreteClass_object
        );
        $var = -PHP_INT_MAX - 1;
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        class_alias( 'stdClass', '_' );
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname, 0, 'a.phar');
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
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT));
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
        $tester->close();
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
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
    }
}
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
$GLOBALS['b'] = 3;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
