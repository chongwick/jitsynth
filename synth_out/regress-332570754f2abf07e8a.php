<?php
function test($foo) {
    var_dump(0);
    var_dump($foo[0]);
}
function f_0() {
    $pid = pcntl_fork();
    function f_1() {
        printf("printf test 21:%016b\n", 170);
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
    $args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
    $code = <<<'PHP'
    /* Receive */
    $content = trim(file_get_contents("php://input")) . PHP_EOL;
    PHP;
    php_cli_server_start($code, null, $args);
    printf("printf test 7:%010.2f\n", 2.5);
    return true;
}
$unset_var = 10;
test("str");
