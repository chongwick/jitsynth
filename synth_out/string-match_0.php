<?php
function f_0() {
    $client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
    var_dump( gmdate($value) );
    $quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
    $object1 = new foo();
    $rounds = [
    'disp', // Correct.
    3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
    null, // No callback. Hopefully this clears everything.
    'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
];
    $parser = xml_parser_create();
    if (true) {
        $x = 1.0;
        $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
    }
    if (!true) {
        var_dump(gzeof($h));
        var_dump(debug_backtrace());
        for ($i_1 = 0; $i_1 < 10; $i_1++) {
            date_default_timezone_set("UTC");
        }
    }
    curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
    $stmt->execute();
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        if (true) {
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
        }
        if (!true) {
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
        }
    }
    define ('foobar', 1);
    $db->query('DROP PROCEDURE IF EXISTS testSp');
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
    var_dump($info['used_memory'] + $info['free_memory']);
    var_dump( strtok("\0") );
    var_dump(c1::$a2);
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
}
$p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
    '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
    '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
    '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
    '996def90090303b7ad';
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
main::$dataAccessor = new dataAccessor;
$logOnEvent = new LogOnEvent(34567, $timestamp);
fclose($fp);
$date2 = new DateTime("Fri 19 November 2011");
var_dump($a);
$obj = new test;
setStyleAndThickness($im, $black, 1);
$phar = new Phar($fname);
restore_exception_handler();
$strtotime_timestamp = strtotime ("Monday", $tStamp);
var_dump(soundex("Lloyd"));
$a->foo = $x;
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
$im = imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73161.gd2');
printf("Orgtable     : %s\n", $field->orgtable);
$t = tidy_parse_string($input);
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
