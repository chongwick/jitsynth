<?php
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function f_0() {
    $db = getDbConnection();
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $stmt = $mysql->prepare("SELECT id FROM temp");
    var_dump($_POST);
    foreach($array as &$item){
            $item['nanana'] = 'batman';
            $item['superhero'] = 'robin';
        }
    $item['superhero'] = 'robin';
    $host = curl_cli_server_start();
    $list = [];
    asort($list);
}
mysqli_close($link);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
printf("printf test 21:%016b\n", 170);
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
mysqli_fetch_field($res);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
$stmt->execute([ 32 ]);
$r = new ResourceBundle( 'en_US', BUNDLE );
$offset = 'teststring';
$ref = &$offset;
var_dump($r[$ref]);
var_dump(c1::$a3);
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
$db = getDbConnection();
$db->setAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS, true);
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Table        : %s\n", $field->table);
$a = new PDO("sqlite::memory:");
$b = $a->prepare("insert into test_35336 (b) values (?)");
$b->execute(array (5));
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
var_dump($body->lookupNamespaceURI("a"));
$im = ImageCreateTrueColor(10, 10);
imagealphablending($im, true);
$obj = new C();
var_dump($obj);
php_cli_server_start(file_get_contents(__DIR__.'/bug64433_srv.inc'));
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
