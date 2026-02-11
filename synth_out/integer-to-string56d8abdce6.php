<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $dom = new DOMDocument;
        $tag = $dom->appendChild($dom->createElement("style"));
        $tag->append("foo");
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $now = new DateTime('2018-11-03 11:34:20.781751');
        $ago = new DateTime('2018-11-03 11:34:20.000000');
        $diff = $now->diff($ago, true);
        var_dump($diff->invert, $diff->s, $diff->f);
    }
}
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
;

mkdir($d0);
;
