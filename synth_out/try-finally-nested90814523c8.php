<?php
function comp_func_cr($a, $b) {
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member) ? 1 : -1;
    }
function comp_func_cr2($a, $b) {
        echo ".";
        if ($a->priv_member === $b->priv_member) return 0;
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    }
class LogOnEvent {
  public $audienceMemberId;
  public $timestamp;

  function __construct($audienceMemberId, $timestamp) {
    $this->audienceMemberId = $audienceMemberId;
    $this->timestamp = $timestamp;
  }
}
class IVREvents {
  public $version;
  public $activityId;
  public $messageId;
  public $source;
  public $logOnEvent;
  public $logOffEvent;

  function __construct($version, $activityId, $messageId, $source, $logOnEvent=NULL, $logOffEvent=NULL) {
    $this->version = $version;
    $this->activityId = $activityId;
    $this->messageId = $messageId;
    $this->source = $source;
    $this->logOnEvent = $logOnEvent;
    $this->logOffEvent = $logOffEvent;
  }
}
class PHPUnit_Framework_MockObject_InvocationMocker {
    protected $matchers = [];
    public function addMatcher( $matcher) {
        $this->matchers[] = $matcher;
    }
    public function invoke( $invocation) {
        foreach ($this->matchers as $match) {
            $match->invoked($invocation);
        }
    }
}
class PHPUnit_Framework_MockObject_Matcher {
    public $stub = null;
    public $methodNameMatcher;
    public function invoked($invocation) {
        return $this->stub->invoke($invocation);
    }
}
function f_0() {
    try {
        return ($a->priv_member < $b->priv_member) ? 1 : -1;
    } catch (Exception $e) {}
    if (true) {
        $timestamp = "2005-11-08T11:22:07+03:00";
        $logOnEvent = new LogOnEvent(34567, $timestamp);
        $ivrEvents = new IVREvents("1.0", 101, 12345, 'IVR', $logOnEvent, $logOffEvents);
        while (true) {
            break;  // avoid infinite loop
            try {
            } catch (Exception $e) {}
            if (true) {
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
            }
            var_dump(strncmp("test ", "e", 0));
        }
        $InvMocker = new PHPUnit_Framework_MockObject_InvocationMocker();
        $OuterMatcher = new PHPUnit_Framework_MockObject_Matcher();
        $InvMocker->addMatcher($OuterMatcher);
    }
    return;
}
var_dump(sprintf("%X", 12));
