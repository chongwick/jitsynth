<?php
function f_0() {
    var_dump(session_cache_expire());
    var_dump($info['buffer_size']);
    setlocale(LC_ALL, "C");
    var_dump($br);
}
function f_1() {
    $phar->stopBuffering();
    var_dump($b->test);
    var_dump( array_reverse($array, false) );
    ob_end_flush();
}
function f_2() {
    $item['nanana'] = 'batman';
    $dimension = &$offset;
}
function f_3() {
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
    $d = unpack("H*", $res);
    $cainfo = array();
}
var_dump(sprintf("%%", 1.23456789e10));
print_r($row);
call_user_func(array("static","ok"));
$zip->addFromString('foo.txt', 'foo bar foobar');
$ai->rewind();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY, array($cpca), $utfl));
$stmt->execute([ 15 ]);
$stmt->execute();
$b->bar();
putenv('REDIR_TEST_DIR='.__DIR__ . '/../../pdo/tests/');
var_dump((bool) $o);
error_reporting(0);
$f->__invoke(do_throw());
curl_setopt($ch, CURLOPT_USERPWD, null);
var_dump($s[$i], isset($s[$i]));
var_dump($obj->a);
var_dump ( rtrim("rtrim test        ", true) );
$datefmt->parse('abc');
var_dump($ffi->bug_gh16013_return_int());
test('Ghost', $obj);
var_dump($org_a, $org_b);
ini_set('mysqlnd.fetch_data_copy', false);
fwrite($fp, str_repeat("baad", 1024*1024));
$prefixed->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
test("http://t[est@::1]");
var_dump(spl_autoload_functions());
file_put_contents($tmpFileIn, $originalEnvelopeData);
var_dump( range('A', 'H', fdiv(0, 0)) );
setlocale(LC_ALL, "C");
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
(stat("$d0\\test0.txt")) > 0);
var_dump(coun;
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
imageline($im, 100, 200, 600, 200, IMG_COLOR_STYLED);
var_dump(empty($obj[$name]));
var_dump($b, $GLOBALS['b'], $c);
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
var_dump(__FUNCTION__."(): ".get_class($e)." thrown!");
imagepng($im, $dest);
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$it->next();
session_write_close();
printf("Content-Type NOK %s" . PHP_EOL, $headers);
var_dump(test());
test('sensitive');
$priorityQueue->insert("b", 2);
curl_close($ch);
unlink($tmpFileOut);
var_dump(error_get_last());
ob_start(function ($buffer) use (&$c, &$counter) {
        $c = 0;
        ++$counter;
}, 1);
var_dump($a["10"], isset($a["10"]));
var_dump(strlen($phar->getStub()));
checktimeout($s, 500);
test('y');
var_dump(json_decode('[]', false, 0x100000000));
$list->push('f');
$b->attach($object);
file_get_contents('dummy://foo', false, $context);
var_dump("done");
var_dump($_SESSION);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
foo();
var_dump(tidy_get_body($t));
showFirstTwoItems($ai);
var_dump($headers2['Author']);
;
$row = $result->fetch_object();
var_dump($foo[0]);
ob_clean();
var_dump(preg_replace_callback_array([], ''));
$_ = str_repeat("A", 512);
session_set_save_handler(new MySessionHandler());
$ref = &$offset;
var_dump(soundex("Gauss")       == soundex("Ghosh"));
$invalid_files = array(
  0,
  1234,
  -2.34555,
  TRUE,
  FALSE,
  " ",
);
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
debug_zval_dump($test);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
var_dump(range('z', 'a', 100));
ob_start();
$phar->setDefaultStub(str_repeat('a', 400));
var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
gc_collect_cycles();
printf("printf test 19:%16x\n", 170);
$notDefined[$i] = 'test';
printf("# Proxy:\n");
$mailBox->logout();
$tester->start();
var_dump($obj);
function f_4() {
    printf("# Ghost:\n");
    fclose($fp);
    printf("printf test 5:%-10.2f\n", 2.5);
    ini_set('precision', $i);
}
var_dump(rename("phar://a.phar/x", "phar://a.phar/y"));
$a->test("test");
var_dump($pdo->query('SELECT 1;')->fetchAll());
$bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
var_dump( array_reverse($array, true) );
date_default_timezone_set("Asia/Calcutta");
display([ $stmt2->fetch() ]);
array_multisort($sort, $data);
