<?php
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
$prefixed = $body->appendChild($dom->createElementNS("urn:a", "a:a"));
$url = ""
    . "php://filter/read="
    . urlencode("convert.iconv.ISO-8859-15/UTF-8")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("string.rot13")
    . '|' . urlencode("convert.iconv.UTF-8/ISO-8859-15")
    . "/resource=data://text/plain,foob%E2r";
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
$style = array();
$i = 0;
$style[$i++] = $color;
$dt = new DateTime('@1604219400');
function gen() {
    yield 0;
    yield from gen();
}
$gen = gen();
function f_0() {
    return $this->test;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
            class Canary {
                public function __construct(public mixed $value) {}
                public function __destruct() {
                    var_dump(__METHOD__);
                }
            }
            function f($canary) {
                var_dump(yield from g());
            }
            $canary = new Canary(null);
            $iterable = f($canary);
            $magic_file = __DIR__ . '/bug79283.db';
            $finfo = new finfo(FILEINFO_NONE, $magic_file);
            var_dump(soundex("Gauss")       == soundex("Ghosh"));
            $bert = "file://" . __DIR__ . "/bug41033.pem";
            $cpca = __DIR__ . "/san-cert.pem";
            $utfl = __DIR__ . "/sni_server_uk.pem";
            var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_ANY, array($cpca), $utfl));
            spl_autoload_register();
        }
    }
    $headers = ['Host: okey.com'];
    $httpContext = [
        'http' => [
            'protocol_version'	=> '1.1',
            'method'			=> 'GET',
            'header'			=> &$headers,
            'follow_location'	=> 0,
            'max_redirects'		=> 0,
            'ignore_errors'		=> true,
            'timeout'			=> 60,
        ],
    ];
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $im = imagecreate(800, 800);
            imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
        }
    }
}
$dom = new DOMDocument;
var_dump($dom->getElementById('x')?->nodeName);
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo "1";//22');
