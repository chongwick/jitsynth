<?php
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
var_dump($diff->invert, $diff->s, $diff->f);
set_exception_handler(null);
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
var_dump($obj);
reset( $array_test );
$f = __DIR__."/data/test.txt.gz";
openssl_pkcs12_read($p12_contents, $cert_data, $password);
var_dump( is_array ($var_array) );
var_dump(new Test);
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
var_dump($rf->getNumberOfRequiredParameters());
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    ion="1.0" encoding="UTF-8"?>
<books><book num="1" idx="2">book1</book></books>';
file_put_contents($file;
    var_dump(range('a', 'z', 100));
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $unset_var = 10;
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
}
$this->a = new Canary();
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
$xml = '<?xml version="1.0" encoding="utf-8" ?>
<test>
</test>';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
$c = new C();
var_dump(gzread($h, -1));
test('Ghost', $obj);
$db->setNoticeCallback($callback);
var_dump($dom->lookupNamespaceURI("xmlns"));
var_dump($array[$a]);
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
$root->__construct("malformed");
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
$db = getDbConnection();
$obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
$res = $mysqli->query('SELECT 42');
var_dump(scandir(''));
printf("%s: %s\n", $e::class, $e->getMessage());
restore_exception_handler();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
test();
error_reporting(E_ALL);
display($res);
$db = MySQLPDOTest::factory();
$rc = new ReflectionClass(B::class);
$reflector = new ReflectionClass(C::class);
$tester->expectLogStartNotices();
extAttribute();
            echo $reade;
$codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
$res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
$x = new SoapClient(__DIR__."/bug27722.wsdl");
$immutable = \DateTimeImmutable::createFromMutable($mutable);
$references[$idx++]['id_copy']	= $row['id'];
date_default_timezone_set('UTC');
var_dump("hello");
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
$dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $now, 'interval' => $dateinterval]);
gzpassthru($h);
var_dump( is_object($object) );
phpinfo(INFO_VARIABLES);
$tester->start();
printf("Table        : %s\n", $field->table);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
var_dump($obj);
display($res);
$s = "1234567890a";
$ret = $y;
printf("Table        : %s\n", $field->table);
odbc_binmode($res, ODBC_BINMODE_RETURN);
$c = $i < 2;
curl_setopt($ch, CURLOPT_VERBOSE, true);
$mysqli->query($sql);
$id_2_date = '2014-09-24';
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(fseek($fp, -32, SEEK_CUR));
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    ob_flush();
    $fn = "bug71263.bz2";
    $db = PDOTest::factory();
    file_get_contents('dummy://foo', false, $context);
}
var_dump(sin($oneeighty));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
