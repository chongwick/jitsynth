<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$host = PHP_CLI_SERVER_HOSTNAME;
$request = <<<REQUEST
GET / HTTP/1.1
Host: $host


REQUEST;
$inputs = array(
      'Century number' => "%C",
      'Month Date Year' => "%D",
      'Year with century' => "%G",
      'Year without century' => "%g",
);
$cainfo = array();
$test=array();
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
$headers = $client->__getLastRequestHeaders();
function f_0() {
    return 'A';
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $fp = fopen (__FILE__, "r");
            $host = PHP_CLI_SERVER_HOSTNAME;
            $key_compare_func = 'compare_function';
            $s = "1234567890a";
            var_dump($s["10"], isset($s["10"]));
            $dbh = @pg_connect($conn_str);
            pg_close($dbh);
            var_dump(sprintf("%%%.2f", 1.23456789e10));
        }
    }
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->query($sql);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
            $datefmt->parse('abc');
        }
    }
}
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
display([ $stmt2->fetch() ]);
