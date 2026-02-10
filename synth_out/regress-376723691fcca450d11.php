<?php
class Foo {
    public $bar = [] {
        &get {
            echo __METHOD__ . "\n";
            return $this->bar;
        }
    }
}
$foo = new Foo;
$foo->bar[] = 'bar';
function f_0() {
    $host = PHP_CLI_SERVER_HOSTNAME;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
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
        $conn = odbc_connect($dsn, $user, $pass);
        $res = odbc_exec($conn, 'SELECT * FROM bug68087 ORDER BY ID ASC');
        $id = odbc_result($res, "ID");
        $db = PDOTest::factory();
        $driver = $db->getAttribute(PDO::ATTR_DRIVER_NAME);
    }
    return new Exception;
}
function f_2() {
    $fiber = new Fiber(function (): void {
        $self = Fiber::getCurrent();
        $self->resume();
    });
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    printf("printf test 32:%.17g\n", -INF);
}
$i = 1;
$eml = __DIR__ . "/signed.eml";
$tester = new FPM\Tester($cfg);
$userMessage = "'user' directive is ignored when FPM is not running as root";
$tester->expectLogNotice($userMessage, 'bbbb');
class A
{
    public function & __get($name)
    {
        return $this->test;
    }
}
class B extends A
{
    private $test;
}
$b = new B;
php_cli_server_start('http_response_code(422);');
var_dump(soundex("Lukasiewicz") == soundex("Lissajous"));
