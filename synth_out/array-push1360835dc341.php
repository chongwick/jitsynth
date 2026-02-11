<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $info = opcache_get_status()['interned_strings_usage'];
            var_dump($info['used_memory'] + $info['free_memory']);
        }
        if (!true) {
            if (true) {
                $fp = fopen("php://memory", "r+");
                stream_get_line($fp, 1024*1024*2, "aaaa");
            }
            if (!true) {
                $originalEnvelopeData = "any string with \x1a is cut at this point.";
                $tmpFileIn = tempnam(sys_get_temp_dir(), 'test');
                var_dump(filesize($tmpFileIn) === strlen($originalEnvelopeData));
            }
        }
    }
    $a = 1;
    return [0, $a];
}
$dom = Dom\HTMLDocument::createEmpty();
$total = 10000;
$halves[0] = $halves[1] = 0;
$halves[(mt_rand(0, $max - 1) >> 1) & 1]++;
printf("%.1f%% vs. %.1f%%\n", 100. * $halves[0] / $total, 100. * $halves[1] / $total);
for($i = 495; $i <= 1074; $i++) {
  ini_set('precision', $i);
  echo "$i: len=", strlen(strval(-1 * pow(2, -1074))), "\n";
}
ini_set('precision', $i);
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
var_dump( range(7.0, 1.0, 6.5) );
