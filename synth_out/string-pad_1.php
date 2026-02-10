<?php
class C_0 {
}
$strings = array(
  "<html>Hello<br />world</html>",
  "<html><br /></html>",
  "<html>\nHello\r\nworld\r</html>",
  "<html>\n \r\n \r</html>",
);
$test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
$fp = php_cli_server_connect();
var_dump(soundex("Euler")       == soundex("Ellery"));
$mailBox->logout();
var_dump($obj->a);
rewind($fp);
curl_setopt($ch, CURLOPT_VERBOSE, true);
var_dump(get());
var_dump($rit->key());
$tester->expectLogStartNotices();
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
imagealphablending($im, true);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
var_dump(new FooBar);
set_exception_handler(function() {
    echo 'First handler' . PHP_EOL;
});
print_r($I);
$db->exec("CREATE TABLE test_pecl_bug_5200 (bar INT NOT NULL, phase enum('please_select', 'I', 'II', 'IIa', 'IIb', 'III', 'IV'))");
var_dump( rtrim($str, "ing") );
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
test([0], [1], 2);
var_dump($info['used_memory'] + $info['free_memory']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
var_dump($arg);
var_dump($s[$i], isset($s[$i]));
closedir($dir);
spl_autoload_register(function ($name) {
});
register_shutdown_function('exploDe');
var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
set_time_limit(5);
sprintf('%$s, %2$s %1$s', "a", "b");
var_dump($b, $GLOBALS['b'], $c);
var_dump($row_stmt);
php_cli_server_start('foo bar');
dumpNodeList($dom->getElementsByTagName("HTML"));
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_PRIORITY);
    var_dump( strrchr($haystack, $needle[$index]) );
    $mysqli->query($sql);
    setStyleAndThickness($im, $black, 2);
    printf("# %s:\n", $name);
    $tester->expectLogStartNotices();
    var_dump($a["010"], isset($a["010"]));
    ob_end_clean();
    var_dump($anon->field);
    var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
    define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
    date_default_timezone_set("Asia/Calcutta");
    printf("Maxlength    : %d\n", $field->max_length);
    var_dump( array_key_exists($input, $search) );
    print_r(get_object_vars($obj));
    $document->loadHTMLFile($uri);
    var_dump($x);
    printf("[002] Expecting string on 32bit got %s/%s\n", gettype($id), var_export($id, true));
    foo();
    exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
    var_dump(spl_autoload_functions());
    var_dump($priorityQueue->getExtractFlags());
    file_put_contents($test_fl, '<?php echo "abc\f\n \n";');
    var_dump($shm_id1);
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    error_reporting(E_ALL);
    var_dump(file_get_contents($pkcsfile));
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    printf("printf test 7:%010.2f\n", 2.5);
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    $list->push('o');
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
}
$errcontext = '';
$stmt->execute();
$oIntlDateFormatter->setPattern('VV');
$dt->sub($interval);
var_dump(http_get_last_response_headers());
$sh->write("foo", "bar");
var_dump($dom->lookupNamespaceURI(NULL));
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
var_dump( str_replace($value, "FOUND", $search_arr, $count) );
$sh->write("foo", "bar");
printf("printf test 2:%d\n", 42);
$c("abc");
$msgfmt->parse('abc');
date_default_timezone_set("UTC");
curl_exec($ch);
$tester->expectLogStartNotices();
$link->close();
set_include_path(__DIR__.'/bug39542:.');
printf("Flags        : %d\n", $field->flags);
var_dump($temp_array);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
mt_srand(1234567890);
debug_zval_dump($references);
var_dump($info['buffer_size']);
$container->appendChild(createElementNS($dom, "http://www.w3.org/1999/xhtml", "html", "2"));
test("http://t[est@::1]");
var_dump(spl_autoload_unregister($callback1));
var_dump( end($array_test) );
$t->test();
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
var_dump($stmt->fetch());
printf( "length: %d\n", count($r) );
var_dump(lookup(513));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
    var_dump($temp_array);
    preg_match_all("/(['\"])(.*)(?<!\\\\)\\1/sU", $str, $str_instead);
    pg_query($conn, "CREATE TABLE $table (id INT, value FLOAT)");
    ob_start();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    printf("Orgname      : %s\n", $field->orgname);
    var_dump(spl_autoload_unregister($callback1));
    printf("[%03d] Length reported is too small to run test\n", $offset);
    var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    set_error_handler('error_handler');
    $zip->setPassword('bar');
    var_dump( array_udiff($array1, $value, $data_comp_func) );
    var_dump((bool) $o);
    bar();
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    var_dump($db->query('SELECT * FROM test_33689'));
    ob_start();
    mt_srand(1234567890);
    touch($targetDir . DIRECTORY_SEPARATOR . 'getSubPathname_test_2.tmp');
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
    var_dump($a->value);
    test('<?php echo "1";//22');
    $list->next();
    restore_exception_handler();
    printf("%-36s = %-36s ? %s\n", $func_ptr, $func, $ok ? 'yes' : 'no');
    var_dump($body->lookupNamespaceURI(NULL));
    zerofill(7, $link, 'BIGINT');
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
    fclose($fp);
    var_dump(http_get_last_response_headers());
    var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
}
