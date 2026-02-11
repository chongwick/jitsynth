<?php
$bar = new DateTime();
$args = [1, &$bar];
$function = function (int &$foo, DateTimeInterface &$bar) {};
(new ReflectionFunction($function))->invokeArgs($args);
$cfg = <<<EOT
[global]
error_log = {{FILE:LOG}}
[unconfined]
listen = {{ADDR}}
pm = static
pm.max_children = 1
catch_workers_output = yes
EOT;
$code = <<<EOT
<?php
echo 1;
EOT;
$tester = new FPM\Tester($cfg, $code);
$tester->expectLogStartNotices();
var_dump(getopt("abcd"));
