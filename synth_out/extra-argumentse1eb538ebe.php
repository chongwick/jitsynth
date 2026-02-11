<?php
function test($s, $mode)
{
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function new_closure_gen() {
    return function() {
        static $foo = 0;
        yield ++$foo;
    };
}
function f_0() {
    return (($mode & PHP_OUTPUT_HANDLER_START)?"[":"") . $s . (($mode & PHP_OUTPUT_HANDLER_END)?"]\n":"");
}
function f_1() {
    $f = __DIR__."/data/test.txt.gz";
    $closure1 = new_closure_gen();
    $gen2 = $closure1();
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $test = array("A\x00B" => "Hello world");
    }
    return new Exception;
}
for ($i_3 = 0; $i_3 < 10; $i_3++) {
    $tbl = "test";
    $sql = "SELECT bit_column_1 FROM $tbl";
    $t = new stdClass;
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        $batch_file_path = __DIR__ . '/ghsa-9fcc-425m-g385_003.bat';
        $descriptorspec = [STDIN, STDOUT, STDOUT];
        for ($i = 1; $i <= 255; $i++) {
          echo "Testing $i\n";
          try {
            $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
            var_dump($proc);
            proc_close($proc);
          } catch (Error) {}
        }
        $proc = @proc_open([$batch_file_path . chr($i), "\"&notepad.exe"], $descriptorspec, $pipes, null, null, array("bypass_shell" => true));
        $blank_line = <<<EOD
        
        EOD;
    }
    $inputs = array(
          // Predefined Date constants
          'DATE_ATOM Constant' => DATE_ATOM,
          'DATE_COOKIE Constant' => DATE_COOKIE,
          'DATE_RFC822 Constant' => DATE_RFC822,
          'DATE_RFC850 Constant' => DATE_RFC850,
          'DATE_RFC1036 Constant' => DATE_RFC1036,
          'DATE_RFC1123 Constant' => DATE_RFC1123,
          'DATE_RFC2822 Constant' => DATE_RFC2822,
          'DATE_RFC3339 Constant' => DATE_RFC3339,
          'DATE_RSS Constant' => DATE_RSS,
          'DATE_W3C Constant' => DATE_W3C,
    );
    foreach($inputs as $key =>$value) {
          echo "\n--$key--\n";
          var_dump( gmdate($value, $timestamp) );
          var_dump( gmdate($value) );
    }
    var_dump( gmdate($value) );
}
