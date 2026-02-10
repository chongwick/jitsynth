<?php
if (true) {
    function f_0() {
        return new Exception;
    }
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    class foo
    {
      function __toString() {
        return "Object";
      }
    }
    $object1 = new foo();
    $filename = __DIR__ . '/bug77432.phar';
    $start = memory_get_usage() + 1024;
    $ch = curl_init();
    c1::$a3[] = 1;
    $ch = curl_init("https://localhost/username");
    $response = curl_exec($ch);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $phar = new Phar($fname, 0, 'a.phar');
    $assoc_array = array ('one' => 1, 'two' => 2);
    $ch = curl_init("https://localhost/username");
    function f_1() {
        class base {
            private function show() {
                echo "base\n";
            }
            function test() {
                $this->show();
            }
        }
        $t = new base();
        $dir_handle = opendir( __DIR__ );
        closedir( $dir_handle );
        class dummy
        {
        }
        main::$dummy        = new dummy();
        $plain = "The quick brown fox jumps over the lazy dog.";
        $fn = "bug71263.bz2";
        $compressed = (string) bzcompress($plain);
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
        file_put_contents($fn, $compressed);
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            function foo() {
              var_dump("hello");
            }
            foo();
            class MyObjectStorage extends SplObjectStorage {
                // Overwrite getHash() with just some (working) test-method
                public function getHash($object): string { return get_class($object); }
            }
            $list = new MyObjectStorage();
            foreach($list as $x) var_dump($list->offsetExists($x));
            $list2 = clone $list;
            foreach($list2 as $x) var_dump($list2->offsetExists($x));
            var_dump($list2->offsetExists($x));
        }
    }
    $array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
    $msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
    function bar($x='no argument')
    {
        throw new Exception("This is an exception from bar({$x}).");
    }
    bar('first try');
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    $offset3 = "offset";
    var_dump(count($cert_data['extracerts']));
    $thirty = M_PI / 6.0;
    $tz1 = new DateTimeZone('Europe/Berlin');
    $d = new DateTime('2014-12-24 13:00:00', $tz1);
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    imagesetthickness($im, $thickness);
    $dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");
    
    mkdir($prefix);
    foreach ($;
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
    gc_collect_cycles();
    $threesixty = M_PI * 2.0;
    $users = MailBox::USERS;
    $from = ini_get('sendmail_from');
    $bcc = $users[2];
    $xMailer = 'bug80706_x_mailer';
    $headers = "From: {$from}\r\n"
        . "Bcc: {$bcc}\r\n"
        . "X-Mailer: {$xMailer}";
    $arrays = array (
      array( 0 ),
      range(1, 100 ),
      range('a', 'z', 2 ),
      array("a" => "A", 2 => "B", "C" => 3, 4 => 4, "one" => 1, "" => NULL ),
      array(1, array(1, 2 => 3 ), "one" => 1, "5" => 5 ),
      array(-1, -2, -3, -4, "-0.005" => "neg0.005", 2.0 => "float2", "neg.9" => -.9 ),
      array(1.0005, 2.000000, -3.000000, -4.9999999 ),
      array(true, false),
      array("PHP", "Web2.0", "SOA"),
      array(1, array() ),
      array(1, 2, "" ),
      array(" "),
      array(2147483647, 2147483648, -2147483647, -2147483648 ),
      array(0x7FFFFFFF, -0x80000000, 017777777777, -020000000000 ),
      array(-.6700000E+3, -4.10003E+3, 1e-5, -1E+5, 000002.00 )
    );
    foreach ($arrays as $sub_array){
      echo "-- Iteration $counter --\n";
      var_dump( end($sub_array) );
      /* ensure that internal pointer is moved to last element */
      var_dump( current($sub_array) );
      $counter++;
    }
    var_dump( current($sub_array) );
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $data = array_unique($data, flags: SORT_REGULAR);
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    $trace_file = '/tmp/mysqli_debug_phpt.trace';
    function do_throw() { throw new Exception; }
    $f = function () {};
    $f->__invoke(do_throw());
    $code = <<<EOT
    <?php
    echo 1;
    EOT;
    function setStyleAndThickness($im, $color, $thickness)
    {
        $style = array();
        $i = 0;
        while ($i < 16 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 20 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        while ($i < 28 * $thickness) {
            $style[$i++] = $color;
        }
        while ($i < 32 * $thickness) {
            $style[$i++] = IMG_COLOR_TRANSPARENT;
        }
        imagesetstyle($im, $style);
        imagesetthickness($im, $thickness);
    }
    $style = array();
    $i = 0;
    $style[$i++] = $color;
    var_dump(mb_strpos('Hello', 'e', 0, '8bit'));
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    ith_cp($d0, 65001);
    get_basename_;
    $zip = new ZipArchive();
    $zip->addFromString('foo.txt', 'foo bar foobar');
    set_exception_handler(null);
    $tmpFileOut = tempnam(sys_get_temp_dir(), 'test');
    unlink($tmpFileOut);
    $a=glob("./*.jpeg");
    $this->b = 2;
    $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
    $d0 = $prefix . "ソフト";
    $d1 =
    dir($d1);
    
    ;
    $a = Array();
    $message = 'hello';
    var_dump ( $vars );
    $dom = new DOMDocument('1.0', 'UTF-8');
    $node = $dom->getElementById('test');
    var_dump($dom->saveHTML($node));
    var_dump( range(1.0, 7.0, 0.0) );
    $im = imagecreate(800, 800);
    imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
    var_dump(get_class_vars(C::class));
    class A {
        public $b;
    }
    $a = new A;
    $a = 4;
    $ar1 = array("row1" => 2, "row2" => 1);
    var_dump($ar1);
    mkdir(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003');
    $bert = "file://" . __DIR__ . "/bug41033.pem";
    $cpca = __DIR__ . "/san-cert.pem";
    $utfl = __DIR__ . "/sni_server_uk.pem";
    var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_CRL_SIGN, array($cpca), $utfl));
    $empty_webp = __DIR__ . "/gh13774.webp";
    $im = imagecreatefromwebp($empty_webp);
    var_dump($im);
    $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
    $flags = array(
            MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
            MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
            MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
            MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
            MYSQLI_BLOB_FLAG => 'BLOB',
            MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
            MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
            MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
            MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
            MYSQLI_SET_FLAG	=> 'SET',
            MYSQLI_NUM_FLAG => 'NUM',
            MYSQLI_PART_KEY_FLAG => 'PART_KEY',
            // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
            (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
            (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
            (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
            // MYSQLI_BINCMP_FLAG
        );
    $flags[8192] = 'ON_UPDATE_NOW';
    $php = getenv('TEST_PHP_EXECUTABLE_ESCAPED');
    var_dump(`$php -n -v`);
    $filename = "bug51997.bz2";
    $bz = bzopen($filename, "r");
    fseek($bz, 0, SEEK_CUR);
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    extract(Foo::bar());
    $dom = Dom\HTMLDocument::createEmpty();
    $container = $dom->appendChild(createElement($dom, "container"));
    $container->appendChild(createElementNS($dom, NULL, "html", "3"));
    var_dump(json_decode('{"key":"value", "":"value"}', true));
    $unset_var = 10;
    $dbh = @pg_connect($conn_str);
    $res = pg_query($dbh, 'SELECT test_notice()');
    $row = pg_fetch_row($res, 0);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_WRITEFUNCTION, null);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    var_dump($pdo->query('SELECT 1;')->fetchAll());
    $depth0 = "depth02";
    $depth1 = "depth1";
    touch(__DIR__ . DIRECTORY_SEPARATOR . $depth0 . DIRECTORY_SEPARATOR . $depth1 . DIRECTORY_SEPARATOR . 'getSubPathname_test_3.tmp');
    var_dump(soundex("Euler"));
}
