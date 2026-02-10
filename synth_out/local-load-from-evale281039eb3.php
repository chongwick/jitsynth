<?php
function f_0() {
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $args[] = "-c";
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    var_dump(strlen($phar->getStub()));
}
class C {
    function __serialize(): array {
        global $list;
        $list->pop();
        return [];
    }
}
$list = new SplDoublyLinkedList;
$list->add(0, new C);
$sixty = M_PI / 3.0;
var_dump(sin($sixty));
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("c", 0);
