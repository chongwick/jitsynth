<?php
class A
{
    public $a = array();

    public function __construct()
    {
        $this->a[] = new B(1);
        $this->a[] = new B(2);
    }
}
#[\AllowDynamicProperties]
class C {
    public $b;
    public function __construct() {
        $this->a = new Canary();
    }
}
$a = unserialize(serialize(new A()));
$idx = 0;
$priorityQueue = new SplPriorityQueue();
$priorityQueue->insert("b", 2);
set_error_handler(function() {
    (y);
});
printf("printf test 11:<%30s>\n", "hoyesterettsjustitiarius");
$halves[0] = $halves[1] = 0;
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
$list = new SplDoublyLinkedList();
$list->push('f');
$obj = new C();
var_dump($obj->a);
$dom = new DOMImplementation();
printf("printf test 21:%016b\n", 170);
