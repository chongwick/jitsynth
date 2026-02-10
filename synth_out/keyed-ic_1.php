<?php
$tStamp = mktime (17, 17, 17, 10, 27, 2004);
var_dump(getopt("abcd"));
$row_stmt = null;
test_image_equals_file(__DIR__ . '/bug43475.png', $im);
$uri = 'http://' . stream_socket_get_name($server, false);
var_dump( array_multisort($ar1, $value) );
$stream = fopen(__DIR__ . "/75776.$ext", 'w');
does_not_work();
$heredoc = <<<EOT
hello world
EOT;
var_dump(gzread($h, 10));
$f = new Foo;
set_error_handler(function (int $errno, string $errstring): never {
    throw new Exception($errstring);
});
$logOffEvents[] = new LogOffEvent(34567, $timestamp, "Smoked");
var_dump($x);
$str_arr = array(
  //double quoted strings
  "%",
  "#$*",
  "text & @()",

  //single quoted strings
  '%',
  '#$*',
  'text & @()',

  //heredoc string
  $heredoc_str
);
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
