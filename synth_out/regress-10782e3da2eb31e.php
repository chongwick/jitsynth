<?php
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
function f_0() {
    $users = MailBox::USERS;
    $from = ini_get('sendmail_from');
    $bcc = $users[2];
    $xMailer = 'bug80706_x_mailer';
    $headers = "From: {$from}\r\n"
        . "Bcc: {$bcc}\r\n"
        . "X-Mailer: {$xMailer}";
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
    php_admin_value[cgi.fix_pathinfo] = yes
    EOT;
    $code = <<<EOT
    <?php
    echo \$_SERVER["SCRIPT_NAME"] . "\n";
    echo \$_SERVER["ORIG_SCRIPT_NAME"] . "\n";
    echo \$_SERVER["SCRIPT_FILENAME"] . "\n";
    echo \$_SERVER["PATH_INFO"] . "\n";
    echo \$_SERVER["PHP_SELF"];
    EOT;
    $tester = new FPM\Tester($cfg, $code);
    $tester->close();
}
test('<?php echo "1";//22');
