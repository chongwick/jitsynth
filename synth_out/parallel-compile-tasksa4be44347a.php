<?php
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
function createDB(): PDO {
    $db = MySQLPDOTest::factory();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $db;
}
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
abstract class Y {
    abstract public string $prop {
        get;
        set => "foo";
    }
}
class X extends Y {
    public string $prop {
        get => "bar";
    }
}
$array_test = array("a", "b", "d", 7, "u" => "U", -4, "-.008" => "neg.008");
var_dump( end($array_test) );
var_dump ( rtrim("rtrim test \t\n\r\0\x0B", "\t\n\r\0\x0B") );
$headers = ['Host: okey.com'];
function f_0() {
    $a = 1;
    return $a;
}
$mysqli = new mysqli("$host:$port", $user, $passwd, $db);
$tbl = "test";
$sql = "SELECT bit_column_1 FROM $tbl";
$result = $mysqli->query($sql);
$client = new TestSoapClient(__DIR__.'/bug44882.wsdl');
print_r($client->GetExpressCheckoutDetails());
$myClass_object = new myClass();
$im = imagecreate(800, 800);
imagecolorallocate($im, 255, 255, 255);
ob_start("test");
$s = "1234567890a";
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'dddd');
$fp = php_cli_server_connect();
$index_array = array (1, 2, 3);
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
$db = PDOTest::test_factory(__DIR__ . '/common.phpt');
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$curl = curl_init("http://www.google.com");
var_dump(curl_getinfo($curl, CURLINFO_PRIVATE));
$db = createDB();
$id = $db->lastInsertId();
$db = PDOTest::factory();
var_dump($db->query("SELECT * from test34630")->fetchAll(PDO::FETCH_ASSOC));
function f_1() {
    class C_2 {
    }
}
function f_3() {
    function f_4() {
        $references = array();
        $idx = 0;
        $rows = array();
        for ($i = 0; $i < 2; $i++) {
                $rows[$i] = mysqli_fetch_assoc($res);
                $references[$idx]['row_ref'] 		= &$rows[$i];
                $references[$idx]['row_copy'] 	= $rows[$i];
                $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
                $references[$idx]['id_copy']		= $rows[$i]['id'];
                /* enforce separation */
                $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
            }
        $rows[$i] = mysqli_fetch_assoc($res);
        $references[$idx]['row_copy'] 	= $rows[$i];
        $x = new X;
        $x->prop = 1;
    }
    return "Class A object";
}
