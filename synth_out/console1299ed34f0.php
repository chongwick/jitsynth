<?php
$db = MySQLPDOTest::factory();
$db->exec('INSERT INTO test_33689 VALUES(1)');
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
var_dump(self::$x);
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "DROP TABLE IF EXISTS $tbl";
$mysqli->query($sql);
$sert = "file://" . __DIR__ . "/san-cert.pem";
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("a", 1);
mysqli_close($link);
$magic_file = __DIR__ . '/bug79283.db';
$finfo = new finfo(FILEINFO_NONE, $magic_file);
var_dump($finfo->buffer("buffer\n"));
class A {
    static function name() { return 'A'; }
    function foo() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function bar() {
        $fn = static function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    static function baz() {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
}
class B extends A {
    static function name() { return 'B'; }
}
(new B)->bar();
$values = array(10,
                10.3,
                3.9505e3,
                037,
                0x5F,
                "10",
                "3950.5",
                "3.9505e3",
                "039",
                true,
                false,
                );
foreach($values as $value) {
    echo "\n-- Iteration $iterator --\n";
    var_dump(expm1($value));
    $iterator++;
}
var_dump(expm1($value));
$blank_line = <<<EOD

EOD;
$needles = array(
  "\n",
  '\n',
  "\r",
  "\r\n",
  "\t",
  "",
  $blank_line //needle as haystack
);
foreach($needles as $needle) {
  var_dump( strrchr($blank_line, $needle) );
}
var_dump( strrchr($blank_line, $needle) );
class Element
{
    public function ThrowException ()
    {
        throw new Exception();
    }

    public static function CallBack(Element $elem)
    {
        $elem->ThrowException();
    }
}
$arr = array(new Element(), new Element(), new Element());
array_map(array('Element', 'CallBack'), $arr);
unserialize('a:2:{i:0;O:9:"000000000":10000000');
var_dump(range('z', 'a', 100));
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
var_dump(defined('SO_REUSEPORT'));
$tempstring = "abcdefghjklmnpqrstuvwxyz";
var_dump(sprintf("%s", $tempstring, $tempstring, $tempstring));
