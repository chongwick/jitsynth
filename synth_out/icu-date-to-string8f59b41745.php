<?php
$tester = new FPM\Tester($cfg);
$tester->expectLogTerminatingNotices();
function test($s) {
  echo "'".trim(str_replace("&nbsp;", " ", htmlspecialchars_decode(strip_tags(highlight_string($s,1)))))."'\n";
}
test('<?php echo "1";//2');
