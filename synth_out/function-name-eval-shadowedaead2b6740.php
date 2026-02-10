<?php
$str = <<<EOD
us
ing heredoc string
EOD;
var_dump( rtrim($str, "ing") );
