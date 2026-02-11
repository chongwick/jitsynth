<?php
function test($nodes, $name, $callable) {
    echo "--- $name ---\n";
    foreach ($nodes as $nodeData) {
        echo "nodeData: " . $nodeData . "\n";
        $callable($nodes);
    }
}
#[AllowDynamicProperties]
class C {
    public int $a = 1;
    public function __construct() {
        var_dump(__METHOD__);
    }
}
class A {
    public function __call($name, $args) {
        for ($i = 0; $i < 5; $i++) {
            yield $i;
        }
    }
}
function test2() {
    $x = test();
}
function f_0() {
    $db = MySQLPDOTest::factory();
    $stmt = $db->prepare('SELECT * FROM test_33689');
    $tmp = $stmt->getColumnMeta(0);
    print_r($tmp);
    $xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
    $xml = simplexml_load_string($xmlString);
    $nodes = $xml->a->b;
    test($nodes, "var_dump", fn ($n) => var_dump($n));
    $unset_var = 10;
    $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $vars = array (
          '\$ -> This represents the dollar sign. hello dollar!!!',
          '\t\r\v The quick brown fo\fx jumped over the lazy dog',
          'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
          'hello world\\t',
          'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
        );
        $priorityQueue = new SplPriorityQueue();
    }
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI("xml"));
    $xMailer = 'bug80706_x_mailer';
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $res = $link->query($sql);
    }
    ob_flush();
    $ch = curl_init();
    $reflection = new ReflectionClass('\DateTimeImmutable');
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
            var_dump("initializer");
            $obj->__construct();
        });
        $obj = $reflector->newLazyProxy(function ($obj) {
            var_dump("initializer");
            return new C();
        });
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug54028_2" . DIRECTORY_SEPARATOR;
        $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
        
        mkdir($prefix);
        foreach ($
        mkdir($prefix . $d);
        }
        
        $old_cwd = getcwd();
        forea
        $now = $prefix . $d;
            var_dump(chdir($now));
            var_dump($dn = realpath("."));
            var_dump($d == get_basename_with_cp($dn, 65001, false));
        }
        chdir($old_cwd);
        
        foreach (
        _dump(chdir($now));
        ;
    }
    setlocale(LC_ALL, "C");
    $a = new A();
    foreach ($a->gen() as $n) {
        var_dump($n);
    }
    var_dump($n);
    $host = PHP_CLI_SERVER_HOSTNAME;
    $request = <<<REQUEST
    GET / HTTP/1.1
    Host: $host
    
    
    REQUEST;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $found = true;
    }
    test2();
    var_dump(session_cache_limiter());
}
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
var_dump($pdo->query('SELECT 1;')->fetchAll());
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
var_dump( range(1.0, 7.0, 0.0) );
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
$from = "%#$*&@()";
$to = "specials";
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
var_dump( strtr($str, $from, $to) );
