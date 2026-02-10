<?php
function f_0() {
    $style = array();
    for ($i_1 = 0; $i_1 < 10; $i_1++) {
        $test2=array(
           'a1_teasermenu' => array(
                'downloadcounter' => 2777,
                'versions' => array(
                    '0.1.0' => array (
                        'title' => 'A1 Teasermenu',
                        'description' => 'Displays a teaser for advanced subpages or a selection of advanced pages',
                        'state' => 'stable',
                        'reviewstate' => 0,
                        'category' => 'plugin',
                        'downloadcounter' => 2787,
                        'lastuploaddate' => 1088427240,
                        'dependencies' => array (
                              'depends' => array(
                                      'typo3' =>'',
                                      'php' =>'',
                                      'cms' => ''
                               ),
                              'conflicts' => array('' =>'')
                        ),
                        'authorname' => 'Mirko Balluff',
                        'authoremail' => 'balluff@amt1.de',
                        'ownerusername' => 'amt1',
                        't3xfilemd5' => '3a4ec198b6ea8d0bc2d69d9b7400398f',
                    )
                )
            )
        );
    }
    $insert = null;
    public function __construct($callback) {
            $this->callback = $callback;
        }
    $this->callback = $callback;
    public function invoke($invocation) {
            return call_user_func_array($this->callback, $invocation->parameters);
        }
    return call_user_func_array($this->callback, $invocation->parameters);
}
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
$Value_object = new Value();
foreach ($offsets as $dimension) {
    $container = false;
    $error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";

    include $var_dim_filename;
    $varOutput = ob_get_contents();
    ob_clean();
    $varOutput = str_replace(
        [$var_dim_filename],
        ['%s'],
        $varOutput
    );

    if (
        !preg_match($EXPECTED_OUTPUT_VALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_INVALID_OFFSETS_REGEX, $varOutput)
        && !preg_match($EXPECTED_OUTPUT_FLOAT_OFFSETS_REGEX, $varOutput)
        && $varOutput !== EXPECTED_OUTPUT_RESOURCE_STDERR_OFFSETS
    ) {
        file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . "debug_false_container_{$failuresNb}.txt", $varOutput);
        ++$failuresNb;
        $failures[] = $error;
    }
    ++$testCasesTotal;
}
$error = 'false[' . zend_test_var_export($dimension) . '] has different outputs' . "\n";
$failures[] = $error;
