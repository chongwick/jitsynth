<?php
function f_0() {
    $me = new static;
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $iterator = 1;
        $iterator++;
    }
    return "Object1";
}
function f_2() {
    $i = 0;
    $GLOBALS['b'] = 2;
    $a = &$GLOBALS['a'];
    $diff_whitespaces = <<<EOT
    <html>Roy&#039;s height\r &gt; Sam\t&#039;s height
    1111\t\t &amp; 0000\v\v = \f0000
    &quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
    EOT;
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        ++$testCasesTotal;
        ++$testCasesTotal;
    }
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
function test($case) {
    $plain = "The quick brown fox jumps over the lazy dog.";
    $fn = "bug71263.bz2";
    $compressed = (string) bzcompress($plain);
    echo "Compressed len = ", strlen($compressed), "\n";

    if ($case == 1) {
        // Set a random byte in the middle of the compressed data
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays empty string then garbage, no errors detected:
        $compressed[strlen($compressed) - 15] = 'X';
    } else if ($case == 2) {
        // Truncate the compressed data
        // --> php_bz2_decompress_filter() does not detect errors,
        // --> fread() displays the empty string:
        $compressed = substr($compressed, 0, strlen($compressed) - 20);
    } else {
        // Corrupted final CRC
        // --> php_bz2_decompress_filter() detects fatal error
        // --> fread() displays an empty string, then the correct plain text, no error detected:
        $compressed[strlen($compressed)-2] = 'X';
    }

    file_put_contents($fn, $compressed);

    $r = fopen($fn, "r");
    stream_filter_append($r, 'bzip2.decompress', STREAM_FILTER_READ);
    while (!feof($r)) {
        $s = fread($r, 100);
        echo "read: "; var_dump($s);
    }
    fclose($r);
    unlink($fn);
}
test(3);
$inputs = array(
    '<frameset > </frameset>',
    '<html><frameset> </frameset> </html',
);
foreach ($inputs as $input) {

    $t = tidy_parse_string($input);
    $t->cleanRepair();
    var_dump(tidy_get_body($t));
}
$t = tidy_parse_string($input);
var_dump(tidy_get_body($t));
function test(string $name, object $obj) {
    printf("# %s:\n", $name);

    var_dump($obj);
    var_dump($obj->a);
    var_dump($obj);
}
var_dump($obj);
define("FOO", "okey");
$im = imagecreate(800, 800);
imageline($im, 700, 600, 200, 100, IMG_COLOR_STYLED);
$c = "assert";
$c(false);
var_dump(json_decode('"\ud834"'));
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
fseek($bz, 0, SEEK_CUR);
