<?php
$res = [];
$reflector = new ReflectionClass(DateTime::class);
$obj = $reflector->newLazyGhost(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
$obj = $reflector->newLazyProxy(function ($obj) {
        var_dump("initializer");
        $obj->__construct();
    });
$needle = base64_decode('44CC');
$i = 1;
$k = 2 * $i;
public function __construct($c)
    {
        $this->b = new C($c);
    }
public function __construct($c)
    {
        $this->c = $c;
    }
$this->c = $c;
$fd = fopen('php://memory','w');
$filter = stream_filter_append($fd, 'user_filter');
$s = "1234567890a";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $outfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($outfile);
    $db = PDOTest::factory();
    $fp = tmpfile();
    $insert = $db->prepare("insert into test34630 (id, val) values (1, :blob)");
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
    $fn = "bug71263.bz2";
    $r = fopen($fn, "r");
    $s = fread($r, 100);
}
