<?php
class test {

  private function __destruct() {
  }
}
$depth0 = "depth02";
$iterator = new RecursiveDirectoryIterator(__DIR__ . DIRECTORY_SEPARATOR . $depth0);
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$obj = new test;
chdir(__DIR__);
var_dump($args);
$input = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'gh10370.tar', 'r');
fclose($input);
c1::$a1[] = 1;
$b = 'ok';
$inputs = array(
      // Predefined Date constants
      'DATE_ATOM Constant' => DATE_ATOM,
      'DATE_COOKIE Constant' => DATE_COOKIE,
      'DATE_RFC822 Constant' => DATE_RFC822,
      'DATE_RFC850 Constant' => DATE_RFC850,
      'DATE_RFC1036 Constant' => DATE_RFC1036,
      'DATE_RFC1123 Constant' => DATE_RFC1123,
      'DATE_RFC2822 Constant' => DATE_RFC2822,
      'DATE_RFC3339 Constant' => DATE_RFC3339,
      'DATE_RSS Constant' => DATE_RSS,
      'DATE_W3C Constant' => DATE_W3C,
);
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmdate($value, $timestamp) );
      var_dump( gmdate($value) );
}
var_dump( gmdate($value) );
$cert = "file://" . __DIR__ . "/cert.crt";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_ANY));
$dom = Dom\HTMLDocument::createFromString(<<<HTML
<!DOCTYPE html>
<html>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
        <math></math>
    </body>
</html>
HTML);
var_dump($dom->lookupNamespaceURI(""));
$filename = "bug51997.bz2";
$curl = curl_init("http://www.google.com");
$a = 2;
$dom = Dom\HTMLDocument::createEmpty();
dumpNodeList($dom->getElementsByTagName("bar:HTML"));
$cert = "file://" . __DIR__ . "/cert.crt";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_CRL_SIGN, array($cpca)));
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$rm = new ReflectionMethod(Collator::class, 'getSortKey');
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
$filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
var_dump(file_exists($filename));
$lazy = false;
$expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname, 0, 'a.phar');
$phar['x'] = 'hi';
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->query("CREATE TABLE temp (id INT UNSIGNED NOT NULL)");
var_dump(file_get_contents(__DIR__ . "/bug69279.txt"));
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
$GLOBALS['a'] = 1;
$db = MySQLPDOTest::factory();
var_dump($db->query('SELECT * FROM test_33689'));
var_dump(scandir(''));
$message = 'hello';
$initialRequest = true;
$im = imagecreate(800, 800);
imageline($im, 650, 150, 650, 650, IMG_COLOR_STYLED);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_HIGH));
$msgfmt = new MessageFormatter('en_US', '{0,number,integer}');
$msgfmt2 = clone $msgfmt;
$w = new Phar(__DIR__ . "/bug69279.phar.zip");
set_error_handler(function($_, $m) { throw new Exception($m); });
$ch = curl_init("https://localhost/username");
curl_setopt($ch, CURLOPT_USERNAME, null);
