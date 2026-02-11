<?php
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}
class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

  public function __destruct() {
    echo 'Destr' ."\n";
  }

}
function f() {
    Fiber::suspend();
}
function g() {
    (new Fiber(function() {
        global $f;
        var_dump((new ReflectionFiber($f))->getTrace());
    }))->start();
}
$T =new Test(throw_exc());
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
$tz1 = new DateTimeZone('Europe/Berlin');
$d = new DateTime('2014-12-24 13:00:00', $tz1);
$o = new SplFileInfo('.');
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $filename = __DIR__ . '/私はガラスを食べられます_003.xml';
}
$array_object = array();
$dest = __DIR__ . "/bug40228";
$f = new Fiber(function() { f(); max(...[1,2,3,4,5,6,7,8,9,10,11,12]); g(); });
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    $search = array ('zero', 'key' => 'val', 'two', 10 => 'value');
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
    $rf = new ReflectionFunction('collator_get_sort_key');
    var_dump($rf->getNumberOfParameters());
}
