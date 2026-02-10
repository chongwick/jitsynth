<?php
function f_0() {
    class Foo {
      public static $bar = array(
        FOO => "bar"
        );
    
    }
    $foo = new Foo();
    $rounds = [
        'disp', // Correct.
        3, // Error, so the old callback is kept, and will be used in the call that follows the caught error.
        null, // No callback. Hopefully this clears everything.
        'wouldAnyoneNameAFunctionThatWay', // So this one will crash and *no output will follow*.
    ];
    while (true) {
        break;  // avoid infinite loop
        $list = new SplDoublyLinkedList();
        $list->push('o');
        if (true) {
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
        $bug_gh16013_callback_struct = $ffi->new('struct bug_gh16013_callback_struct');
        $bug_gh16013_callback_struct->return_int32 = function($val) use($ffi) {
            $cdata = $ffi->new('int32_t');
            $cdata->cdata = $val;
            return $cdata;
        };
    }
}
$xmlString = "<root><a><b>1</b><b>2</b><b>3</b></a></root>";
$xml = simplexml_load_string($xmlString);
