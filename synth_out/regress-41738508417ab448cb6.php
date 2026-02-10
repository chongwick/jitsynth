<?php
function f_0() {
    try {
        public function __construct($c)
            {
                $this->b = new C($c);
            }
        $this->b = new C($c);
        return serialize(clone $this->b);
        class C
        {
            public $c;
        
            public function __construct($c)
            {
                $this->c = $c;
            }
        };
    } catch (Exception $e) {}
    if (true) {
    }
}
function f_1() {
    $subject = 'string';
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $host = PHP_CLI_SERVER_HOSTNAME;
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
        rt = 30;
        $le
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do
        ched = $node->splitText($start);
        $ma;
        try {
            Foo::$bar = 'new';
        } catch (Exception $e) {}
        if (true) {
        }
        try {
            $i = 0;
            $i++;
        } catch (Exception $e) {}
        if (true) {
        }
        $a = array(1,2,3);
        $s1 = "some string";
        $c = $a + $s1;
    }
}
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
var_dump($temp_array);
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
