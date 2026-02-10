<?php
function f_0() {
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
    $key = str_repeat('abc', random_int(3, 3));
    $f = @fopen($uri, "r");
    $server = stream_socket_server("tcp://127.0.0.1:1337/");
    $list[] = $it->getSubPathname();
    $g = 'hi';
    $reflection = new ReflectionClass('\DateTimeImmutable');
    $org_a = $GLOBALS['a'];
    $bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
    return $val;
};
    $tz_us = new DateTimeZone('America/Los_Angeles');
    = new DOMDocument('1.0', 'UTF-8');
$no;
    $x = new SoapClient(__DIR__."/bug27722.wsdl");
    $japanese_so = pack('H4', '835c');
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
    $fn = function() { return static::name(); };
    $utfl = __DIR__ . "/sni_server_uk.pem";
    $heredoc = <<<EOT
key
EOT;
    $this->timestamp = $timestamp;
    $EXPECTED_OUTPUT_VALID_OFFSETS_REGEX = '/^' . expectf_to_regex(EXPECTED_OUTPUT_VALID_OFFSETS) . '$/s';
    $loop_counter = 1;
    $style[$i++] = $color;
    c1::$a3[] = 1;
    $version = mysqli_get_server_version($link);
    $dfp = opendir ( __DIR__ );
    $stmt = $db->prepare("SELECT 1, 2 AS named, 3");
    $response = curl_exec($ch);
    $xml =<<<EOF
<xml>
<fieldset1>
</fieldset1>
<fieldset2>
<options>
</options>
</fieldset2>
</xml>
EOF;
    $this->callback = $callback;
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $output = deflate_add(
        $deflator,
        $bytes,
        ZLIB_SYNC_FLUSH
    );
    $other = new DateTime("31-July-2008");
    $cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
    $x = 'abc';
    $a = NULL;
    $list = new MyObjectStorage();
    $query = "SELECT CASE  WHEN 0 THEN CAST('2009-12-03' AS DATE)  ELSE CAST('2009-12-03' AS DATE) END";
    $gen3 = $closure2();
    $dir_handle = opendir( __DIR__ );
    $max = 0x66666666;
    $obj = simplexml_load_string($xml);
    $from = "%#$*&@()";
    $options = stream_context_get_options($this->context);
    $res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
    $auz = new DateTime($time, $tz_aus);
    test($arg)->name[1] = "xxxx";
    $ret = new stdClass;
    $version = mysqli_get_server_version($link);
    $str = "This is a test string.\n";
    $japanese_so = pack('H4', '835c');
    $c->dyn = 1;
    $arrays = array (

       // empty array
/*1*/  array(),

       // arrays with integer keys
       array(0 => "0"),
       array(1 => "1"),
       array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),

       // arrays with string keys
/*7*/  array('\tHello' => 111, 're\td' => "color",
             '\v\fworld' => 2.2, 'pen\n' => 33),
       array("\tHello" => 111, "re\td" => "color",
             "\v\fworld" => 2.2, "pen\n" => 33),
       array("hello", $heredoc => "string"), // heredoc

       // array with object, unset variable and resource variable
       array(@$unset_var => "hello", $fp => 'resource'),

       // array with mixed keys
/*11*/ array('hello' => 1, "fruit" => 2.2,
             $fp => 'resource', 133 => "int",
             @$unset_var => "unset", $heredoc => "heredoc")
);
    $date = new DateTime('@'.$unixtime);
    $fn = function() { return static::name(); };
    $db = PDOTest::factory();
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    $dom = Dom\HTMLDocument::createEmpty();
    $res = [];
    $a = 2;
    $code = <<<EOT
