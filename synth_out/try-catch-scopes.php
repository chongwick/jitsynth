<?php
class TestSoapClient extends SoapClient {
  private $server;

  function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }

  function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
}
$client = new TestSoapClient(__DIR__.'/bug38004.wsdl');
$strA = 'test &amp; test';
$strB = 'test & test';
$res = $client->Test(array('strA'=>$strA, 'strB'=>$strB));
try {
    echo $tmp;
} catch (Exception $e) {}
if (true) {
    try {
        echo "hello world\n";
    } catch (Exception $e) {}
    if (true) {
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
        $im = imagecreate(800, 800);
        $black = imagecolorallocate($im, 0, 0, 0);
        setStyleAndThickness($im, $black, 1);
    }
    var_dump(pcntl_wexitstatus($status));
}
mail("some.address.it.wont.ever.reach@lookup.and.try.to.find.this.host.name","subject","a", NULL);
