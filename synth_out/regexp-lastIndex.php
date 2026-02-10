<?php
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
$s = fread($r, 100);
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test[@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
$fp = fopen('php://input', 'r+');
var_dump(fseek($fp, -32, SEEK_CUR));
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
$item['nanana'] = 'batman';
);
if (!$reader->open($fil
($filename);
?>;
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_PASSWORD, null);
var_dump(error_reporting());
$other = new DateTime("31-July-2008");
function test2() {
    $x = test();
}
test2();
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
$closure1 = new_closure_gen();
$closure2 = new_closure_gen();
$gen1 = $closure1();
$gen2 = $closure1();
$gen3 = $closure2();
foreach (array($gen1, $gen2, $gen3) as $gen) {
    foreach ($gen as $val) {
        var_dump($val);
    }
}
foreach ($gen as $val) {
        var_dump($val);
    }
var_dump($val);
$im = imagecreate(800, 800);
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
