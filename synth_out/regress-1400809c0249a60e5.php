<?php
$arc_name = __DIR__ . "/bug40228.zip";
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
$dom->getElementById('x')->removeAttribute('xml:id');
function f_0() {
}
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
