<?php
$ch = curl_init();
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0));
var_dump(strncmp("test ", "e", 10));
var_dump(baz());
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
(new B)->baz();
function f_0() {
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
    $originalEnvelopeData = "any string with \x1a is cut at this point.";
    $fp = fopen('php://input', 'r+');
    $wsdl = __DIR__."/bug35142.wsdl";
    class TestSoapClient extends SoapClient {
      private $server;
    
      function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    
      function __doRequest($request, $location, $action, $version, $one_way = 0): string {
        echo "$request\n";
        ob_start();
        $this->server->handle($request);
        $response = ob_get_contents();
        ob_end_clean();
        return $response;
      }
    
    }
    function __construct($wsdl, $options) {
        parent::__construct($wsdl, $options);
        $this->server = new SoapServer($wsdl, $options);
        $this->server->addFunction('PostEvents');
      }
    $soapClient = new TestSoapClient($wsdl,
        array('trace' => 1, 'exceptions' => 0,
            'classmap' => array('logOnEvent' => 'LogOnEvent',
                'logOffEvent' => 'LogOffEvent',
                'events' => 'IVREvents')));
    $dom = new DOMDocument;
    function f_1() {
    }
    $GLOBALS['b'] = 3;
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
    $headers1 = exif_read_data(__DIR__ . '/bug64739.jpg');
    var_dump($headers1['Title'][0] === '?');
    $varOutput = ob_get_contents();
    $varOutput = str_replace(
            [$var_dim_filename],
            ['%s'],
            $varOutput
        );
    file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
    public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
    public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    $b = 1;
    public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    $a = $b = $c = 0;
    $fmt = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
    $fmt->parse('abc');
    $this->show();
    $ch = curl_init("https://localhost/userpwd");
    curl_setopt($ch, CURLOPT_USERPWD, null);
    class foo
    {
    // no members
    }
    abstract class abstractClass
    {
      abstract protected function getClassName();
      public function printClassName () {
        echo $this->getClassName() . "\n";
      }
    }
    class concreteClass extends abstractClass
    {
      protected function getClassName() {
        return "concreteClass";
      }
    }
    interface IValue
    {
       public function setVal ($name, $val);
       public function dumpVal ();
    }
    class Value implements IValue
    {
      private $vars = array ();
    
      public function setVal ( $name, $val ) {
        $this->vars[$name] = $val;
      }
    
      public function dumpVal () {
        var_dump ( $vars );
      }
    }
    class myClass
    {
      var       $foo_object;
      public    $public_var;
      public    $public_var1;
      private   $private_var;
      protected $protected_var;
    
      function __construct ( ) {
        $this->foo_object = new foo();
        $this->public_var = 10;
        $this->public_var1 = new foo();
        $this->private_var = new foo();
        $this->protected_var = new foo();
      }
    }
    $myClass_object = new myClass();
    $foo_object = new foo();
    $Value_object = new Value();
    $concreteClass_object = new concreteClass();
    $valid_objects = array(
      new stdclass,
      new foo,
      new concreteClass,
      new Value,
      new myClass,
      $myClass_object,
      $myClass_object->foo_object,
      $myClass_object->public_var1,
      $foo_object,
      $Value_object,
      $concreteClass_object
    );
    $pem_cert = '
    -----BEGIN CERTIFICATE-----
    MIIGFDCCBPygAwIBAgIDKCHVMA0GCSqGSIb3DQEBBQUAMIHcMQswCQYDVQQGEwJV
    UzEQMA4GA1UECBMHQXJpem9uYTETMBEGA1UEBxMKU2NvdHRzZGFsZTElMCMGA1UE
    ChMcU3RhcmZpZWxkIFRlY2hub2xvZ2llcywgSW5jLjE5MDcGA1UECxMwaHR0cDov
    L2NlcnRpZmljYXRlcy5zdGFyZmllbGR0ZWNoLmNvbS9yZXBvc2l0b3J5MTEwLwYD
    VQQDEyhTdGFyZmllbGQgU2VjdXJlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MREw
    DwYDVQQFEwgxMDY4ODQzNTAcFwsxNDAxMDcwMDAwWhcNMTYwNDAxMDcwMDAwWjCB
    6zETMBEGCysGAQQBgjc8AgEDEwJVUzEYMBYGCysGAQQBgjc8AgECEwdBcml6b25h
    MR0wGwYDVQQPExRQcml2YXRlIE9yZ2FuaXphdGlvbjEUMBIGA1UEBRMLUi0xNzI0
    NzQxLTYxCzAJBgNVBAYTAlVTMRAwDgYDVQQIEwdBcml6b25hMRMwEQYDVQQHEwpT
    Y290dHNkYWxlMSQwIgYDVQQKExtTdGFyZmllbGQgVGVjaG5vbG9naWVzLCBMTEMx
    KzApBgNVBAMTInZhbGlkLnNmaS5jYXRlc3Quc3RhcmZpZWxkdGVjaC5jb20wggEi
    MA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCt1LHQOza9tkKxwGL+/yKi/Fe5
    HM0sjvcM4ic1XVrvpewa4P/04IzGSjIGO3CXaSArxQMSzsTt2dcO9tSJ1Zk8c9NZ
    XM8eVqx92iTMEf9OQcubWpzWmrPc3TAFhbVnfEmCptsXEgtxbAIbntrNeDk/hBPd
    l4DYFYRdm3ZTk4JMIf/quDZe5Oti53J0UsxWXSSoqKyPNdb671Q+OTQfSDj7kVF4
    +Ri3FIeAV16d2UnpBW1bgNqA5yITRskHE4bX98HDNHUTHioHpgA+fXfejWkGB/0F
    QN4HbZcysYHhf1L5cWBtz9w5J00YmjM5fzWvTc3UUF9ou7m7JE4aqEbNOWb9AgMB
    AAGjggHOMIIByjAMBgNVHRMBAf8EAjAAMA4GA1UdDwEB/wQEAwIFoDAdBgNVHSUE
    FjAUBggrBgEFBQcDAQYIKwYBBQUHAwIwLQYDVR0RBCYwJIIidmFsaWQuc2ZpLmNh
    dGVzdC5zdGFyZmllbGR0ZWNoLmNvbTAdBgNVHQ4EFgQUcO+QEqZcHphPW9szww9t
    y+1AGmQwHwYDVR0jBBgwFoAUSUtSJ9EbvPKhIWpie1FCeorX1VYwOAYDVR0fBDEw
    LzAtoCugKYYnaHR0cDovL2NybC5zdGFyZmllbGR0ZWNoLmNvbS9zZnMzLTAuY3Js
    MIGNBggrBgEFBQcBAQSBgDB+MCoGCCsGAQUFBzABhh5odHRwOi8vb2NzcC5zdGFy
    ZmllbGR0ZWNoLmNvbS8wUAYIKwYBBQUHMAKGRGh0dHA6Ly9jZXJ0aWZpY2F0ZXMu
    c3RhcmZpZWxkdGVjaC5jb20vcmVwb3NpdG9yeS9zZl9pbnRlcm1lZGlhdGUuY3J0
    MFIGA1UdIARLMEkwRwYLYIZIAYb9bgEHFwMwODA2BggrBgEFBQcCARYqaHR0cDov
    L2NlcnRzLnN0YXJmaWVsZHRlY2guY29tL3JlcG9zaXRvcnkvMA0GCSqGSIb3DQEB
    BQUAA4IBAQAViYkLUjQkxWRmZl4DutL0/9/wJSURcJ1qunLP+TImJFp0A9RE/MNK
    ZOmQoAEoH6hMg7FL4etkvTcnruTdcx+3mvqYiECUiUEx6pkx3dmkYgZACEuk2nfy
    J0MkV/zwzqmI8aV+kunpOQv93aePZbrBgaAzkE8jDlExtd7c4pE7JF40jxmvDwjZ
    HwpyNDULreGtFBij7JcWJCfihM3uetqrao0kOoeih1PQyJXtz2RldhFYs6Jdk3IL
    Yv+84t5UMO+aS9nVBXIcbgaGjIMZjHDgR/tE9FKFB66k8UTDzAwwEs38VV24zx6h
    lOzTF7xAUxmPUnNb2teatMf2Rmj0fs+d
    -----END CERTIFICATE-----
    ';
    var_dump(openssl_x509_parse($pem_cert));
    $dom = new DOMDocument();
    $xpath = new DOMXpath($dom);
    foreach($xpath->query('/root/noexist') as $child) {
        var_dump($child);
    }
    var_dump($child);
    printf("# Ghost:\n");
}
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
$body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
function f_2() {
    function f_3() {
    }
    global $user, $host, $passwd, $db, $port, $socket;
    $this->mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket);
    $output = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370_003' . DIRECTORY_SEPARATOR . 'testfile', 'w');
    $tz2 = new DateTimeZone('Europe/Berlin');
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            try {
                if (true) {
                    $loop_counter = 1;
                    $loop_counter++;
                }
            } catch (Exception $e) {}
            if (true) {
                $r = new ResourceBundle( 'en_US', BUNDLE );
                $r2 = $r['testtable'];
                printf( "testtable: %d\n", $r2['major'] );
                $test->a++;
            }
        }
    }
    class A {
        public function __call($name, $args) {
            for ($i = 0; $i < 5; $i++) {
                yield $i;
            }
        }
    }
    $a = new A();
    foreach ($a->gen() as $n) {
        var_dump($n);
    }
    var_dump($n);
    $root = simplexml_load_string('<root xmlns:x="urn:x" x:attr="foo"/>');
    $attr = $root->attributes('urn:x');
    var_dump(dom_import_simplexml($attr)->textContent);
    function f_6() {
    }
    $time = '2000-01-01 00:00:00.000000';
    $tz_aus = new DateTimeZone('Australia/Sydney');
    $auz = new DateTime($time, $tz_aus);
    printf("printf test 11: 123456789012345678901234567890\n");
}
ini_set("soap.wsdl_cache_enabled",0);
