<?php
$bug_gh16013_callback_struct->return_uint8 = function($val) use($ffi) {
    $cdata = $ffi->new('uint8_t');
    $cdata->cdata = $val;
    return $cdata;
};
$user = PDO_MYSQL_TEST_USER;
$ar1 = array("row1" => 2, "row2" => 1);
$im = imagecreatetruecolor(1, 1);
$date2 = new DateTime("Fri 19 November 2011");
$EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_INVALID_OFFSETS) . '$/s';
$conn = odbc_connect($dsn, $user, $pass);
$zip = new ZipArchive();
$id_2_date = '2014-09-24';
$args[] = php_ini_loaded_file();
$x = test();
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$callback2 = [$o, 'trampoline2'];
$obj = new C();
$strA = 'test &amp; test';
$data = unserialize($exploit);
$trace_file = '/tmp/mysqli_debug_phpt.trace';
ob_end_flush();
printf("# %s:\n", $name);
var_dump(getopt("abcd"));
$tester->expectLogTerminatingNotices();
var_dump(soundex("Lukasiewicz"));
var_dump($obj);
printf("# %s\n", $name);
var_dump($pdo->query('SELECT 42')->fetchColumn(0));
var_dump(range(1.5, 3.5, -1.5));
printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
var_dump( range(1, 7, fdiv(0, 0)) );
var_dump($res);
var_dump(substr_count("", "a", 0, 0));
var_dump(strncasecmp("test ", "E", -1));
var_dump($row);
fclose($fp);
var_dump($client->__getLastRequestHeaders());
time_nanosleep(0, 1000000000);
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
imageline($im, 150, 150, 650, 150, IMG_COLOR_STYLED);
var_dump($rit->key());
dumpNodeList($dom->getElementsByTagName("bar:html"));
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
ImageFillToBorder($im, 5, 5, $bordercolor, $color);
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
var_dump( end($sub_array) );
var_dump($obj->a);
var_dump($info['buffer_size']);
set_error_handler('error_handler');
var_dump($stmt->fetch());
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
printf("printf test 12:%5.2f\n", -12.34);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
var_dump($namespaceless->lookupNamespaceURI(""));
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
spl_autoload_register($callback1);
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
zerofill(6, $link, 'INTEGER');
var_dump(fseek($fp, -1, SEEK_SET));
var_dump(session_cache_limiter());
php_cli_server_start($code, null, $args);
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
var_dump(sprintf("%%%.2f", 1.23456789e10));
$phar->addFromString('test.txt', 'text');
var_dump(range(1.5, 3.5, -1.5));
zerofill(11, $link, 'DECIMAL');
;

mkdir($d0);
printf("%s: %s\n", $e::class, $e->getMessage());
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
set_exception_handler(function() {
    echo 'Second handler' . PHP_EOL;
});
var_dump($array->offsetExists('nokey'));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_CRL_SIGN, array($cpca)));
var_dump($s);
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
test($nodes, "attributes", fn ($n) => $n->attributes());
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
(new ReflectionFunction($function))->invokeArgs($args);
debug_print_backtrace();
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
$t->cleanRepair();
var_dump(soundex("Knuth"));
var_dump($res);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
var_dump(foo());
var_dump( current($sub_array) );
$tester->start();
var_dump(class_exists("TestClass", true));
chdir($oldcwd);
clearstatcache();
var_dump($_POST);
var_dump($obj);
$phar->stopBuffering();
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
et_basename;
$res->free();
var_dump($prefixed->lookupNamespaceURI(""));
pg_insert($conn,$table, array('id' => 1, 'value' => 1.2));
var_dump(range('a', 'c', -1));
crash();
var_dump(file_get_contents("http://" . PHP_CLI_SERVER_ADDRESS, false, $context));
$result->close();
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
printf("# %s\n", $name);
$a->gen();
printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
printf("[007] The flags '%s' have not been reported for %s, found '%s'\n",
                $missing_flags, $column_def, $flags_found);
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
$r->extractTo(__DIR__, NULL, TRUE);
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$a->query ("CREATE TABLE test_35336 (a integer primary key, b text)");
