<?php
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
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
function f_0() {
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
$file = __DIR__ . "/bug71127.inc";
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 5));
$textascii = 'This is an "example" of using DOM splitText';
$start = 30;
$length = 3;
$dom = new DOMDocument('1.0', 'UTF-8');
$node = $dom->createTextNode($textascii);
$matched = $node->splitText($start);
$matched->splitText($length);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
$phar['x'] = 'hi';
$fd = fopen('php://memory','w');
$filter = stream_filter_append($fd, 'user_filter');
$time = '9999-11-33';
$timeZone = new DateTimeZone('UTC');
$dateTime = new DateTime($time, $timeZone);
$o = new C;
$o->foo();
$meta_res = $stmt->result_metadata();
$field = $meta_res->fetch_field();
printf("Orgtable     : %s\n", $field->orgtable);
$filename = "bug51997.bz2";
$str = "This is a test string.\n";
$bz = bzopen($filename, "w");
bzwrite($bz, $str);
var_dump(getenv("HTTP_X_FORWARDED_FOR"));
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function ($obj) {
    var_dump("initializer");
    $obj->__construct();
});
$obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
test('Proxy', $obj);
$link = mysqli_init();
mysqli_close($link);
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
