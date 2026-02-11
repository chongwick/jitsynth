<?php
var_dump($row[0]);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $now->diff($ago);
var_dump($diff->invert, $diff->s, $diff->f);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
unlink($outfile);
