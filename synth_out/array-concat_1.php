<?php
$link->set_charset('sjis');
$sql = "DROP TABLE IF EXISTS $tbl";
$host = "localhost\0.example.com";
while (true) {
    break;  // avoid infinite loop
    $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $r2 = $r['testarray'];
    var_dump($prefixed->lookupNamespaceURI("a"));
    $cl->fpassthru();
    odbc_exec($conn, "INSERT INTO bug68087(ID, VARCHAR_COL, DATE_COL) VALUES (1, 'hello', '$id_1_date'), (2, 'helloagain', '$id_2_date')");
    $f = new Foo;
    $arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
    var_dump(($bug_gh16013_callback_struct->return_uint16)(10000));
    var_dump($type->childNodes);
    (new ReflectionFunction($function))->invokeArgs($args);
    pfsockopen('udp://127.0.0.1', '63844', $code, $err, INF);
    $c->prop1 = 'hello world';
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    var_dump(sin($ninety));
    $t = new stdClass;
    var_dump(empty($obj[$name]));
    $black = imagecolorallocate($im, 0, 0, 0);
    $db->exec('CREATE TABLE test34630 (id int NOT NULL PRIMARY KEY, val BLOB)');
    $args[] = php_ini_loaded_file();
    $tester->expectLogNotice($userMessage, 'bbbb');
    ->appendChild($node);

pr;
    var_dump( range('A', 'H', fdiv(0, 0)) );
    sprintf('%3$s, %2$s %1$s', "a", "b");
    $dom->getElementsByTagName('test2')[0]->setIdAttribute('attr', true);
    $this->smokeStatus = $smokeStatus;
    ob_start("test");
    validate((object) []);
    $o = new TrampolineTest();
    $date = new DateTime("28-July-2008");
    showFirstTwoItems($ai);
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

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

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
    $oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset3);
    $z = clone $x;
    $me->{$k} = &$v;
    error_reporting(E_ALL);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_TIMESTAMP_SIGN, array($cpca)));
    $lazy = true;
    var_dump( strrchr($haystack, $needle[$index]) );
    $a = "lest";
    var_dump($diff->invert, $diff->s, $diff->f);
    $a = new A();
    fseek($bz, 0, SEEK_CUR);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $a = 4;
    var_dump(openssl_pkcs7_verify($eml, 0));
    var_dump($s);
    $server->addfunction("test");
}
$d->prop = $c;
while (true) {
    break;  // avoid infinite loop
    $obj->a = 1;
    ;
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    $tester
    ->request(
        uri: $scriptName . '/1%202',
        scriptFilename: "proxy:fcgi://" . $tester->getAddr() . $sourceFilePath . '/1%202',
        scriptName: $scriptName . '/1 2'
    )
    ->expectBody([$scriptName, $scriptName . '/1 2', $sourceFilePath, '/1 2', $scriptName . '/1 2']);
    $im = imagecreatetruecolor(1, 1);
    $this->values = array('a' => 0);
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
    var_dump($dt);
    var_dump('ERR');
    var_dump($foo);
    $b = bar($gen);
    $response = curl_exec($ch);
    var_dump($b->test);
    $html = <<<HTML
<div id="test"><span>hi there</span></div>
HTML;
    var_dump($diff->invert, $diff->s, $diff->f);
    $msgfmt2 = clone $msgfmt;
    var_dump(json_decode('{"":"value"}', true));
    $arr  = array("test");
    var_dump(json_encode($arr));
    var_dump($list->offsetExists($x));
    ini_set("intl.error_level", E_WARNING);
    var_dump(get_html_translation_table(NAN, 0, "UTF-8") > 0);
    openssl_pkcs7_decrypt($tmpFileOut, $tmpFileOut2, $cert, $pkey);
    $cpca = __DIR__ . "/san-cert.pem";
    closedir( $dir_handle );
    set_exception_handler("foo");
    $obj = new testObject();
    $threesixty = M_PI * 2.0;
    var_dump(getopt("abcd"));
    $headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump(getimagesize(__DIR__ . "/test13pix.swf"));
    _dump(chdir($now));
    $to = "specials";
    var_dump($body->lookupNamespaceURI("a"));
    imagecolorallocate($im, 255, 255, 255);
    $result = $this->inv_mocker->invoke(
            new PHPUnit_Framework_MockObject_Invocation_Static(
                $arguments
            )
        );
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    var_dump( is_object($type) );
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    var_dump(strlen($phar->getStub()));
    $rows = array();
    var_dump(gethostbynamel($host));
    fflush($stream);
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    var_dump(substr_count("", "a", 0, 0));
    undefined_function();
    debug_print_backtrace();
}
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$error = error_get_last();
var_dump(class_exists("TestClass", true));
dumpNodeList($dom->getElementsByTagName("HTML"));
imagescale($im, 1, 1, -10);
$db = new PDO('mysql', $user, $pass);
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . " -n $test_fl_escaped", $output);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    if (true) {
        $t->cleanRepair();
    }
    if (!true) {
        curl_setopt($ch, CURLOPT_USERPWD, null);
    }
}
$loop_counter++;
$tests = array(
    1 => array(
        '$6$saltstring',
        'Hello world!',
        '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
    ),
    2 => array(
        '$6$rounds=10000$saltstringsaltstring',
        'Hello world!',
        '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
    ),
    3 => array(
        '$6$rounds=5000$toolongsaltstring',
        'This is just a test',
        '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
    ),
    4 => array(
        '$6$rounds=1400$anotherlongsaltstring',
        'a very much longer text to encrypt.  This one even stretches over morethan one line.',
        '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
    ),
    5 => array(
        '$6$rounds=77777$short',
        'we have a short salt string but not a short password',
        '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
    ),
    6 => array(
        '$6$rounds=123456$asaltof16chars..',
        'a short string',
        '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
    ),
    7 => array(
        '$6$$bar$',
        'foo',
        '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
    ),
    8 => array(
        '$6$rounds=10$roundstoolow',
        'the number of rounds is too low',
        '*0'
    ),
    8 => array(
        '$6$rounds=1000000000$roundstoohigh',
        'the number of rounds is too high',
        '*0'
    ),
);
$msgfmt2 = clone $msgfmt;
rt = 30;
$le;
sprintf('%3$s, %2$s %1$s', "a", "b");
var_dump( image_type_to_mime_type($value) );
$container = false;
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
$server = stream_socket_server("tcp://127.0.0.1:1337/");
$array = array("test" => 1);
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
$result = $this->mysqli->query("SELECT NOW() AS my_time FROM DUAL");
$i= DateInterval::createFromDateString('2 days');
$a = [1,2,3];
$array = new ArrayObject();
$dt = new DateTime('@1604219400');
$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);
$tester = new FPM\Tester($cfg, $code);
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    var_dump($dom->lookupNamespaceURI("a"));
}
$root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
$references[$idx]['id_copy']		= $rows[$i]['id'];
$rows[$i] = mysqli_fetch_assoc($res);
function f_2() {
    return [(array)$this];
}
$array = new ArrayObject();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    fclose($fp);
    $fiber = new Fiber(function () use ($iterable, $canary) {
    var_dump($canary, $iterable->current());
    $f = $iterable->next(...);
    $f();
    var_dump("not executed");
});
    $var = -PHP_INT_MAX - 1;
}
$datePost = DateTime::createFromFormat("!d M Y D", "17 may 2011 Fri");
$list->attach(new TestObject());
$container->appendChild(createElement($dom, "foo:HTML", "6"));
