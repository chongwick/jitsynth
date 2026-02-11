<?php
class base {
    private function show() {
        echo "base\n";
    }
    function test() {
        $this->show();
    }
}
$t = new base();
$t->test();
$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
$mysql->close();
