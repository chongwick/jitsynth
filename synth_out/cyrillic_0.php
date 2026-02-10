<?php
$mailBox = MailBox::login($mailAddress);
$code = '$server = new SoapServer("' . __DIR__ . '"/bug49278.wsdl", ["trace"=>1]);' .
        <<<'PHP'
        function Add() {}
        $server->addFunction('Add');
        $server->handle();
        PHP;
$heredoc = <<<EOT
hello world
EOT;
$ago = new DateTime('2018-11-03 11:34:20.000000');
$offsets = array(20, 21, 22, 53, 54);
function f_0() {
    return 42;
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $str = 'Hello World';
        $date = odbc_result($res, "DATE_COL");
        $url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
        $res = unpack("H*", $res)[1];
        $array1 = array(1, 2);
        $a=glob("./*.jpeg");
        $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
        ched->splitText($length);
pri;
        $priorityQueue->insert("c", 0);
        call_user_func(array("static","ok"));
        _cwd = getcwd();
for;
        curl_exec($curl);
        byReference($array);
        foo();
        var_dump($i);
        printf("# Ghost:\n");
        var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
        $pdo->exec("insert into t values (0, 'original')");
        $it->rewind();
        if (true) {
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca)));
            printf("printf test 17:%X\n", 170);
        }
    }
    if (true) {
        var_dump( array_fill($start_key , $num , $val) );
        var_dump(empty($obj[$name]));
    }
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $zip->open($filename);
    if (true) {
        (new B)->baz();
    }
}
for ($i_4 = 0; $i_4 < 10; $i_4++) {
    $reflection = new ReflectionClass('\DateTime');
    $curl = curl_init("http://www.google.com");
    fwrite($fd, "foo");
    $element->prepend('x', new DOMEntity);
    imagesetthickness($im, $thickness);
    var_dump(fseek($fp, -32, SEEK_CUR));
    trycatch_dump(
    fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
);
    var_dump($br);
    var_dump(array_map(assert(...), [true, true, false]));
    register_shutdown_function('timE');
    $ai->rewind();
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN));
    $cl->fpassthru();
    printf("[003] Trace file '%s' has not been created\n", $trace_file);
}
for ($i_5 = 0; $i_5 < 10; $i_5++) {
    $needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
    $i = 0;
    $ent = sprintf("&#x%X;", $v[0]);
    var_dump($r->getStaticProperties());
    var_dump($obj->a);
    var_dump($list->serialize());
    proc_close($proc);
    var_dump($dom->lookupNamespaceURI(NULL));
    var_dump(mb_strpos('This is na English ta', 'a', $i));
    $xml = '
<data id="1">
    <key>value</key>
</data>
';
    printf("Content-Type OK" . PHP_EOL);
    var_dump($foo[0]);
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    var_dump($child);
    var_dump( is_array ($var_array) );
    $list->push('f');
    [$sourceFilePath, $scriptName] = $tester->createSourceFileAndScriptName();
    test();
    var_dump(exif_read_data(__DIR__.'/image021.tiff'));
    test("http://te[st@2001:db8:3333:4444:5555:6666:1.2.3.4");
    var_dump( image_type_to_mime_type($value) );
    var_dump($oIntlDateFormatter->parseToCalendar('America/Los_Angeles', $offset2));
    set_time_limit(5);
}
for ($i_6 = 0; $i_6 < 10; $i_6++) {
    $b->dyn = 1;
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $mutable = \DateTime::createFromInterface($immutable);
        $oldcwd = getcwd();
        $I->unit = 42;
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $concreteClass_object = new concreteClass();
            $diff = $ago->diff($now);
            $color = imagecolorsforindex($im2, $col);
            $priv = file_get_contents(__DIR__ . "/private.crt");
            foo(true, true);
            var_dump(class_exists("TestClass", true));
            test();
            unlink($filename);
            array_multisort($sort, $data);
        }
    }
}
