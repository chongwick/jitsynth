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
function does_not_work()
{
    global $data; // Remove this line to make array_multisort() work

    $data = array('first', 'fifth', 'second', 'forth', 'third');
    $sort = array(1, 5, 2, 4, 3);
    array_multisort($sort, $data);

    var_dump($data);
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
function &test() {
    try {
        return $a;
    } finally {
        $a = 2;
    }
}
class bug8318 extends \SplFileObject
{
    public function __construct()
    {
    }

    public function fpassthru(): int
    {
        return 0;
    }
}
function f_0() {
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    $reflector = new ReflectionClass(C::class);
    $obj = $reflector->newLazyGhost(function () {
        throw new \Exception('initializer');
    });
    test('Ghost', $obj);
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
    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    var_dump(session_cache_limiter());
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Length       : %d\n", $field->length);
}
function f_1() {
    call_user_func("static::ok");
    $a = new Test();
    var_dump($a->value);
    mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
}
does_not_work();
$obj = new C();
var_dump($obj);
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
var_dump(test());
$response = ob_get_contents();
define('OBJECT_COUNT', 10000);
setlocale(LC_ALL, 'de_DE', 'de-DE');
mysqli_close($link);
$cl = new bug8318;
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
