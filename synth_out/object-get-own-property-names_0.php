<?php
$key_compare_func = 'compare_function';
var_dump($obj);
$unset_var = 10;
$stmt = $db->prepare("SELECT 1, 2 AS named, 3");
ini_set("intl.error_level", E_WARNING);
var_dump($row['bit_column_1']);
fclose($fp);
var_dump($test);
$style[$i++] = $color;
$a = new A();
phpinfo(INFO_MODULES);
var_dump($dt);
$container->appendChild(createElement($dom, "foo:HTML", "6"));
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
$diff = $now->diff($ago, true);
++$testCasesTotal;
$OuterMatcher->methodNameMatcher = null;
var_dump($res);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
$tag->append("foo");
$id_1_date = '2014-09-23';
var_dump($array);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca)));
$bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump($dom->lookupNamespaceURI("a"));
var_dump(intlcal_is_weekend(1));
var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
set_exception_handler("foo");
var_dump($d);
gc_collect_cycles();
var_dump($foo);
$d = new D();
$hash = password_hash(
    "php",
    PASSWORD_ARGON2I,
    ['memory_cost' => 64 << 10, 'time_cost' => 4, 'threads' => 1]
);
$this->server = new SoapServer($wsdl, $options);
var_dump($s["010"], isset($s["010"]));
var_dump($e);
var_dump($dom->getElementById('x')?->nodeName);
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY, array($cpca), $utfl));
$inner = 'r:2;';
$mysql->query("INSERT INTO temp (id) VALUES (3000000897),(3800001532),(3900002281),(3100059612)");
$b->execute(array (5));
var_dump(gethostbyname($host));
$err = null;
$a[1] = 5;
$r = new ReflectionClass('Test2');
var_dump($h1->length);
fwrite($fp, "test");
var_dump(substr_compare('/', '/asd', 0, 4));
var_dump("hello");
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
print_r($row);
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
try {
    crash();
    var_dump($row);
} catch (Exception $e) {}
if (true) {
    printf("Content-Type Default OK" . PHP_EOL);
}
try {
    var_dump(range(1, 3, -1));
    var_dump($d->getTimezone(), $tz2);
} catch (Exception $e) {}
if (true) {
    mysqli_free_result($res);
}
