<?php
class D {
    public string $prop;
}
$document = new \DOMDocument();
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
$d = new D();
$d->prop = 'foo';
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_ANY));
var_dump(json_decode('[]', false, 0x100000000));
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
