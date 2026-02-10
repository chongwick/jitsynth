<?php
ob_end_flush();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
gzclose($h);
ini_set('display_errors',true);
$b = 'ok';
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
$curl = curl_init("http://www.google.com");
$r = new ReflectionClass('Test2');
$m = $r->getStaticProperties();
$m['data3'] = 300;
var_dump(ob_get_contents());
$var = '';
$cpca = __DIR__ . "/san-cert.pem";
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
var_dump(odbc_result($res, 'whatever'));
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
$immutable = \DateTimeImmutable::createFromInterface($mutable);
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
printf("printf test 20:%16X\n", 170);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
$db = getDbConnection();
$sql = '
    SET NOCOUNT ON
    SELECT 0 AS [result]
';
$stmt = $db->query($sql);
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
date_default_timezone_set("Asia/Calcutta");
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
mt_srand(1234567890);
