<?php
$reflection = new ReflectionClass('\DateTime');
try {
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
    $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
} catch (Exception $e) {}
if (true) {
    $fp = fopen (__FILE__, "r");
    fclose($fp);
}
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
