<?php
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
class C {
    public function __toString() {
        global $c;
        $c = [];
        throw new Exception(__METHOD__);
    }
}
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $timestamp = "2005-11-08T11:22:07+03:00";
    $logOnEvent = new LogOnEvent(34567, $timestamp);
    $text = 'This is an ‘example’ of using DOM splitText';
    function f_1() {
        $responses = array(
            "data://text/plain,HTTP/1.1 200 Some very long reason-phrase to test that this is properly handled by our code without adding a new header like  Bad: Header\r\nGood: Header\r\n\r\nBody",
            "data://text/plain,HTTP/1.1 200 \r\nGood: Header\r\n\r\nBody",
        );
        ['pid' => $pid, 'uri' => $uri] = http_server($responses, $output);
        http_server_kill($pid);
        $xml =<<<EOF
        <xml>
        <fieldset1>
        </fieldset1>
        <fieldset2>
        <options>
        </options>
        </fieldset2>
        </xml>
        EOF;
    }
    $c = new C();
    $instructorsAdmin = Test::INSTRUCTORS_ADMIN;
    $data = [
        Test::COURSES_ADMIN,
        Test::COURSES_REPORTING_ACCESS,
        Test::BUNDLES_ADMIN,
        Test::USERS_ADMIN,
        Test::B2B_DASHBOARD_ACCESS,
        Test::B2B_DASHBOARD_ACCESS,
        Test::INSTRUCTORS_ADMIN,
        &$instructorsAdmin,
        Test::COUPONS_ADMIN,
        Test::AUTHENTICATED,
    ];
    $data = array_unique($data, flags: SORT_REGULAR);
    var_dump($data);
}
