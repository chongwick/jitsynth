<?php
class A {
    public $a;
}
class P {
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class C extends P {
    use T;
}
$a = new A();
function f_0() {
    if (true) {
        echo 'a';
    }
    function f_1() {
        return 42;
    }
    function f_2() {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $db = PDOTest::test_factory(__DIR__ . '/common.phpt');
            $stmt = $db->prepare("SELECT 1");
        }
        class C_4 {
        }
        return "Class A object";
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
    $prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    $c = new C();
}
try {
    var_dump(json_decode('[]', false, 0x100000000));
} catch (Exception $e) {}
if (true) {
}
