<?php
$to = "specials";
$pid = pcntl_fork();
$str = "repeater id='loopt' dataSrc=subject columns=2";
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
$mutable = \DateTime::createFromInterface($immutable);
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$x = (object)['y' => 'foobar'];
$arg = new Stdclass();
var_dump(range('z', 'a', 100));
