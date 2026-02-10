<?php
$column_def = array('col1 CHAR(1)', 'col2 CHAR(2)','INDEX idx_col1_col2(col1, col2)');
$offsets = array(20, 21, 22, 53, 54);
class C_0 {
    public function m_1() {
        function t2()
        {
            ob_start("test");
            echo "Hello from t2 1 ";
                ob_flush();
                echo "Hello from t2 2 ";
                ob_end_flush();
        }
        t2();
        if (true) {
            $dt = DateTime::createFromFormat('Y-m-d|', '2011-02-02');
            $filename =  __DIR__ . DIRECTORY_SEPARATOR . 'bug70752.txt';
            var_dump(file_exists($filename));
        }
    }
}
++$failuresNb;
$varOutput = ob_get_contents();
$varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );
file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
