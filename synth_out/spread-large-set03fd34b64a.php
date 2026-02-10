<?php
$im = imagecreate(800, 800);
$r = socket_sendmsg($sends1, [
    "name" => [ "addr" => "::1", "port" => 3002],
    "iov" => ["test ", "thing", "\n"],
    "control" => [[
        "level" => IPPROTO_IPV6,
        "type" => IPV6_TCLASS,
        "data" => 40,
    ]]
], 0);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    class C extends stdClass {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function () {});
}
$oneeighty = M_PI;
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
$arr = array(new Element(), new Element(), new Element());
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    class C {
        public int $a;
    }
    $reflector = new ReflectionClass(C::class);
    $obj = new C();
    $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
        try {
            $reflector->resetAsLazyGhost($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        try {
            $reflector->resetAsLazyProxy($obj, function () { });
        } catch (Error $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
    
    });
}
class A {
    private static $x = 1;
}
class B extends A {
    function bar() {
        var_dump(self::$x);
    }
}
$a = new B;
$plain = "The quick brown fox jumps over the lazy dog.";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
$compressed[strlen($compressed)-2] = 'X';
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
}
public function __construct($c)
    {
        $this->b = new C($c);
    }
public function __construct($c)
    {
        $this->c = $c;
    }
$this->c = $c;
