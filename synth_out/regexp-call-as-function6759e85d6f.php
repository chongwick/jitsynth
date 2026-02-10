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
$zip = new ZipArchive();
$users = MailBox::USERS;
$from = ini_get('sendmail_from');
$bcc = $users[2];
$xMailer = 'bug80706_x_mailer';
$headers = "From: {$from}\r\n"
    . "Bcc: {$bcc}\r\n"
    . "X-Mailer: {$xMailer}";
function test()
{
    echo "Undefined index here: '{$data['HTTP_HEADER']}'\n";
}
test();
$dt = new DateTime('@1604219400');
$dt->setTimezone(new DateTimeZone('America/Boise'));
