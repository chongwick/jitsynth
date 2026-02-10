<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump(intlcal_get_error_message(null));
    }
}
$fd = fopen('php://memory','w');
class A2 { // A1 with private function test
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
	private function test() {}
}
class B2 extends A2 {
	public function test(){	parent::test();	}
}
$test2 = new B2;
$test2->test();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
$zip = new ZipArchive();
$zip->extractTo(__DIR__);
$reflector = new ReflectionClass(DateTime::class);
printf("printf test 16:%x\n", 170);
$b = 'ok';
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
$db = getDbConnection();
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
var_dump($stmt->fetchAll());
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$fp = fopen($log_file, 'w+');
byVal(C[0]);
function byVal($arg) {
    var_dump($arg);
};
$EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTF_OUTPUT_FLOAT_OFFSETS) . '$/s';
var_dump(pack('x') === "\0");
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
$canary = new Canary(null);
$iterable = f($canary);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1H'));
$twoseventy = M_PI * 1.5;
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
$cfg .= 'php_admin_value[browscap] = ' . __DIR__ . '/../../../ext/standard/tests/misc/browscap.ini';
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
$db = MySQLPDOTest::factory();
$zip = new ZipArchive();
$zip->close();
$timestamp = "2005-11-08T11:22:07+03:00";
function __construct($audienceMemberId, $timestamp, $smokeStatus) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
    $this->smokeStatus = $smokeStatus;
    $this->callInitiator = "IVR";
  }
function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
$this->audienceMemberId = $audienceMemberId;
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
$tester->terminate();
$x = new SoapClient(__DIR__."/bug27722.wsdl");
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
$empty = "";
var_dump(spl_autoload_functions());
