<?php
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
$context = stream_context_create($arr);
undefined_function();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzpassthru($h);
