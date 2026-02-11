<?php
class C {
    public private(set) string $prop1 {
        set => $value;
    }
    public private(set) string $prop2 {
        get => $this->prop2;
    }
}
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $attrs = [ PDO::ATTR_PREFETCH => 0 ];
    function f_1() {
    }
    $c = new C();
    $c->prop2 = 'hello world';
    function f_2() {
        $a = [1,2,3];
        $i = 1;
        $k = 2 * $i;
        $a[$k] = $i;
    }
    $count = 1;
    $unset_var = 10;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastRequestHeaders());
    }
}
