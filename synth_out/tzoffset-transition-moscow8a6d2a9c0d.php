<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function test(object $obj) {
        $obj->a = 1;
    }
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function foo() {
  var_dump("hello");
}
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
mysqli_free_result($res);
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$tester = new FPM\Tester($cfg, $code);
[$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
$tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
var_dump(__METHOD__);
printf("printf test 1:%s\n", "simple string");
$php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
var_dump(`$php -n -v`);
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyGhost($obj, function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
$inputs = array(
      'The ISO 8601:1988 week number' => "%V",
      'Weekday as decimal' => "%u",
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
}
var_dump( gmstrftime($value, $timestamp) );
$sh = new SessionHandler;
$sh->open('path', 'name');
spl_autoload_register(function ($name) {
});
ini_set("soap.wsdl_cache_enabled",0);
$im = ImageCreateTrueColor(10, 10);
imagealphablending($im, true);
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$arrays = array(
  array(),
  array(NULL),
  array(null),
  array(true),
  array(""),
  array(''),
  array(array(), array()),
  array(array(1, 2), array('a', 'b')),
  array(1 => 'One'),
  array("test" => "is_array"),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test')
);
foreach ($arrays as $var_array ) {
  echo "-- Iteration $loop_counter --\n"; $loop_counter++;
  var_dump( is_array ($var_array) );
}
var_dump( is_array ($var_array) );
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
define("FOO", "okey");
$dest = __DIR__ . "/bug40228";
rmdir($dest . '/test');
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->close();
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "urn:a", "foo:HTML", "7"));
mysqli_fetch_field($res);
printf("printf test 21:%016b\n", 170);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
var_dump($obj);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$gen = gen();
$a = bar($gen);
$a->next();
set_error_handler('error_handler');
$cert = "-----BEGIN CERTIFICATE-----
MIIDXDCCAkSgAwIBAgIKq/f5U3FzthdKUzANBgkqhkiG9w0BAQUFADBcMRIwEAYD
VQQDEwlzZXRhcGRmLWExCTAHBgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcN
AQkBFhRzdXBwb3J0QHNldGFzaWduLmNvbTELMAkGA1UEBhMCREUwHhcNMTUwOTA4
MDkzNDExWhcNMjAwOTA4MDkzNDExWjBcMRIwEAYDVQQDEwlzZXRhcGRmLWExCTAH
BgNVBAoTADEJMAcGA1UECxMAMSMwIQYJKoZIhvcNAQkBFhRzdXBwb3J0QHNldGFz
aWduLmNvbTELMAkGA1UEBhMCREUwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEK
AoIBAQCkmTLvUIYfqAKC1CHVgABlemrFIVRm4JGeB0jIGofyrm3yVwR4YcK0eUmt
/0nbFfsFsU0/C9dXKZYD42t5YpLFsj666Z1EoU1CfSIW2bf0HaWVJ+oNT5twS3dv
RTzAcnPM44GxO4y6GUW6un0/bT/MZbFKbb3NI1L0mwY7EoqUXR68XxuHqWETaslm
Sbp1XvbLsJjgV9X3ihi7JC7A9kEzrKh+RBsXEXwlSv5JO2TUdwq9P4EbjqvgiaV1
vFNAArioX5pIUIm9ahAm8d7jjW6DFfV798rTzaQ3GJs0yC3UD6xhmbTbdC/D9Pot
8RGu89Fx6E+O5j4LwGH4kiYjgvYZAgMBAAGjIDAeMA8GCSqGSIb3LwEBCgQCBQAw
CwYDVR0PBAQDAgOYMA0GCSqGSIb3DQEBBQUAA4IBAQBCA8iXz7zxAmCWNZ0faiLm
aKw8u2PUq+EPKrGKc9Q70Ksw/e/EHvWrghFzmu5MOZRn/QIWq++sbbc8eOiaRDE8
lWCW596FLW4habXKw0sjDNcyEBArPgDp17O6NgHqI2U1KL1P2Y40e0YH2BWxNS+f
pmWZekjiC6jfId2JGsyPZUTX4USwthG4dFX0/BWYg+K7kXvQzMobes2NxW3Iqn8h
FUNgraCzlQMSfE2gwAMSUXTJubUGorj4LFYSiLIIJvf6KlmuR5uOIi5lSjSeZf5E
FLEHVhrz3o2icUeyb1K1BTAQRZ/H3GZ0QpgqSK5vmuV9C+rzezQMoy4/8UUnNPMt
-----END CERTIFICATE-----
";
$tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
$tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
foo();
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt1 = $pdo->query($reqOf3);
display([ $stmt1->fetch() ]);
$client2 = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("")
    ],
  ]),
]);
$client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
$p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
    '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
    '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
    '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
    '996def90090303b7ad';
$q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
$g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
    '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
    'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
    '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
    'b81747c4c447a941f3';
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
var_dump("done");
