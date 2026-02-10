<?php
var_dump($diff->invert, $diff->s, $diff->f);
printf("%s: %s\n", $e::class, $e->getMessage());
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
$loop_counter = 1;
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
curl_setopt($ch, CURLOPT_USERNAME, null);
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$i = 1;
printf("printf test 18:%16b\n", 170);
$cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
$headers = ['Host: okey.com'];
var_dump( strftime($value) );
$b->bar();
$phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
$a = 1;
$dt->add($interval);
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump($r);
$args[] = php_ini_loaded_file();
var_dump($temp_array);
$sxe = new SimpleXMLIterator($xml);
ini_set('session.serialize_handler', 'php_serialize');
$counter = 1;
$tester->expectLogNotice($userMessage, 'cccc');
$arg = new Stdclass();
var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
$s = fread($r, 100);
$val->dump();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
    throw new \Exception('exception handler');
});
}
printf("printf test 25:%-2s\n", "gazonk");
var_dump( range(1.0, 7.0, 6.5) );
$phar->setDefaultStub();
var_dump(1);
var_dump( array_fill($start_key , $num , $val) );
$db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val VARCHAR(256))');
var_dump(lookup(510));
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
spl_autoload_register($callback1);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
var_dump(mysqli_get_server_version($link));
fclose($stream);
odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
$pdo->exec("insert into t values (0, 'original')");
var_dump(new FooBar);
fclose($output);
php_cli_server_start('foo bar');
printf("[001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
showFirstTwoItems($ai);
krsort($flags);
printf("printf test 11: 123456789012345678901234567890\n");
var_dump( strrchr($haystack, $needle[$index]) );
set_error_handler(function($_, $m) { throw new Exception($m); });
$reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
    try {
        $reflector->resetAsLazyGhost($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    try {
        $reflector->resetAsLazyProxy($obj, function () { });
    } catch (Error $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }

});
var_dump($array[$a]);
ob_start("test");
var_dump($diff);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT));
var_dump($ffi->bug_gh16013_return_short());
var_dump( image_type_to_mime_type($value) );
function f_1() {
    function f_2() {
        return $db;
    }
    return true;
}
$finfo = new finfo(FILEINFO_NONE, $magic_file);
mysqli_close($link);
$container->appendChild(createElementNS($dom, "urn:foo", "htML", "5"));
var_dump(mb_check_encoding("&\xc2\xb7 TEST TEST TEST TEST TEST TEST", "HTML-ENTITIES"));
var_dump(sprintf("%%", 1.23456789e10));
$field = mysqli_fetch_field_direct($res, 1);
var_dump(openssl_pkey_new(array('dsa' => array('p' => $p, 'q' => $q, 'g' => $g))));
var_dump($argv);
$epid = pcntl_waitpid(-1,$status);
$db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
function f_3() {
    return $i;
}
$compressed = substr($compressed, 0, strlen($compressed) - 20);
test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
php_cli_server_start($code, null, $args);
function f_4() {
    rewind($fp);
}
file_put_contents($fn, $compressed);
$phar->setDefaultStub(str_repeat('a', 400));
unserialize('a:2:{i:0;O:9:"000000000":10000000');
var_dump(json_decode('[]', false, 0x100000000));
bar();
$reflector->resetAsLazyProxy($obj, function () {
    return new C();
});
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
var_dump($diff->invert, $diff->s, $diff->f);
printf("[006] [%d] %s\n", $stmt->errno, $stmt->error);
var_dump($a);
$dt->setTimezone(new DateTimeZone('UTC'));
printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
display($res);
$tester->terminate();
define("TEST",2);
var_dump(0);
var_dump(strncmp("test ", "e", -1));
var_dump($pdo->query('SELECT 1;')->fetchAll());
debug_zval_dump($references);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
var_dump($e->getMessage());
$mysqli->query($sql);
register_shutdown_function('timE');
mysqli_close($link);
$root->__construct("malformed");
var_dump($obj);
$zip->extractTo($dest);
set_exception_handler(function (\Throwable $exception) {
    echo 'Caught: ' . $exception->getMessage() . "\n";
});
usort($array, function($a, $b) use (&$array, &$ref) {
    unset($array[2]);
    $ref = $array;
    return $a <=> $b;
});
var_dump($data);
test($box);
date_default_timezone_set('UTC');
zerofill(11, $link, 'DECIMAL');
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
set_error_handler(function() {
//    var_dump(func_get_args());
    DoesNotExists::$nope = true;
}, E_ALL);
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
printf("printf test 10:<%15s>\n", "hoyesterettsjustitiarius");
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", "");
restore_exception_handler();
var_dump(spl_autoload_functions());
var_dump(file_exists($filename));
$dt->add(new DateInterval('PT1H'));
test("str");
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
crash();
mdir($prefi;
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$list->attach(new TestObject());
$f->__invoke($t->bar(Test::foo(do_throw())));
bzwrite($bz, $str);
var_dump($argv);
function f_5() {
    var_dump( range(1.0, 7.0, 6.5) );
    test($nodes, "var_dump", fn ($n) => var_dump($n));
    var_dump(get_class_vars(C::class));
}
$pdo->exec("create temp table t2 as select 678 n, 'ok' status");
var_dump($finfo->buffer("buffer\n"));
printf("%s: %s\n", $e::class, $e->getMessage());
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca)));
var_dump($target);
printf("[002] [%d] %s\n", $link->errno, $link->error);
ched->splitText($length);
pri;
print_r($str_instead);
var_dump($temp_array);
$reflector->initializeLazyObject($obj);
var_dump($diff->invert, $diff->s, $diff->f);
var_dump(json_encode($arr));
$oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
fclose($fp);
display($pdo->query("select * from t2")->fetchAll());
var_dump(substr_compare('/', '/asd', 0, 4));
var_dump(session_save_path());
http_server_kill($pid);
$tag->append("foo");
set_error_handler('my_error_handler');
test("http://test@127.0.0.1");
var_dump($data);
var_dump(new FooBar);
$link->close();
var_dump($headers1['Author'][0] === '?');
var_dump(gc_collect_cycles());
unlink($filename);
$stmt->execute();
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
printf("printf test 6:%-010.2f\n", 2.5);
var_dump(strlen($phar->getStub()));
var_dump($dom->getElementById('x')?->nodeName);
var_dump( strtr($str, $from, $to) );
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
$db = createDB();
++$failuresNb;
var_dump(gethostbyname($host));
$b = new A();
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$foo[$j++] = $i++;
$dt = new DateTime('@1604215800');
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    ame, $xmlstring);

