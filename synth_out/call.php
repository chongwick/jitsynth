<?php
function f_0() {
    return;
}
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 10));
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$heredoc_needle = <<<EOD
^^&*(
EOD;
$needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
foreach($needles as $needle) {
  var_dump( strrchr($special_chars_str, $needle) );
}
var_dump( strrchr($special_chars_str, $needle) );
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$dom = new DOMDocument;
$dom->getElementById('x')->remove();
function test(array... $args) {
    var_dump($args);
}
test();
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponse());
$list = new SplDoublyLinkedList;
var_dump($list->serialize());
$fp = php_cli_server_connect();
fclose($fp);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, -1));
class test {

  private function __destruct() {
  }
}
$obj = new test;
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
$target->after('bar', $doc->documentElement->firstChild, 'baz');
$trace_file = '/tmp/mysqli_debug_phpt.trace';
printf("[003] Trace file '%s' has not been created\n", $trace_file);
var_dump(session_cache_limiter());
function f_1() {
    $dom = new DOMDocument;
    return '';
}
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test/empty');
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
php_cli_server_start('http_response_code(422);');
setlocale(LC_ALL, "C");
function f_2() {
    $headers = ['Host: okey.com'];
    $httpContext = [
        'http' => [
            'protocol_version'	=> '1.1',
            'method'			=> 'GET',
            'header'			=> &$headers,
            'follow_location'	=> 0,
            'max_redirects'		=> 0,
            'ignore_errors'		=> true,
            'timeout'			=> 60,
        ],
    ];
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    public function offsetGet($index): mixed {
            return $this->array[$index];
        }
    return $this->array[$index];
}
$containers = array();
global $containers;
global $containers;
$containers[spl_object_hash($this)] = NULL;
var_dump ( rtrim("rtrim test        ", true) );
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$isEmpty = $MySQL_Ext->isEmpty();
var_dump($isEmpty);
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
unlink($tmpFileOut);
chdir(__DIR__);
function f_3() {
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
}
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
$stmt->execute();
var_dump(gc_collect_cycles());
printf("printf test 7:%010.2f\n", 2.5);
$filename = "bug51997.bz2";
unlink($filename);
$depth0 = "depth02";
$depth1 = "depth1";
$depth2 = "depth2";
$targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
mkdir($targetDir, 0777, true);
$x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
var_dump($x);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
