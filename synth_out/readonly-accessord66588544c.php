<?php
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
$canary = new Canary(null);
$document = new \DOMDocument();
$h1 = $document->getElementsByTagName('h1');
$list = new MyObjectStorage();
