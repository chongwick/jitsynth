<?php
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
$r = new ResourceBundle( 'en_US', BUNDLE );
$t = $r['nonexisting'];
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $instance = new Foo();
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileIn);
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT));
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
    $a = new PDO("sqlite::memory:");
    $b = $a->prepare("insert into test_35336 (b) values (?)");
    $b->execute(array (5));
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    var_dump($x);
    $dom = Dom\HTMLDocument::createEmpty();
    dumpNodeList($dom->getElementsByTagName("HTml"));
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    $zip = new ZipArchive();
    $zip->close();
    var_dump(self::$x);
    $a[10] = "42";
    var_dump($a["010"], isset($a["010"]));
    $eml = __DIR__ . "/signed.eml";
    $empty = "";
    var_dump(openssl_pkcs7_verify($eml, 0, $empty));
}
$im = imagecreate(10,10);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $var = '';
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
    
    $xmlstring = '<?xml ve
    ion="1.0" encoding="UTF-8"?>
    <books><book num="1" idx="2">book1</book></books>';
    file_put_contents($file
    ame, $xmlstring);
    
    $reader = new XMLReade;
}
