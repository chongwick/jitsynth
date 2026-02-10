<?php
$s = "X";
function f_0() {
    function test($s, $mode)
    {
        return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
    }
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
$host = PHP_CLI_SERVER_HOSTNAME;
for ($i_1 = 0; $i_1 < 10; $i_1++) {
    try {
        $insert = null;
        $halves[0] = $halves[1] = 0;
        $dest = dirname(realpath(__FILE__)) . '/bug27582.png';
        $im2 = imagecreatefrompng($dest);
        $db = PDOTest::test_factory(dirname(__FILE__) . '/common.phpt');
        foreach ([false, true] as $emulate) {
            $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
        
            try {
                $stmt = $db->prepare('select ?- lseg \'((-1,0),(1,0))\'');
                $stmt->execute();
            } catch (PDOException $e) {
                var_dump('ERR');
            }
        
            $stmt = $db->prepare('select ??- lseg \'((-1,0),(1,0))\'');
            $stmt->execute();
        
            var_dump($stmt->fetch());
        }
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, $emulate);
    } catch (Exception $e) {}
    if (true) {
    }
}
