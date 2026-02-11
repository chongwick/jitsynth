<?php
$dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
var_dump($dom->getElementById('x')?->nodeName);
