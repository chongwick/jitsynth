<?php
function f_0() {
    #[AllowDynamicProperties]
    class C {
        public int $a = 1;
        public function __construct() {
            var_dump(__METHOD__);
        }
    }
    function test(string $name, object $obj) {
        printf("# %s:\n", $name);
    
        var_dump($obj);
        var_dump(@$obj->dynamic++);
        var_dump($obj);
    }
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
    $obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        return new C();
    });
    test('Proxy', $obj);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("foo:HTML"));
    return $i;
}
$from = ini_get('sendmail_from');
public function bar(&$a, &$b, $c) {
        Legacy::bar($a, $b, $c);
    }
public function callback(&$a, &$b, $c) {
        $b = 1;
    }
$b = 1;
public function bar(&$a, &$b, $c) {
        $arguments = array($a, $b, $c);
        $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
        return $result;
    }
$arguments = array($a, $b, $c);
$ftp = ftp_connect('127.0.0.1', $port);
var_dump(ftp_mkdir($ftp, 'CVS'));
$db = PDOTest::factory();
$fp = tmpfile();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$key = str_repeat('abc', random_int(3, 3));
var_dump(array_any([$key => 1], static fn () => true));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
