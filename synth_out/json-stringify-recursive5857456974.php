<?php
function crash()
{
    $notDefined[$i] = 'test';
}
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
$w["bug69279.txt"] = "Sample content.";
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
    $value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
    $filename = __DIR__ . '/_fromUri_custom_constructor.xml';
    $r = socket_sendmsg($sends1, [
        "name" => [ "addr" => "::1", "port" => 3002],
        "iov" => ["test ", "thing", "\n"],
        "control" => [[
            "level" => IPPROTO_IPV6,
            "type" => IPV6_TCLASS,
            "data" => 40,
        ]]
    ], 0);
}
function f_1() {
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_NS_SSL_SERVER, array($cpca)));
    for($i = 495; $i <= 1074; $i++) {
      ini_set('precision', $i);
      echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
    }
    ini_set('precision', $i);
}
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 1);
$me = new static;
$arr = array('http'=>
                        array(
                                'follow_location'=>1,
                        )
                );
$context = stream_context_create($arr);
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $index_array = array (1, 2, 3);
}
crash();
$reflection = new ReflectionClass('\DateTime');
$mutable = $reflection->newInstanceWithoutConstructor();
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $file_handle = fopen(__FILE__, "r");
    $dir_handle = opendir( __DIR__ );
    $resources = array($file_handle, $dir_handle);
}
$src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
$array = new ArrayObject();
var_dump($array->offsetExists('nokey'));
