<?php
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->close();
