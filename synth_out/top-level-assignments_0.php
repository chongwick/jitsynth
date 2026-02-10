<?php
$xpath = new DOMXpath($dom);
$heredoc = <<<EOT
hello world
EOT;
$date = new DateTime("28-July-2008");
$domd = new DOMDocument();
$options = stream_context_get_options($this->context);
var_dump($dt);
printf("printf test 31:%.17g\n", INF);
$stmt->execute();
printf( "testint: %d\n", $r['testint'] );
$GLOBALS['a'] = "bug\n";
$references = array();
$argv = null;
$unset_var = 10;
$list = [];
$this->show();
$g = $param->strA."\n".$param->strB."\n";
$str = "This is a test string.\n";
function f_0() {
    return [get_object_vars($this)];
}
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$rows[$i] = mysqli_fetch_assoc($res);
$ffi = FFI::cdef($header, 'php_zend_test.dll');
$instructorsAdmin = Test::INSTRUCTORS_ADMIN;
$x = 2;
var_dump($obj);
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$fiber = new Fiber(function () use ($iterable, $canary) {
    var_dump($canary, $iterable->current());
    $f = $iterable->next(...);
    $f();
    var_dump("not executed");
});
$concreteClass_object = new concreteClass();
$arr = [$class];
$m['data3'] = 300;
$pid = pcntl_fork();
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$obj = simplexml_load_string($xml);
$dom = Dom\HTMLDocument::createEmpty();
$dt = new DateTime('@1604219400');
var_dump($array[$a]);
$s->attach($s);
$b->bar();
curl_setopt($ch, CURLOPT_URL, "{$host}/get.inc");
ob_start("test");
stream_wrapper_register('dummy', DummyWrapper::class);
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_CLIENT));
var_dump(is_callable(array($this, 'parent::testIsCallable')));
function f_1() {
    $references = array();
    $k = 2 * $i;
}
c1::$a1[] = 1;
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',
       array(),

       // string data
/*19*/ "key",
       'key',
       $heredoc,

       // object data
/*22*/ new classA(),

       // undefined data
/*23*/ @$undefined_var,

       // unset data
/*24*/ @$unset_var,

       // resource variable
/*25*/ $fp
);
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
$style[$i++] = $color;
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
$stmt->execute();
var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
grapheme_strpos(1,1,2147483648);
$values = array (
  /* integers */
  0,  // zero as argument
  000000123,  //octal value of 83
  123000000,
  -00000123,  //octal value of 83
  -12300000,
  0xffffff,  //hexadecimal value
  123456789,
  1,
  -1,

  /* floats */
  -0.0,
  +0.0,
  1.234,
  -1.234,
  -2.000000,
  2.0000000,
  -4.0001e+5,
  4.0001E+5,
  6.99999989,
  -.5,
  .567,
  -.6700000e-3,
  -.6700000E+3,
  1E-5,
  -1e+5,
  1e+5,
  1E-5,

  /* strings */
  "",
  '',
  " ",
  ' ',
  "0",
  "\0",
  '\0',
  "\t",
  '\t',
  "PHP",
  'PHP',
  "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars

  /* boolean */
  TRUE,
  FALSE,
  true,
  false,

  /* arrays */
  array(),
  array(NULL),
  array(true),
  array(""),
  array(''),
  array(array(1, 2), array('a', 'b')),
  array("test" => "is_array", 1 => 'One'),
  array(0),
  array(-1),
  array(10.5, 5.6),
  array("string", "test"),
  array('string', 'test'),

  /* resources */
  $file_handle
);
highlight_string($string, true);
$client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
$outfile = tempnam(sys_get_temp_dir(), "ssl");
$reference =& $_SERVER;
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
zerofill(2, $link, 'TINYINT');
var_dump( end($test_array[1]) );
var_dump( end($sub_array) );
