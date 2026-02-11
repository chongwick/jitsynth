<?php
function f_0() {
    $dom = Dom\HTMLDocument::createFromString(<<<HTML
    <!DOCTYPE html>
    <html>
        <body>
            <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
            <math></math>
        </body>
    </html>
    HTML);
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    $bytes = str_repeat("*", 65536);
    $contentfile = tempnam(sys_get_temp_dir(), "ssl");
    unlink($contentfile);
    return true;
}
var_dump(A::$x);
