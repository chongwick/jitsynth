<?php
$db = PDOTest::factory();
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
$is_oci = $driver == 'oci';
$dyadic = 0.00000000000045474735088646411895751953125;
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
$initialRequest = false;
$y = 0;
global $y;
$y++;
var_dump($initialRequest ? $x : $y);
var_dump(class_exists("TestClass", true));
