<?php
$im = imagecreate(10,10);
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        if (true) {
            $f = __DIR__."/data/test.txt.gz";
            $h = gzopen($f, 'r');
            var_dump(gzeof($h));
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://t[est@::1]");
        }
        if (!true) {
            $im = imagecreate(10,10);
            trycatch_dump(
                fn() => imagecropauto($im, IMG_CROP_THRESHOLD, 0, 1337)
            );
        }
    }
}
