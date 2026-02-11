<?php
class A2 { // A1 with private function test
	public function __call($method, $args) { echo "__call\n"; }
	public static function __callStatic($method, $args) { echo "__callStatic\n"; }
	private function test() {}
}
class B2 extends A2 {
	public function test(){	parent::test();	}
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $conn = pg_connect($conn_str);
        $table='test_68638';
        pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $test2 = new B2;
        $test2->test();
    }
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
