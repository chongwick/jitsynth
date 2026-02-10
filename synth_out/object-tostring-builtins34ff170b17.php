<?php
$iterator = 1;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
        var_dump( reset($array_test) );
        $dom = Dom\HTMLDocument::createEmpty();
        var_dump($dom->lookupNamespaceURI("a"));
    }
}
