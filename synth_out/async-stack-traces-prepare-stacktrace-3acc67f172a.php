<?php
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl, $options) {
    parent::__construct($wsdl, $options);
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    echo "$request\n";
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }

}
function __construct($wsdl, $options) {
    parent::__construct($wsdl, $options);
    $this->server = new SoapServer($wsdl, $options);
    $this->server->addFunction('PostEvents');
  }
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
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
foreach ($rit as $child) {
    $ancestry = $child->xpath('ancestor-or-self::*');
    // Exhaust internal iterator
    foreach ($ancestry as $ancestor) {
    }
}
$ancestry = $child->xpath('ancestor-or-self::*');
function f_0() {
    return $a;
}
function f_1() {
    try {
        $wsdl = __DIR__."/bug35142.wsdl";
        $soapClient = new TestSoapClient($wsdl,
            array('trace' => 1, 'exceptions' => 0,
                'classmap' => array('logOnEvent' => 'LogOnEvent',
                    'logOffEvent' => 'LogOffEvent',
                    'events' => 'IVREvents')));
        echo "follow=0\n";
    } catch (Exception $e) {}
    if (true) {
        return 5;
    }
}
$im = imagecreate(800, 800);
$black = imagecolorallocate($im, 0, 0, 0);
setStyleAndThickness($im, $black, 4);
