<?php
function f_0() {
    function f_1() {
        $client = new SoapClient(__DIR__ . '/bug49278.wsdl', array('location' => "http://".PHP_CLI_SERVER_ADDRESS, 'trace' => 1));
        var_dump($client->__getLastResponse());
        $prefix = __DIR__ . DIRECTORY_SEPARATOR . "testBug61315" . DIRECTORY_SEPARATOR;
        $d0 = $prefix . "ソフト";
        $d1 =
        (stat("$d0\\test0.txt")) > 0);
        var_dump(coun;
        $db = getDbConnection();
        $sql = '
            SET NOCOUNT ON
            SELECT 0 AS [result]
        ';
        $stmt = $db->query($sql);
        $stmt->closeCursor();
        function f_2() {
            $mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
            $mysql->query("DROP TABLE temp");
            $heredoc_str = <<<EOD
            %
            #$*&
            text & @()
            EOD;
            $str_arr = array(
              //double quoted strings
              "%",
              "#$*",
              "text & @()",
            
              //single quoted strings
              '%',
              '#$*',
              'text & @()',
            
              //heredoc string
              $heredoc_str
            );
            $from = "%#$*&@()";
            $to = "specials";
            for($index = 0; $index < count($str_arr); $index++) {
              echo "-- Iteration $count --\n";
            
              $str = $str_arr[$index];  //getting the array element in 'str' variable
            
              //strtr() call in three args syntax form
              var_dump( strtr($str, $from, $to) );
            
              //strtr() call in two args syntax form
              var_dump( strtr($str, $replace_pairs) );
            
              $count++;
            }
            $str = $str_arr[$index];
            var_dump( strtr($str, $from, $to) );
        }
        set_exception_handler(function() {
            echo 'Fourth handler' . PHP_EOL;
        });
    }
    var_dump(spl_autoload_functions());
}
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->request(connKeepAlive: true)->expectBody('1');
function f_3() {
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
    function f_4() {
        public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
        public function offsetGet($x): mixed { var_dump($x); return 42; }
        var_dump($x);
        var_dump(sprintf("%X", 12));
        $link = mysqli_init();
        $japanese_so = pack('H4', '835c');
        var_dump($link->real_escape_string($japanese_so) === $japanese_so);
        function f_5() {
            $tempnum = 12345;
            $tempstring = "abcdefghjklmnpqrstuvwxyz";
            var_dump(sprintf("%d  %s  %d\n", $tempnum, $tempstring, $tempnum));
            $tester = new FPM\Tester($cfg);
            $tester->start();
        }
        mysqli_fetch_field($res);
    }
    printf("Content-Type OK" . PHP_EOL);
}
$r = new ResourceBundle( 'en_US', BUNDLE );
print_r( $r['testvector'] );
function f_6() {
    function f_7() {
        function gen() {
            yield 0;
            yield from gen();
        }
        function bar($gen) {
            yield from $gen;
        }
        $gen = gen();
        $b = bar($gen);
        $b->rewind();
        catch (\Exception $e) {
            printf("%s: %s\n", $e::class, $e->getMessage());
        }
        printf("%s: %s\n", $e::class, $e->getMessage());
        $sert = "file://" . __DIR__ . "/san-cert.pem";
        $cpca = __DIR__ . "/san-cert.pem";
        $utfl = __DIR__ . "/sni_server_uk.pem";
        var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_OCSP_HELPER, array($cpca), $utfl));
        ini_set('exif.decode_unicode_motorola', 'UCS-2LE');
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
        var_dump($stmt->fetch());
        function f_8() {
            sprintf('%2147483648$s, %2$s %1$s', "a", "b");
            call_user_func('bar','second try');
        }
        $text = 'This is an ‘example’ of using DOM splitText';
        $st
         = new DOMDocument('1.0', 'UTF-8');
        $no
        e = $dom->createTextNode($text);
        $do
        ->appendChild($node);
        
        pr;
    }
    class bug8318 extends \SplFileObject
    {
        public function __construct()
        {
        }
    
        public function fpassthru(): int
        {
            return 0;
        }
    }
    $cl = new bug8318;
    $cl->fpassthru();
    ob_clean();
    $cert = "file://" . __DIR__ . "/cert.crt";
    $cpca = __DIR__ . "/san-cert.pem";
    var_dump(openssl_x509_checkpurpose($cert, X509_PURPOSE_SMIME_SIGN, array($cpca)));
}
$string = str_repeat("A", 1024);
highlight_string($string, true);
