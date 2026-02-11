<?php
function setStyleAndThickness($im, $color, $thickness)
{
    $style = array();
    $i = 0;
    while ($i < 16 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 20 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    while ($i < 28 * $thickness) {
        $style[$i++] = $color;
    }
    while ($i < 32 * $thickness) {
        $style[$i++] = IMG_COLOR_TRANSPARENT;
    }
    imagesetstyle($im, $style);
    imagesetthickness($im, $thickness);
}
class C {
    public int $a;
}
function showFirstTwoItems($it) {
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
  $it->next();
  echo str_replace("\0", '\0', $it->key()) . " => " . $it->current() .
"\n";
}
$file = __DIR__ . "/bug71127.inc";
$reflection = new ReflectionClass('\DateTimeImmutable');
$db = new Pdo\Pgsql($config['ENV']['PDOTEST_DSN']);
$a = new PDO("sqlite::memory:");
$rez = $a->query ("SELECT * FROM test_35336")->fetchAll(PDO::FETCH_CLASS, 'EEE');
$ch = curl_init("https://localhost/username");
$response = curl_exec($ch);
function f_0() {
    $a = 1;
    return [0, $a];
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $style = array();
            $i = 0;
            $style[$i++] = $color;
            $heredoc = <<<EOT
            Hello world
            EOT;
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
            $reflector = new ReflectionClass(C::class);
            $obj = new C();
            $reflector->resetAsLazyGhost($obj, function ($obj) use ($reflector) {
                try {
                    $reflector->resetAsLazyGhost($obj, function () { });
                } catch (Error $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
                try {
                    $reflector->resetAsLazyProxy($obj, function () { });
                } catch (Error $e) {
                    printf("%s: %s\n", $e::class, $e->getMessage());
                }
            
            });
            $fp = fopen (__FILE__, "r");
            fclose($fp);
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
            EOT;
            $code = <<<EOT
            <?php
            echo "Test\n";
            EOT;
            $tester = new FPM\Tester($cfg, $code);
            $tester->start();
        }
    }
    $document = new \DOMDocument();
    $h1 = $document->getElementsByTagName('h1');
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $f = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
            $fi = new finfo(FILEINFO_MIME_TYPE);
            var_dump($fi->file($f));
        }
    }
}
$ch = curl_init("https://localhost/userpwd");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ao = new ArrayObject(new C);
$ai = $ao->getIterator();
showFirstTwoItems($ai);
