<?php
class A
{
    public string $prop;
}
$a = new A();
function f_0() {
    function f_1() {
        $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
            '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
            '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
            '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
            '996def90090303b7ad';
        $q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
        $g = '00b320300a0bc55b8f0ec6edc218e2185250f38fbb8291db8a89227f6e41' .
            '00d47d6ccb9c7d42fc43280ecc2ed386e81ff65bc5d6a2ae78db7372f5dc' .
            'f780f4558e7ed3dd0c96a1b40727ac56c5165aed700a3b63997893a1fb21' .
            '4e882221f0dd9604820dc34e2725dd6901c93e0ca56f6d76d495c332edc5' .
            'b81747c4c447a941f3';
        var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
        function f_2() {
            $users = MailBox::USERS;
            $to = $users[0];
            $from = ini_get('sendmail_from');
            $bcc = $users[2];
            $subject = 'mail_bug80706';
            $message = 'hello';
            $xMailer = 'bug80706_x_mailer';
            $headers = "From: {$from}\r\n"
                . "Bcc: {$bcc}\r\n"
                . "X-Mailer: {$xMailer}";
            $res = mail($to, $subject, $message, $headers);
            session_start();
            function f_3() {
                register_shutdown_function('ABC');
                function f_4() {
                    function zerofill($offset, $link, $datatype, $insert = 1) {
                    
                            mysqli_query($link, 'ALTER TABLE test DROP zero');
                            $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
                            if (!mysqli_query($link, $sql)) {
                                // no worries - server might not support it
                                return true;
                            }
                    
                            if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                                printf("[%03d] UPDATE failed, [%d] %s\n",
                                    $offset, mysqli_errno($link), mysqli_error($link));
                                return false;
                            }
                    
                            if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                                printf("[%03d] SELECT failed, [%d] %s\n",
                                    $offset, mysqli_errno($link), mysqli_error($link));
                                return false;
                            }
                    
                            $row = mysqli_fetch_assoc($res);
                            $meta = mysqli_fetch_fields($res);
                            mysqli_free_result($res);
                            $meta = $meta[0];
                            $length = $meta->length;
                            if ($length > strlen($insert)) {
                    
                                $expected = str_repeat('0', $length - strlen($insert));
                                $expected .= $insert;
                                if ($expected !== $row['zero']) {
                                    printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                                    return false;
                                }
                    
                            } else if ($length <= 1) {
                                printf("[%03d] Length reported is too small to run test\n", $offset);
                                return false;
                            }
                    
                            return true;
                        }
                    zerofill(11, $link, 'DECIMAL');
                    function f_5() {
                        function test(array... $args) {
                            var_dump($args);
                        }
                        test([0], [1], 2);
                    }
                    function foo() {
                        $x = 1;
                        $x += 0;
                        ++$x; // mem -> reg
                        return $x;
                    }
                    var_dump(foo());
                }
                ob_start("test");
            }
            var_dump(json_last_error_msg());
        }
        $curl = curl_init("http://www.google.com");
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
    }
    time_nanosleep(0, 1000000000);
}
var_dump(sha1_file(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile'));
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
function f_6() {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
    function f_7() {
        $fp = fopen('php://input', 'r+');
        function f_8() {
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            function f_9() {
                $dom = Dom\HTMLDocument::createFromString(<<<HTML
                <!DOCTYPE html>
                <html>
                    <body>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                        <math></math>
                    </body>
                </html>
                HTML);
                $body = $dom->getElementsByTagName("body")[0];
                $prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
                var_dump($prefixed->lookupNamespaceURI(""));
                var_dump(baz());
            }
            function zerofill($offset, $link, $datatype, $insert = 1) {
            
                    mysqli_query($link, 'ALTER TABLE test DROP zero');
                    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
                    if (!mysqli_query($link, $sql)) {
                        // no worries - server might not support it
                        return true;
                    }
            
                    if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
                        printf("[%03d] UPDATE failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
                        return false;
                    }
            
                    if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
                        printf("[%03d] SELECT failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
                        return false;
                    }
            
                    $row = mysqli_fetch_assoc($res);
                    $meta = mysqli_fetch_fields($res);
                    mysqli_free_result($res);
                    $meta = $meta[0];
                    $length = $meta->length;
                    if ($length > strlen($insert)) {
            
                        $expected = str_repeat('0', $length - strlen($insert));
                        $expected .= $insert;
                        if ($expected !== $row['zero']) {
                            printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                            return false;
                        }
            
                    } else if ($length <= 1) {
                        printf("[%03d] Length reported is too small to run test\n", $offset);
                        return false;
                    }
            
                    return true;
                }
            printf("[%03d] UPDATE failed, [%d] %s\n",
                            $offset, mysqli_errno($link), mysqli_error($link));
        }
        var_dump(strncmp("test ", "e", 10));
    }
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    fclose($output);
}
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
$argv = array(1, 2, 3);
var_dump($argv);
