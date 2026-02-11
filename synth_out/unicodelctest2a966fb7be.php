<?php
class C {
    public int $a;
}
class foo
{
  function __toString() {
    return "Object";
  }
}
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
function Test($param) {
    global $g;
    $g = $param->strA."\n".$param->strB."\n";
    return $g;
}
class SomeClass implements JsonSerializable {
    public function jsonSerialize(): mixed {
        return [get_object_vars($this)];
    }
}
class testObject extends ArrayObject {
    protected $test;

    public function getTest() {
        return $this->test;
    }

    public function setTest($test) {
        $this->test = $test;
    }
}
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
$dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
$x[""][] = 1;
$r = new Phar(__DIR__ . "/bug69279.phar.zip");
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $quote_char_string = <<<EOT
    <html>&lt; This's a string with quotes:
    "strings in double quote" &amp;
    'strings in single quote' &quot;
    this\line is &#039;single quoted&#039; /with\slashes </html>
    EOT;
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_int());
}
function f_1() {
    return 42;
}
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyGhost(function () {
    throw new \Exception('initializer');
});
class_alias( 'stdClass', '_' );
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $a = "lest";
    $a[0] = "f";
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    var_dump($dom->lookupNamespaceURI(""));
}
$obj = new C();
function f_3() {
    $responses = array(
        "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
        "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
    );
    ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
    $f = @fopen($uri, "r");
    $blank_line = <<<EOT
    
    EOT;
    $mysqli = new mysqli("$host:$port", $user, $passwd, $db);
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo::class, true);
    $var = '';
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    $obj = unserialize('O:8:"00000000":');
    return "Class A object";
}
function f_4() {
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt2 = clone $fmt;
    if (true) {
        $object1 = new foo();
        $array_object = array();
        $array_object[0] = &$object1;
    }
    if (true) {
        $a = new A();
        $a->prop = new B();
    }
    if (true) {
        $g = $param->strA."\n".$param->strB."\n";
    }
    if (true) {
        $a = 'ok';
        $_a = $a;
    }
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
function f_5() {
    $ch = curl_init();
    foreach ($offsets as $offset) {
        $dimension = &$offset;
        $container = false;
        $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    
        include $var_dim_filename;
        $varOutput = ob_get_contents();
        ob_clean();
        $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    
        if (
            !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
            && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
            && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
        ) {
            file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
            ++$failuresNb;
            $failures[] = $error;
        }
        ++$testCasesTotal;
    }
    $dimension = &$offset;
    $error = 'false[&' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
    $failures[] = $error;
    for ($i_6 = 0; $i_6 < 10; $i_6++) {
        $class = new SomeClass;
        $iterator = 1;
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
        $reqOf3 = 'select 79 n union all select 80 union all select 81';
        $stmt1 = $pdo->query($reqOf3);
        for ($i_7 = 0; $i_7 < 10; $i_7++) {
            $doc = new \DOMDocument();
            $doc->loadXML('<a>foo<last/></a>');
            $obj = new testObject();
            $obj2 = unserialize(serialize($obj));
        }
        $f = __DIR__."/data/test.txt.gz";
        $h = gzopen($f, 'r');
        var_dump(gzeof($h));
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
        for ($i_8 = 0; $i_8 < 10; $i_8++) {
            $i = 0;
            $j = 0;
            $foo = new FooBar();
            $foo[$j++] = $i++;
            if (true) {
                $i = 1;
            }
            $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
            $d0 = $prefix . "ソフト";
            if (true) {
                $now = new DateTime('2018-11-03 11:34:20.781751');
                $ago = new DateTime('2018-11-03 11:34:20.000000');
                $diff = $ago->diff($now);
            }
        }
        $response = ob_get_contents();
        $empty_string = <<<EOT
        EOT;
        $blank_line = <<<EOT
        
        EOT;
        $multiline_string = <<<EOT
        <html>Roy&#039;s height &gt; Sam&#039;s height
        13 &lt; 25
        1111 &amp; 0000 = 0000
        &quot;This is a double quoted string&quot;
        EOT;
        $diff_whitespaces = <<<EOT
        <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
        1111\t\t &amp; 0000\v\v = \f0000
        &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
        EOT;
        $numeric_string = <<<EOT
        <html>11 &lt; 12. 123 string 4567
        &quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
        EOT;
        $quote_char_string = <<<EOT
        <html>&lt; This's a string with quotes:
        "strings in double quote" &amp;
        'strings in single quote' &quot;
        this\line is &#039;single quoted&#039; /with\slashes </html>
        EOT;
        $res_heredoc_strings = array(
          //heredoc strings
          $empty_string,
          $blank_line,
          $multiline_string,
          $diff_whitespaces,
          $numeric_string,
          $quote_char_string
        );
        $datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
        for ($i_9 = 0; $i_9 < 10; $i_9++) {
            var_dump(
                    strnatcmp('foo ', 'foo '),
                    strnatcmp('foo', 'foo'),
                    strnatcmp(' foo', ' foo')
                );
            $GLOBALS['b'] = 2;
            $b = &$GLOBALS['b'];
            $GLOBALS['b'] = 3;
            $a = 4;
            var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            var_dump($dom->lookupNamespaceURI("xmlns"));
        }
    }
}
function f_10() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    $header = <<<HEADER
    enum bug_gh16013_enum {
    	BUG_GH16013_A = 1,
    	BUG_GH16013_B = 2,
    };
    struct bug_gh16013_int_struct {
    	int field;
    };
    struct bug_gh16013_callback_struct {
    	int8_t (*return_int8)(int8_t);
    	uint8_t (*return_uint8)(uint8_t);
    	int16_t (*return_int16)(int16_t);
    	uint16_t (*return_uint16)(uint16_t);
    	int32_t (*return_int32)(int32_t);
    	uint32_t (*return_uint32)(uint32_t);
    	float (*return_float)(float);
    	struct bug_gh16013_int_struct (*return_struct)(struct bug_gh16013_int_struct);
    	enum bug_gh16013_enum (*return_enum)(enum bug_gh16013_enum);
    };
    
    char bug_gh16013_return_char();
    bool bug_gh16013_return_bool();
    short bug_gh16013_return_short();
    int bug_gh16013_return_int();
    enum bug_gh16013_enum bug_gh16013_return_enum();
    struct bug_gh16013_int_struct bug_gh16013_return_struct();
    HEADER;
    $ffi = FFI::cdef($header, ffi_get_php_dll_name());
    var_dump($ffi->bug_gh16013_return_int());
}
function f_11() {
    return "Class A object";
}
function f_12() {
    return new Exception;
}
