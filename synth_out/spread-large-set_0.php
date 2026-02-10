<?php
$a = new PDO("sqlite::memory:");
$zip = new ZipArchive;
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $stmt->execute();
}
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$depth1 = "depth1";
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    var_dump($pdo->query('SELECT broken FROM bug79596')->fetchColumn(0));
}
$client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
$h = <<<'EOD'
void (*bug_gh9090_void_none_ptr)();
void (*bug_gh9090_void_int_char_ptr)(int, char *);
void (*bug_gh9090_void_int_char_var_ptr)(int, char *, ...);
void (*bug_gh9090_void_char_int_ptr)(char *, int);
int (*bug_gh9090_int_int_char_ptr)(int, char *);

void bug_gh9090_void_none();
void bug_gh9090_void_int_char(int i, char *s);
void bug_gh9090_void_int_char_var(int i, char *fmt, ...);
EOD;
for ($i_2 = 0; $i_2 < 10; $i_2++) {
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
}
$fp = php_cli_server_connect();
