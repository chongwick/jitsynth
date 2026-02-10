<?php
$container = $dom->appendChild(createElement($dom, "container"));
function f_0() {
}
$conn = odbc_connect($dsn, $user, $pass);
$cl = new bug8318;
$id = $db->lastInsertId();
$zip = new ZipArchive();
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        var_dump(soundex("Hilbert")     == soundex("Heilbronn"));
    }
}
function f_3() {
    $bug_gh16013_callback_struct->return_uint32 = function($val) use($ffi) {
    $cdata = $ffi->new('uint32_t');
    $cdata->cdata = $val;
    return $cdata;
};
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump( end($array_test) );
    $pdo->query('INSERT INTO bug79596 VALUES(4.9)');
    $doc->loadXML('<a>foo<last/></a>');
    var_dump($db->getAttribute(PDO::DBLIB_ATTR_SKIP_EMPTY_ROWSETS));
    var_dump($test);
    var_dump($db->query('SELECT * FROM test_33689'));
    var_dump($rit->key());
    testLastInsertId($db);
    var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
    var_dump(mhash(133, 1086849124, 133));
    curl_setopt($curl, CURLOPT_TIMEOUT, 1);
    var_dump(odbc_result($res, 'whatever'));
}
var_dump($row_stmt);
$c->prop2 = 'hello world';
var_dump(gzeof($h));
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
var_dump(json_decode('"\ud834"'));
$cfg['poolTemplate'] = <<<EOT
[%name%]
listen = {{ADDR[%name%]}}
user = foo
pm = ondemand
pm.max_children = 5
EOT;
set_exception_handler(function() {
    echo 'Fourth handler' . PHP_EOL;
});