$reader = new XMLReade;
    $start_key = 0;
}
$ch = curl_init("https://localhost/userpwd");
test("http://test@[2001:db8:3333:4444:5555:6666:1.2.3.4]");
$heredoc_str = <<<EOD
%
#$*&
text & @()
EOD;
$h = gzopen($f, 'r');
var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
var_dump(session_save_path());
$references[$idx]['row_copy'] 	= $rows[$i];
$t = new stdClass;
var_dump($obj->a);
var_dump(empty($obj[$name]));
var_dump($ar);
print_r( $r['testvector'] );
printf("%s: %s\n", $e::class, $e->getMessage());
set_exception_handler(null);
$ent = sprintf("&#x%X;", $v[0]);
test('Proxy', $obj);
$tester->request(connKeepAlive: true)->expectBody('1');
var_dump($ar);
var_dump(session_cache_expire());
$result->close();
call_user_func("static::ok");
pcntl_wait($status);
test('Proxy', $obj);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dt->setTimezone(new DateTimeZone('America/Boise'));
clearstatcache();
var_dump(__METHOD__);
var_dump($prefixed->lookupNamespaceURI(NULL));
var_dump(openssl_pkcs7_verify($eml, PKCS7_NOVERIFY, $outfile, $cainfo, $outfile, $contentfile, $pkcsfile));
var_dump($datePre->format("Y-m-d") == $datePost->format("Y-m-d"));
$a[10] = "42";
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
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
printf("%s: %s\n", $e::class, $e->getMessage());
file_put_contents($file, "<?php define('FOO', 'bad'); echo FOO;?>");
$a->test("test");
function f_7() {
    return $x;
}
$infile));
?>;
class_alias( 'stdClass', '_' );
fflush($stream);
zerofill(5, $link, 'INT');
test('<?php echo 3; // 4 ?>5');
var_dump($s);
;

