<?php
function f_0() {
    $fp = php_cli_server_connect();
    function f_1() {
        var_dump( range('A', 'H', fdiv(0, 0)) );
        return new stdClass();
    }
    $options = stream_context_get_options($this->context);
    var_dump($options['dummy']['foo']);
    $date = new DateTime("2011-05-17T22:14:12");
    $date2 = DateTime::createFromFormat("D H i s", $date->format("D"). ' 0 00 00');
    var_dump($date->format("D") == $date2->format("D"));
    $response = ob_get_contents();
    return $response;
}
$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
$res = $link->use_result();
$row = $res->fetch_array();
ob_end_flush();
