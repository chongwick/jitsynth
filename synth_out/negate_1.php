<?php
$found = false;
$dom = new DOMDocument('1.0', 'UTF-8');
function f_0() {
    $max = 0x66666666;
    var_dump(asort($temp_array, SORT_REGULAR) );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    printf("Content-Type Default OK" . PHP_EOL);
}
pg_close($dbh);
var_dump($d);
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
openssl_seal($_, $_, $_, array_fill(0,64,0));
$code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
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
test($nodes, "getNamespaces", fn ($n) => $n->getNamespaces());
$strA = 'test &amp; test';
$loop_counter = 1;
$d->prop = $c;
$host = PHP_CLI_SERVER_HOSTNAME;
$datefmt2 = clone $datefmt;
$date2 = new DateTime("Fri 19 November 2011");
$xp->query("//foo[contains(text(), " . $xp->quote("tes\x00t") . ")]");
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
bzwrite($bz, $str);
