<?php
$arc_name = __DIR__ . "/bug40228.zip";
$headers = ["Host: bad.com"];
class Canary {
    public function __construct(public mixed $value) {}
    public function __destruct() {
        var_dump(__METHOD__);
    }
}
function f($canary) {
    var_dump(yield from g());
}
$canary = new Canary(null);
$iterable = f($canary);
$fiber = new Fiber(function () use ($iterable, $canary) {
    var_dump($canary, $iterable->current());
    $f = $iterable->next(...);
    $f();
    var_dump("not executed");
});
public function setTest($test) {
        $this->test = $test;
    }
$this->test = $test;
$context = stream_context_create(['dummy' => ['foo' => 'bar']]);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
function byVal($arg) {
    var_dump($arg);
}
var_dump($arg);
