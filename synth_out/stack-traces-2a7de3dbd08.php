<?php
$count = 1;
function f_0() {
    $cfg['poolTemplate'] = <<<EOT
    [%name%]
    listen = {{ADDR[%name%]}}
    user = foo
    pm = ondemand
    pm.max_children = 5
    EOT;
    try {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
        $options = stream_context_get_options($this->context);
        var_dump($options['dummy']['foo']);
    } catch (Exception $e) {}
    if (true) {
        sprintf('%3$s, %2$s %1$s', "a", "b");
    }
}
function f_1() {
    function __construct($wsdl) {
        parent::__construct($wsdl);
        $this->server = new SoapServer($wsdl);
        $this->server->addFunction('Test');
      }
    $this->server = new SoapServer($wsdl);
    try {
        var_dump( range(1.0, 7.0, 0.0) );
        $cert = "file://" . __DIR__ . "/cert.crt";
        var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER));
    } catch (Exception $e) {}
    if (true) {
        $str = 'Hello World';
        $shm_key = ftok(__FILE__, 'p');
        $shm_id1 = shmop_open($shm_key, 'c', 0644, strlen($str));
        var_dump($shm_id1);
    }
}
$date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
$date2 = new DateTime("Sat 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$array = new ArrayObject();
var_dump($array->offsetExists('key'));
$prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
$d0 = $prefix . "ソフト";
$d1 =
est0.txt");
unlink("$d1\\;
