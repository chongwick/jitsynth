<?php
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
