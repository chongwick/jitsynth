<?php
function f_0() {
    (function() {
    	try {
    		foo(); // Error
    	} catch (\Exception $e) {
    		var_dump($e);
    	} catch (\ParseError $e) {
    		var_dump($e);
    	}
    })();
    $a = Array();
    $f = __DIR__."/data/test.txt.gz";
    $h = gzopen($f, 'r');
    var_dump(gzeof($h));
    return;
}
$cainfo = array();
$user = PDO_MYSQL_TEST_USER;
$pass	= PDO_MYSQL_TEST_PASS;
$db = new PDO('mysql', $user, $pass);
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
set_error_handler("customErrorHandler");
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
var_dump(__METHOD__);
