<?php
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$str = <<<EOD
us
ing heredoc string
EOD;
var_dump( rtrim($str, "ing") );
