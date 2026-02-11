<?php
function gen() {
    yield 0;
    yield from gen();
}
$gen = gen();
undefined_function('Null');
