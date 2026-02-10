<?php
var_dump(__METHOD__);
unlink($contentfile);
$obj->setTest('test');
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
$dom->loadXML('<root><child/></root>');
