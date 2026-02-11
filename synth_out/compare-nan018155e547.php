<?php
function t2()
{
    ob_start("test");
    echo "Hello from t2 1 ";
        ob_flush();
        echo "Hello from t2 2 ";
        ob_end_flush();
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$stmt = $db->prepare("SELECT 1");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $pdo = new \PDO($dsn, null, null);
    $db = PDOTest::factory();
    $res = $db->query("SELECT a FROM test36428");
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    t2();
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    __();
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    var_dump($res);
    var_dump(sprintf("%X", 12));
    var_dump($obj);
    var_dump($arg);
    $gen = gen();
    $a = bar($gen);
    $a->rewind();
}
$rc = new ReflectionClass(B::class);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $conn = pg_connect($conn_str);
    $obj = new string1;
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
}
