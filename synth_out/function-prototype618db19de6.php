<?php
class di extends DateInterval {
    public $unit = 1;
}
class cr {
    private $priv_member;
    function __construct($val) {
        $this->priv_member = $val;
    }
    static function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
    static function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
    function dump() {
        echo $this->priv_member . "\n";
    }
}
function test($s, $mode)
{
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
function gen() {
    yield 0;
    yield from gen();
}
function bar($gen) {
    yield from $gen;
}
function zerofill($offset, $link, $datatype, $insert = 1) {

        mysqli_query($link, 'ALTER TABLE test DROP zero');
        $sql = sprintf('ALTER TABLE test ADD zero %s UNSIGNED ZEROFILL', $datatype);
        if (!mysqli_query($link, $sql)) {
            // no worries - server might not support it
            return true;
        }

        if (!mysqli_query($link, sprintf('UPDATE test SET zero = %s', $insert))) {
            printf("[%03d] UPDATE failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        if (!($res = mysqli_query($link, 'SELECT zero FROM test LIMIT 1'))) {
            printf("[%03d] SELECT failed, [%d] %s\n",
                $offset, mysqli_errno($link), mysqli_error($link));
            return false;
        }

        $row = mysqli_fetch_assoc($res);
        $meta = mysqli_fetch_fields($res);
        mysqli_free_result($res);
        $meta = $meta[0];
        $length = $meta->length;
        if ($length > strlen($insert)) {

            $expected = str_repeat('0', $length - strlen($insert));
            $expected .= $insert;
            if ($expected !== $row['zero']) {
                printf("[%03d] Expecting '%s' got '%s'\n", $offset, $expected, $row['zero']);
                return false;
            }

        } else if ($length <= 1) {
            printf("[%03d] Length reported is too small to run test\n", $offset);
            return false;
        }

        return true;
    }
function f_0() {
    function f_1() {
    }
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    $I = new di('P10D');
    print_r($I);
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
    $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
    $fp = fopen($log_file, 'w+');
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname);
    $phar->setDefaultStub();
}
$iterator = 1;
$info = opcache_get_status()['interned_strings_usage'];
var_dump($info['buffer_size']);
function f_2() {
}
$a = array("0.1" => new cr(9), "0.5" => new cr(12), 0 => new cr(23), 1 => new cr(4), 2 => new cr(-15),);
$b = array("0.2" => new cr(9), "0.5" => new cr(22), 0 => new cr(3), 1 => new cr(4), 2 => new cr(-15),);
$result = array_udiff_assoc($a, $b, array("cr", "comp_func_cr2"));
printf("printf test 32:%.17g\n", -INF);
$fp = fopen(__FILE__, "r");
$str = 'Hello World';
$shm_key = ftok(__FILE__, 'p');
$shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_NS_SSL_SERVER));
$r = new ReflectionClass('stdClass');
var_dump(serialize($r));
$a = 'ok';
$_a = $a;
$found_flags = $unexpected_flags = '';
$pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
$reqOf3 = 'select 79 n union all select 80 union all select 81';
$stmt = $pdo->prepare($reqOf3);
$stmt->execute();
$dt = DateTime::createFromFormat('Y-m-d!', '2011-02-02');
var_dump($dt);
function f_3() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
$file = __DIR__ . "/bug71127.inc";
$server = new soapserver(null,array('uri'=>"http://testuri.org"));
$server->addfunction("test");
function f_4() {
}
$q = '009b3734fc9f7a4a9d6437ec314e0a78c2889af64b';
var_dump(self::$x);
function f_5() {
}
$c = new C();
$sert = "file://" . __DIR__ . "/san-cert.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT, array($cpca), $utfl));
function f_6() {
}
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$conn = pg_connect($conn_str);
$table='test_68638';
pg_update($conn,$table, array('value' => 'inf'), array('id' => 1));
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array) );
$empty = "";
var_dump(openssl_pkcs7_verify($empty, 0));
$compression = [
    'gz' => ['zlib.deflate', 'gzinflate'],
    'bz2' => ['bzip2.compress', 'bzdecompress']
];
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483650', \NumberFormatter::TYPE_INT64);
for ($i_7 = 0; $i_7 < 10; $i_7++) {
    $fp = fopen(__DIR__."/test2.csv", "r");
}
$fn = "bug71263.bz2";
unlink($fn);
$interval = new DateInterval('P1D');
$a = array(1,2,3);
printf("%0\$s", 1);
printf("# %s\n", $name);
ob_clean();
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
$j = 0;
$fn = "bug71263.bz2";
$r = fopen($fn, "r");
fclose($r);
$gen = gen();
$a = bar($gen);
$a->rewind();
printf("[%03d] Length reported is too small to run test\n", $offset);
$rf = new ReflectionFunction('collator_get_sort_key');
$obj = new C();
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
$array = array("test" => 1);
$a = "lest";
var_dump($array[$a]);
$plain = "The quick brown fox jumps over the lazy dog.";
$fn = "bug71263.bz2";
$compressed = (string) bzcompress($plain);
$compressed = substr($compressed, 0, strlen($compressed) - 20);
file_put_contents($fn, $compressed);
$now = new DateTime('2018-11-03 11:34:20.781751');
$ago = new DateTime('2018-11-03 11:34:20.000000');
$diff = $ago->diff($now);
var_dump($diff->invert, $diff->s, $diff->f);
$users = MailBox::USERS;
$to = $users[0];
$bcc = $users[2];
foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
    $mailBox = MailBox::login($mailAddress);
    $mail = $mailBox->getMailsBySubject($subject);
    $mailBox->logout();

    if ($mail->isAsExpected($from, $to, $subject, $message)) {
        echo "Found the email. {$recipient} received.\n";
    }

    if ($mail->getHeader('X-Mailer') === $xMailer) {
        echo "The specified x-Mailer exists.\n\n";
    }
}
$mailBox = MailBox::login($mailAddress);
$mailBox->logout();
