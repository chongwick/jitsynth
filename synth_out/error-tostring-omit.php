<?php
function f_0() {
    return 0;
}
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
$fp = php_cli_server_connect();
try {
    $r = new ResourceBundle( 'en_US', BUNDLE );
    printf( "testbin: %s\n", bin2hex($r['testbin']) );
} catch (Exception $e) {}
if (true) {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    $client->Add();
}
try {
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    catch (Error $e) {
    	echo get_class($e), ': ', $e->getMessage(), "\n";
    }
    echo get_class($e), ': ', $e->getMessage(), "\n";
} catch (Exception $e) {}
if (true) {
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
}
