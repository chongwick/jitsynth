<?php
$date2 = new DateTime("Fri 19 November 2011");
function f_0() {
    $fn = function() { return static::name(); };
    try {
        var_dump(pack('x') === "\0");
        $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
        $phar = new Phar($fname);
        $phar->setDefaultStub(str_repeat('a', 400));
    } catch (Exception $e) {}
    if (true) {
        $dir_handle = opendir( __DIR__ );
        closedir( $dir_handle );
    }
}
function f_1() {
    $thisdir = __DIR__;
    try {
        function test(string $name, object $obj) {
            printf("# %s\n", $name);
        
            $reflector = new ReflectionClass(C::class);
            try {
                $reflector->initializeLazyObject($obj);
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        
            try {
                var_dump(unserialize(serialize($obj)));
            } catch (Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
        }
        var_dump(unserialize(serialize($obj)));
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOfBig = 'select * from t';
        $attrs = [ PDO::ATTR_PREFETCH => 0 ];
        $stmt = $pdo->prepare($reqOfBig, $attrs);
        $stmt->execute();
    } catch (Exception $e) {}
    if (true) {
        $ch = curl_init();
        var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true));
    }
}
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
http_server_kill($pid);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
var_dump(intlcal_is_weekend(1));
printf("printf test 25:%-2s\n", "gazonk");
