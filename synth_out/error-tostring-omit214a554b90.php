<?php
#[\Deprecated(1234)]
function test() {
}
function f_0() {
    return "Object1";
}
spl_autoload_register();
$a[1] = 5;
try {
    $cert = file_get_contents(__DIR__ . "/public.crt");
    $priv = file_get_contents(__DIR__ . "/private.crt");
    $extracert = file_get_contents(__DIR__ . "/cert.crt");
    $pass = "qwerty";
    openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
} catch (Exception $e) {}
if (true) {
    var_dump(sprintf("%X", 12));
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $body = $dom->getElementsByTagName("body")[0];
    $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
    var_dump($prefixed->lookupNamespaceURI("a"));
}
try {
    catch (\TypeError $e) {
    	echo $e->getMessage() . PHP_EOL;
    }
    echo $e->getMessage() . PHP_EOL;
} catch (Exception $e) {}
if (true) {
    test();
}
