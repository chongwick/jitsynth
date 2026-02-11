<?php
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$stmt = $mysql->prepare("SELECT id FROM temp");
$stmt->execute();
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -1, SEEK_SET));
