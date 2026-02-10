<?php
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
function f_0() {
    echo "Done\n";
}
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
function f_1() {
    var_dump(range('a', 'c', -1));
}
try {
    gzclose($h);
} catch (Exception $e) {}
if (true) {
}
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
