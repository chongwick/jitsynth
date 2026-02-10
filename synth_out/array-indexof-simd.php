<?php
function __construct($wsdl) {
    parent::__construct($wsdl);
    $this->server = new SoapServer($wsdl);
    $this->server->addFunction('Test');
  }
$this->server = new SoapServer($wsdl);
function __doRequest($request, $location, $action, $version, $one_way = 0): string {
    ob_start();
    $this->server->handle($request);
    $response = ob_get_contents();
    ob_end_clean();
    return $response;
  }
$this->server->handle($request);
set_error_handler(function($_, $m) { throw new Exception($m); });
var_dump(sprintf("%%%.2f", 1.23456789e10));
printf("printf test 9:<%-20s>\n", "bar");
$r = new ResourceBundle( 'en_US', BUNDLE );
printf( "testbin: %s\n", bin2hex($r['testbin']) );
function test(string $input) {
    var_dump(filter_var($input, FILTER_VALIDATE_URL));
}
test("http://test@[::1]");
$s = "1234567890a";
var_dump($s["010"], isset($s["010"]));
