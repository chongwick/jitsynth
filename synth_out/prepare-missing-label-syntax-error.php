<?php
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'aaaa');
ob_clean();
date_default_timezone_set('UTC');
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
