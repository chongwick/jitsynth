<?php
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
session_start();
var_dump($dt);
bar('first try');
$server->handle($HTTP_RAW_POST_DATA);
$im2 = imagecreatefrompng($dest);
var_dump(range(1.5, 3.5, -1.5));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
var_dump(mysqli_get_server_version($link));
md5('foo');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NUM);
$phar->stopBuffering();
$var = '';
$pdo->exec("insert into t select n + 1, 'non '||t from t");
var_dump($im);
var_dump($dom->getElementById('x')?->nodeName);
var_dump( range(1, 7, fdiv(0, 0)) );
session_start();
$foo = new Foo();
var_dump(strlen($phar->getStub()));
var_dump(session_cache_expire());
$dom->loadHTML($html);
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
$string = str_repeat("A", 1024);
$pdo->setAttribute(PDO::ATTR_PREFETCH, 0);
var_dump ( rtrim("rtrim testABCXYZ", "A..Z") );
$a->rewind();
$generator->send($fixedArray);
$priorityQueue->insert("c", 0);
$stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
printf("printf test 21:%016b\n", 170);
var_dump(0);
debug_print_backtrace();
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
printf("[004] Trace file '%s' is very small. filesize() reports only %d bytes. Please check.\n",
            $trace_file,
            filesize($trace_file));
file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
printf("# %s:\n", $name);
$this->public_var = 10;
$ar1 = array("row1" => 2, "row2" => 1);
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
var_dump ( rtrim("rtrim test        ", " ") );
var_dump($fi->file($f));
$reflector->resetAsLazyProxy($obj, function ($obj) {
    var_dump("initializer");
    return new C();
});
(stat("$d0\\test0.txt")) > 0);
var_dump(coun;
range($var,1,$var);
var_dump(-2147483648 % -2);
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    printf("[006] Found unexpected flags '%s' for %s, found '%s' with MySQL %s'\n",
                $unexpected_flags, $column_def, $flags_found, mysqli_get_server_version($link));
    printf("printf test 6:%-010.2f\n", 2.5);
}
$zip->open($filename);
$after = memory_get_usage();
$baz = (float)$foo;
$mutable = $reflection->newInstanceWithoutConstructor();
$b = 'x';
$root->__construct("malformed");
test('Ghost', $obj);
var_dump($target);
var_dump(array_multisort($ar1));
var_dump($rm->getNumberOfParameters());
var_dump($node->textContent == $text);
fclose($fp);
proc_close($proc);
printf("[005] [%d] %s\n", $link->errno, $link->error);
(stat("$d0\\test0.txt")) > 0);
var_dump(coun;
printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
printf( "testint: %d\n", $r['testint'] );
printf("[012] The flags '%s' have not been reported for %s, found '%s'\n",
                    $missing_flags, $field->name, $flags_found);
var_dump($obj);
$test1->test();
t2();
$pem_cert = '
-----BEGIN CERTIFICATE-----
MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
+Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
-----END CERTIFICATE-----
';
$fd = fopen('php://memory','w');
$array1 = array(1, 2);
$time = '2000-01-01 00:00:00.000000';
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2));
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
$tester->close();
gc_collect_cycles();
var_dump(foo());
var_dump("done");
;
test($nodes, "asXml", fn ($n) => $n->asXml());
var_dump($date1->format('D') == $date2->format('D'));
var_dump(file_exists($filename));
ini_set('display_errors',true);
$element->prepend('x', new DOMEntity);
var_dump( strtr($str, $from, $to) );
var_dump(spl_autoload_unregister($callback1));
$stmt->bind_result($id);
pg_close($dbh);
$EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
var_dump($oIntlDateFormatter->getTimeZone()->getID());
$dom->strictErrorChecking = false;
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
