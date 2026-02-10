<?php
$heredoc_needle = <<<EOD
^^&*(
EOD;
$tester = new FPM\Tester($cfg);
$a = "lest";
var_dump(soundex("Gauss")       == soundex("Ghosh"));
