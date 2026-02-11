<?php
$formatter = new \NumberFormatter('en', \NumberFormatter::DECIMAL);
$value = $formatter->parse('2147483647', \NumberFormatter::TYPE_INT32);
function f_0() {
    if (true) {
        $fn = function() { return static::name(); };
        echo static::name() . ' vs ' . $fn() . "\n";
    }
    function f_1() {
        return 0;
    }
    function f_2() {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            $style = array();
        }
        class C_4 {
        }
        $a = 1;
        return $a;
    }
    $dt = new DateTime('first day of January 2011');
    var_dump($dt);
    $dom = new DOMDocument;
    $tag = $dom->appendChild($dom->createElement("style"));
}
try {
    $compression = [
        'gz' => ['zlib.deflate', 'gzinflate'],
        'bz2' => ['bzip2.compress', 'bzdecompress']
    ];
    foreach ($compression as $ext => [$filter, $function]) {
        $stream = fopen(__DIR__ . "/75776.$ext", 'w');
        stream_filter_append($stream, $filter);
        fwrite($stream,"sdfgdfg");
        fflush($stream);
        fclose($stream);
    
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
    $stream = fopen(__DIR__ . "/75776.$ext", 'w');
    stream_filter_append($stream, $filter);
} catch (Exception $e) {}
if (true) {
}
