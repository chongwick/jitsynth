<?php
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
(new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
