<?php
$file_handle = fopen(__FILE__, "r");
function & test($arg) {
    return $arg;
}
$arg = new Stdclass();
test($arg)->name[1] = "xxxx";
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
function f_0() {
    $depth0 = "depth02";
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
    }
}
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
var_dump(pack('x') === "\0");
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
    var_dump($x);
    $test = function (#[SensitiveParameter] $sensitive)
    {
        debug_print_backtrace();
        var_dump(debug_backtrace());
        var_dump((new Exception)->getTrace());
    };
    $test('sensitive');
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    fclose($f);
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    function test(object $obj) {
            $obj->a = 1;
        }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
    $reflector->getMethod('test')->invoke($obj, $obj);
    var_dump(sprintf("%%%.2f", 1.23456789e10));
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->resume();
    $tempstring = "abcdefghjklmnpqrstuvwxyz";
    var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
    var_dump(strncmp("test ", "e", 10));
    $c = "assert";
    $c(false);
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $link->real_query($sql);
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    printf("# Ghost:\n");
    $ftp = ftp_connect('127.0.0.1', $port);
    var_dump(ftp_mkdir($ftp, 'CVS'));
}
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_PRIVATE, "123");
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
file_get_contents('dummy://foo', false, $context);
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $a = array(1,2,3);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@[::1");
}
