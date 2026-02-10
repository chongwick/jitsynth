<?php
function f_0() {
    $array = new ArrayObject();
    try {
        echo "Hello from t2 2 ";
    } catch (Exception $e) {}
    if (true) {
        return 0;
    }
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
function f_1() {
    $output = array();
    try {
        catch (Exception $error) {
            echo $error->getMessage() . "\n";
        }
        echo $error->getMessage() . "\n";
    } catch (Exception $e) {}
    if (true) {
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
        return 42;
    }
}
function g() {
    yield 'foo';
    Fiber::suspend();
}
var_dump(yield from g());
