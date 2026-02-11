<?php
$PHP_SELF = 1;
function f_0() {
    return;
}
$ftp = ftp_connect('127.0.0.1', $port);
$host = PHP_CLI_SERVER_HOSTNAME;
ob_clean();
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
