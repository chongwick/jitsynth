<?php
function f_0() {
    try {
        return new Exception;
    } catch (Exception $e) {}
    if (true) {
        $reflection = new ReflectionClass('\DateTimeImmutable');
        while (true) {
            break;  // avoid infinite loop
            try {
            } catch (Exception $e) {}
            if (true) {
                $special_chars_str = <<<EOD
                Example of heredoc string contains
                $#%^*&*_("_")!#@@!$#$^^&*(special)
                chars.
                EOD;
            }
            $db = MySQLPDOTest::factory();
            $stmt = $db->prepare('SELECT * FROM test_33689');
            $tmp = $stmt->getColumnMeta(0);
            print_r($tmp);
        }
        $s = new SplObjectStorage();
        $s->attach($s);
    }
    $db = MySQLPDOTest::factory();
    return $db;
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
