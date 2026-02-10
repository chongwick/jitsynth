<?php
function f_0() {
    class C_1 {
        public function m_2() {
            try {
                $r = new ResourceBundle( 'en_US', BUNDLE );
                $r2 = $r['testtable'];
                printf( "testtable: %d\n", $r2['major'] );
            } catch (Exception $e) {}
            if (true) {
            }
            for ($i_3 = 0; $i_3 < 10; $i_3++) {
            }
        }
    }
    $sixty = M_PI / 3.0;
    return 0;
}
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
$timeZone = new DateTimeZone('UTC');
var_dump(isset($_POST['foo']));
