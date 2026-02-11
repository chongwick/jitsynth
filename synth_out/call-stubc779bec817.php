<?php
class Foo {
    var $bar = array();

    static function bar() {
        static $instance = null;
        $instance = new Foo();
        return $instance->bar;
    }
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $date2 = new DateTime("Fri 19 November 2011");
    }
    $loop_counter = 1;
    $loop_counter++;
}
$instance = new Foo();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    if (true) {
        $total = 10000;
    }
    if (!true) {
        if (true) {
            $count = 1;
            $count ++;
        }
    }
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
    var_dump($prefixed->lookupNamespaceURI(NULL));
}
$im = ImageCreateTrueColor(10, 10);
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    if (true) {
        $obj = unserialize('O:8:"00000000":');
    }
    if (!true) {
        if (true) {
            ++$failuresNb;
            ++$failuresNb;
        }
    }
    var_dump(strncasecmp("test ", "E", 10));
}
