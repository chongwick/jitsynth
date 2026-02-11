<?php
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function test(string $name, object $obj) {
    printf("# %s\n", $name);

    $reflector = new ReflectionClass(C::class);
    try {
        $reflector->initializeLazyObject($obj);
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

    try {
        var_dump(unserialize(serialize($obj)));
    } catch (Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
}
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
            var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
        }
        if (!true) {
            if (true) {
                set_error_handler(function($no, $msg) {
                    throw new Exception($msg);
                });
            }
            if (!true) {
                $ao = new ArrayObject(new C);
                $ai = $ao->getIterator();
                $ai->seek(0);
            }
        }
    }
    return true;
}
$c = new C();
$c->prop2 = 'hello world';
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
test('Ghost', $obj);
$im = imagecreate(800, 800);
imageline($im, 600, 200, 600, 700, IMG_COLOR_STYLED);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
