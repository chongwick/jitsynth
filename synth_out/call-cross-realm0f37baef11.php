<?php
trait Foo {
    public static function myMethod(string $foo) {
        echo "Called ", __METHOD__, PHP_EOL;
        var_dump($foo);
    }
}
php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
$text = '<p>hello world &trade;</p>';
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->getElementById('test');
$node->textContent = $text;
$unset_var = 10;
$fn = function() { return static::name(); };
$object = new StdClass();
$s = 'C:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
$c("abc");
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
