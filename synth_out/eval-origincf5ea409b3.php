<?php
$pid = pcntl_fork();
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
var_dump($obj);
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
$heredoc_null_string =<<<EOT
EOT;
$db = PDOTest::factory();
$driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
$is_oci = $driver == 'oci';
$doc = new \DOMDocument();
$target = $doc->documentElement->lastChild;
var_dump($target);
printf("printf test 5:%-10.2f\n", 2.5);
error_reporting(E_ALL);
var_dump(new Foo);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $_ = str_repeat("A", 512);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $i = 1;
    $date = new DateTime("2011-05-17T22:14:12");
    $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    var_dump($date->format("D") == $date2->format("D"));
}
