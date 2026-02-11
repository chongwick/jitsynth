<?php
function byVal($arg) {
    var_dump($arg);
}
function f_0() {
    $assoc_array = array ('one' => 1, 'two' => 2);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
}
$f = __DIR__."/data/test.txt.gz";
$ar1 = array(1, 2);
$i = 0;
function f_1() {
    $now = new DateTime('2018-11-03 11:34:20.781751');
    $ago = new DateTime('2018-11-03 11:34:20.000000');
    $diff = $ago->diff($now);
    if (true) {
        catch(Exception $e) {
            echo $e->getMessage() . "\n";
        }
        echo $e->getMessage() . "\n";
    }
    return 'A';
}
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("b", 2);
byVal(C[0]);
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$eml = __DIR__ . "/signed.eml";
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile));
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("bar:html"));
$unset_var = 10;
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER));
spl_autoload_register(function ($name) {
});
var_dump($br);
var_dump(c1::$a3);
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
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
foreach ($various_arrays as $array) {
  echo "\n-- Iteration $count --\n";

  echo "- With default sort_flag -\n";
  $temp_array = $array;
  var_dump(asort($temp_array) );
  var_dump($temp_array);

  echo "- Sort_flag = SORT_REGULAR -\n";
  $temp_array = $array;
  var_dump(asort($temp_array, SORT_REGULAR) );
  var_dump($temp_array);
  $count++;
}
$temp_array = $array;
$dom = Dom\HTMLDocument::createEmpty();
$container = $dom->appendChild(createElement($dom, "container"));
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
$dt = new DateTime('first day of January 2011');
var_dump($dt);
printf("printf test 28:%2\$02d %1\$2d\n", 1, 2);
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
