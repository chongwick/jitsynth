<?php
function fromArray(array $props): self
    {
        $me = new static;
        foreach ($props as $k => &$v) {
            $me->{$k} = &$v;  # try to remove &
        }
        return $me;
    }
class C {
	use T;
	private array $a = [1];
}
class MyObjectStorage extends SplObjectStorage {
    // Overwrite getHash() with just some (working) test-method
    public function getHash($object): string { return get_class($object); }
}
class TestObject {}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
$i= DateInterval::createFromDateString('2 days');
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$id = odbc_result($res, "ID");
$tz1 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
$heredoc_null_string =<<<EOT
EOT;
$a = "lest";
$a[0] = "t";
function f_0() {
    $me = new static;
    foreach ($props as $k => &$v) {
                $me->{$k} = &$v;  # try to remove &
            }
    $me->{$k} = &$v;
    return $me;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $o = new C;
            $references = array();
            $textascii = 'This is an "example" of using DOM splitText';
            var_dump(class_exists("TestClass", true));
            $list = new MyObjectStorage();
            $list->attach(new TestObject());
            $gen = (function() {
                yield from (function() { yield; })();
            })();
            $fiber = new Fiber(function() use ($gen) {
                $gen->current();
            });
            $fiber->start();
        }
    }
    $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            var_dump(gzread($h, 8));
        }
    }
}
$im = imagecreate(800, 800);
imageline($im, 700, 100, 700, 600, IMG_COLOR_STYLED);
printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
