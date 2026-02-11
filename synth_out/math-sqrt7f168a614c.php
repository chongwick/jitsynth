<?php
function f_0() {
    setlocale(LC_ALL, "C");
    if (true) {
        if (true) {
            $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
        }
        set_error_handler(function (int $errno, string $errstring): never {
            throw new Exception($errstring);
        });
    }
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
$mysqli->query($sql);
$data = array('first', 'fifth', 'second', 'forth', 'third');
$sort = array(1, 5, 2, 4, 3);
array_multisort($sort, $data);
$s = 'C:15:"ReflectionClass":0:{}';
var_dump(unserialize($s));
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
$body = $dom->getElementsByTagName("body")[0];
$prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
var_dump($prefixed->lookupNamespaceURI(NULL));
$headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers1['Title'][0] === '?');
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
ini_set('mysqlnd.fetch_data_copy', false);
var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
