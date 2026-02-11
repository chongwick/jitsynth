<?php
class P {
    protected function common() {
        throw new Exception('Unreachable');
    }
}
class A extends P {
    public function test(P $sibling) {
        $sibling->common();
    }
}
class C extends P {
    use T;
}
class string1 {
  public function __toString() {
    return "Object";
  }
}
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
var_dump(`$php -n -v`);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca)));
function unserialize($data) {
        session_decode($data);
    }
session_decode($data);
$a = new A();
$a->test(new C());
$a[10] = "42";
var_dump($a["010"], isset($a["010"]));
$obj = new string1;
var_dump( rtrim($obj, "tc") );
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
shmop_delete($shm_id1);
mt_srand(1234567890);
var_dump(__METHOD__);
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
