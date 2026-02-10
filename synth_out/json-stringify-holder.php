<?php
function byVal($arg) {
    var_dump($arg);
}
var_dump($arg);
function g() {
    yield 'foo';
    Fiber::suspend();
}
var_dump(yield from g());
