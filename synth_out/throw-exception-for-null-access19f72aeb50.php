<?php
$filename = __DIR__ . '/_fromUri_custom_constructor.xml';
try {
    printf("# Ghost:\n");
} catch (Exception $e) {}
if (true) {
    $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
    $im2 = imagecreatefrompng($dest);
    $col = imagecolorat($im2, 5, 5);
    $color = imagecolorsforindex($im2, $col);
    $priorityQueue = new SplPriorityQueue();
    var_dump($priorityQueue->getExtractFlags() & SplPriorityQueue::EXTR_PRIORITY);
}
$tester = new FPM\Tester($cfg);
$tester->expectLogStartNotices();
