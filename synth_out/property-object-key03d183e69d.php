<?php
$this->callInitiator = "IVR";
$responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$f = @fopen($uri, "r");
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
var_dump($body->lookupNamespaceURI(""));
$r = new ReflectionClass('Test2');
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$offset3 = PHP_INT_MAX * 16;
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
C::$p++;
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
