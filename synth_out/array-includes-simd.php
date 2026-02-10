<?php
$b = new SplObjectStorage();
$object = new StdClass();
$b->attach($object);
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
$r->extractTo(__DIR__, NULL, TRUE);
var_dump(session_cache_limiter());
printf("printf test 16:%x\n", 170);
$references = array();
debug_zval_dump($references);
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
