<?php
ob_clean();
$s->attach($s);
odbc_exec($conn, "CREATE TABLE bug80147 (id INT, whatever VARBINARY(50))");
$start = memory_get_usage() + 1024;
var_dump(spl_autoload_functions());
$func_ptrs = [
    'bug_gh9090_void_none_ptr',
    'bug_gh9090_void_int_char_ptr',
    'bug_gh9090_void_int_char_var_ptr',
    'bug_gh9090_void_char_int_ptr',
    'bug_gh9090_int_int_char_ptr',
];
$this->server->handle($request);
$dom->documentElement->appendChild($test1);
$tester->expectLogTerminatingNotices();
var_dump($prop->getRawValue($a));
$a->next();
var_dump($e->getCode());
var_dump( range(1, 7, fdiv(0, 0)) );
var_dump($phar->getStub());
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
ched->splitText($length);
pri;
md5('foo');
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
var_dump(error_reporting());
$this->values = array('a' => 0);
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
ini_set("intl.error_level", E_WARNING);
$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
var_dump(soundex("Euler"));
print_r(get_object_vars($obj));
phpinfo(INFO_VARIABLES);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
$uri = 'http://' . stream_socket_get_name($server, false);
var_dump($headers1['Title'][0] === '?');
$this->mysqli->close();
fwrite($fp, "I am the LOB data");
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump(A::fromArray(['a' => 'foo']));
$xml = <<<'EOT'
        <!doctype html>
        <html>
            <head>
                <title>GHSA-p3x9-6h7p-cgfc</title>

                <meta charset="utf-8" />
                <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
            </head>

            <body>
                <h1>GHSA-p3x9-6h7p-cgfc</h1>
            </body>
        </html>
        EOT;
imagescale($im, 1, 1, -10);
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} finally {
		print "handle first\n";
		return "ok";
	}
})();
var_dump(sin($ninety));
printf("Orgname      : %s\n", $field->orgname);
var_dump(array_column($array, 'superhero'));
var_dump( array_fill($start_key , $num , $val) );
$iterator++;
if (true) {
    $row_stmt = null;
}
$unset_var = 10;
var_dump('ERR');
var_dump($arg);
$InvMocker->addMatcher($OuterMatcher);
$s = new SplObjectStorage();
validate((object) []);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $tags = exif_read_data($mixedEndiannessFile, 'EXIF', true, false);
}
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
$o = new C;
var_dump(gzeof($h));
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
unlink($fn);
est1.txt");

rmdir($d0);
