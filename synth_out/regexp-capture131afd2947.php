<?php
$dbh = @pg_connect($conn_str);
var_dump(pg_last_notice($dbh));
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
bzclose($bz);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
;

mkdir($d0);
;
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
$GLOBALS['b'] = 2;
$a = NULL;
$b = NULL;
var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN));
mysqli_free_result($res);
$dyadic = 0.00000000000045474735088646411895751953125;
var_dump(printf ("%1.41f\n",unserialize(serialize($dyadic))));
session_write_close();
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id2 = shmop_open($shm_key, 'c', 0644, strlen($str) + 10);
var_dump($shm_id2);
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzread($h, 0));
print_r($str_instead);
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
dir($d1);

;
$fp = fopen('php://input', 'r+');
fclose($fp);
$various_arrays = array (
  array(5 => 55,  66, 22, 33, 11),
  array ("a" => "orange",  "banana", "c" => "apple"),
  array(1, 2, 3, 4, 5, 6),
  array("first", 5 => "second", "third"),
  array(1, 1, 8 => 1,  4 => 1, 19, 3 => 13),
  array('bar' => 'baz', "foo" => 1),
  array('a'=>1,'b'=>array('e'=>2,'f'=>3),'c'=>array('g'=>4),'d'=>5),
);
foreach ($various_arrays as $array) {
  echo "\n-- Iteration $count --\n";

  echo "- With default sort_flag -\n";
  $temp_array = $array;
  var_dump(asort($temp_array) );
  var_dump($temp_array);

  echo "- Sort_flag = SORT_REGULAR -\n";
  $temp_array = $array;
  var_dump(asort($temp_array, SORT_REGULAR) );
  var_dump($temp_array);
  $count++;
}
$temp_array = $array;
var_dump(asort($temp_array, SORT_REGULAR) );
$empty_webp = __DIR__ . "/gh13774.webp";
$im = imagecreatefromwebp($empty_webp);
var_dump($im);
