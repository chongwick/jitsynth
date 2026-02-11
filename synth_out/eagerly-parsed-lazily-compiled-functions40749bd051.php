<?php
var_dump( range(1.0, 7.0, 0.0) );
var_dump(new FooBar);
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