<?php
echo \$_SERVER["SCRIPT_NAME"] . "\n";
echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
echo \$_SERVER["PATH_INFO"] . "\n";
echo \$_SERVER["PHP_SELF"];
EOT;
    $file = __DIR__ . "/bug71127.inc";
    $ninety = M_PI /2.0;
    $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
    $data = ["k" => 0, 1, 2, 3];
    $GLOBALS['b'] = 2;
    $pid = pcntl_fork();
    $create = sprintf('%s)', substr($create, 0, -2));
    $bordercolor=ImageColorAllocateAlpha($im, 0, 0, 0, 2);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
    $col = imagecolorat($im2, 5, 5);
    $arrays = array (
  array( 0 ),
  range(1, 100 ),
  range('a', 'z', 2 ),
  array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
  array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
  array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
  array(1.0005, 2.000000, -3.000000, -4.9999999 ),
  array(true, false),
  array("PHP", "Web2.0", "SOA"),
  array(1, array() ),
  array(1, 2, "" ),
  array(" "),
  array(2147483647, 2147483648, -2147483647, -2147483648 ),
  array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
  array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
);
    $res[] = $re;
    _MIME_TYPE);
var_dump($fi->file($f));
    $res = $link->use_result();
    $this->b = 2;
    $ninety = M_PI /2.0;
    $inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
    $test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
    $search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
    $twoseventy = M_PI * 1.5;
    $mutable = $reflection->newInstanceWithoutConstructor();
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    $canary = new Canary(null);
    $res = mail($to, $subject, $message, $headers);
    $references[$idx]['row_ref'] 		= &$row;
    $mem = $stmt->getAttribute(PDO::PGSQL_ATTR_RESULT_MEMORY_SIZE);
    $target = $doc->documentElement->lastChild;
    $pid = pcntl_fork();
    $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
    $a = &$value->a;
    $x = new SoapClient('http://i_dont_exist.com/some.wsdl');
    $callback1 = [$o, 'trampoline1'];
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $datefmt2 = clone $datefmt;
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
    $a = $b = $c = 0;
    $xpath = new DOMXpath($dom);
    $pem_cert = '
-----BEGIN CERTIFICATE-----
MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
+Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
-----END CERTIFICATE-----
';
    $ar1 = array("row1" => 2, "row2" => 1);
    $cmd = "$php -n -d memory_limit=4M -a \"".__DIR__."\"/bug40236.inc";
    $fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
    $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
    $a = array(1,2,3);
    $a = &$value->a;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $priorityQueue = new SplPriorityQueue();
    $phar = new Phar($fname);
    $epid = pcntl_waitpid(-1,$status);
    $info = opcache_get_status()['interned_strings_usage'];
    $I = new di('P10D');
    $oldcwd = getcwd();
    $gen = gen();
    $res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
    $list2 = clone $list;
    $mixedEndiannessFile = dirname(__FILE__).'/P1000506.JPG';
    $loop_counter = 1;
    $d = new D();
    $res = unpack("H*", $res)[1];
    $d0 = $prefix . "ソフト";
$d1 =;
    $japanese_so = pack('H4', '835c');
    $_b = $b;
    $a[0] = $x;
    $c = new C();
    $dfp = opendir ( __DIR__ );
    $thirty = M_PI / 6.0;
    $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    $i = 0;
    $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
    A::$a = 'A new';
    $host = PHP_CLI_SERVER_HOSTNAME;
    $temp_array = $array;
    ttribute('idx');
            echo $reade;
    $empty_string = <<<EOT
EOT;
    $db = createDB();
    $bug_gh16013_callback_struct->return_uint16 = function($val) use($ffi) {
    $cdata = $ffi->new('uint16_t');
    $cdata->cdata = $val;
    return $cdata;
};
    $fn = function() { return static::name(); };
    $eml = __DIR__ . "/signed.eml";
    $color = imagecolorsforindex($im2, $col);
    $t->prop = $t;
    $b = new B;
    $strA = 'test &amp; test';
    $h1 = $document->getElementsByTagName('h1');
    $lazy = true;
    $i = 1;
    $x[""][] = 1;
    $dom = new DOMImplementation();
    $s = fread($r, 100);
    $containers[spl_object_hash($this)] = NULL;
    $res = [];
    $batch_file_content = <<<EOT
@echo off
powershell -Command "Write-Output '%0%'"
powershell -Command "Write-Output '%1%'"
EOT;
    $phar['b.php'] = '<php echo "this is b\n"; ?>';
    $start_key = 0;
    $obj = $reflector->newLazyProxy(function ($obj) {
    var_dump("initializer");
    return new C();
});
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    $gen = bar();
    $res = $db->query("SELECT a FROM test36428");
    $cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
    _dump(chdir($now));
    irstAttribute();
            echo $reade;
    $doc = new \DOMDocument();
    $pem_cert = '
