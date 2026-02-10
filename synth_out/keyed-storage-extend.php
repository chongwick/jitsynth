<?php
function f_0() {
}
function f_1() {
    $b = 'ok';
    $c = "assert";
    $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
    $text = 'This is an ‘example’ of using DOM splitText';
    $st;
    $cainfo = array();
    $meta = mysqli_fetch_fields($res);
    $meta = $meta[0];
    $length = $meta->length;
}
function f_2() {
    class A1 {
    	public function __call($method, $args) { echo "__call\n"; }
    	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
    }
    class B1 extends A1 {
    	public function test(){	parent::test();	}
    }
    $test1 = new B1;
    $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $result = get_declared_classes();
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $filename = "bug51997.bz2";
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    function test() {
        try {
            return 5;
        } finally {
            try {
                echo 1;
            } finally {
                echo 2;
            }
        }
    }
    $a = test();
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
}
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN));
$conn = pg_connect($conn_str);
$table='test_68638';
pg_insert($conn,$table, array('id' => 2, 'value' => 10));
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$this->mysqli->close();
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
$tester->expectLogStartNotices();
