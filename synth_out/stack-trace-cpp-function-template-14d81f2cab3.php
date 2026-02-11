<?php
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = dynamic
pm.max_children = 5
pm.start_servers = 1
pm.min_spare_servers = 1
pm.max_spare_servers = 3
php_admin_value[cgi.fix_pathinfo] = yes
EOT;
$date = new DateTime("2011-05-17T22:14:12");
function f_0() {
    echo __METHOD__, "\n";
}
$index_array = array (1, 2, 3);
function f_1() {
    $output = array();
    var_dump($output);
}
try {
    public function test(P $sibling) {
            $sibling->common();
        }
    $sibling->common();
} catch (Exception $e) {}
if (true) {
}
$im = imagecreate(800, 800);
imageline($im, 550, 250, 550, 750, IMG_COLOR_STYLED);
