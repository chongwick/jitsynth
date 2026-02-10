<?php
$errcontext = '';
$sql = "SELECT 11111 as `1`, 22222 as `2`";
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->query($sql);
$row = $res->fetch_array();
define('PHPT_DATETIME_SHOW', PHPT_DATETIME_SHOW_ADD);
$curl = curl_init("http://www.google.com");
curl_setopt($curl, CURLOPT_TIMEOUT, 1);
$array = [
    [
    'superhero'=> 'superman',
    'nanana' => 'no nana'
    ],
    [
    'superhero'=> 'acuaman',
    'nanana' => 'no nana'
    ],

    ];
var_dump(array_column($array, 'superhero'));
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
for ($i = 0; $i < 5; $i++) {
    $v[$i] = 'hi'.$i;
}
$v[$i] = 'hi'.$i;
$ch = curl_init();
$fp = fopen(PHP_OS_FAMILY === 'Windows' ? 'nul' : '/dev/null', 'w');
curl_setopt($ch, CURLOPT_FILE, $fp);
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$it = new RecursiveIteratorIterator($iterator);
$it->next();
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
