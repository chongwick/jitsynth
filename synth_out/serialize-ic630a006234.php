<?php
$from = ini_get('sendmail_from');
$arr  = array("test");
list($c,$d) = is_array($arr)?: NULL;
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
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$y = 0;
);
if (!$reader->open($fil
ttributeNo(0);
            echo $reade;
$obj = NULL;
function test(int $nr) {
    for ($i = $nr; $i <= $nr + 1; $i++)
        var_dump($i);
}
test(1);
class overloaded
{
  private $values;
  function __construct()
  {
    $this->values = array('a' => 0);
  }
  function __set($name, $value)
  {
    print "set $name = $value ($name was ".$this->values[$name].")\n";
    $this->values[$name] = $value;
  }
  function __get($name)
  {
    print "get $name (returns ".$this->values[$name].")\n";
    return $this->values[$name];
  }
}
$test = new overloaded();
$user = PDO_MYSQL_TEST_USER;
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
$nodes = $xml->a->b;
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
test($nodes, "var_dump", fn ($n) => var_dump($n));