?>;
$dom->getElementById('x')->removeAttribute('xml:id');
printf("[002] [%d] %s\n", $link->errno, $link->error);
$err = null;
var_dump($row['bit_column_1']);
$pdo->exec("insert into t select n + 1, 'non '||t from t");
$attrs = [];
$pdo->exec("insert into t values (0, 'original')");
for ($i_8 = 0; $i_8 < 10; $i_8++) {
    $b = 1;
    $date_format = DATE_RFC2822;
    $mutable = $reflection->newInstanceWithoutConstructor();
    if (true) {
        $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    }
    if (!true) {
        if (true) {
            if (true) {
                $this->public_var = 10;
            }
            if (!true) {
                if (true) {
                    $insert = $db->prepare("insert into test34630 (id, val) values (1, EMPTY_BLOB()) RETURNING val INTO :blob");
                }
                if (!true) {
                    if (true) {
                        $list = new SplDoublyLinkedList();
                    }
                    if (!true) {
                        if (true) {
                            $closure2 = new_closure_gen();
                        }
                        if (!true) {
                            if (true) {
                                $bug_gh16013_callback_struct->return_int16 = function($val) use($ffi) {
    $cdata = $ffi->new('int16_t');
    $cdata->cdata = $val;
    return $cdata;
};
                            }
                        }
                    }
                }
            }
        }
        if (!true) {
            if (true) {
                $a = [1,2,3];
            }
            if (!true) {
                $this->a = $a;
            }
        }
    }
    zerofill(5, $link, 'INT');
}
main::$dataAccessor = new dataAccessor;
$timestamp = mktime(8, 8, 8, 8, 8, 2008);
$heredoc = <<<EOT
key
EOT;
$proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
$a = 2;
$attrs = [];
$responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
$heredoc = <<<EOT
Hello world
EOT;
$this->b = 2;
$attrs = [];
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
$temp_array = $array;
$list = new SplDoublyLinkedList();
$auz = new DateTime($time, $tz_aus);
$context = stream_context_create($arr);
$object2 = new foo1();
$data_comp_func = 'compare_function';
$OuterMatcher->methodNameMatcher = null;
$arr = array(
0x0402 => array(0x80, "CYRILLIC CAPITAL LETTER DJE"),
0x0403 => array(0x81, "CYRILLIC CAPITAL LETTER GJE"),
0x201A => array(0x82, "SINGLE LOW-9 QUOTATION MARK"),
0x0453 => array(0x83, "CYRILLIC SMALL LETTER GJE"),
0x201E => array(0x84, "DOUBLE LOW-9 QUOTATION MARK"),
0x2026 => array(0x85, "HORIZONTAL ELLIPSIS"),
0x2020 => array(0x86, "DAGGER"),
0x2021 => array(0x87, "DOUBLE DAGGER"),
0x20AC => array(0x88, "EURO SIGN"),
0x2030 => array(0x89, "PER MILLE SIGN"),
0x0409 => array(0x8A, "CYRILLIC CAPITAL LETTER LJE"),
0x2039 => array(0x8B, "SINGLE LEFT-POINTING ANGLE QUOTATION MARK"),
0x040A => array(0x8C, "CYRILLIC CAPITAL LETTER NJE"),
0x040C => array(0x8D, "CYRILLIC CAPITAL LETTER KJE"),
0x040B => array(0x8E, "CYRILLIC CAPITAL LETTER TSHE"),
0x040F => array(0x8F, "CYRILLIC CAPITAL LETTER DZHE"),
0x0452 => array(0x90, "CYRILLIC SMALL LETTER DJE"),
0x2018 => array(0x91, "LEFT SINGLE QUOTATION MARK"),
0x2019 => array(0x92, "RIGHT SINGLE QUOTATION MARK"),
0x201C => array(0x93, "LEFT DOUBLE QUOTATION MARK"),
0x201D => array(0x94, "RIGHT DOUBLE QUOTATION MARK"),
0x2022 => array(0x95, "BULLET"),
0x2013 => array(0x96, "EN DASH"),
0x2014 => array(0x97, "EM DASH"),
//0x98	      	#UNDEFINED
0x2122 => array(0x99, "TRADE MARK SIGN"),
0x0459 => array(0x9A, "CYRILLIC SMALL LETTER LJE"),
0x203A => array(0x9B, "SINGLE RIGHT-POINTING ANGLE QUOTATION MARK"),
0x045A => array(0x9C, "CYRILLIC SMALL LETTER NJE"),
0x045C => array(0x9D, "CYRILLIC SMALL LETTER KJE"),
0x045B => array(0x9E, "CYRILLIC SMALL LETTER TSHE"),
0x045F => array(0x9F, "CYRILLIC SMALL LETTER DZHE"),
0x00A0 => array(0xA0, "NO-BREAK SPACE"),
0x040E => array(0xA1, "CYRILLIC CAPITAL LETTER SHORT U"),
0x045E => array(0xA2, "CYRILLIC SMALL LETTER SHORT U"),
0x0408 => array(0xA3, "CYRILLIC CAPITAL LETTER JE"),
0x00A4 => array(0xA4, "CURRENCY SIGN"),
0x0490 => array(0xA5, "CYRILLIC CAPITAL LETTER GHE WITH UPTURN"),
0x00A6 => array(0xA6, "BROKEN BAR"),
0x00A7 => array(0xA7, "SECTION SIGN"),
0x0401 => array(0xA8, "CYRILLIC CAPITAL LETTER IO"),
0x00A9 => array(0xA9, "COPYRIGHT SIGN"),
0x0404 => array(0xAA, "CYRILLIC CAPITAL LETTER UKRAINIAN IE"),
0x00AB => array(0xAB, "LEFT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x00AC => array(0xAC, "NOT SIGN"),
0x00AD => array(0xAD, "SOFT HYPHEN"),
0x00AE => array(0xAE, "REGISTERED SIGN"),
0x0407 => array(0xAF, "CYRILLIC CAPITAL LETTER YI"),
0x00B0 => array(0xB0, "DEGREE SIGN"),
0x00B1 => array(0xB1, "PLUS-MINUS SIGN"),
0x0406 => array(0xB2, "CYRILLIC CAPITAL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0456 => array(0xB3, "CYRILLIC SMALL LETTER BYELORUSSIAN-UKRAINIAN I"),
0x0491 => array(0xB4, "CYRILLIC SMALL LETTER GHE WITH UPTURN"),
0x00B5 => array(0xB5, "MICRO SIGN"),
0x00B6 => array(0xB6, "PILCROW SIGN"),
0x00B7 => array(0xB7, "MIDDLE DOT"),
0x0451 => array(0xB8, "CYRILLIC SMALL LETTER IO"),
0x2116 => array(0xB9, "NUMERO SIGN"),
0x0454 => array(0xBA, "CYRILLIC SMALL LETTER UKRAINIAN IE"),
0x00BB => array(0xBB, "RIGHT-POINTING DOUBLE ANGLE QUOTATION MARK"),
0x0458 => array(0xBC, "CYRILLIC SMALL LETTER JE"),
0x0405 => array(0xBD, "CYRILLIC CAPITAL LETTER DZE"),
0x0455 => array(0xBE, "CYRILLIC SMALL LETTER DZE"),
0x0457 => array(0xBF, "CYRILLIC SMALL LETTER YI"),
0x0410 => array(0xC0, "CYRILLIC CAPITAL LETTER A"),
0x0411 => array(0xC1, "CYRILLIC CAPITAL LETTER BE"),
0x0412 => array(0xC2, "CYRILLIC CAPITAL LETTER VE"),
0x0413 => array(0xC3, "CYRILLIC CAPITAL LETTER GHE"),
0x0414 => array(0xC4, "CYRILLIC CAPITAL LETTER DE"),
0x0415 => array(0xC5, "CYRILLIC CAPITAL LETTER IE"),
0x0416 => array(0xC6, "CYRILLIC CAPITAL LETTER ZHE"),
0x0417 => array(0xC7, "CYRILLIC CAPITAL LETTER ZE"),
0x0418 => array(0xC8, "CYRILLIC CAPITAL LETTER I"),
0x0419 => array(0xC9, "CYRILLIC CAPITAL LETTER SHORT I"),
0x041A => array(0xCA, "CYRILLIC CAPITAL LETTER KA"),
0x041B => array(0xCB, "CYRILLIC CAPITAL LETTER EL"),
0x041C => array(0xCC, "CYRILLIC CAPITAL LETTER EM"),
0x041D => array(0xCD, "CYRILLIC CAPITAL LETTER EN"),
0x041E => array(0xCE, "CYRILLIC CAPITAL LETTER O"),
0x041F => array(0xCF, "CYRILLIC CAPITAL LETTER PE"),
0x0420 => array(0xD0, "CYRILLIC CAPITAL LETTER ER"),
0x0421 => array(0xD1, "CYRILLIC CAPITAL LETTER ES"),
0x0422 => array(0xD2, "CYRILLIC CAPITAL LETTER TE"),
0x0423 => array(0xD3, "CYRILLIC CAPITAL LETTER U"),
0x0424 => array(0xD4, "CYRILLIC CAPITAL LETTER EF"),
0x0425 => array(0xD5, "CYRILLIC CAPITAL LETTER HA"),
0x0426 => array(0xD6, "CYRILLIC CAPITAL LETTER TSE"),
0x0427 => array(0xD7, "CYRILLIC CAPITAL LETTER CHE"),
0x0428 => array(0xD8, "CYRILLIC CAPITAL LETTER SHA"),
0x0429 => array(0xD9, "CYRILLIC CAPITAL LETTER SHCHA"),
0x042A => array(0xDA, "CYRILLIC CAPITAL LETTER HARD SIGN"),
0x042B => array(0xDB, "CYRILLIC CAPITAL LETTER YERU"),
0x042C => array(0xDC, "CYRILLIC CAPITAL LETTER SOFT SIGN"),
0x042D => array(0xDD, "CYRILLIC CAPITAL LETTER E"),
0x042E => array(0xDE, "CYRILLIC CAPITAL LETTER YU"),
0x042F => array(0xDF, "CYRILLIC CAPITAL LETTER YA"),
0x0430 => array(0xE0, "CYRILLIC SMALL LETTER A"),
0x0431 => array(0xE1, "CYRILLIC SMALL LETTER BE"),
0x0432 => array(0xE2, "CYRILLIC SMALL LETTER VE"),
0x0433 => array(0xE3, "CYRILLIC SMALL LETTER GHE"),
0x0434 => array(0xE4, "CYRILLIC SMALL LETTER DE"),
0x0435 => array(0xE5, "CYRILLIC SMALL LETTER IE"),
0x0436 => array(0xE6, "CYRILLIC SMALL LETTER ZHE"),
0x0437 => array(0xE7, "CYRILLIC SMALL LETTER ZE"),
0x0438 => array(0xE8, "CYRILLIC SMALL LETTER I"),
0x0439 => array(0xE9, "CYRILLIC SMALL LETTER SHORT I"),
0x043A => array(0xEA, "CYRILLIC SMALL LETTER KA"),
0x043B => array(0xEB, "CYRILLIC SMALL LETTER EL"),
0x043C => array(0xEC, "CYRILLIC SMALL LETTER EM"),
0x043D => array(0xED, "CYRILLIC SMALL LETTER EN"),
0x043E => array(0xEE, "CYRILLIC SMALL LETTER O"),
0x043F => array(0xEF, "CYRILLIC SMALL LETTER PE"),
0x0440 => array(0xF0, "CYRILLIC SMALL LETTER ER"),
0x0441 => array(0xF1, "CYRILLIC SMALL LETTER ES"),
0x0442 => array(0xF2, "CYRILLIC SMALL LETTER TE"),
0x0443 => array(0xF3, "CYRILLIC SMALL LETTER U"),
0x0444 => array(0xF4, "CYRILLIC SMALL LETTER EF"),
0x0445 => array(0xF5, "CYRILLIC SMALL LETTER HA"),
0x0446 => array(0xF6, "CYRILLIC SMALL LETTER TSE"),
0x0447 => array(0xF7, "CYRILLIC SMALL LETTER CHE"),
0x0448 => array(0xF8, "CYRILLIC SMALL LETTER SHA"),
0x0449 => array(0xF9, "CYRILLIC SMALL LETTER SHCHA"),
0x044A => array(0xFA, "CYRILLIC SMALL LETTER HARD SIGN"),
0x044B => array(0xFB, "CYRILLIC SMALL LETTER YERU"),
0x044C => array(0xFC, "CYRILLIC SMALL LETTER SOFT SIGN"),
0x044D => array(0xFD, "CYRILLIC SMALL LETTER E"),
0x044E => array(0xFE, "CYRILLIC SMALL LETTER YU"),
0x044F => array(0xFF, "CYRILLIC SMALL LETTER YA"),
);
$c->prop2 = 'hello world';
http_server_kill($pid);
$a = Array();
$cert = "file://" . __DIR__ . "/cert.crt";
zerofill(5, $link, 'INT');
$eml = __DIR__ . "/signed.eml";
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$err = null;
var_dump($dt);
$root->__construct("malformed");
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
imagescale($im, 0, 1, 0);
$obj = simplexml_load_string($xml);
$mem = $lazy ? 0 : 1;
$foo[$j++] = $i++;
$h = gzopen($f, 'r');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$values = array(
            // empty string
  /* 1  */  "",
            '',
            // objects
  /* 3  */  new test(),

            // undefined variable
            @$undefined_var,

            // unset variable
  /* 5  */  @$unset_var,
);
$T =new Test(throw_exc());
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$httpContext = [
    'http' => [
        'protocol_version'	=> '1.1',
        'method'			=> 'GET',
        'header'			=> &$headers,
        'follow_location'	=> 0,
        'max_redirects'		=> 0,
        'ignore_errors'		=> true,
        'timeout'			=> 60,
    ],
];
$box = new Box();
$sort = array(1, 5, 2, 4, 3);
php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
$var = '';
$iterable->current();
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca), $utfl));
var_dump(serialize($a));
var_dump($dom->getElementById('x')?->nodeName);
$f->__invoke(do_throw());
test(2);
$reflector = new ReflectionClass(C::class);
var_dump($obj->a);
var_dump( gmstrftime($value) );
var_dump(openssl_x509_checkpurpose($rcrt, X509_PURPOSE_ANY, array($cpca)));
session_start();
openssl_pkcs12_export($cert, $p12, $priv, $pass, array('extracerts' => [$extracert, $extracert]));
var_dump($_a, $_b);
$heredoc_needle = <<<EOD
^^&*(
EOD;
var_dump($ar1);
$reflector = new ReflectionClass(C::class);
vprintf("vprintf test 1:%2\$-2d %1\$2d\n", array(1, 2));
$bz = bzopen($filename, "w");
var_dump(new Foo);
$obj = $reflector->newLazyGhost(function ($obj) {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
printf("[008] %s [%d] %s\n", $column_def,
            mysqli_errno($link), mysqli_error($link));
$foo_object = new foo();
$tester->expectLogStartNotices();
var_dump(error_get_last());
var_dump(mb_stripos('Hello', 'e', 0, '8bit'));
(function() {
	try {
		foo(); // Error
	} catch (\Exception $e) {
		var_dump($e);
	} catch (\ParseError $e) {
		var_dump($e);
	}
})();
$a->prop = new B();
$str = "repeater id='loopt' dataSrc=subject columns=2";
$obj = new C();
$this->source = $source;
$phar->startBuffering();
var_dump(array_pop($input), $input);
restore_exception_handler();
fffff);
imagegd2($im1, $file);
$dt->setTimezone(new DateTimeZone('America/Boise'));
function f_9() {
    class C_10 {
    }
    var_dump($dom->lookupNamespaceURI(""));
    return match($s){
        1 => 1,
        2 => 2,
        3 => 3,
        4 => 4,
        5 => 5,
        6 => 6,
        7 => 7,
        8 => 8,
        9 => 9,
        10 => 10,
        11 => 11,
        12 => 12,
        13 => 13,
        14 => 14,
        15 => 15,
        16 => 16,
        17 => 17,
        18 => 18,
        19 => 19,
        20 => 20,
        21 => 21,
        22 => 22,
        23 => 23,
        24 => 24,
        25 => 25,
        26 => 26,
        27 => 27,
        28 => 28,
        29 => 29,
        30 => 30,
        31 => 31,
        32 => 32,
        33 => 33,
        34 => 34,
        35 => 35,
        36 => 36,
        37 => 37,
        38 => 38,
        39 => 39,
        40 => 40,
        41 => 41,
        42 => 42,
        43 => 43,
        44 => 44,
        45 => 45,
        46 => 46,
        47 => 47,
        48 => 48,
        49 => 49,
        50 => 50,
        51 => 51,
        52 => 52,
        53 => 53,
        54 => 54,
        55 => 55,
        56 => 56,
        57 => 57,
        58 => 58,
        59 => 59,
        60 => 60,
        61 => 61,
        62 => 62,
        63 => 63,
        64 => 64,
        65 => 65,
        66 => 66,
        67 => 67,
        68 => 68,
        69 => 69,
        70 => 70,
        71 => 71,
        72 => 72,
        73 => 73,
        74 => 74,
        75 => 75,
        76 => 76,
        77 => 77,
        78 => 78,
        79 => 79,
        80 => 80,
        81 => 81,
        82 => 82,
        83 => 83,
        84 => 84,
        85 => 85,
        86 => 86,
        87 => 87,
        88 => 88,
        89 => 89,
        90 => 90,
        91 => 91,
        92 => 92,
        93 => 93,
        94 => 94,
        95 => 95,
        96 => 96,
        97 => 97,
        98 => 98,
        99 => 99,
        100 => 100,
        101 => 101,
        102 => 102,
        103 => 103,
        104 => 104,
        105 => 105,
        106 => 106,
        107 => 107,
        108 => 108,
        109 => 109,
        110 => 110,
        111 => 111,
        112 => 112,
        113 => 113,
        114 => 114,
        115 => 115,
        116 => 116,
        117 => 117,
        118 => 118,
        119 => 119,
        120 => 120,
        121 => 121,
        122 => 122,
        123 => 123,
        124 => 124,
        125 => 125,
        126 => 126,
        127 => 127,
        128 => 128,
        129 => 129,
        130 => 130,
        131 => 131,
        132 => 132,
        133 => 133,
        134 => 134,
        135 => 135,
        136 => 136,
        137 => 137,
        138 => 138,
        139 => 139,
        140 => 140,
        141 => 141,
        142 => 142,
        143 => 143,
        144 => 144,
        145 => 145,
        146 => 146,
        147 => 147,
        148 => 148,
        149 => 149,
        150 => 150,
        151 => 151,
        152 => 152,
        153 => 153,
        154 => 154,
        155 => 155,
        156 => 156,
        157 => 157,
        158 => 158,
        159 => 159,
        160 => 160,
        161 => 161,
        162 => 162,
        163 => 163,
        164 => 164,
        165 => 165,
        166 => 166,
        167 => 167,
        168 => 168,
        169 => 169,
        170 => 170,
        171 => 171,
        172 => 172,
        173 => 173,
        174 => 174,
        175 => 175,
        176 => 176,
        177 => 177,
        178 => 178,
        179 => 179,
        180 => 180,
        181 => 181,
        182 => 182,
        183 => 183,
        184 => 184,
        185 => 185,
        186 => 186,
        187 => 187,
        188 => 188,
        189 => 189,
        190 => 190,
        191 => 191,
        192 => 192,
        193 => 193,
        194 => 194,
        195 => 195,
        196 => 196,
        197 => 197,
        198 => 198,
        199 => 199,
        200 => 200,
        201 => 201,
        202 => 202,
        203 => 203,
        204 => 204,
        205 => 205,
        206 => 206,
        207 => 207,
        208 => 208,
        209 => 209,
        210 => 210,
        211 => 211,
        212 => 212,
        213 => 213,
        214 => 214,
        215 => 215,
        216 => 216,
        217 => 217,
        218 => 218,
        219 => 219,
        220 => 220,
        221 => 221,
        222 => 222,
        223 => 223,
        224 => 224,
        225 => 225,
        226 => 226,
        227 => 227,
        228 => 228,
        229 => 229,
        230 => 230,
        231 => 231,
        232 => 232,
        233 => 233,
        234 => 234,
        235 => 235,
        236 => 236,
        237 => 237,
        238 => 238,
        239 => 239,
        240 => 240,
        241 => 241,
        242 => 242,
        243 => 243,
        244 => 244,
        245 => 245,
        246 => 246,
        247 => 247,
        248 => 248,
        249 => 249,
        250 => 250,
        251 => 251,
        252 => 252,
        253 => 253,
        254 => 254,
        255 => 255,
        256 => 256,
        257 => 257,
        258 => 258,
        259 => 259,
        260 => 260,
        261 => 261,
        262 => 262,
        263 => 263,
        264 => 264,
        265 => 265,
        266 => 266,
        267 => 267,
        268 => 268,
        269 => 269,
        270 => 270,
        271 => 271,
        272 => 272,
        273 => 273,
        274 => 274,
        275 => 275,
        276 => 276,
        277 => 277,
        278 => 278,
        279 => 279,
        280 => 280,
        281 => 281,
        282 => 282,
        283 => 283,
        284 => 284,
        285 => 285,
        286 => 286,
        287 => 287,
        288 => 288,
        289 => 289,
        290 => 290,
        291 => 291,
        292 => 292,
        293 => 293,
        294 => 294,
        295 => 295,
        296 => 296,
        297 => 297,
        298 => 298,
        299 => 299,
        300 => 300,
        301 => 301,
        302 => 302,
        303 => 303,
        304 => 304,
        305 => 305,
        306 => 306,
        307 => 307,
        308 => 308,
        309 => 309,
        310 => 310,
        311 => 311,
        312 => 312,
        313 => 313,
        314 => 314,
        315 => 315,
        316 => 316,
        317 => 317,
        318 => 318,
        319 => 319,
        320 => 320,
        321 => 321,
        322 => 322,
        323 => 323,
        324 => 324,
        325 => 325,
        326 => 326,
        327 => 327,
        328 => 328,
        329 => 329,
        330 => 330,
        331 => 331,
        332 => 332,
        333 => 333,
        334 => 334,
        335 => 335,
        336 => 336,
        337 => 337,
        338 => 338,
        339 => 339,
        340 => 340,
        341 => 341,
        342 => 342,
        343 => 343,
        344 => 344,
        345 => 345,
        346 => 346,
        347 => 347,
        348 => 348,
        349 => 349,
        350 => 350,
        351 => 351,
        352 => 352,
        353 => 353,
        354 => 354,
        355 => 355,
        356 => 356,
        357 => 357,
        358 => 358,
        359 => 359,
        360 => 360,
        361 => 361,
        362 => 362,
        363 => 363,
        364 => 364,
        365 => 365,
        366 => 366,
        367 => 367,
        368 => 368,
        369 => 369,
        370 => 370,
        371 => 371,
        372 => 372,
        373 => 373,
        374 => 374,
        375 => 375,
        376 => 376,
        377 => 377,
        378 => 378,
        379 => 379,
        380 => 380,
        381 => 381,
        382 => 382,
        383 => 383,
        384 => 384,
        385 => 385,
        386 => 386,
        387 => 387,
        388 => 388,
        389 => 389,
        390 => 390,
        391 => 391,
        392 => 392,
        393 => 393,
        394 => 394,
        395 => 395,
        396 => 396,
        397 => 397,
        398 => 398,
        399 => 399,
        400 => 400,
        401 => 401,
        402 => 402,
        403 => 403,
        404 => 404,
        405 => 405,
        406 => 406,
        407 => 407,
        408 => 408,
        409 => 409,
        410 => 410,
        411 => 411,
        412 => 412,
        413 => 413,
        414 => 414,
        415 => 415,
        416 => 416,
        417 => 417,
        418 => 418,
        419 => 419,
        420 => 420,
        421 => 421,
        422 => 422,
        423 => 423,
        424 => 424,
        425 => 425,
        426 => 426,
        427 => 427,
        428 => 428,
        429 => 429,
        430 => 430,
        431 => 431,
        432 => 432,
        433 => 433,
        434 => 434,
        435 => 435,
        436 => 436,
        437 => 437,
        438 => 438,
        439 => 439,
        440 => 440,
        441 => 441,
        442 => 442,
        443 => 443,
        444 => 444,
        445 => 445,
        446 => 446,
        447 => 447,
        448 => 448,
        449 => 449,
        450 => 450,
        451 => 451,
        452 => 452,
        453 => 453,
        454 => 454,
        455 => 455,
        456 => 456,
        457 => 457,
        458 => 458,
        459 => 459,
        460 => 460,
        461 => 461,
        462 => 462,
        463 => 463,
        464 => 464,
        465 => 465,
        466 => 466,
        467 => 467,
        468 => 468,
        469 => 469,
        470 => 470,
        471 => 471,
        472 => 472,
        473 => 473,
        474 => 474,
        475 => 475,
        476 => 476,
        477 => 477,
        478 => 478,
        479 => 479,
        480 => 480,
        481 => 481,
        482 => 482,
        483 => 483,
        484 => 484,
        485 => 485,
        486 => 486,
        487 => 487,
        488 => 488,
        489 => 489,
        490 => 490,
        491 => 491,
        492 => 492,
        493 => 493,
        494 => 494,
        495 => 495,
        496 => 496,
        497 => 497,
        498 => 498,
        499 => 499,
        500 => 500,
        501 => 501,
        502 => 502,
        503 => 503,
        504 => 504,
        505 => 505,
        506 => 506,
        507 => 507,
        508 => 508,
        509 => 509,
        510 => 510,
        511 => 511,
        512 => 512,
        513 => 513,
    };
}
$count = 1;
for ($i_11 = 0; $i_11 < 10; $i_11++) {
}
$file_path = __DIR__;
$pdo = MySQLPDOTest::factoryWithAttr($attr);
var_dump($dt);
ini_set('mysqlnd.fetch_data_copy', false);
$attr = $root->attributes('urn:x');
$it->next();
$phar->stopBuffering();
$a = &$GLOBALS['a'];
var_dump('ERR');
