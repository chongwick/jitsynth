<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
function a() {
    $a = $b = $c = 2;
    foreach(range(1, 5) as $v) {
        yield $v;
    }
    return;
}
function f_0() {
    $canary = new Canary(null);
    $iterable = f($canary);
    $fiber = new Fiber(function () use ($iterable, $canary) {
        var_dump($canary, $iterable->current());
        $f = $iterable->next(...);
        $f();
        var_dump("not executed");
    });
    function f_1() {
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        var_dump($phar->getStub());
        var_dump ( $vars );
    }
    $ch = curl_init();
    var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
    $strings = array(
      "<html>Hello<br />world</html>",
      "<html><br /></html>",
      "<html>\nHello\r\nworld\r</html>",
      "<html>\n \r\n \r</html>",
    );
    foreach( $strings as $str ){
      var_dump(nl2br($str) );
    }
    var_dump(nl2br($str) );
    test('sensitive');
    return true;
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$depth0 = "depth02";
$depth1 = "depth1";
touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
var_dump(new FooBar);
ob_start();
function f_2() {
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    function f_3() {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
        $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
        var_dump( end($array_test) );
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
    $tester->start();
    $array = [0];
    $ar = array_values($array);
    var_dump($ar);
    $a = $b = $c = 2;
    foreach (a(range(1, 3)) as $a) {
        var_dump($a);
    }
    var_dump($a);
    return true;
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $mysqli->query('SELECT 42');
$obj = $res->fetch_object();
var_dump(
    $obj,
    $obj->{42}
);
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
var_dump($h1->length);
ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
