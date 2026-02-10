<?php
function foo($ref, $alt) {
    unset($GLOBALS['a']);
    unset($GLOBALS['b']);
    $GLOBALS['a'] = 1;
    $GLOBALS['b'] = 2;

    $org_a = $GLOBALS['a'];
    $org_b = $GLOBALS['b'];

    if ($ref) {
        global $a, $b;
    } else {
        /* zval temp_var(NULL); // refcount = 1
         * a = temp_var[x] // refcount = 2
         */
        $a = NULL;
        $b = NULL;
    }

    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    if ($alt) {
        $a = &$GLOBALS['a'];
        $b = &$GLOBALS['b'];
    } else {
        extract($GLOBALS, EXTR_REFS);
    }
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = &$GLOBALS['a'];
    $b = &$GLOBALS['b'];
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $GLOBALS['b'] = 3;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $a = 4;
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b']);
    echo "--\n";
    $c = $b;
    var_dump($b, $GLOBALS['b'], $c);
    echo "--\n";
    $b = 'x';
    var_dump($a, $b, $GLOBALS['a'], $GLOBALS['b'], $c);
    echo "--\n";
    var_dump($org_a, $org_b);
    echo "----";
    if ($ref) echo 'r';
    if ($alt) echo 'a';
    echo "\n";
}
foo(false, false);
rename("phar://a.phar/x", "phar://a.phar/y");
ob_end_clean();
var_dump(strncasecmp("test ", "E", -1));
session_start();
$_ = str_repeat("A", 512);
openssl_seal($_, $_, $_, array_fill(0,64,0));
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    var_dump(soundex("Gauss")       == soundex("Ghosh"));
    $xml = '
    <data id="1">
        <key>value</key>
    </data>
    ';
    $obj = simplexml_load_string($xml);
    print_r(get_object_vars($obj));
    $im = imagecreate(800, 800);
    imageline($im,  50, 250, 550, 250, IMG_COLOR_STYLED);
    class MySQL_Ext extends mysqli{
        protected $fooData = array();
        private $extData;
    
        public function isEmpty()
        {
            $this->extData[] = 'Bar';
            return empty($this->extData);
        }
    }
    $MySQL_Ext = new MySQL_Ext($host, $user, $passwd, $db, $port, $socket);
    $isEmpty = $MySQL_Ext->isEmpty();
    var_dump($isEmpty);
}
$dt = new DateTime('first day of January 2011');
var_dump($dt);
var_dump(range('a', 'z', 100));
$dom = new DOMDocument;
$element = $dom->appendChild($dom->createElement('root'));
$element->prepend('x', new DOMEntity);
$dt = new DateTime('@1604215800');
$dt->add(new DateInterval('PT1M'));
$db = MySQLPDOTest::factory();
foreach ($db->query('SELECT * FROM test_33689') as $row) {
    print_r($row);
}
print_r($row);
