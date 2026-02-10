<?php
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($contentfile);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
