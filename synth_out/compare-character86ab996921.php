<?php
$priorityQueue = new SplPriorityQueue();
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $heredoc = <<<EOT
    hello world
    EOT;
    class C extends stdClass {
        public int $a;
    }
    $obj = new C();
    $im = imagecreate(800, 800);
    imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
    function test(string $input) {
        var_dump(filter_var($input, FILTER_VALIDATE_URL));
    }
    test("http://t[est@[::1");
    sprintf('%3$s, %2$s %1$s', "a", "b");
    class testObject extends ArrayObject {
        protected $test;
    
        public function getTest() {
            return $this->test;
        }
    
        public function setTest($test) {
            $this->test = $test;
        }
    }
    $obj = new testObject();
    var_dump($obj->getTest());
    $db = PDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ini_set("intl.error_level", E_WARNING);
    $timestamp = mktime(8, 8, 8, 8, 8, 2008);
    $inputs = array(
          // Predefined Date constants
          'DATE_ATOM Constant' => DATE_ATOM,
          'DATE_COOKIE Constant' => DATE_COOKIE,
          'DATE_RFC822 Constant' => DATE_RFC822,
          'DATE_RFC850 Constant' => DATE_RFC850,
          'DATE_RFC1036 Constant' => DATE_RFC1036,
          'DATE_RFC1123 Constant' => DATE_RFC1123,
          'DATE_RFC2822 Constant' => DATE_RFC2822,
          'DATE_RFC3339 Constant' => DATE_RFC3339,
          'DATE_RSS Constant' => DATE_RSS,
          'DATE_W3C Constant' => DATE_W3C,
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmdate($value, $timestamp) );
          var_dump( gmdate($value) );
    }
    var_dump( gmdate($value, $timestamp) );
    $inner = 'r:2;';
    $exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
    $data = unserialize($exploit);
    var_dump($data);
    $curl = curl_init("http://www.google.com");
    curl_setopt($curl, CURLOPT_PRIVATE, "123");
    var_dump(soundex("Hilbert") == soundex("Ladd"));
    var_dump($_SERVER["HTTP_X_FORWARDED_FOR"]);
    $sert = "file://" . __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_SIGN));
}
