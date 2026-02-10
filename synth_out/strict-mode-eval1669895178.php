<?php
$oldcwd = getcwd();
$array1 = array(1, 2);
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$id = odbc_result($res, "ID");
$total = 10000;
$reflection = new ReflectionClass('\DateTime');
unserialize('a:2:{i:0;O:9:"000000000":10000000');
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Decimals     : %d\n", $field->decimals);
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
$zip = new ZipArchive();
$zip->extractTo(__DIR__);
function f_0() {
    $GLOBALS["obj"] = 24;
    try {
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $stmt = $pdo->prepare($reqOf3);
        $stmt->execute();
    } catch (Exception $e) {}
    if (true) {
        $i = 1;
        ++$failuresNb;
        $varOutput = ob_get_contents();
        $varOutput = str_replace(
                [$var_dim_filename],
                ['%s'],
                $varOutput
            );
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    }
    $filename = __DIR__ . '/bug77432.phar';
    $phar = new Phar($filename);
    $phar->startBuffering();
    function f_1() {
        $empty_string = <<<EOT
        EOT;
        try {
            $responses = array(
                "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
                . "Location: /try-again\r\n"
                . "Transfer-Encoding: chunked\r\n\r\n"
                . "0\r\n\r\n",
                "data://text/plain,HTTP/1.1 200 Ok\r\n"
                . "Transfer-Encoding: chunked\r\n\r\n"
                . "4\r\n1234\r\n0\r\n\r\n",
            );
            ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
            http_server_kill($pid);
        } catch (Exception $e) {}
        if (true) {
            $reflector = new ReflectionClass(C::class);
            set_error_handler("customErrorHandler");
        }
        function test($foo) {
            var_dump(0);
            var_dump($foo[0]);
        }
        test("str");
        function f_2() {
            function genResponses($server) {
                $uri = 'http://' . stream_socket_get_name($server, false);
                yield "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\nLocation: $uri/document.xml\r\nContent-Type: text/html;charset=utf-16\r\n\r\n";
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
                // Missing content-type in actual response.
                yield "data://text/plain,HTTP/1.1 200 OK\r\n\r\n{$xml}";
            }
            $uri = 'http://' . stream_socket_get_name($server, false);
            try {
                $bert = "file://" . __DIR__ . "/bug41033.pem";
                var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
            } catch (Exception $e) {}
            if (true) {
                $references = array();
                $idx = 0;
                $references[$idx]['row_ref'] 		= &$row;
                $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
                foreach ([false, true] as $emulate) {
                    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
                
                    try {
                        $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
                        $stmt->execute();
                    } catch (PDOException $e) {
                        var_dump('ERR');
                    }
                
                    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
                    $stmt->execute();
                
                    var_dump($stmt->fetch());
                }
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
            }
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
            function f_3() {
                $max = 0x66666666;
                try {
                    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
                    ;
                } catch (Exception $e) {}
                if (true) {
                    $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
                    $domd = new DOMDocument();
                    $xp = new DOMXPath($domd);
                    $xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
                }
                $compression = [
                    'gz' => ['zlib.deflate', 'gzinflate'],
                    'bz2' => ['bzip2.compress', 'bzdecompress']
                ];
                foreach ($compression as $ext => [$filter, $function]) {
                    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
                    stream_filter_append($stream, $filter);
                    fwrite($stream,"sdfgdfg");
                    fflush($stream);
                    fclose($stream);
                
                    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
                    var_dump($function($compressed));
                }
                $stream = fopen(__DIR__ . "/75776.$ext", 'w');
                stream_filter_append($stream, $filter);
            }
            $depth0 = "depth02";
            $depth1 = "depth1";
            $depth2 = "depth2";
            $targetDir = __DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . $depth2;
            mkdir($targetDir, 0777, true);
        }
        mysqli_free_result($res);
    }
    date_default_timezone_set('Europe/Kiev');
}
function validate($value)
{
    foreach ([0] as $_) {
        $a = &$value->a;
        $value->a ?? null;
    }
}
validate((object) []);
