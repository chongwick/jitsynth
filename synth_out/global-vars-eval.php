<?php
$fp = fopen("php://memory", "r+");
rewind($fp);
A::$a = 'A new';
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$list = new MyObjectStorage();
foreach($list as $x) var_dump($list->offsetExists($x));
$list2 = clone $list;
foreach($list2 as $x) var_dump($list2->offsetExists($x));
var_dump($list2->offsetExists($x));
$fp = fopen(__FILE__, "r");
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$time = '9999-11-33';
$ch = curl_init();
curl_close($ch);
