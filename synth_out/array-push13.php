<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $r = new ReflectionClass('Test2');
            var_dump($r->getStaticProperties());
        }
        if (!true) {
            if (true) {
                catch (\PDOException $e) {
                  var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
                }
                var_dump(!empty($e->errorInfo) && is_array($e->errorInfo));
            }
            if (!true) {
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
            }
        }
    }
    public function offsetExists($index): bool {
            return isset($this->array[$index]);
        }
    return isset($this->array[$index]);
}
$host = curl_cli_server_start();
$priorityQueue = new SplPriorityQueue();
$priorityQueue->setExtractFlags(SplPriorityQueue::EXTR_BOTH);
function PostEvents($x) {
    var_dump($x);
    exit();
  return $x;
}
var_dump($x);
['pid' => $pid, 'uri' => $uri] = http_server('genResponses', $output);
http_server_kill($pid);
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("html"));
