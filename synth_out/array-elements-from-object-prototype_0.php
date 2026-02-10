<?php
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$arr  = array("test");
$response = ob_get_contents();
$id_2_date = '2014-09-24';
$fiber->start();
var_dump(soundex("Lloyd"));
test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
var_dump(gzread($h, 5));
test('Ghost', $obj);
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
ar_dump($dn = realpath;
curl_setopt($ch, CURLOPT_USERNAME, null);
;
var_dump(gethostbynamel($host));
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
display($res);
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
printf("printf test 24:%.5s\n", "abcdefghij");
$tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
var_dump($shm_id1);
test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
(new B)->bar();
$tester->expectLogNotice($userMessage, 'cccc');
var_dump(A::fromArray(['a' => 'foo']));
$pdo->exec("insert into t select n + 1, 'non '||t from t");
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump($row);
var_dump( strtok($string, "\0") );
test($nodes, "var_dump", fn ($n) => var_dump($n));
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
);
    var_dump($d == get_base;
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$compressed = file_get_contents(__DIR__ . "/75776.$ext");
session_start();
printf("printf test 10: 123456789012345\n");
test('Ghost', $obj);
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
var_dump($array->offsetExists('key'));
php_cli_server_start('http_response_code(422);');
var_dump(ini_get('mysqlnd.debug'));
$phar->startBuffering();
imagecreatefrompng('php://filter/read=convert.base64-encode/resource=' . __DIR__ . '/test.png');
$f->resume();
curl_close($ch);
(new B)->baz();
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4]");
$link->set_charset('sjis');
$result->close();
var_dump($ffi->bug_gh16013_return_enum());
_set_lc_messages($dbh);
test($nodes, "var_dump", fn ($n) => var_dump($n));
var_dump(pcntl_wexitstatus($status));
$link->close();
validate((object) ['b' => 0]);
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
$dt->add(new DateInterval('PT1H'));
var_dump( addslashes($str) );
var_dump($obj->a);
var_dump($diff->invert, $diff->s, $diff->f);
$oIntlDateFormatter->setTimeZone('Europe/Berlin');
$dateperiod->__unserialize(['start' => $date]);
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);
var_dump($x->prop);
rmdir($dest);
$sh->write("foo", "bar");
array_map(array('Element', 'CallBack'), $arr);
var_dump( image_type_to_mime_type($value) );
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
var_dump($val);
var_dump(exif_read_data('data:image/jpg;base64,TU0AKgAAAAwgICAgAAIBDwAEAAAAAgAAACKSfCAgAAAAAEZVSklGSUxN'));
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
extract(Foo::bar());
printf("# %s\n", $name);
var_dump($a);
printf("printf test 15:%b\n", 170);
$client->getQuote("ibm");
foo(true, true);
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
var_dump(session_cache_limiter());
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
$h = gzopen($f, 'r');
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump($i=1);
var_dump(strncasecmp("test ", "E", 10));
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
$tester->start();
var_dump($diff->invert, $diff->s, $diff->f);
$tester->expectLogStartNotices();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
test('Proxy', $obj);
var_dump(strncasecmp("test ", "E", 10));
$zip->addFromString("foo_{$i}.txt", 'foo bar foobar');
var_dump(defined('SO_REUSEPORT'));
print_r($row);
ini_set('mysqlnd.fetch_data_copy', true);
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
rewind($fp);
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
test();
var_dump($temp_array);
$document->loadHTMLFile($uri);
pg_free_result($res);
