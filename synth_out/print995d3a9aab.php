<?php
$zip = new ZipArchive();
$zip->setPassword('bar');
var_dump(gc_collect_cycles());
