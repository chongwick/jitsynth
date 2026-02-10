<?php
function f_0() {
    $db = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
    $stmt = $db->prepare("CALL testSp()");
    $result = $stmt->get_result();
    Foo::$bar = 'new';
}
function f_1() {
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
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $log_file = tempnam(sys_get_temp_dir(), 'php-curl-CURLOPT_WRITEFUNCTION-trampoline');
        $fp = fopen($log_file, 'w+');
        function test(object $obj) {
                $obj->a = 1;
            }
        $reflector = new ReflectionClass(C::class);
        $obj = $reflector->newLazyGhost(function ($obj) {
                var_dump("initializer");
                $obj->__construct();
            });
        $reflector->getMethod('test')->invoke($obj, $obj);
    }
}
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
printf("# %s:\n", $name);
