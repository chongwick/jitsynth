<?php
function f_0() {
    $HTTP_RAW_POST_DATA = <<<EOF
    <?xml version="1.0" encoding="ISO-8859-1"?>
    <SOAP-ENV:Envelope
      SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"
      xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
      xmlns:xsd="http://www.w3.org/2001/XMLSchema"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xmlns:si="http://soapinterop.org/xsd">
      <SOAP-ENV:Body>
        <ns1:test xmlns:ns1="http://testuri.org"/>
      </SOAP-ENV:Body>
    </SOAP-ENV:Envelope>
    EOF;
    $meta_res = $stmt->result_metadata();
    ob_start("test");
}
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
date_default_timezone_set("UTC");
$im = ImageCreateTrueColor(10, 10);
imagesavealpha($im, true);
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
$list = new SplDoublyLinkedList();
$list->push('o');
$s = 'O:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$namespaceless = $body->appendChild($dom->createElementNS(NULL, "foo"));
var_dump($namespaceless->lookupNamespaceURI(NULL));
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
var_dump($phar->getStub());
var_dump(http_get_last_response_headers());
$i= DateInterval::createFromDateString('2 days');
var_dump($i);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
$originalEnvelopeData = "any string with \x1a is cut at this point.";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$tz1 = new DateTimeZone('Europe/Berlin');
$tz2 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
var_dump($d->getTimezone(), $tz2);
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
debug_print_backtrace();
$filename = __DIR__ . '/bug77432.phar';
$phar = new Phar($filename);
$phar->addFromString('test.txt', 'text');
function byVal($arg) {
    var_dump($arg);
}
var_dump($arg);
