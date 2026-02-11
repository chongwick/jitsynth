<?php
function foo() {
  $i = 1;
  $x = 2;
  var_dump($i=$x);
  return $i;
}
function f_0() {
    class C_1 {
        public function m_2() {
            try {
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
                var_dump($body->lookupNamespaceURI(NULL));
            } catch (Exception $e) {}
            if (true) {
            }
            for ($i_3 = 0; $i_3 < 10; $i_3++) {
            }
        }
    }
    $r = new ReflectionClass('Test2');
    $m = $r->getStaticProperties();
    $m['data4'] = 400;
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
$browser=get_browser(NULL, true);
print_r($browser);
$oldcwd = getcwd();
var_dump(foo());
