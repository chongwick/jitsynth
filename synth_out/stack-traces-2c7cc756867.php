<?php
class C {
    public int $a;
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
function f_0() {
    $obj = new C();
    try {
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        var_dump($dom->lookupNamespaceURI("xml"));
        $outfile = tempnam(sys_get_temp_dir(), "ssl");
        $eml = __DIR__ . "/signed.eml";
        var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
    } catch (Exception $e) {}
    if (true) {
        $c = new C();
        $propReflector = new ReflectionProperty($c, 'dyn');
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    }
}
function f_1() {
    $client = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("Multipart/Related")
        ],
      ]),
    ]);
    try {
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
        ob_start(function() {
            declare(ticks=1);
            register_tick_function(
               function() { }
            );
        });
    } catch (Exception $e) {}
    if (true) {
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub();
$header = <<<HEADER
enum bug_gh16013_enum {
	BUG_GH16013_A = 1,
	BUG_GH16013_B = 2,
};
struct bug_gh16013_int_struct {
	int field;
};
struct bug_gh16013_callback_struct {
	int8_t (*return_int8)(int8_t);
	uint8_t (*return_uint8)(uint8_t);
	int16_t (*return_int16)(int16_t);
	uint16_t (*return_uint16)(uint16_t);
	int32_t (*return_int32)(int32_t);
	uint32_t (*return_uint32)(uint32_t);
	float (*return_float)(float);
	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
};

char bug_gh16013_return_char();
bool bug_gh16013_return_bool();
short bug_gh16013_return_short();
int bug_gh16013_return_int();
enum bug_gh16013_enum bug_gh16013_return_enum();
struct bug_gh16013_int_struct bug_gh16013_return_struct();
HEADER;
$ffi = FFI::cdef($header, ffi_get_php_dll_name());
var_dump($ffi->bug_gh16013_return_bool());
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
var_dump($shm_id1);
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
