<?php
class Test implements ArrayAccess {
    public function offsetExists($x): bool { $GLOBALS["obj"] = 24; return true; }
    public function offsetGet($x): mixed { var_dump($x); return 42; }
    public function offsetSet($x, $y): void { }
    public function offsetUnset($x): void { }
}
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
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $tbl = "test";
        $sql = "SELECT bit_column_1 FROM $tbl";
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            if (true) {
                $from = ini_get('sendmail_from');
            }
            $haystack = 'Hello,\t\n\0\n  $&!#%\o,()*+-./:;<=>?@hello123456he \x234 \101 ';
            $xml =<<<EOF
            <xml>
            <fieldset1>
            </fieldset1>
            <fieldset2>
            <options>
            </options>
            </fieldset2>
            </xml>
            EOF;
            $sxe = new SimpleXMLIterator($xml);
            $rit = new RecursiveIteratorIterator($sxe, RecursiveIteratorIterator::LEAVES_ONLY);
            var_dump($rit->valid());
            $ret = new stdClass;
            printf("printf test 18:%16b\n", 170);
            $cpca = __DIR__ . "/san-cert.pem";
            $dom = new DOMDocument;
            $dom->getElementById('x')->remove();
            if (true) {
                $obj = new Test;
                var_dump($obj);
            }
            $file_handle = fopen(__FILE__, "r");
            $dir_handle = opendir( __DIR__ );
            $resources = array($file_handle, $dir_handle);
            $fname = __DIR__ . '/' . basename(__FILE__, '.php') . '.phar';
            $phar = new Phar($fname);
            $phar->stopBuffering();
            if (true) {
                $im = imagecreate(800, 800);
                $black = imagecolorallocate($im, 0, 0, 0);
                setStyleAndThickness($im, $black, 1);
            }
            $count = 1;
            $count++;
        }
    }
}
$dirs = array("a", "ソ", "ゾ", "şŞıİğĞ", "多国語", "王", "汚れて掘る");

mkdir($prefix);
foreach ($
mkdir($prefix . $d);
}

$old_cwd = getcwd();
forea
$now = $prefix . $d;
    var_dump(chdir($now));
    var_dump($dn = realpath("."));
    var_dump($d == get_basename_with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach (
with_cp($dn, 65001, false));
}
chdir($old_cwd);

foreach;
