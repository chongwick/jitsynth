<?php
function f_0() {
    return $this;
}
printf("[007] [%d] %s\n", $stmt->errno, $stmt->error);
var_dump(gzread($h, 5));
$test1->test();
($prefix);

?>;
var_dump(
        strnatcmp('foo ', 'foo '),
        strnatcmp('foo', 'foo'),
        strnatcmp(' foo', ' foo')
    );
gzpassthru($h);
var_dump($i);
$GLOBALS['a'] = "bug\n";
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
curl_exec($ch);
$array->offsetSet('key', 'value');
fclose($this->stream);
$f->start();
file_get_contents('dummy://foo', false, $context);
var_dump(__METHOD__);
$i=0;
var_dump(array_pop($input), $input);
$code = <<<EOT
<?php
echo "Test\n";
EOT;
file_put_contents($fn, $compressed);
$eml = __DIR__ . "/signed.eml";
session_set_save_handler(new MySessionHandler());
$i = 0;
zerofill(3, $link, 'SMALLINT');
$res = pg_query($dbh, "CREATE OR REPLACE FUNCTION test_notice() RETURNS boolean AS '
begin
        RAISE NOTICE ''11111'';
        return ''f'';
end;
' LANGUAGE plpgsql;");
var_dump($i=$x);
