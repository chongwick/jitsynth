<?php
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
class D {
    public string $prop;
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function __construct($val) {
        $this->priv_member = $val;
    }
$c = new C();
$d = new D();
$d->prop = $c;
$dom = new DOMDocument;
clearstatcache();
$eml = __DIR__ . "/signed.eml";
$reflector = new ReflectionClass(C::class);
for ($i = 0; $i < 2; $i++) {
    $obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
    $obj->c = 1;
}
$obj = $reflector->newLazyGhost(function ($obj) use ($i) {
        if ($i === 1) {
            throw new \Exception();
        }
    });
$obj->c = 1;
$gen = (function() {
    yield from (function() { yield; })();
})();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr"));
foreach($result as $val) {
    $val->dump();
}
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
foreach($result as $val) {
    $val->dump();
}
$val->dump();
