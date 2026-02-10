<?php
function f_0() {
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        var_dump(soundex("Gauss")       == soundex("Ghosh"));
    }
    return 0;
}
function f_2() {
    $dom = Dom\HTMLDocument::createEmpty();
}
function f_3() {
    $_ENV = [];
}
function f_4() {
    $immutable = $reflection->newInstanceWithoutConstructor();
    $context = stream_context_create($arr);
    $bytes = str_repeat("*", 65536);
}
function f_5() {
    $dom = Dom\HTMLDocument::createEmpty();
    $foo = new Foo();
    if (true) {
        return isset($this->array[$index]);
    }
    $datePre = DateTime::createFromFormat("!D d M Y", "Fri 17 may 2011");
}
$epid = pcntl_waitpid(-1,$status);
var_dump( array_intersect($arr1, $arr2) );
$res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
var_dump(http_get_last_response_headers());
var_dump($priorityQueue->getExtractFlags());
$a->next();
$found = ($dsn !== false);
$file_handle = fopen(__FILE__, "r");
exec(getenv('TEST_PHP_EXECUTABLE_ESCAPED') . ' -n -r "exit(2);"', $output, $exit_code);
$doc->loadXML('<a>foo<last/></a>');
$varchar_col = odbc_result($res, "VARCHAR_COL");
$loop_counter = 1;
$reflector->resetAsLazyProxy($obj, function ($obj) {
    });
spl_autoload_register(function($class) {
    echo "$class\n";
    if ($class == 'X') {
        new Y;
    }
    if ($class == 'Y') {
        new Q;
    }
});
$OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
var_dump(soundex("Hilbert") == soundex("Ladd"));
$response = ob_get_contents();
$count = 1;
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
ob_start("test");
function f_6() {
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $to = "specials";
}
function f_7() {
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    $obj = simplexml_load_string($xml);
}
function f_8() {
    $responses = array(
    "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
    "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
);
    $a = bar($gen);
}
function f_9() {
    $host = "localhost\0.example.com";
    var_dump(gethostbynamel($host));
    with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
    printf("Orgname      : %s\n", $field->orgname);
    $object->a = str_repeat("a", 2);
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    var_dump( str_replace($value, "FOUND", $search_arr, $count) );
    test($nodes, "xpath", fn ($n) => $n->xpath("/root/a/b"));
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    zerofill(11, $link, 'DECIMAL');
    var_dump(ftp_mkdir($ftp, 'CVS'));
    print_r($tmp);
    $responses = array(
    "data://text/plain,HTTP/1.1 302 Moved Temporarily\r\n"
    . "Location: /try-again\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "0\r\n\r\n",
    "data://text/plain,HTTP/1.1 200 Ok\r\n"
    . "Transfer-Encoding: chunked\r\n\r\n"
    . "4\r\n1234\r\n0\r\n\r\n",
);
    range(0, pow(2.0, 100000000));
    var_dump(nl2br($str) );
    var_dump(__METHOD__);
}
for ($i_10 = 0; $i_10 < 10; $i_10++) {
    mysqli_free_result($res);
    var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));
    reset( $array_test );
}
function f_11() {
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
}
$x = 2;
printf("printf test 15:%b\n", 170);
$strA = 'test &amp; test';
var_dump($sends1);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$flags[8192] = 'ON_UPDATE_NOW';
var_dump($a["010"], isset($a["010"]));
var_dump($pdo->query('SELECT 1;')->fetchAll());
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
gc_collect_cycles();
var_dump(0);
