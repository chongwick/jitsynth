<?php
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
$context = stream_context_create($httpContext);
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
$file = __DIR__ . "/bug71127.inc";
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
$data_comp_func = 'compare_function';
class A
{
    public string $prop;
}
$a = new A();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$meta = mysqli_fetch_fields($res);
$meta = $meta[0];
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
imagesetthickness($im, $thickness);
$db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =;
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
$timestamp = "2005-11-08T11:22:07+03:00";
$db = MySQLPDOTest::factory();
$stmt = $db->prepare('SELECT * FROM test_33689');
$tmp = $stmt->getColumnMeta(0);
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$result = $stmt->get_result();
$a = array(1,2,3);
$s1 = "some string";
$c = $a + $s1;
var_dump($c);
function f_0() {
    $dom = new DOMDocument;
    $element = $dom->appendChild($dom->createElement('root'));
    $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
    $descriptorspec = [STDIN, STDOUT, STDOUT];
    for ($i = 1; $i <= 255; $i++) {
      echo "Testing $i\n";
      try {
        $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
        var_dump($proc);
        proc_close($proc);
      } catch (Error) {}
    }
    $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
    $a = new DateTime("2009-01-01", null);
    return '';
}
var_dump(error_get_last());
$tester = new FPM\Tester($cfg);
$tester->start();
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
var_dump($row['bit_column_1']);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->bind_result($id);
register_shutdown_function('exploDe');
phpinfo(INFO_VARIABLES);
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
$res = [];
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
