<?php
function f_0() {
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump( end($array_test) );
    if (true) {
        var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
    }
}
$db = PDOTest::factory();
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
lor(10,100);
imagefill($im1, 0,0, 0x
fffff);
imagegd2($im1, $file);
;
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
$f->start();
global $user, $host, $passwd, $db, $port, $socket;
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$this->mysqli->close();
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 8));
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
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
printf("# %s\n", $name);
lor(10,100);
imagefill($im1, 0,0, 0x
fffff);
imagegd2($im1, $file);
;
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
debug_print_backtrace();
$haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
$needle = array(
  //regular strings
  'l',
  'L',
  'HELLO',
  'hEllo',

  //escape characters
  '\t',
  '\T',
  '     ',
  '\n',
  '\N',
  '
',  //new line

  //nulls
  '\0',

  //boolean false
  FALSE,
  false,

  //empty string
  '',

  //special chars
  ' ',
  '$',
  ' $',
  '&',
  '!#',
  '%\o',
  '\o,',
  '()',
  '*+',
  '+',
  '-',
  '.',
  '.;',
  ':;',
  ';',
  '<=>',
  '>',
  '=>',
  '?',
  '@',
  '@hEllo',

  '12345', //decimal numeric string
  '\x23',  //hexadecimal numeric string
  '#',  //hexadecimal numeric string
  '\101',  //octal numeric string
  'A',
  '456HEE',  //numerics + chars
  42, //needle as int(ASCII value of '*')
  $haystack  //haystack as needle
);
for($index=0; $index<count($needle); $index++) {
  echo "\n-- Iteration $count --\n";
  var_dump( strrchr($haystack, $needle[$index]) );
  $count ++;
}
var_dump( strrchr($haystack, $needle[$index]) );
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array[1]) );
printf("printf test 32:%.17g\n", -INF);
function test(array... $args) {
    var_dump($args);
}
test([0], [1], [2]);
function byVal($arg) {
    var_dump($arg);
}
function byRef(&$arg) {
    var_dump($arg);
}
var_dump($arg);
