<?php
function f_0() {
    function f_1() {
        printf("[003] No result, [%d] %s\n", $link->errno, $link->error);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
        var_dump($sends1);
        function f_2() {
            catch (\Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            printf("%s: %s\n", $e::class, $e->getMessage());
            var_dump ( rtrim("rtrim test        ", true) );
        }
        $heredoc_string = <<<EOT
        This is line 1 of 'heredoc' string
        This is line 2 of "heredoc" string
        EOT;
        $heredoc_null_string =<<<EOT
        EOT;
        $str_array = array(
                            // string without any characters that can be backslashed
                            'Hello world',
        
                            // string with single quotes
                            "how're you doing?",
                            "don't disturb u'r neighbours",
                            "don't disturb u'r neighbours''",
                            '',
                            '\'',
                            "'",
        
                            // string with double quotes
                            'he said, "he will be on leave"',
                            'he said, ""he will be on leave"',
                            '"""PHP"""',
                            "",
                            "\"",
                            '"',
                    "hello\"",
        
                            // string with backslash characters
                            'Is your name Ram\Krishna?',
                            '\\0.0.0.0',
                            'c:\php\testcase\addslashes',
                            '\\',
        
                            // string with nul characters
                            'hello'.chr(0).'world',
                            chr(0).'hello'.chr(0),
                            chr(0).chr(0).'hello',
                            chr(0),
        
                            // mixed strings
                            "'\\0.0.0.0'",
                            "'\\0.0.0.0'".chr(0),
                            chr(0)."'c:\php\'",
                            '"\\0.0.0.0"',
                            '"c:\php\"'.chr(0)."'",
                            '"hello"'."'world'".chr(0).'//',
        
                    // string with hexadecimal number
                            "0xABCDEF0123456789",
                            "\x00",
                            '!@#$%&*@$%#&/;:,<>',
                            "hello\x00world",
        
                            // heredoc strings
                            $heredoc_string,
                            $heredoc_null_string
                          );
        foreach( $str_array as $str )  {
          echo "\n-- Iteration $count --\n";
          var_dump( addslashes($str) );
          $count ++;
        }
        var_dump( addslashes($str) );
    }
    var_dump(baz());
}
$client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
$client->Add();
function f_3() {
    var_dump(filter_var("", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
    function f_4() {
        printf("pdo.dsn.mysql cannot be accessed through ini_get_all()/ini_get()\n");
        var_dump(range(1, 3, -1));
        var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
        function f_5() {
            $fp = fopen (__FILE__, "r");
            fclose($fp);
            $doc = new \DOMDocument();
            $target = $doc->documentElement->lastChild;
            $target->after('bar', $doc->documentElement->firstChild, 'baz');
        }
        $ch = curl_init();
        var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1));
    }
    class C {
        private $priv1 = 'secret1';
        private $priv2 = 'secret2';
        public $pub1 = 'public1';
        public $pub2 = 'public2';
        public $pub3 = 'public3';
        public $pub4 = 'public4';
    }
    function showFirstTwoItems($it) {
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
      $it->next();
      echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
    "\n";
    }
    $ao = new ArrayObject(new C);
    $ai = $ao->getIterator();
    showFirstTwoItems($ai);
}
class TestSoapClient extends SoapClient
{
    public function __doRequest($req, $loc, $act, $ver, $one_way = 0): string
    {
        return <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope
  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
  xmlns:ns="urn:ebay:api:PayPalAPI">
  <SOAP-ENV:Body id="_0">
    <GetExpressCheckoutDetailsResponse xmlns="urn:ebay:api:PayPalAPI">
      <Timestamp>2008-06-23T14:51:08Z</Timestamp>
      <Ack>Success</Ack>
      <CorrelationID>ae013a0ccdf13</CorrelationID>
      <Version>50.000000</Version>
      <Build>588340</Build>
      <GetExpressCheckoutDetailsResponseDetails xsi:type="ns:GetExpressCheckoutDetailsResponseDetailsType">
        <Token>EC-11Y75137T2399952C</Token>
        <PayerInfo>
          <Payer>example@example.com</Payer>
          <PayerID>MU82WA43YXM9C</PayerID>
          <PayerStatus>verified</PayerStatus>
        </PayerInfo>
      </GetExpressCheckoutDetailsResponseDetails>
    </GetExpressCheckoutDetailsResponse>
  </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
XML;
    }
}
$client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
print_r($client->GetExpressCheckoutDetails());
function f_6() {
    function f_7() {
        $file_handle = fopen(__FILE__, "r");
        $values = array (
          /* integers */
          0,  // zero as argument
          000000123,  //octal value of 83
          123000000,
          -00000123,  //octal value of 83
          -12300000,
          0xffffff,  //hexadecimal value
          123456789,
          1,
          -1,
        
          /* floats */
          -0.0,
          +0.0,
          1.234,
          -1.234,
          -2.000000,
          2.0000000,
          -4.0001e+5,
          4.0001E+5,
          6.99999989,
          -.5,
          .567,
          -.6700000e-3,
          -.6700000E+3,
          1E-5,
          -1e+5,
          1e+5,
          1E-5,
        
          /* strings */
          "",
          '',
          " ",
          ' ',
          "0",
          "\0",
          '\0',
          "\t",
          '\t',
          "PHP",
          'PHP',
          "1234\t\n5678\n\t9100\rabcda\x0000cdeh\0stuv",  // strings with escape chars
        
          /* boolean */
          TRUE,
          FALSE,
          true,
          false,
        
          /* arrays */
          array(),
          array(NULL),
          array(true),
          array(""),
          array(''),
          array(array(1, 2), array('a', 'b')),
          array("test" => "is_array", 1 => 'One'),
          array(0),
          array(-1),
          array(10.5, 5.6),
          array("string", "test"),
          array('string', 'test'),
        
          /* resources */
          $file_handle
        );
        foreach( $values as $value ) {
          echo "-- Iteration $counter --\n";
          debug_zval_dump( $value );
          $counter++;
        }
        debug_zval_dump( $value );
        function test(string $name, object $obj) {
            printf("# %s:\n", $name);
        
            var_dump($obj);
            var_dump(@$obj->dynamic++);
            var_dump($obj);
        }
        printf("# %s:\n", $name);
        $initialRequest = false;
        $y = 0;
        global $y;
        $y++;
        var_dump($initialRequest ? $x : $y);
        $dom = Dom\HTMLDocument::createEmpty();
        var_dump($dom->lookupNamespaceURI(NULL));
        $certificateGenerator = new CertificateGenerator();
        $certificateGenerator->saveCaCert(__DIR__ . "/san-cert.pem");
        function f_8() {
            #[\AllowDynamicProperties]
            class C {
                public $b;
                public function __construct() {
                    $this->a = new Canary();
                }
            }
            $obj = new C();
            var_dump($obj);
            $input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
            fclose($input);
        }
        class Test {
            public static function __callStatic($method, $args) {}
            public function __call($method, $args) {}
        }
        function do_throw() { throw new Exception; }
        (new Test)->bar(do_throw());
    }
    $meta_res = $stmt->result_metadata();
    $field = $meta_res->fetch_field();
    printf("Length       : %d\n", $field->length);
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
    printf("[%03d] Length reported is too small to run test\n", $offset);
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $tbl = "test";
    $sql = "INSERT INTO $tbl (bit_column_1) VALUES (0b10101010101)";
    $mysqli->query($sql);
}
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
foreach( $search_arr as $value ) {
  echo "\n-- Iteration $i --\n";
  /* replace the string in array */
  var_dump( str_replace($value, "FOUND", $search_arr, $count) );
  var_dump( $count );
  $i++;
}
var_dump( str_replace($value, "FOUND", $search_arr, $count) );
