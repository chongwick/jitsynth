<?php
function f_0() {
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
    $reflector = new ReflectionClass(C::class);
    if (true) {
        $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
        $mysql->close();
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
        $b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
        $result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
        class A {
            private static $x = 1;
        }
        class C extends A {
            function bar() {
                var_dump(A::$x);
            }
        }
        $b = new C;
        $insert = null;
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            function __construct($wsdl) {
                parent::__construct($wsdl);
                $this->server = new SoapServer($wsdl);
                $this->server->addFunction('Test');
              }
            $this->server = new SoapServer($wsdl);
            $iterator = 1;
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
            $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
            $fn = "bug71263.bz2";
            $r = fopen($fn, "r");
            stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
            if (true) {
                $inputs = array(
                      'The ISO 8601:1988 week number' => "%V",
                      'Weekday as decimal' => "%u",
                );
                $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
                $fmt2 = clone $fmt;
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
                $flags[8192] = 'ON_UPDATE_NOW';
            }
        }
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
        (new B)->foo();
        $empty_webp = __DIR__ . "/gh13774.webp";
        file_put_contents($empty_webp, "");
        $zip = new ZipArchive();
        $zip->close();
    }
    if (!true) {
        $db = PDOTest::factory();
        var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
    }
}
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now, true);
var_dump($diff->invert, $diff->s, $diff->f);
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$res = [];
display($res);
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
zerofill(12, $link, 'DEC');
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
fwrite($stream,"sdfgdfg");
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump($line);
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
$obj = new Test;
$name = "foo";
var_dump(empty($obj[$name]));
$output = array();
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$test_fl_escaped = escapeshellarg($test_fl);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
test('sensitive');
var_dump($i=1);
$fp = php_cli_server_connect();
fclose($fp);
catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
printf("%s: %s\n", $e::class, $e->getMessage());
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub(str_repeat('a', 400));
function t3()
{
    ob_start("test");
        echo "Hello from t3 1 ";
        ob_clean();
        echo "Hello from t3 2 ";
        ob_end_flush();
}
t3();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
ith_cp($d1, 65001);

touch("$d0\\;
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_mkdir($ftp, 'CVS'));
var_dump(array_pop($input), $input);
