<?php
stream_filter_append($stream, $filter);
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
$test2->test();
var_dump($val);
printf("# Ghost:\n");
ini_set("session.save_handler","files");
