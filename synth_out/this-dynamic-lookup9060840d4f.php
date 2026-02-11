<?php
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
$fp = fopen (__FILE__, "r");
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
