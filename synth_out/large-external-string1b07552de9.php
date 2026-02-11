<?php
class C extends stdClass {
    public int $a;
}
$found = false;
$from = ini_get('sendmail_from');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
}
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$stmt = $db->prepare("CALL testSp()");
$result = $stmt->get_result();
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
$pkcsfile = __DIR__ . "/openssl_pkcs7_verify__pkcsfile.tmp";
$eml = __DIR__ . "/signed.eml";
$cainfo = array();
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
