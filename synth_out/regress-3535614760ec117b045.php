<?php
function f_0() {
    if (true) {
        return 'B';
    }
}
$reflection = new ReflectionClass('\DateTimeImmutable');
$immutable = $reflection->newInstanceWithoutConstructor();
function f_1() {
}
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
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
$replace_pairs = array("$" => "%", "%" => "$", "#*&@()" => "()@&*#");
for($index = 0; $index < count($str_arr); $index++) {
  echo "-- Iteration $count --\n";

  $str = $str_arr[$index];  //getting the array element in 'str' variable

  //strtr() call in three args syntax form
  var_dump( strtr($str, $from, $to) );

  //strtr() call in two args syntax form
  var_dump( strtr($str, $replace_pairs) );

  $count++;
}
$str = $str_arr[$index];
var_dump( strtr($str, $replace_pairs) );
$varOutput = ob_get_contents();
function f_2() {
    $iterator = 1;
    try {
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->use_result();
        $row = $res->fetch_array();
        var_dump($row);
    } catch (Exception $e) {}
    if (true) {
    }
    $test->a++;
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt = $pdo->prepare($reqOf3);
    $stmt->execute();
}
$dom = new DOMDocument;
$dom->strictErrorChecking = false;
var_dump(strncasecmp("test ", "E", 0));
