<?php
function f_0() {
    $field = mysqli_fetch_field_direct($res, 1);
    $re = new ReflectionExtension("hash");
    var_dump($re->getConstants());
    class MyObjectStorage extends SplObjectStorage {
        // Overwrite getHash() with just some (working) test-method
        public function getHash($object): string { return get_class($object); }
    }
    class TestObject {}
    $list = new MyObjectStorage();
    $list->attach(new TestObject());
}
function f_1() {
    $text = 'This is an ‘example’ of using DOM splitText';
    $st
    rt = 30;
    $le
     = new DOMDocument('1.0', 'UTF-8');
    $no
    e = $dom->createTextNode($text);
    $do
    ched = $node->splitText($start);
    $ma;
    $result = get_declared_classes();
    var_dump(array_search('foo', $result));
    #[\AllowDynamicProperties]
    class C {
        public $b;
        public function __construct() {
            $this->a = new Canary();
        }
    }
    $obj = new C();
    var_dump($obj);
}
$log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'file://' . $log_file);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(new Foo);
ob_start("test");
restore_exception_handler();
var_dump(soundex("Lukasiewicz"));
$cert = file_get_contents(__DIR__ . "/public.crt");
$priv = file_get_contents(__DIR__ . "/private.crt");
$extracert = file_get_contents(__DIR__ . "/cert.crt");
$pass = "qwerty";
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
