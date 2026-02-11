<?php
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $c = new C();
    $c->dyn = 1;
    $propReflector = new ReflectionProperty($c, 'dyn');

    try {
        $propReflector->setRawValueWithoutLazyInitialization($obj, 'test');
    } catch (\ReflectionException $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
function f_0() {
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyProxy(function () {
        throw new \Exception('Initializer');
    }, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
    var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    function f_1() {
    }
}
$threesixty = M_PI * 2.0;
var_dump(sin($threesixty));
function f_2() {
    $meta = mysqli_fetch_fields($res);
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    function f_3() {
    }
}
$zip = new ZipArchive();
$zip->close();
function f_4() {
    function f_5() {
        function f_6() {
        }
    }
    $id_1_date = '2014-09-23';
    $id_2_date = '2014-09-24';
    $conn = odbc_connect($dsn, $user, $pass);
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    function f_7() {
    }
}
var_dump($row);
function f_8() {
    function f_9() {
        function f_10() {
        }
    }
    debug_print_backtrace();
    function f_11() {
        function f_12() {
        }
    }
    $im = imagecreate(800, 800);
    imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
}
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("HTML"));
function f_13() {
    function f_14() {
        function f_15() {
        }
    }
    $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $datefmt->parse('abc');
    function f_16() {
        function f_17() {
            function f_18() {
            }
        }
        printf("# %s\n", $name);
    }
    $cert = "file://" . __DIR__ . "/cert.crt";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
}
$array = new ArrayObject();
var_dump($array->offsetExists('nokey'));
function f_19() {
    function f_20() {
        function f_21() {
            function f_22() {
            }
        }
        catch (\Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
    function f_23() {
    }
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('initializer');
});
test('Proxy', $obj);
function f_24() {
    function f_25() {
    }
}
