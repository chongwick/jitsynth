<?php
function f_0() {
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI(""));
    if (true) {
        if (true) {
            $quote_char_string = <<<EOT
            <html>&lt; This's a string with quotes:
            "strings in double quote" &amp;
            'strings in single quote' &quot;
            this\line is &#039;single quoted&#039; /with\slashes </html>
            EOT;
        }
        $db = MySQLPDOTest::factory();
        $stmt = $db->prepare('SELECT * FROM test_33689');
        $tmp = $stmt->getColumnMeta(0);
        printf("Expecting pdo_type = 1 got %s\n", $tmp['pdo_type']);
    }
}
var_dump( range(1.0, 7.0, 0.0) );
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
function do_throw() { throw new Exception; }
$f = function () {};
$f->__invoke(do_throw());
var_dump(pack('x') === "\0");
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
ob_start();
