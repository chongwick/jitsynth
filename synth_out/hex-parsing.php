<?php
$bert = "file://" . __DIR__ . "/bug41033.pem";
class C {
    private $priv1 = 'secret1';
    private $priv2 = 'secret2';
    public $pub1 = 'public1';
    public $pub2 = 'public2';
    public $pub3 = 'public3';
    public $pub4 = 'public4';
}
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
$ai->rewind();
$r = new ResourceBundle( 'en_US', BUNDLE );
$t = $r['nonexisting'];
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
class MySQL_Ext extends mysqli{
    protected $fooData = array();
    private $extData;

    public function isEmpty()
    {
        $this->extData[] = 'Bar';
        return empty($this->extData);
    }
}
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
$im = imagecreatetruecolor(1, 1);
imagescale($im, 1, 0, 0);
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
$immutable = \DateTimeImmutable::createFromInterface($mutable);
var_dump(error_reporting());
$array = [0];
$dom = new DOMDocument;
$dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
st0.txt");
touch("$d1\\t;
