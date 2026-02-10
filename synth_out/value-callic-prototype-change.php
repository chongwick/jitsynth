<?php
function f_0() {
    function f_1() {
        $reflection = new ReflectionClass('\DateTimeImmutable');
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
    }
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        class FooBar implements ArrayAccess {
            private $array = array();
        
            public function offsetExists($index): bool {
                return isset($this->array[$index]);
            }
        
            public function offsetGet($index): mixed {
                return $this->array[$index];
            }
        
            public function offsetSet($index, $value): void {
                echo __METHOD__ . "($index, $value)\n";
                $this->array[$index] = $value;
            }
        
            public function offsetUnset($index): void {
                throw new Exception('FAIL');
                unset($this->array[$index]);
            }
        
        }
        $i = 0;
        $j = 0;
        $foo = new FooBar();
        $foo[$j++] = $i++;
        printf("[002] [%d] %s\n", $link->errno, $link->error);
    }
    $fp = fopen (__FILE__, "r");
    $dfp = opendir ( __DIR__ );
    $unset_array = array(10);
    $varient_arrays = array (
      /* integers */
      543915,
      -5322,
      0x55F,
      -0xCCF,
      123,
      -0654,
    
      /* strings */
      "",
      '',
      "0",
      '0',
      'string',
      "string",
    
      /* floats */
      10.0000000000000000005,
      .5e6,
      -.5E7,
      .5E+8,
      -.5e+90,
      1e5,
    
      /* objects */
      new stdclass,
    
      /* resources */
      $fp,
      $dfp,
    
      /* nulls */
      null,
      NULL,
    
      /* boolean */
      true,
      TRUE,
      FALSE,
      false,
    
      /* unset/undefined arrays  */
      @$unset_array,
      @$undefined_array
    );
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $xml =<<<EOF
        <xml>
        <fieldset1>
        </fieldset1>
        <fieldset2>
        <options>
        </options>
        </fieldset2>
        </xml>
        EOF;
        $sxe = new SimpleXMLIterator($xml);
        $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
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
        $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "urn:another");
    }
}
var_dump( range(1.0, 7.0, 10.0**400) );
function f_4() {
    $reflector = new ReflectionClass(C::class);
    function f_5() {
        $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
        $args[] = php_ini_loaded_file();
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, NULL, "html", "3"));
    }
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $fp = fopen($log_file, 'w+');
        fwrite($fp, "test");
    }
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $compressed = file_get_contents(__DIR__ . "/75776.$ext");
    for ($i_7 = 0; $i_7 < 10; $i_7++) {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
function f_8() {
    $depth0 = "depth02";
    function f_9() {
        $timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
        $unset_var = 10;
        $fp = fopen(__FILE__, "r");
        $heredoc = <<<EOT
        Hello world
        EOT;
        $var = 10;
        $arrays = array (
        
               // empty array
        /*1*/  array(),
        
               // arrays with integer keys
               array(0 => "0"),
               array(1 => "1"),
               array(1 => "1", 2 => "2", 3 => "3", 4 => "4"),
        
               // arrays with string keys
        /*7*/  array('\tHello' => 111, 're\td' => "color",
                     '\v\fworld' => 2.2, 'pen\n' => 33),
               array("\tHello" => 111, "re\td" => "color",
                     "\v\fworld" => 2.2, "pen\n" => 33),
               array("hello", $heredoc => "string"), // heredoc
        
               // array with object, unset variable and resource variable
               array(@$unset_var => "hello", $fp => 'resource'),
        
               // array with mixed keys
        /*11*/ array('hello' => 1, "fruit" => 2.2,
                     $fp => 'resource', 133 => "int",
                     @$unset_var => "unset", $heredoc => "heredoc")
        );
        foreach($arrays as $array) {
          echo "-- Iteration $iterator --\n";
        
          /* with default argument */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var) );
        
          // dump the resulting array
          var_dump($temp_array);
        
          /* with optional arguments */
          // returns element count in the resulting array after arguments are pushed to
          // beginning of the given array
          $temp_array = $array;
          var_dump( array_unshift($temp_array, $var, "hello", 'world') );
        
          // dump the resulting array
          var_dump($temp_array);
          $iterator++;
        }
        $temp_array = $array;
        var_dump( array_unshift($temp_array, $var, "hello", 'world') );
    }
    for ($i_10 = 0; $i_10 < 10; $i_10++) {
        $dom = Dom\HTMLDocument::createEmpty();
        $container = $dom->appendChild(createElement($dom, "container"));
        $container->appendChild(createElementNS($dom, NULL, "HTML", "4"));
    }
    $version = mysqli_get_server_version($link);
    for ($i_11 = 0; $i_11 < 10; $i_11++) {
        $anon = new class {
            public int $field;
            function __construct() {
                $this->field = 2;
            }
        };
        $anon->field = 123;
        var_dump($anon->field);
    }
}
$db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$db->query('DROP PROCEDURE IF EXISTS testSp');
