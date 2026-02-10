<?php
function f_0() {
    function f_1() {
        $test2=array(
           'a1_teasermenu' => array(
                'downloadcounter' => 2777,
                'versions' => array(
                    '0.1.0' => array (
                        'title' => 'A1 Teasermenu',
                        'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                        'state' => 'stable',
                        'reviewstate' => 0,
                        'category' => 'plugin',
                        'downloadcounter' => 2787,
                        'lastuploaddate' => 1088427240,
                        'dependencies' => array (
                              'depends' => array(
                                      'typo3' =>'',
                                      'php' =>'',
                                      'cms' => ''
                               ),
                              'conflicts' => array('' =>'')
                        ),
                        'authorname' => 'Mirko Balluff',
                        'authoremail' => 'balluff@amt1.de',
                        'ownerusername' => 'amt1',
                        't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
                    )
                )
            )
        );
        $test=array();
        $test[]=$test2;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
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
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        class C {
            public function __toString() {
                global $c;
                $c = [];
                throw new Exception(__METHOD__);
            }
        }
        $c = new C();
        $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
        $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
        var_dump($value);
    }
}
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
function f_4() {
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
    function f_5() {
        class foo
        {
        // no members
        }
        $this->foo_object = new foo();
        function test(object $obj) {
                $obj->a = 1;
            }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        var_dump($obj);
    }
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        function test($foo) {
            var_dump(0);
            var_dump($foo[0]);
        }
        test("str");
    }
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $meta_res = $stmt->result_metadata();
        $field = $meta_res->fetch_field();
        printf("Table        : %s\n", $field->table);
    }
}
ini_set('session.serialize_handler', 'php_serialize');
function f_8() {
    $this->extData[] = 'Bar';
    function f_9() {
        $dom = new DOMDocument();
        $xpath = new DOMXpath($dom);
        stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
    }
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        ob_end_clean();
    }
    $arr = array('http'=>
                            array(
                                    'follow_location'=>0,
                            )
                    );
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
        $row = $res->fetch_array();
        var_dump($row);
    }
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
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->start();
