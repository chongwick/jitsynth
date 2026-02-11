<?php
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
A::$a = 'A new';
$gen = gen();
$b = bar($gen);
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
$from = "%#$*&@()";
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$list = [];
$list[] = $it->getSubPathname();
function f_0() {
    $a = 1;
    return [0, $a];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $heredoc_string = <<<EOT
            This is line 1 of 'heredoc' string
            This is line 2 of "heredoc" string
            EOT;
            $heredoc_null_string =<<<EOT
            EOT;
            $str_array = array(
                                // string without any characters that can be backslashed
                                'Hello world',
            
                                // string with single quotes
                                "how're you doing?",
                                "don't disturb u'r neighbours",
                                "don't disturb u'r neighbours''",
                                '',
                                '\'',
                                "'",
            
                                // string with double quotes
                                'he said, "he will be on leave"',
                                'he said, ""he will be on leave"',
                                '"""PHP"""',
                                "",
                                "\"",
                                '"',
                        "hello\"",
            
                                // string with backslash characters
                                'Is your name Ram\Krishna?',
                                '\\0.0.0.0',
                                'c:\php\testcase\addslashes',
                                '\\',
            
                                // string with nul characters
                                'hello'.chr(0).'world',
                                chr(0).'hello'.chr(0),
                                chr(0).chr(0).'hello',
                                chr(0),
            
                                // mixed strings
                                "'\\0.0.0.0'",
                                "'\\0.0.0.0'".chr(0),
                                chr(0)."'c:\php\'",
                                '"\\0.0.0.0"',
                                '"c:\php\"'.chr(0)."'",
                                '"hello"'."'world'".chr(0).'//',
            
                        // string with hexadecimal number
                                "0xABCDEF0123456789",
                                "\x00",
                                '!@#$%&*@$%#&/;:,<>',
                                "hello\x00world",
            
                                // heredoc strings
                                $heredoc_string,
                                $heredoc_null_string
                              );
            $now = new DateTimeImmutable();
            $originalEnvelopeData = "any string with \x1a is cut at this point.";
            $conn = odbc_connect($dsn, $user, $pass);
            odbc_exec($conn, 'CREATE TABLE bug68087 (ID INT, VARCHAR_COL VARCHAR(100), DATE_COL DATE)');
            $curl = curl_init("http://www.google.com");
            curl_setopt($curl, CURLOPT_PRIVATE, "123");
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
        }
    }
    $a = "lest";
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $dom = new DOMDocument;
            var_dump($dom->getElementById('x')?->nodeName);
        }
    }
}
$list = [];
asort($list);
$row_stmt = null;
var_dump($row_stmt);
