<?php
function g() {
    yield 'foo';
    Fiber::suspend();
}
var_dump(yield from g());
