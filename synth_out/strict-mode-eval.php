<?php
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$obj = new C();
class C extends stdClass {
    public int $a;
}
$obj = new C();
$conn = odbc_connect($dsn, $user, $pass);
$inner = 'r:2;';
$exploit = 'a:2:{i:0;C:3:"obj":'.strlen($inner).':{'.$inner.'}i:1;C:3:"obj":'.strlen($inner).':{'.$inner.'}}';
$data = unserialize($exploit);
function test(object $obj) {
        $obj->a = 1;
    }
$obj->a = 1;
$conn = odbc_connect($dsn, $user, $pass);
$res = odbc_exec($conn, "SELECT * FROM bug80147");
odbc_binmode($res, ODBC_BINMODE_RETURN);
$sert = "file://" . __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER));
var_dump(count($cert_data['extracerts']));
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
$db = createDB();
function testLastInsertId(PDO $db) {
    echo "Running test lastInsertId\n";
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    try {
        $db->exec("INSERT INTO test_80908 (`name`) VALUES ('bar')");
        $id = $db->lastInsertId();
        echo "Last insert id is " . $id . "\n";
    } catch (PDOException $e) {
        echo $e->getMessage()."\n";
    }
}
testLastInsertId($db);
function f_0() {
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    try {
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
    } catch (Exception $e) {}
    if (true) {
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
        var_dump($rit->key());
    }
    printf("printf test 17:%X\n", 170);
    function f_1() {
        $max = 0x66666666;
        try {
            $tester = new FPM\Tester($cfg);
            $userMessage = "'user' directive is ignored when FPM is not running as root";
            $tester->expectLogNotice($userMessage, 'bbbb');
        } catch (Exception $e) {}
        if (true) {
            $reflection = new ReflectionClass('\DateTime');
            catch (\Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            catch (\Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            catch (\Exception $e) {
                printf("%s: %s\n", $e::class, $e->getMessage());
            }
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        for($i = 495; $i <= 1074; $i++) {
          ini_set('precision', $i);
          echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
        }
        ini_set('precision', $i);
        function f_2() {
            $offset3 = "offset";
            try {
                $now = new DateTimeImmutable();
                $date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
                $dateperiod = (new ReflectionClass(DatePeriod::class))->newInstanceWithoutConstructor();
                $dateperiod->__unserialize(['start' => $now, 'end' => $now, 'current' => $date]);
            } catch (Exception $e) {}
            if (true) {
                $client2 = new soapclient(NULL, [
                  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
                  'uri' => 'misc-uri',
                  'soap_version' => SOAP_1_2,
                  'user_agent' => 'Vincent JARDIN, test headers',
                  'trace' => true, /* record the headers before sending */
                  'stream_context' => stream_context_create([
                    'http' => [
                      'header' => sprintf("MIME-Version: 1.0\r\n"),
                      'content_type' => sprintf("")
                    ],
                  ]),
                ]);
                set_error_handler(function (int $errno, string $errstr, ?string $errfile = null, ?int $errline = null) {
                    throw new \ErrorException($errstr, 0, $errno, $errfile, $errline);
                });
            }
            var_dump( range('A', 'H', 10.0**400) );
            function f_3() {
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
                $Value_object = new Value();
                try {
                    $conn = pg_connect($conn_str);
                    $table='test_68638';
                    pg_update($conn,$table, array('value' => '+inf'), array('id' => 3));
                } catch (Exception $e) {}
                if (true) {
                    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
                    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
                    $res = [];
                    $res[] = $stmt->fetch();
                    $GLOBALS['b'] = 2;
                    $b = &$GLOBALS['b'];
                    $GLOBALS['b'] = 3;
                    $c = $b;
                    var_dump($b, $GLOBALS['b'], $c);
                }
                ob_end_clean();
            }
            $ch = curl_init("https://localhost/username");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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
    }
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $stmt = $pdo->prepare("select :1 n union all select :1 + 1 union all select :1 + 2 union all select :1 + 3");
    $stmt->execute([ 15 ]);
}
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
