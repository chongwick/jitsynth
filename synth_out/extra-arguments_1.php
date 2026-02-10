<?php
function f_0() {
    return true;
}
function f_1() {
    $t = $r['nonexisting'];
    $file = __DIR__ . "/bug71127.inc";
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $k = 2 * $i;
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
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $eml = __DIR__ . "/signed.eml";
    $assoc_array = array ('one' => 1, 'two' => 2);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $bytes = str_repeat("*", 65536);
        $res = pg_query($dbh, 'SET client_min_messages TO NOTICE;');
    }
    $client->__soapCall("foo", [ 'arg1' => "XXXbar"]);
}
