<?php
$containers = array();
$a = 1;
$other = new DateTime("31-July-2008");
$loop_counter = 1;
$argv = array(1, 2, 3);
function f_0() {
    class Foo {
        var $bar = array();
    
        static function bar() {
            static $instance = null;
            $instance = new Foo();
            return $instance->bar;
        }
    }
    $instance = new Foo();
    return $instance->bar;
}
function f_1() {
    for ($i_2 = 0; $i_2 < 10; $i_2++) {
        for ($i_3 = 0; $i_3 < 10; $i_3++) {
            class Canary {
                public function __construct(public mixed $value) {}
                public function __destruct() {
                    var_dump(__METHOD__);
                }
            }
            function f($canary) {
                var_dump(yield from g());
            }
            $canary = new Canary(null);
            $iterable = f($canary);
            $fiber = new Fiber(function () use ($iterable, $canary) {
                var_dump($canary, $iterable->current());
                $f = $iterable->next(...);
                $f();
                var_dump("not executed");
            });
            $canary->value = $fiber;
            $values = ini_get_all();
            $empty_webp = __DIR__ . "/gh13774.webp";
            $im = imagecreatefromwebp($empty_webp);
            date_default_timezone_set("Asia/Calcutta");
            function test(string $input) {
                var_dump(filter_var($input, FILTER_VALIDATE_URL));
            }
            test("http://test@[::1]");
            $x = fprintf($fp, "fprintf test 1:%.5s", "abcdefghij");
            var_dump($x);
        }
    }
    class MethodCallbackByReference {
        public function bar(&$a, &$b, $c) {
            Legacy::bar($a, $b, $c);
        }
        public function callback(&$a, &$b, $c) {
            $b = 1;
        }
    }
    class Mock_MethodCallbackByReference_7b180d26 extends MethodCallbackByReference {
        public $inv_mocker;
        public function bar(&$a, &$b, $c) {
            $arguments = array($a, $b, $c);
            $result = $this->inv_mocker->invoke(
                new PHPUnit_Framework_MockObject_Invocation_Static(
                    $arguments
                )
            );
            return $result;
        }
    }
    $foo = new Mock_MethodCallbackByReference_7b180d26();
    for ($i_4 = 0; $i_4 < 10; $i_4++) {
        for ($i_5 = 0; $i_5 < 10; $i_5++) {
            $im = imagecreate(800, 800);
            test_image_equals_file(__DIR__ . '/bug43475.png', $im);
        }
    }
}
$bert = "file://" . __DIR__ . "/bug41033.pem";
$cpca = __DIR__ . "/san-cert.pem";
$utfl = __DIR__ . "/sni_server_uk.pem";
var_dump(openssl_x509_checkpurpose($bert, X509_PURPOSE_SSL_SERVER, array($cpca), $utfl));
$empty_string = <<<EOT
EOT;
$blank_line = <<<EOT

EOT;
$multiline_string = <<<EOT
<html>Roy&#039;s height &gt; Sam&#039;s height
13 &lt; 25
1111 &amp; 0000 = 0000
&quot;This is a double quoted string&quot;
EOT;
$diff_whitespaces = <<<EOT
<html>Roy&#039;s height\r &gt; Sam\t&#039;s height
1111\t\t &amp; 0000\v\v = \f0000
&quot; heredoc\ndouble quoted string. with\vdifferent\fwhite\vspaces&quot;
EOT;
$numeric_string = <<<EOT
<html>11 &lt; 12. 123 string 4567
&quot;string&quot; 1111\t &amp; 0000\t = 0000\n;
EOT;
$quote_char_string = <<<EOT
<html>&lt; This's a string with quotes:
"strings in double quote" &amp;
'strings in single quote' &quot;
this\line is &#039;single quoted&#039; /with\slashes </html>
EOT;
$res_heredoc_strings = array(
  //heredoc strings
  $empty_string,
  $blank_line,
  $multiline_string,
  $diff_whitespaces,
  $numeric_string,
  $quote_char_string
);
for($index =0; $index < count($res_heredoc_strings); $index ++) {
  echo "-- Iteration $count --\n";
  var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
  $count++;
}
var_dump( htmlspecialchars_decode($res_heredoc_strings[$index]) );
