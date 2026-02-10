<?php
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
