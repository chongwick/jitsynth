<?php
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$curl = curl_init("http://www.google.com");
function f_0() {
    return 0;
}
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testbin: %s\n", bin2hex($r['testbin']) );
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
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
var_dump($namespaceless->lookupNamespaceURI(NULL));
$o = new TrampolineTest();
$callback2 = [$o, 'trampoline2'];
spl_autoload_register($callback2);
