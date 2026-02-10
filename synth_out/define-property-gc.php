<?php
function f_0() {
    public function __construct(array $parameters) {
            $this->parameters = $parameters;
        }
    $this->parameters = $parameters;
    $b = 'ok';
}
function f_1() {
    $found_flags = $unexpected_flags = '';
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $meta_res = $stmt->result_metadata();
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
        $compressed = file_get_contents(__DIR__ . "/75776.$ext");
        var_dump($function($compressed));
    }
}
$filename = "bug51997.bz2";
$bz = bzopen($filename, "r");
bzclose($bz);
