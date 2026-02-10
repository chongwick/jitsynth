<?php
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
curl_setopt($ch, CURLOPT_VERBOSE, true);
fclose($file_handle);
mysqli_close($link);
var_dump(filter_var($input, FILTER_VALIDATE_URL));
var_dump(new Test);
var_dump($br);
stream_get_line($fp, 1024*1024*2, "aaaa");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
var_dump($rc->getStaticProperties());
set_error_handler('error_handler');
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
var_dump((bool) $o);
$tester->start();
var_dump(getopt("abcd"));
$arr = [$class];
$date_format = DATE_RFC2822;
var_dump(soundex("Gauss")       == soundex("Ghosh"));
printf("[%03d] Length reported is too small to run test\n", $offset);
curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
bar('first try');
var_dump( gmdate($value) );
var_dump($list->serialize());
var_dump( end($resources) );
$list->add(1, 1);
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
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
var_dump(lookup(510));
$tester->terminate();
$client2->__soapCall("foo", [ 'arg1' => "XXXbar"]);
ob_end_flush();
