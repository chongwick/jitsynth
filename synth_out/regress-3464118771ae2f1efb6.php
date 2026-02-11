<?php
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
for ($i_0 = 0; $i_0 < 10; $i_0++) {
    $references = array();
    $idx = 0;
    $rows = array();
    for ($i = 0; $i < 2; $i++) {
            $rows[$i] = mysqli_fetch_assoc($res);
            $references[$idx]['row_ref'] 		= &$rows[$i];
            $references[$idx]['row_copy'] 	= $rows[$i];
            $references[$idx]['id_ref'] 		= &$rows[$i]['id'];
            $references[$idx]['id_copy']		= $rows[$i]['id'];
            /* enforce separation */
            $references[$idx]['id_copy_mod']= $rows[$i]['id'] + 0;
        }
    $rows[$i] = mysqli_fetch_assoc($res);
    $references[$idx]['row_copy'] 	= $rows[$i];
    $r = new ResourceBundle( 'en_US', BUNDLE );
    $t = $r['nonexisting'];
    function f_1() {
        ini_set("intl.error_level", E_WARNING);
        $b = new B();
    }
    $src = __DIR__ . DIRECTORY_SEPARATOR . "67647.mov";
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
    $tester->requestValues(connKeepAlive: true)->expectValue('FCGI_MPXS_CONNS', '0');
}
