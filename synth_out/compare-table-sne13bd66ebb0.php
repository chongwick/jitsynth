<?php
class C {
    public int $a;
}
function test($s, $mode)
{
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
$users = MailBox::USERS;
$bcc = $users[2];
$header = <<<HEADER
extern int *(*bug79177_cb)(void);
void bug79177(void);
HEADER;
$ffi = FFI::cdef($header);
$ffi->bug79177_cb = function() {
    throw new \RuntimeException('Not allowed');
};
$obj = new C();
$test2=array(
   'a1_teasermenu' => array(
        'downloadcounter' => 2777,
        'versions' => array(
            '0.1.0' => array (
                'title' => 'A1 Teasermenu',
                'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                'state' => 'stable',
                'reviewstate' => 0,
                'category' => 'plugin',
                'downloadcounter' => 2787,
                'lastuploaddate' => 1088427240,
                'dependencies' => array (
                      'depends' => array(
                              'typo3' =>'',
                              'php' =>'',
                              'cms' => ''
                       ),
                      'conflicts' => array('' =>'')
                ),
                'authorname' => 'Mirko Balluff',
                'authoremail' => 'balluff@amt1.de',
                'ownerusername' => 'amt1',
                't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
            )
        )
    )
);
$test=array();
$test[]=$test2;
$str = <<<EOD
us
ing heredoc string
EOD;
function f_0() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $priv = file_get_contents(__DIR__ . "/private.crt");
            $diff_whitespaces = <<<EOT
            <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
            1111\t\t &amp; 0000\v\v = \f0000
            &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
            EOT;
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
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
            $ninety = M_PI /2.0;
            var_dump(sin($ninety));
            $cfg = <<<EOT
            [global]
            error_log = {{FILE:LOG}}
            [unconfined]
            listen = {{ADDR}}
            pm = static
            pm.max_children = 1
            catch_workers_output = yes
            EOT;
            $code = <<<EOT
            <?php
            echo 1;
            EOT;
            $tester = new FPM\Tester($cfg, $code);
            $tester->terminate();
        }
    }
    $date1 = DateTime::createFromFormat("!D d M Y", "Sat 19 November 2011");
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
            $stmt = $mysql->prepare("SELECT id FROM temp");
            $stmt->bind_result($id);
        }
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER));
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
