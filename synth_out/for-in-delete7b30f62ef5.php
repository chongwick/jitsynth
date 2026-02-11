<?php
class test {

  private function __destruct() {
  }
}
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
function f_0() {
    $obj = new test;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $counter = 1;
            $counter++;
        }
        var_dump(strncasecmp("test ", "E", 10));
        $iterator = 1;
        $iterator++;
    }
    $client2 = new soapclient(NULL, [
      'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
      'uri' => 'misc-uri',
      'soap_version' => SOAP_1_2,
      'user_agent' => 'Vincent JARDIN, test headers',
      'trace' => true, /* record the headers before sending */
      'stream_context' => stream_context_create([
        'http' => [
          'header' => sprintf("MIME-Version: 1.0\r\n"),
          'content_type' => sprintf("")
        ],
      ]),
    ]);
    $headers = $client2->__getLastRequestHeaders();
    printf("Content-Type Default NOK %s" . PHP_EOL, $headers);
}
$src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$temp_array = $array;
$arr1 = array(1, "float", "f4", "hello", 2.2, 'color', "string", "pen\n", 11);
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
(new B)->bar();
clearstatcache();
for ($i = 0; $i < 10; $i++) {
    $zip = new ZipArchive();
    if ($zip->open($filename, ZipArchive::OVERWRITE) !== true) {
        exit("Unable to open the zip file");
    }
    $zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
    $zip->close();
}
$zip = new ZipArchive();
$zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
