<?php
try {
    printf("[001] Expecting integer on 64bit got %s/%s\n", gettype($id), var_export($id, true));
} catch (Exception $e) {}
if (true) {
    printf("printf test 32:%.17g\n", -INF);
}
try {
    $interval = new DateInterval('P1D');
    $dt = new DateTime('first day of January 2011');
    $dt->sub($interval);
} catch (Exception $e) {}
if (true) {
    stream_filter_register('user_filter','user_filter');
}
$args = ["-d", "extension_dir=" . ini_get("extension_dir"), "-d", "extension=" . (substr(PHP_OS, 0, 3) == "WIN" ? "php_" : "") . "soap." . PHP_SHLIB_SUFFIX];
$args[] = "-c";
$date = (new ReflectionClass(DateTime::class))->newInstanceWithoutConstructor();
$references = array();
$idx = 0;
$references[$idx++]['id_copy']	= $row['id'];
$db = MySQLPDOTest::factory();
foreach ($db->query('SELECT * FROM test_33689') as $row) {
    print_r($row);
}
print_r($row);
ini_set("intl.error_level", E_WARNING);
$users = MailBox::USERS;
$to = $users[0];
$bcc = $users[2];
$subject = 'mail_bug80706';
foreach (['to' => $to, 'bcc' => $bcc] as $recipient => $mailAddress) {
    $mailBox = MailBox::login($mailAddress);
    $mail = $mailBox->getMailsBySubject($subject);
    $mailBox->logout();

    if ($mail->isAsExpected($from, $to, $subject, $message)) {
        echo "Found the email. {$recipient} received.\n";
    }

    if ($mail->getHeader('X-Mailer') === $xMailer) {
        echo "The specified x-Mailer exists.\n\n";
    }
}
$mailBox = MailBox::login($mailAddress);
$mail = $mailBox->getMailsBySubject($subject);
ob_clean();
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_CLIENT, array($cpca), $utfl));
printf("printf test 5:%-10.2f\n", 2.5);
