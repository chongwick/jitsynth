<?php
session_start();
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
$date1 = new DateTime("Tuesday");
$date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
var_dump($date1->format('D') == $date2->format('D'));
pcntl_sigwaitinfo($a,$a);
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$link->close();
