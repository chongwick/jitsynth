<?php
$containers = array();
global $containers;
global $containers;
$containers[spl_object_hash($this)] = NULL;
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$client->getQuote("ibm");
$ar1 = array("row1" => 2, "row2" => 1);
$args = array($ar1);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
var_dump($diff->invert, $diff->s, $diff->f);
