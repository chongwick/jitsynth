<?php
function f_0() {
    $tester = new FPM\Tester($cfg);
    $cert = "file://" . __DIR__ . "/cert.crt";
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        $x = new stdClass();
        $timestamp = "2005-11-08T11:22:07+03:00";
        function __doRequest($request, $location, $action, $version, $one_way = 0): string {
            echo "$request\n";
            ob_start();
            $this->server->handle($request);
            $response = ob_get_contents();
            ob_end_clean();
            return $response;
          }
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        class LogOnEvent {
          public $audienceMemberId;
          public $timestamp;
        
          function __construct($audienceMemberId, $timestamp) {
            $this->audienceMemberId = $audienceMemberId;
            $this->timestamp = $timestamp;
          }
        }
        function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
            $this->version = $version;
            $this->activityId = $activityId;
            $this->messageId = $messageId;
            $this->source = $source;
            $this->logOnEvent = $logOnEvent;
            $this->logOffEvent = $logOffEvent;
          }
        $this->source = $source;
        $b = 'ok';
        $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt', Pdo\Pgsql::class, false);
        var_dump($pdo->query('SELECT 1;')->fetchAll());
        $sql = "SELECT 11111 as `1`, 22222 as `2`";
        $link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
        $link->real_query($sql);
        $bert = "file://" . __DIR__ . "/bug41033.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca), $utfl));
        mt_srand(1234567890);
    }
}
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->stopBuffering();
