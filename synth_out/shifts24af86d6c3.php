<?php
$i = 0;
ob_start("test");
$domd = new DOMDocument();
$xp = new DOMXPath($domd);
$rf = new ReflectionFunction('collator_get_sort_key');
var_dump($rf->getNumberOfRequiredParameters());
