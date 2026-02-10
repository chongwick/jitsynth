<?php
function f_0() {
    try {
        curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
        unlink($filename);
    } catch (Exception $e) {}
    if (true) {
        var_dump( array_reverse($array, true) );
    }
}
$gen = (function() {
    yield from (function() { yield; })();
})();
printf("printf test 1:%s\n", "simple string");
$context = stream_context_create($httpContext);
var_dump($temp_array);
$prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
$ffi->$func_ptr = $ffi->$func;
$tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
$GLOBALS['a'] = "bug\n";
$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
$users = MailBox::USERS;
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
$ago = new DateTime('2018-11-03 11:34:20.000000');
var_dump( reset($array_test) );
$immutable = $reflection->newInstanceWithoutConstructor();
test($p12, $pass);
$date = new DateTime('@'.$unixtime);
var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
$this->a = new Canary();
imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
$reader = XMLReader::fromUri($filename);
var_dump( end($resources) );
$res = $link->use_result();
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$mutable = \DateTime::createFromInterface($immutable);
set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
});
$f = __DIR__."/data/test.txt.gz";
$tester->expectLogNotice($userMessage, 'bbbb');
