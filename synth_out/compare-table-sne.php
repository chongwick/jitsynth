<?php
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
$ok = true;
$unset_var = 10;
$special_chars_str = <<<EOD
Example of heredoc string contains
$#%^*&*_("_")!#@@!$#$^^&*(special)
chars.
EOD;
$heredoc_needle = <<<EOD
^^&*(
EOD;
$needles = array(
  "!@@!",
  '_',
  '("_")',
  "$*",
  "(special)",
  $heredoc_needle,  //needle as heredoc string
  $special_chars_str  //needle as haystack
);
$reflector = new ReflectionClass(C::class);
$obj = $reflector->newLazyProxy(function () {
    throw new \Exception('Initializer');
}, ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE);
function f_0() {
    return 5;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $conn = odbc_connect($dsn, $user, $pass);
            $flags = array(
                    MYSQLI_NOT_NULL_FLAG => 'NOT_NULL',
                    MYSQLI_PRI_KEY_FLAG => 'PRI_KEY',
                    MYSQLI_UNIQUE_KEY_FLAG => 'UNIQUE_KEY',
                    MYSQLI_MULTIPLE_KEY_FLAG => 'MULTIPLE_KEY',
                    MYSQLI_BLOB_FLAG => 'BLOB',
                    MYSQLI_UNSIGNED_FLAG	=> 'UNSIGNED',
                    MYSQLI_ZEROFILL_FLAG => 'ZEROFILL',
                    MYSQLI_AUTO_INCREMENT_FLAG => 'AUTO_INCREMENT',
                    MYSQLI_TIMESTAMP_FLAG	=> 'TIMESTAMP',
                    MYSQLI_SET_FLAG	=> 'SET',
                    MYSQLI_NUM_FLAG => 'NUM',
                    MYSQLI_PART_KEY_FLAG => 'PART_KEY',
                    // MYSQLI_GROUP_FLAG => 'MYSQLI_GROUP_FLAG' - internal usage only
                    (defined('MYSQLI_NO_DEFAULT_VALUE_FLAG') ? MYSQLI_NO_DEFAULT_VALUE_FLAG : 4096) => 'NO_DEFAULT_VALUE',
                    (defined('MYSQLI_BINARY_FLAG') ? MYSQLI_BINARY_FLAG : 128) => 'BINARY',
                    (defined('MYSQLI_ENUM_FLAG') ? MYSQLI_ENUM_FLAG : 256) => 'ENUM',
                    // MYSQLI_BINCMP_FLAG
                );
            function checkFlags($reported_flags, $expected_flags, $flags) {
                    $found_flags = $unexpected_flags = '';
                    foreach ($flags as $code => $name) {
                        if ($reported_flags >= $code) {
                            $reported_flags -= $code;
                            $found_flags .= $name . ' ';
                            if (stristr($expected_flags, $name)) {
                                $expected_flags = trim(str_ireplace($name, '', $expected_flags));
                            } else {
                                $unexpected_flags .= $name . ' ';
                            }
                        }
                    }
            
                    return array($expected_flags, $unexpected_flags, $found_flags);
                }
            $field = mysqli_fetch_field_direct($res, 1);
            $expected_flags = array('col1' => 'MULTIPLE_KEY PART_KEY', 'col2' => 'PART_KEY');
            list($missing_flags, $unexpected_flags, $flags_found) = checkFlags($field->flags, $expected_flags[$field->name], $flags);
            $x = match (true) {};
            $key = str_repeat('abc', random_int(3, 3));
            var_dump(array_all([$key => 1], static fn () => false));
            $filename = __DIR__ . '/bug77432.phar';
            $phar = new Phar($filename);
            $phar->setStub('<?php echo "hello world\n"; __HALT_COMPILER(); ?>');
            function __construct($wsdl) {
                parent::__construct($wsdl);
                $this->server = new SoapServer($wsdl);
                $this->server->addFunction('Test');
              }
            $this->server = new SoapServer($wsdl);
            function __doRequest($request, $location, $action, $version, $one_way = 0): string {
                ob_start();
                $this->server->handle($request);
                $response = ob_get_contents();
                ob_end_clean();
                return $response;
              }
            $this->server->handle($request);
        }
    }
    $dsn = 'sqlite:./bug64705NonExistingDir/bug64705NonExistingDb';
    $pdo = new \PDO($dsn, null, null);
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $dom = Dom\HTMLDocument::createFromString(<<<HTML
            <!DOCTYPE html>
            <html>
                <body>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1"></svg>
                    <math></math>
                </body>
            </html>
            HTML);
            $body = $dom->getElementsByTagName("body")[0];
            $body->setAttributeNS("http://www.w3.org/2000/xmlns/", "xmlns:a", "");
        }
    }
}
$test_array = array(1, array(1 => "one", "two" => 2, "" => "f") );
var_dump( end($test_array[1]) );
$fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
$phar = new Phar($fname);
$phar->setDefaultStub('my/custom/thingy.php', 'the/web.php');
