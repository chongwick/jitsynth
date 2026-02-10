<?php
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
$attr = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci; SET SESSION sql_mode=traditional',
    PDO::ATTR_STRINGIFY_FETCHES => true,
];
$pdo = MySQLPDOTest::factoryWithAttr($attr);
$dest = dirname(realpath(__FILE__)) . '/bug27582.png';
$im2 = imagecreatefrompng($dest);
$col = imagecolorat($im2, 5, 5);
$color = imagecolorsforindex($im2, $col);
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
var_dump($client->__getLastResponseHeaders());
$fp = fopen(__FILE__, "r");
fclose($fp);
$array = [0];
$ar = array_values($array);
var_dump($ar);
