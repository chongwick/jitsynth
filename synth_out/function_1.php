<?php
$oIntlDateFormatter = new IntlDateFormatter("en_GB");
fwrite($fp, str_repeat("baad", 1024*1024));
$bug_gh16013_callback_struct->return_struct = function($val) use($ffi) {
    return $val;
};
$list->next();
$fmt2 = clone $fmt;
php_cli_server_start(<<<'SCRIPT'
    ini_set('display_errors', 0);
    switch($_SERVER["REQUEST_URI"]) {
            case "/parse":
                    try {
                        eval("this is a parse error");
                    } catch (ParseError $e) {
                    }
                    echo "OK\n";
                    break;
            case "/fatal":
                    eval("foo();");
                    echo "OK\n";
                    break;
            case "/compile":
                    eval("class foo { final private final function bar() {} }");
                    echo "OK\n";
                    break;
            case "/fatal2":
                    foo();
                    echo "OK\n";
                    break;
            default:
                    return false;
    }
SCRIPT
);
$xpath = new DOMXpath($dom);
setStyleAndThickness($im, $black, 4);
$obj = new test;
ob_start();
$this->timestamp = $timestamp;
var_dump( range(1, 7, 0) );
$h = gzopen($f, 'r');
var_dump ( $vars );
var_dump(new Test);
$dt->add(new DateInterval('PT1H'));
$link = mysqli_init();
var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$datefmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL, IntlDateFormatter::FULL);
var_dump(curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false));
$this->values = array('a' => 0);
var_dump($array->offsetExists('nokey'));
$user = PDO_MYSQL_TEST_USER;
$interval = new DateInterval('P1D');
var_dump( range('A', 'H', 0.0) );
$DB = new DB();
$phar->startBuffering();
var_dump($node->textContent == $text);
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
$sixty = M_PI / 3.0;
var_dump($rf->getNumberOfRequiredParameters());
$ao = new ArrayObject(new C);
st0.txt");
touch("$d1\\t;
test($box);
$heredoc = <<<EOT
hello world
EOT;
var_dump($dom->getElementById('x')?->nodeName);
var_dump($ar1);
$max = 0x66666666;
$a = new PDO("sqlite::memory:");
$dom->strictErrorChecking = false;
$foo[$j++] = $i++;
$code = <<<EOT
<?php
\$cv = get_browser("Konqueror/2.0")->browser_name_pattern;
var_dump(\$cv);
EOT;
$context = stream_context_create($arr);
$OuterMatcher->methodNameMatcher = null;
fclose($output);
printf("# %s\n", $name);
$res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
var_dump($pdo->query('SELECT 1;')->fetchAll());
var_dump(array_map(assert(...), [true, true, false]));
