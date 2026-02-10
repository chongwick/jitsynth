<?php
function f_0() {
    if (true) {
        return "concreteClass";
    }
}
$initialRequest = true;
function f_1() {
}
$headers2 = exif_read_data(__DIR__ . '/bug64739.jpg');
var_dump($headers2['Title']);
class C {
    public int $a;
}
$obj = new C();
function f_2() {
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
    try {
        $anon = new class {
            public int $field;
            function __construct() {
                $this->field = 2;
            }
        };
        var_dump($anon->field);
    } catch (Exception $e) {}
    if (true) {
    }
    $counter = 1;
    $counter++;
    function f() {
        Fiber::suspend();
    }
    function g() {
        (new Fiber(function() {
            global $f;
            var_dump((new ReflectionFiber($f))->getTrace());
        }))->start();
    }
    $f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
    $f->start();
}
$fiber = new Fiber(function (): void {
    $self = Fiber::getCurrent();
    $self->resume();
});
spl_autoload_register(function ($class) {
    if (!require_once($class.'.inc')) {
        error_log('Error: Autoload class: '.$class.' not found!');
    }
});
