<?php
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('UTC'));
