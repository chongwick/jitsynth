<?php
var_dump(soundex("Euler")       == soundex("Ellery"));
$db = PDOTest::factory();
$insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
$insert->execute();
