<?php
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
class Test {
    function __destruct() {
        global $box;
        $box->value = null;
    }
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
class A {
    public $a;
}
function gen() {
    yield 0;
    yield from gen();
}
$array1 = array(1, 2);
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_login($ftp, 'anonymous', 'IEUser@'));
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
mkdir($d0);
$host = PHP_CLI_SERVER_HOSTNAME;
$array = array(
    1 => "entry_1",
    2 => "entry_2",
    3 => "entry_3",
    4 => "entry_4",
    5 => "entry_5"
);
var_dump(isset($_POST['foo']));
$ch = curl_init("https://localhost/userpwd");
$response = curl_exec($ch);
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$i = 1;
var_dump($foo);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $o = new C;
    $o->foo();
}
function f_1() {
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
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
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->expectLogStartNotices();
register_shutdown_function('exploDe');
printf("# Proxy:\n");
$dsn = ini_get('pdo.dsn.mysql');
$now = new DateTimeImmutable();
$dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
$dateinterval = (new ReflectionClass(DateInterval::class))->newInstanceWithoutConstructor();
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    var_dump("done");
} catch (Exception $e) {}
if (true) {
    $GLOBALS["obj"] = 24;
}
global $box;
$box->value = null;
var_dump($box->value = new Test);
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        var_dump("done");
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyProxy($obj, function () {
        return new C();
    });
}
function f_4() {
}
$f_base = "67647私はガラスを食べられます.mov";
$f = __DIR__ . DIRECTORY_SEPARATOR . $f_base;
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data3'] = 300;
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    var_dump(http_get_last_response_headers());
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    $tests = array(
        'noon', 'midnight'
    );
    sprintf('%$s, %2$s %1$s', "a", "b");
}
$lazy = true;
$mem = $lazy ? 0 : 1;
$dbh = @pg_connect($conn_str);
$res = pg_query($dbh, 'SELECT test_notice()');
var_dump($res);
$a = new A();
$b = new A();
$prop = new ReflectionProperty($b, 'dyn');
$prop->setRawValue($a, 1);
$gen = gen();
$a[10] = "42";
var_dump($a["10"], isset($a["10"]));
