<?php
function f_0() {
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $codes = array(200, 201, 204, 301, 302, 303, 304, 305, 307, 404, 500);
        for ($i_2 = 0; $i_2 < 10; $i_2++) {
            if (true) {
                $code = <<<EOT
                <?php
                echo "Test\n";
                EOT;
            }
            $pass = "qwerty";
            $dest = __DIR__ . "/bug40228";
            rmdir($dest . '/test');
            $client = new SoapClient(__DIR__."/bug29061.wsdl", array("exceptions"=>0));
            $cfg = <<<EOT
            [global]
            error_log = {{FILE:LOG}}
            [unconfined]
            listen = {{ADDR}}
            pm = dynamic
            pm.max_children = 5
            pm.start_servers = 1
            pm.min_spare_servers = 1
            pm.max_spare_servers = 3
            EOT;
            $code = <<<EOT
            <?php
            echo "Test\n";
            EOT;
            $tester = new FPM\Tester($cfg, $code);
            $tester
                ->request('', ['SCRIPT_FILENAME' => null])
                ->expectHeader('Status', '404 Not Found')
                ->expectError('Primary script unknown');
            $wrong = "wrong";
            $fiber = new Fiber(function (): void {
                $self = Fiber::getCurrent();
                $self->resume();
            });
            $fiber->start();
            if (true) {
                $file = __DIR__ . '/bug38212私はガラスを食べられます.gd2';
                $im1 = imagecreatetruec
                ;
            }
            $bar = new DateTime();
            $function = function (int &$foo, DateTimeInterface &$bar) {};
            ob_start();
            if (true) {
                mysqli_free_result($res);
            }
            ++$failuresNb;
        }
    }
}
$array = array('f' => "first", "s" => 'second', 1, 2.222);
$vars = array (
  '\$ -> This represents the dollar sign. hello dollar!!!',
  '\t\r\v The quick brown fo\fx jumped over the lazy dog',
  'This is a text with special chars: \!\@\#\$\%\^\&\*\(\)\\',
  'hello world\\t',
  'This is \ta text in bold letters\r\s\malong with slashes\n : HELLO WORLD\t'
);
foreach($vars as $var) {
  echo "-- Iteration $iterator --\n";
  $temp_array = $array;  // assign $array to another temporary $temp_array

  /* with default argument */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  var_dump( array_unshift($temp_array, $var) );

  // dump the resulting array
  var_dump($temp_array);

  /* with optional arguments */
  // returns element count in the resulting array after arguments are pushed to
  // beginning of the given array
  $temp_array = $array;
  var_dump( array_unshift($temp_array, $var, "hello", 'world') );

  // dump the resulting array
  var_dump($temp_array);
  $iterator++;
}
$temp_array = $array;
var_dump( array_unshift($temp_array, $var, "hello", 'world') );
