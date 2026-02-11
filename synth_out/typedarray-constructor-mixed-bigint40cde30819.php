<?php
function display($res)
{
	echo implode("\n", array_map(fn($row) => implode("\t", $row), $res))."\n";
}
$offset3 = PHP_INT_MAX * 16;
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
EOT;
$code = <<<EOT
<?php
echo "Test\n";
EOT;
$tester = new FPM\Tester($cfg, $code);
function f_0() {
    $pdo = PDOTest::test_factory(__DIR__ . '/common.phpt');
    $reqOf3 = 'select 79 n union all select 80 union all select 81';
    $stmt2 = $pdo->query("select * from ($reqOf3) t order by n desc");
    display([ $stmt2->fetch() ]);
}
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $dom = Dom\HTMLDocument::createFromString(<<<HTML
        <!DOCTYPE html>
        <html>
            <body>
                <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                <math></math>
            </body>
        </html>
        HTML);
        $body = $dom->getElementsByTagName("body")[0];
        var_dump($body->lookupNamespaceURI(NULL));
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $users = MailBox::USERS;
        $to = $users[0];
        $bcc = $users[2];
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
        $mailBox->logout();
        var_dump(baz());
    }
}