-----BEGIN CERTIFICATE-----
MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
+Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
-----END CERTIFICATE-----
';
    $epid = pcntl_waitpid(-1,$status);
    $a = new A();
    $row = $res->fetch_array();
    $res = html_entity_decode($ent, ENT_QUOTES, 'WINDOWS-1251');
    $res = [];
    $this->b = new C($c);
    $test1 = $dom->getElementById('x');
    $fn = function() { return static::name(); };
    $a = 2;
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $document = new \DOMDocument();
    $dom = new DOMDocument('1.0', 'UTF-8');
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
    $unset_var = 10;
    $row = $res->fetch_array();
    ttributeNo(1);
            echo $reade;
    $immutable = \DateTimeImmutable::createFromMutable($mutable);
    $s = "X";
    $ent = sprintf("&#x%X;", $u);
    $rows[$i] = mysqli_fetch_assoc($res);
    $o = new C;
    $h = <<<'EOD'
void (*bug_gh9090_void_none_ptr)();
void (*bug_gh9090_void_int_char_ptr)(int, char *);
void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
void (*bug_gh9090_void_char_int_ptr)(char *, int);
int (*bug_gh9090_int_int_char_ptr)(int, char *);

void bug_gh9090_void_none();
void bug_gh9090_void_int_char(int i, char *s);
void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
EOD;
    $dom = Dom\XMLDocument::createFromString(<<<XML
<root>
    <test1 xml:id="x"/>
    <test2 xml:id="x"/>
</root>
XML);
    $ffi = FFI::cdef($header, 'php_zend_test.dll');
    $ffi = FFI::cdef($header);
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
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
    $this->parameters = $parameters;
    $filename = $thisdir . "/bug47667.zip";
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    $ftp = ftp_connect('127.0.0.1', $port);
    $unset_object = new foo();
    $references[$idx]['row_ref'] 		= &$row;
    $iterator = 1;
    $a->foo = 5;
    $compressed[strlen($compressed)-2] = 'X';
    $compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
    $obj = new C();
    $shm_key = ftok(__FILE__, 'p');
    $myClass_object = new myClass();
    $mysqli = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $server = stream_socket_server("tcp://127.0.0.1:1337/");
    $strB = 'test & test';
    $c = new C();
    $db = createDB();
    A::$a = 'A new';
    $iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
    $unset_var = 10;
    $str = "This is a test string.\n";
    $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
    $object->a = str_repeat("a", 2);
    $errcontext = '';
    $res[] = $re;
    $test1 = $dom->getElementById('x');
    $row = $res->fetch_array();
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $b->dyn = 1;
    $create = sprintf('%s)', substr($create, 0, -2));
    $auz = new DateTime($time, $tz_aus);
    $a = new A;
    $anon->field = 123;
    $a->prop = '';
    $fp = fopen($log_file, 'w+');
    $pass	= PDO_MYSQL_TEST_PASS;
    $arr = [$class];
    $b = new A();
    $create = 'CREATE TABLE test(id INT, ';
    $sql = "SELECT 11111 as `1`, 22222 as `2`";
    $max = 0x66666666;
    $I = new di('P10D');
    $list = new MyObjectStorage();
    $res = html_entity_decode("&#x98;", ENT_QUOTES, 'WINDOWS-1251');
    $before = memory_get_usage();
    $a = null;
    $curl = curl_init("http://www.google.com");
    $data_compare_func = 'compare_function';
    $reflector = new ReflectionClass(C::class);
    _MIME_TYPE);
var_dump($fi->file($f));
    $array = [];
    $f = new Foo;
    $stmt = $db->query($sql);
    $references[$idx]['id_ref'] 		= &$row['id'];
    $regex = '/[a-z]/';
    $unset_var = 10;
    $dfp = opendir ( __DIR__ );
    $text = 'This is an ‘example’ of using DOM splitText';
$st;
    $foo = new Foo;
    $before = memory_get_usage();
    $subject = 'string';
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump($array[$a]);
    }
}
$output = array();
$this->timestamp = $timestamp;
var_dump(session_cache_limiter());
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SSL_CLIENT, array($cpca)));
