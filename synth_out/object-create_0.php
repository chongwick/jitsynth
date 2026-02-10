<?php
session_set_save_handler(new \SessionHandler(), true);
var_dump(gzeof($h));
try {
    printf("pdo.dsn.mysql=%s\n", $dsn);
    var_dump(c1::$a1);
} catch (Exception $e) {}
if (true) {
    $tester->start();
}
try {
    var_dump($obj);
    fclose($fp);
    var_dump(gzread($h, 10));
} catch (Exception $e) {}
if (true) {
    var_dump(__METHOD__);
}
try {
    $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
    var_dump($temp_array);
} catch (Exception $e) {}
if (true) {
    test($nodes, "asXml", fn ($n) => $n->asXml());
}
try {
    $test2->test();
    ob_start(function() {
    declare(ticks=1);
    register_tick_function(
       function() { }
    );
});
} catch (Exception $e) {}
if (true) {
    var_dump( range(1.0, 7.0, 0.0) );
}
try {
    foo(false, true);
    register_shutdown_function('ABC');
} catch (Exception $e) {}
if (true) {
    range(0, pow(2.0, 100000000));
}
$class = new SomeClass2;
$r = new ReflectionClass('Test2');
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
$db = new PDO('mysql', $user, $pass);
test($arg)->name[1] = "xxxx";
$lazy = false;
$b = 1;
$this->audienceMemberId = $audienceMemberId;
$inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
$child = new ChildClass();
function f_0() {
    $I->d++;
    return call_user_func_array($this->callback, $invocation->parameters);
}
function f_1() {
    ++$testCasesTotal;
    return;
}
http_server_kill($pid);
var_dump(soundex("Euler"));
$db->exec('CREATE TABLE test_80908 (`id` BIGINT(20) UNSIGNED AUTO_INCREMENT, `name` VARCHAR(5), PRIMARY KEY (`id`)) ENGINE = InnoDB AUTO_INCREMENT=10376293541461622799');
error_reporting(E_ALL);
$bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
var_dump(posix_setrlimit(POSIX_RLIMIT_NOFILE, 129, 128));
var_dump($info['buffer_size']);
var_dump(version_compare('1.2', '2.1', '??'));
$row_stmt = null;
var_dump( range(1, 7, 10.0**400) );
var_dump($foo);
var_dump(pg_update($conn,$table, array('value' => 'inf'), array('id' => 1), PGSQL_DML_STRING));
$blank_line = <<<EOT

EOT;
var_dump(lookup(513));
_MIME_TYPE);
var_dump($fi->file($f));
print_r($arg);
fclose($fp);
var_dump($rf->getNumberOfRequiredParameters());
dumpNodeList($dom->getElementsByTagName("foo:html"));
var_dump(error_reporting());
stream_socket_client('tcp://9999.9999.9999.9999:9999', $error_code, $error_message, 0.2, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_NS_SSL_SERVER, array($cpca), $utfl));
$mysql->query("DROP TABLE temp");
var_dump(new Foo);
var_dump($data);
try {
    var_dump ( rtrim("rtrim test0123456789", "0..9") );
    var_dump(sin($ninety));
} catch (Exception $e) {}
if (true) {
    $cl->fpassthru();
}
test($nodes, "asXml", fn ($n) => $n->asXml());
printf("Name         : %s\n", $field->name);
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_SERVER));
printf("%s: %s\n", $e::class, $e->getMessage());
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$to = $users[0];
$this->logOffEvent = $logOffEvent;
$rez = $a->query ("SELECT * FROM test_35336")->fetchAll(PDO::FETCH_CLASS, 'EEE');
$MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
closedir( $dir_handle );
var_dump( get_class($value) );
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
try {
    clearstatcache();
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
} catch (Exception $e) {}
if (true) {
    $dom->loadHTML($html);
    $b->bar();
}
$initialRequest = true;
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
var_dump( rtrim($obj, "tc") );
var_dump(-2147483648 % -1);
$args[] = php_ini_loaded_file();
var_dump(new Test);
$foo = new Foo;
$pdo = MySQLPDOTest::factoryWithAttr($attr);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump(preg_replace_callback_array([], []));
    $eml = __DIR__ . "/signed.eml";
}
zerofill(9, $link, 'DOUBLE');
try {
    $this->show();
    $insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
} catch (Exception $e) {}
if (true) {
    var_dump($value);
}
try {
    var_dump( strrchr($blank_line, $needle) );
    var_dump(($bug_gh16013_callback_struct->return_int16)(-10000));
} catch (Exception $e) {}
if (true) {
    $sh->write("foo", "bar");
}
try {
    sprintf('%$s, %2$s %1$s', "a", "b");
    $this->server->handle($request);
} catch (Exception $e) {}
if (true) {
    var_dump($ffi->bug_gh16013_return_char());
}
$fn = static function() { return static::name(); };
$db->query(<<<'SQL'
CREATE
    PROCEDURE `testSp`()
	BEGIN
		DECLARE `cur` CURSOR FOR SELECT 1;
		OPEN `cur`;
		CLOSE `cur`;
		SELECT 1;
	END;
SQL);
printf("# Proxy:\n");
var_dump( strtok($string, "\0") );
session_start();
$sh->read("");
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
var_dump($dt);
var_dump($x);
printf("printf test 18:%16b\n", 170);
$_ = str_repeat("A", 512);
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    var_dump( strtok("\0") );
    $tmpFileOut2 = tempnam(sys_get_temp_dir(), 'test');
}
$phar->setDefaultStub('my/custom/thingy.php');
curl_setopt($ch, CURLOPT_PASSWORD, null);
