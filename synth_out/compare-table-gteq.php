<?php
function byReference( & $array){
    foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
}
foreach($array as &$item){
        $item['nanana'] = 'batman';
        $item['superhero'] = 'robin';
    }
$item['superhero'] = 'robin';
$values = array(10,
                10.3,
                3.9505e3,
                037,
                0x5F,
                "10",
                "3950.5",
                "3.9505e3",
                "039",
                true,
                false,
                );
$ftp = ftp_connect('127.0.0.1', $port);
$a = "20";
class A
{
    public string $prop;
}
class B
{
    public function __toString()
    {
        global $a;
        $a = null;
        return str_repeat('a', 1);
    }
}
$a = new A();
$a->prop = new B();
function f_0() {
    $x = 1.0;
    $x += 0;
    return ++$x;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $counter = 1;
            $date = '7.8.2010';
            $unixtime = strtotime($date);
            class A
            {
                public string $prop;
            }
            $a = new A();
            $sert = "file://" . __DIR__ . "/san-cert.pem";
            var_dump(openssl_x509_checkpurpose($sert, X509_PURPOSE_SMIME_ENCRYPT));
            function test($s) {
              echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
            }
            test('<?php echo "1";//22');
            session_set_save_handler(new \SessionHandler(), true);
        }
    }
    $header = <<<HEADER
    extern int *(*bug79177_cb)(void);
    void bug79177(void);
    HEADER;
    $ffi = FFI::cdef($header);
    $ffi->bug79177_cb = function() {
        throw new \RuntimeException('Not allowed');
    };
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            class A
            {
                use T1;
            }
            class B extends A
            {
                use T2;
            }
            $b = new B();
            $b->aa();
        }
    }
}
$conn = odbc_connect($dsn, $user, $pass);
odbc_exec($conn, "INSERT INTO bug80147 VALUES (1, CONVERT(VARBINARY(50), 'whatever'))");
$dom = new DOMDocument;
$test1 = $dom->getElementById('x');
$dom->documentElement->appendChild($test1);
