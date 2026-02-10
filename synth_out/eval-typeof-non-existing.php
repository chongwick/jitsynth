<?php
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
$tester->terminate();
foo();
function foo() {
    global $LAST;
    ($LAST = $LAST + 0) * 1;
    echo "ok\n";
};
var_dump(intlcal_is_weekend(1));
ob_start(function() {
    declare(ticks=1);
    register_tick_function(
       function() { }
    );
});
