<?php
function foo() {
  var_dump($i=1);
  return $i;
}
function f_0() {
    var_dump(foo());
    var_dump(new Foo);
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $offset = 'teststring';
    $ref = &$offset;
    var_dump($r[$ref]);
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzread($h, 0));
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $mysql->close();
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
}
function f_1() {
    $a = array(1,2,3);
    $s1 = "some string";
    var_dump($a + $s1);
    openssl_error_string();
    var_dump( strtok("\0") );
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    foo(false, false);
    printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
}
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
