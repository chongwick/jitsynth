<?php
function f_0() {
    try {
        $dom = Dom\XMLDocument::createFromString(<<<XML
        <root>
            <test1 xml:id="x"/>
            <test2 xml:id="x"/>
        </root>
        XML);
        $dom->getElementById('x')->removeAttribute('xml:id');
    } catch (Exception $e) {}
    if (true) {
        $a[10] = "42";
        var_dump($a["10"], isset($a["10"]));
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
