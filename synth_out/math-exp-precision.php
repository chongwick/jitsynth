<?php
function f_0() {
    $x = 1;
    $x += 0;
    ++$x;
    return $x;
}
$arrays = array (
/*1*/  array(1, 2), // array with default keys and numeric values
       array(1.1, 2.2), // array with default keys & float values
       array( array(2), array(1)), // sub arrays
       array(false,true), // array with default keys and boolean values
       array(), // empty array
       array(NULL), // array with NULL
       array("a","aaaa","b","bbbb","c","ccccc"),

       // associative arrays
/*8*/  array(1 => "one", 2 => "two", 3 => "three"),  // explicit numeric keys, string values
       array("one" => 1, "two" => 2, "three" => 3 ),  // string keys & numeric values
       array( 1 => 10, 2 => 20, 4 => 40, 3 => 30),  // explicit numeric keys and numeric values
       array( "one" => "ten", "two" => "twenty", "three" => "thirty"),  // string key/value
       array("one" => 1, 2 => "two", 4 => "four"),  //mixed

       // associative array, containing null/empty/boolean values as key/value
/*13*/ array(NULL => "NULL", null => "null", "NULL" => NULL, "null" => null),
       array(true => "true", false => "false", "false" => false, "true" => true),
       array("" => "emptyd", '' => 'emptys', "emptyd" => "", 'emptys' => ''),
       array(1 => '', 2 => "", 3 => NULL, 4 => null, 5 => false, 6 => true),
       array('' => 1, "" => 2, NULL => 3, null => 4, false => 5, true => 6),

       // array with repetitive keys
/*18*/ array("One" => 1, "two" => 2, "One" => 10, "two" => 20, "three" => 3)
);
$contentfile = tempnam(sys_get_temp_dir(), "ssl");
function f_1() {
    if (true) {
        $response = ob_get_contents();
        return $response;
    }
    if (true) {
        public static function fromArray(array $props): self
            {
                $me = new static;
                foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
                return $me;
            }
        $me = new static;
        foreach ($props as $k => &$v) {
                    $me->{$k} = &$v;  # try to remove &
                }
        $me->{$k} = &$v;
        return $me;
    }
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $thirty = M_PI / 6.0;
    var_dump(sin($thirty));
}
$reflector = new ReflectionClass(C::class);
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    $test_fl = __DIR__ . DIRECTORY_SEPARATOR . md5(uniqid());
    $test_fl_escaped = escapeshellarg($test_fl);
    $object = new StdClass();
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
    if (true) {
        $varOutput = ob_get_contents();
        $originalEnvelopeData = "any string with \x1a is cut at this point.";
        $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
        var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
    }
}
$lazy = true;
$mem = $lazy ? 0 : 1;
var_dump(defined('SO_REUSEPORT'));
$doc = new \DOMDocument();
$doc->loadXML('<a>foo<last/></a>');
