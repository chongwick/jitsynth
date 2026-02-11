<?php
var_dump(session_cache_limiter());
$list = new SplDoublyLinkedList();
$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
printf("printf test 7:%010.2f\n", 2.5);
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
$envelopeData = file_get_contents($tmpFileOut2);
var_dump(strlen($originalEnvelopeData), strlen($envelopeData), filesize($tmpFileOut2));
