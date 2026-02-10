<?php
$depth1 = "depth1";
$datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$struct->field = 10;
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump($dom->lookupNamespaceURI(NULL));
    }
}
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
var_dump($x);
var_dump( end($array_test) );
zerofill(11, $link, 'DECIMAL');
printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
var_dump(error_get_last());
printf("Content-Type OK" . PHP_EOL);
mysqli_free_result($res);
imagescale($im, 1, 1, -10);
phpinfo(INFO_MODULES);
date_default_timezone_set('Europe/Kiev');
ob_end_clean();
$strB = 'test & test';
$filename = __DIR__ . '/bug77432.phar';
list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
register_shutdown_function(function (): void {
    foreach (get_resources() as $res) {
        if (get_resource_type($res) === 'persistent stream') {
            echo "ERROR: persistent stream not closed\n";
            return;
        }
    }
    echo "OK: persistent stream closed\n";
});
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$dom->loadXML(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 attr="x"/>
</root>
XML);
$phar->setDefaultStub(str_repeat('a', 400));
$prop->setRawValue($a, 1);
test();
$obj = unserialize('O:8:"00000000":');
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
$this->audienceMemberId = $audienceMemberId;
$c = [];
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
$b = new A();
var_dump(strlen($phar->getStub()));
var_dump(session_save_path());
['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
$InvMocker->addMatcher($OuterMatcher);
printf("printf test 15:%b\n", 170);
$container = $dom->appendChild(createElement($dom, "container"));
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$counter = 1;
$stmt = $db->query($sql);
$list[] = $it->getSubPathname();
$this->public_var1 = new foo();
$r = new ReflectionClass('stdClass');
$assoc_array = array ('one' => 1, 'two' => 2);
var_dump($obj);
var_dump(sin($oneeighty));
var_dump( image_type_to_mime_type($value) );
putenv('PDOTEST_ATTR='.serialize([PDO::ATTR_PERSISTENT => true]));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
$f->__invoke($t->bar(Test::foo(do_throw())));
var_dump(version_compare('1.2', '2.1', '??'));
date_default_timezone_set('UTC');
printf("Length       : %d\n", $field->length);
var_dump($res);
$stmt->execute();
var_dump($headers2['Author']);
printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
var_dump($foo);
$element->prepend('x', new DOMEntity);
http_server_kill($pid);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
zerofill(2, $link, 'TINYINT');
$db->exec('INSERT INTO test_33689 VALUES(1)');
var_dump($array->offsetExists('nokey'));
var_dump(__METHOD__);
$priorityQueue->insert("c", 0);
ob_end_clean();
unlink($fn);
ob_end_clean();
$link->close();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
zerofill(10, $link, 'DOUBLE PRECISION');
st1.txt");

var_dump(cou;
gc_collect_cycles();
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
foo();
phpinfo(INFO_MODULES);
spl_autoload_register($callback1);
$this->mysqli->close();
file_put_contents($fn, $compressed);
closedir( $dir_handle );
$insert->execute();
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
var_dump(-9_223_372_036_860_776_000 % -1);
printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
var_dump( is_array ($var_array) );
var_dump(array_all([$key => 1], static fn () => false));
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
