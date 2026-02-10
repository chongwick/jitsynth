<?php
function f_0() {
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
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $counter = 1;
        $counter++;
    }
    return $this->getInt();
}
function f_2() {
    class A
    {
        use T1;
    }
    class B extends A
    {
        use T2;
    }
    $b = new B();
    $user = PDO_MYSQL_TEST_USER;
    $pass	= PDO_MYSQL_TEST_PASS;
    $db = new PDO('mysql', $user, $pass);
    $heredoc_str = <<<EOD
    %
    #$*&
    text & @()
    EOD;
    $str_arr = array(
      //double quoted strings
      "%",
      "#$*",
      "text & @()",
    
      //single quoted strings
      '%',
      '#$*',
      'text & @()',
    
      //heredoc string
      $heredoc_str
    );
    for ($i_3 = 0; $i_3 < 10; $i_3++) {
        $count = 1;
        $count++;
    }
    return 0;
}
$date1 = DateTime::createFromFormat("!D d M Y", "Fri 19 November 2011");
$date2 = new DateTime("Fri 19 November 2011");
var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d'));
var_dump(scandir(''));
$im = ImageCreateTrueColor(10, 10);
imagealphablending($im, true);
var_dump(filter_var("?><!@#$%^&*()}{~Qwertyuilfdsasdfgmnbvcxcvbn", FILTER_SANITIZE_ENCODED));
function test(array... $args) {
    var_dump($args);
}
test([0], [1], [2]);
class TrampolineTest {
    public function __call(string $name, array $arguments) {
        echo 'Trampoline for ', $name, PHP_EOL;
    }
}
$o = new TrampolineTest();
$callback1 = [$o, 'trampoline1'];
spl_autoload_register($callback1);
class C extends stdClass {
    public int $a;
}
$reflector = new ReflectionClass(C::class);
$obj = new C();
$reflector->initializeLazyObject($obj);
$strings_with_nulls = array(
                   "\0",
                   '\0',
                           "hello\0world",
                           "\0hel\0lo",
                           "hello\0",
                           "\0\0hello\tworld\0\0",
                           "\\0he\0llo\\0",
                           'hello\0\0'
                           );
foreach( $strings_with_nulls as $string )  {
  echo "\n--- Iteration $counter ---\n";
  var_dump( strtok($string, "\0") );
  for($count = 1; $count <= 5; $count++)  {
    var_dump( strtok("\0") );
  }
  $counter++;
}
var_dump( strtok($string, "\0") );
