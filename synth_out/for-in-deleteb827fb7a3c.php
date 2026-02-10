<?php
function f_0() {
    $fixedArray = new SplFixedArray(1);
    $fixedArray[0] = 'the element';
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $test->a++;
        }
        function t2()
        {
            ob_start("test");
            echo "Hello from t2 1 ";
                ob_flush();
                echo "Hello from t2 2 ";
                ob_end_flush();
        }
        t2();
        $loop_counter = 1;
        $loop_counter++;
    }
    function foo() {
        $x = 1.0;
        $x += 0;
        return ++$x; // mem -> reg, reg
    }
    var_dump(foo());
}
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
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
$GLOBALS['b'] = 2;
$timeZone = new DateTimeZone('UTC');
global $user, $host, $passwd, $db, $port, $socket;
$this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$row = $result->fetch_object();
function foo() {
  var_dump("hello");
}
foo();
function foo() {
  var_dump("hello");
}
foo();
var_dump(soundex("Hilbert"));
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$stmt1 = $pdo->query($reqOf3);
display([ $stmt1->fetch() ]);
