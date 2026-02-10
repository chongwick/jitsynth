<?php
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
    $containers = array();
    $soapClient = new TestSoapClient($wsdl,
    array('trace' => 1, 'exceptions' => 0,
        'classmap' => array('logOnEvent' => 'LogOnEvent',
            'logOffEvent' => 'LogOffEvent',
            'events' => 'IVREvents')));
    clearstatcache();
}
