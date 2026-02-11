<?php
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
