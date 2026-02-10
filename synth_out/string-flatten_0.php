<?php
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
$interval = new DateInterval('P1D');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $dbh = @pg_connect($conn_str);
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
}
printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
