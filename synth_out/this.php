<?php
function f_0() {
    public static function fromArray(array $props): self
        {
            $me = new static;
            foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
            return $me;
        }
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
$GLOBALS['b'] = 2;
$a = &$GLOBALS['a'];
$b = &$GLOBALS['b'];
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
var_dump(soundex("Lukasiewicz") == soundex("Ghosh"));
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
$obj = new testObject();
$obj->setTest('test');
openssl_error_string();
$containers = array();
global $containers;
global $containers;
$containers[spl_object_hash($this)] = NULL;
$dtor = new class { function __destruct() { throw new Exception; } };
c1::$a1[] = 1;
class ParentClass { }
class ChildClass extends ParentClass {
    public function testIsCallable() {
        var_dump(is_callable(array($this, 'parent::testIsCallable')));
    }
    public function testIsCallable2() {
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
    }
}
$child = new ChildClass();
$child->testIsCallable();
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$prefix . "フォルダ";

mkdir($prefi
est1.txt");

rmdir($d0);
;
var_dump(spl_autoload_functions());
var_dump(spl_autoload_functions());
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
$rcrt = openssl_x509_read($cert);
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
catch (\Exception $e) {
    printf("%s: %s\n", $e::class, $e->getMessage());
}
printf("%s: %s\n", $e::class, $e->getMessage());
