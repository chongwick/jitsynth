<?php
function test($case) {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    echo "Compressed len = ", strlen($compressed), "\n";

    if ($case == 1) {
        // Set a random byte in the middle of the compressed data
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays empty string then garbage, no errors detected:
        $compressed[strlen($compressed) - 15] = 'X';
    } else if ($case == 2) {
        // Truncate the compressed data
        // --> php_bz2_decompress_filter() does not detect errors,
        // --> fread() displays the empty string:
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
    } else {
        // Corrupted final CRC
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays an empty string, then the correct plain text, no error detected:
        $compressed[strlen($compressed)-2] = 'X';
    }

    file_put_contents($fn, $compressed);

    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    while (!feof($r)) {
        $s = fread($r, 100);
        echo "read: "; var_dump($s);
    }
    fclose($r);
    unlink($fn);
}
function f_0() {
    test(2);
    $arc_name = __DIR__ . "/bug40228.zip";
    $zip = new ZipArchive;
    $zip->open($arc_name, ZIPARCHIVE::CREATE);
    $ch = curl_init("https://localhost/username");
    curl_setopt($ch, CURLOPT_PASSWORD, null);
    $str = "repeater id='loopt' dataSrc=subject columns=2";
    preg_match_all("/(['\"])((.*(\\\\\\1)*)*)\\1/sU",$str,$str_instead);
    $b = new SplObjectStorage();
    $object = new StdClass();
    $b->attach($object);
    var_dump(array_map(assert(...), [true, true, false]));
}
function f_1() {
    array_splice($GLOBALS,0,count($GLOBALS));
    $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $res = $link->use_result();
    $row = $res->fetch_array();
    var_dump($row);
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    unlink($trace_file);
    var_dump($br);
    ob_end_flush();
}
openssl_error_string();
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
$sxe = new SimpleXMLIterator($xml);
$rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
var_dump($rit->key());
