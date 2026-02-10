<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $tests = array(
            1 => array(
                '$6$saltstring',
                'Hello world!',
                '$6$saltstring$svn8UoSVapNtMuq1ukKS4tPQd8iKwSMHWjl/O817G3uBnIFNjnQJuesI68u4OTLiBFdcbYEdFCoEOfaS35inz1'
            ),
            2 => array(
                '$6$rounds=10000$saltstringsaltstring',
                'Hello world!',
                '$6$rounds=10000$saltstringsaltst$OW1/O6BYHV6BcXZu8QVeXbDWra3Oeqh0sbHbbMCVNSnCM/UrjmM0Dp8vOuZeHBy/YTBmSK6H9qs/y3RnOaw5v.'
            ),
            3 => array(
                '$6$rounds=5000$toolongsaltstring',
                'This is just a test',
                '$6$rounds=5000$toolongsaltstrin$lQ8jolhgVRVhY4b5pZKaysCLi0QBxGoNeKQzQ3glMhwllF7oGDZxUhx1yxdYcz/e1JSbq3y6JMxxl8audkUEm0'
            ),
            4 => array(
                '$6$rounds=1400$anotherlongsaltstring',
                'a very much longer text to encrypt.  This one even stretches over morethan one line.',
                '$6$rounds=1400$anotherlongsalts$POfYwTEok97VWcjxIiSOjiykti.o/pQs.wPvMxQ6Fm7I6IoYN3CmLs66x9t0oSwbtEW7o7UmJEiDwGqd8p4ur1'
            ),
            5 => array(
                '$6$rounds=77777$short',
                'we have a short salt string but not a short password',
                '$6$rounds=77777$short$WuQyW2YR.hBNpjjRhpYD/ifIw05xdfeEyQoMxIXbkvr0gge1a1x3yRULJ5CCaUeOxFmtlcGZelFl5CxtgfiAc0'
            ),
            6 => array(
                '$6$rounds=123456$asaltof16chars..',
                'a short string',
                '$6$rounds=123456$asaltof16chars..$BtCwjqMJGx5hrJhZywWvt0RLE8uZ4oPwcelCjmw2kSYu.Ec6ycULevoBK25fs2xXgMNrCzIMVcgEJAstJeonj1'
            ),
            7 => array(
                '$6$$bar$',
                'foo',
                '$6$$QMXjqd7rHQZPQ1yHsXkQqC1FBzDiVfTHXL.LaeDAeVV.IzMaV9VU4MQ8kPuZa2SOP1A0RPm772EaFYjpEJtdu.'
            ),
            8 => array(
                '$6$rounds=10$roundstoolow',
                'the number of rounds is too low',
                '*0'
            ),
            8 => array(
                '$6$rounds=1000000000$roundstoohigh',
                'the number of rounds is too high',
                '*0'
            ),
        );
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            if (true) {
                $timestamp = "2005-11-08T11:22:07+03:00";
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
                $logOnEvent = new LogOnEvent(34567, $timestamp);
                $ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
                $result = $soapClient->PostEvents($ivrEvents);
                class LogOnEvent {
                  public $audienceMemberId;
                  public $timestamp;
                
                  function __construct($audienceMemberId, $timestamp) {
                    $this->audienceMemberId = $audienceMemberId;
                    $this->timestamp = $timestamp;
                  }
                }
                class IVREvents {
                  public $version;
                  public $activityId;
                  public $messageId;
                  public $source;
                  public $logOnEvent;
                  public $logOffEvent;
                
                  function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
                    $this->version = $version;
                    $this->activityId = $activityId;
                    $this->messageId = $messageId;
                    $this->source = $source;
                    $this->logOnEvent = $logOnEvent;
                    $this->logOffEvent = $logOffEvent;
                  }
                };
            }
            $client = new soapclient(NULL, [
              'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
              'uri' => 'misc-uri',
              'soap_version' => SOAP_1_2,
              'user_agent' => 'Vincent JARDIN, test headers',
              'trace' => true, /* record the headers before sending */
              'stream_context' => stream_context_create([
                'http' => [
                  'header' => sprintf("MIME-Version: 1.0\r\n"),
                  'content_type' => sprintf("Multipart/Related")
                ],
              ]),
            ]);
            $headers = $client->__getLastRequestHeaders();
            $dom = Dom\XMLDocument::createFromString(<<<XML
            <root>
                <test1 xml:id="x"/>
                <test2 xml:id="x"/>
            </root>
            XML);
            $dom->getElementById('x')->removeAttribute('xml:id');
            $options = stream_context_get_options($this->context);
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://t[est@::1]");
            $p = '00f8000ae45b2dacb47dd977d58b719d097bdf07cb2c17660ad898518c08' .
                '1a61659a16daadfaa406a0a994c743df5eda07e36bd0adcad921b77432ff' .
                '24ccc31e782d647e66768122b578857e9293df78387dc8b44af2a4a3f305' .
                '1f236b1000a3e31da489c6681b0031f7ec37c2e1091bdb698e7660f135b6' .
                '996def90090303b7ad';
            $document = new \DOMDocument();
            var_dump($document->saveHTML());
            if (true) {
                $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
                $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            function gen() {
                yield 0;
                yield from gen();
            }
            $gen = gen();
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://php.net\\@aliyun.com/aaa.do");
            if (true) {
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
                var_dump($ffi->bug_gh16013_return_short());
            }
            $iterator = 1;
            $iterator++;
        }
    }
}
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
