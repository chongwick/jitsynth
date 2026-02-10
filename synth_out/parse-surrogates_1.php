<?php
$db->exec('INSERT INTO test_33689 VALUES(1)');
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
