<?php
$cls = new PharException();
$clsAttr=$cls.line;
echo "*** Testing array_multisort() : Testing  all array sort specifiers ***\n";
$ar = array( 2, "aa" , "1");
array_multisort($ar, SORT_REGULAR, SORT_ASC);
var_dump($ar);
array_multisort($ar, SORT_STRING, SORT_ASC);
var_dump($ar);
array_multisort($ar, SORT_NUMERIC, SORT_ASC);
var_dump($ar);
$fusion = $ar;
$fusion = [&$a];
var_dump($a[0] =& returnsVal());
function returnsVal() {}
var_dump(get_defined_vars());
try {filter_var($a,$a,$ar);} catch (Exception $e) { echo($e); }
try {filter_var($fusion,$fusion,$fusion);} catch (Exception $e) { echo($e); }
try {filter_var($a,$fusion,$fusion);} catch (Exception $e) { echo($e); }
try {filter_var($fusion,$a,$a);} catch (Exception $e) { echo($e); }
try {filter_var($fusion,$fusion,$ar);} catch (Exception $e) { echo($e); }
try {filter_var($a,$a,$fusion);} catch (Exception $e) { echo($e); }
try {filter_var($ar,$ar,$fusion);} catch (Exception $e) { echo($e); }
try {filter_var($fusion,$ar,$fusion);} catch (Exception $e) { echo($e); }
try {filter_var($ar,$a,$ar);} catch (Exception $e) { echo($e); }
try {filter_var($ar,$a,$ar);} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
try {$cls->__wakeup();} catch (Exception $e) { echo($e); }
