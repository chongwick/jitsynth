<?php
function f_0() {
    $client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
    $index_array = array (1, 2, 3);
    $date2 = new DateTime("Fri 19 November 2011");
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    }
    try {
        $a->bar();
        var_dump($initialRequest ? $x : $y);
    } catch (Exception $e) {}
    if (true) {
    }
    $this->timestamp = $timestamp;
    $mutable = $reflection->newInstanceWithoutConstructor();
    $from = "%#$*&@()";
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump($re->getConstants());
        var_dump(is_callable(array($this, 'static::testIsCallable2')));
        rewind($fp);
        pcntl_wait($status);
    }
    $B = new B();
    try {
        pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
    } catch (Exception $e) {}
    if (true) {
    }
    imagesetthickness($im, $thickness);
    $style = array();
    $date2 = DateTime::createFromFormat("D H i s", "Tuesday 0 00 00");
    $doc = new \DOMDocument();
    $I->unit = 42;
    try {
        $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
        var_dump((bool) $o);
    } catch (Exception $e) {}
    if (true) {
    }
    $zip->close();
    var_dump(c1::$a3);
    $func_argvs = [
    [ 'bug_gh9090_void_none',         [ ]                           ],
    [ 'bug_gh9090_void_int_char',     [ 42, "hello" ]               ],
    [ 'bug_gh9090_void_int_char_var', [ 42, "d=%d s=%s", -1, "ok" ] ],
];
    $field = $meta_res->fetch_field();
    $a = new A();
    $_SERVER = [ 'test' => 'test' ];
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        var_dump(c1::$a3);
        $stmt->execute();
        file_put_contents($batch_file_path, $batch_file_content);
        (new B)->baz();
        test('<?php echo "1";//22');
        var_dump(foo());
        $db->exec("CREATE TABLE test36428 (a VARCHAR(10))");
        $InvMocker->addMatcher($OuterMatcher);
        var_dump($diff->invert, $diff->s, $diff->f);
        var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    }
    $this->a = $a;
    $not_objects = array (
  0,
  -1,
  0.1,
  -10.0000000000000000005,
  10.5e+5,
  0xFF,
  0123,
  $fp,  // resource
  $dfp,
  array(),
  array("string"),
  "0",
  "1",
  "",
  true,
  NULL,
  null,
  @$unset_object, // unset object
  @$undefined_var, // undefined variable
);
    $rs = pg_query($conn, "SELECT * FROM $table");
    $headers = $client2->__getLastRequestHeaders();
    $ai = $ao->getIterator();
    $date = '7.8.2010';
    try {
        ob_end_clean();
        openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
        openssl_pkcs7_encrypt($tmpFileIn, $tmpFileOut, [$cert], array(), PKCS7_BINARY, OPENSSL_CIPHER_AES_128_CBC);
        foo(true, true);
        var_dump(soundex("Lukasiewicz"));
        $tester->terminate();
    } catch (Exception $e) {}
    if (true) {
    }
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
    var_dump(gzeof($h));
    printf("[004] Expecting '2009-12-03' got '%s'\n", $row[0]);
    ob_end_flush();
    $phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
    curl_setopt($ch, CURLOPT_STDERR, fopen("php://stdout", "w"));
    var_dump($row);
    var_dump(imagecreatefromgd2(__DIR__ . DIRECTORY_SEPARATOR . 'bug73868.gd2'));
    var_dump( is_object($object) );
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    fclose($fp);
}
$insert->bindValue(':blob', $fp, PDO::PARAM_LOB);
$pdo->query('INSERT INTO bug79596 VALUES(4.9)');
