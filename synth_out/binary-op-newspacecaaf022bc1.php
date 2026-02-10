<?php
function f_0() {
    return "testObject";
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        $fp = php_cli_server_connect();
        fclose($fp);
    }
}
$heredoc_string = <<<EOT
This is line 1 of 'heredoc' string
This is line 2 of "heredoc" string
EOT;
$heredoc_null_string =<<<EOT
EOT;
$str_array = array(
                    // string without any characters that can be backslashed
                    'Hello world',

                    // string with single quotes
                    "how're you doing?",
                    "don't disturb u'r neighbours",
                    "don't disturb u'r neighbours''",
                    '',
                    '\'',
                    "'",

                    // string with double quotes
                    'he said, "he will be on leave"',
                    'he said, ""he will be on leave"',
                    '"""PHP"""',
                    "",
                    "\"",
                    '"',
            "hello\"",

                    // string with backslash characters
                    'Is your name Ram\Krishna?',
                    '\\0.0.0.0',
                    'c:\php\testcase\addslashes',
                    '\\',

                    // string with nul characters
                    'hello'.chr(0).'world',
                    chr(0).'hello'.chr(0),
                    chr(0).chr(0).'hello',
                    chr(0),

                    // mixed strings
                    "'\\0.0.0.0'",
                    "'\\0.0.0.0'".chr(0),
                    chr(0)."'c:\php\'",
                    '"\\0.0.0.0"',
                    '"c:\php\"'.chr(0)."'",
                    '"hello"'."'world'".chr(0).'//',

            // string with hexadecimal number
                    "0xABCDEF0123456789",
                    "\x00",
                    '!@#$%&*@$%#&/;:,<>',
                    "hello\x00world",

                    // heredoc strings
                    $heredoc_string,
                    $heredoc_null_string
                  );
foreach( $str_array as $str )  {
  echo "\n-- Iteration $count --\n";
  var_dump( addslashes($str) );
  $count ++;
}
var_dump( addslashes($str) );
function f_3() {
    return 'B';
}
function f_4() {
    class base {
        private function show() {
            echo "base\n";
        }
        function test() {
            $this->show();
        }
    }
    class derived extends base {
        function show() {
            echo "derived\n";
        }
        function test() {
            echo "test\n";
            $this->show();
            parent::test();
            parent::show();
        }
    }
    $t = new derived();
    $row = mysqli_fetch_assoc($res);
    for ($i_5 = 0; $i_5 < 10; $i_5++) {
        $im = imagecreate(800, 800);
        imageline($im, 650, 650, 150, 150, IMG_COLOR_STYLED);
    }
}
$str = "repeater id='loopt' dataSrc=subject columns=2";
preg_match_all("/(['\"])((?:\\\\\\1|.)*)\\1/sU", $str, $str_instead);
