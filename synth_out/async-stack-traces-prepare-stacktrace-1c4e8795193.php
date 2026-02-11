<?php
$client = new soapclient(NULL, [
  'location' => 'http://' . PHP_CLI_SERVER_ADDRESS,
  'uri' => 'misc-uri',
  'soap_version' => SOAP_1_2,
  'user_agent' => 'Vincent JARDIN, test headers',
  'trace' => true, /* record the headers before sending */
  'stream_context' => stream_context_create([
    'http' => [
      'header' => sprintf("MIME-Version: 1.0\r\n"),
      'content_type' => sprintf("Multipart/Related")
    ],
  ]),
]);
function f_0() {
    $a = 1;
    return [0, $a];
}
function f_1() {
    try {
        $users = MailBox::USERS;
        $from = ini_get('sendmail_from');
        $bcc = $users[2];
        $xMailer = 'bug80706_x_mailer';
        $headers = "From: {$from}\r\n"
            . "Bcc: {$bcc}\r\n"
            . "X-Mailer: {$xMailer}";
        echo "Done\n";
    } catch (Exception $e) {}
    if (true) {
        return 0;
    }
}
$code = null;
$err = null;
pfsockopen('udp://127.0.0.1', '63844', $code, $err, (PHP_INT_MIN/100000)-1);
