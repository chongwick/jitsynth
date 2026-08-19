<?php
$b = NAN;
for ($i = 0; $i < 3; $i++) {
    if ($b) { echo "nan is true\n"; }
    else { echo "nan is false\n"; }
}	
?>
--EXPECTF--
Warning: unexpected NAN value was coerced to bool in %s on line 4
nan is true

Warning: unexpected NAN value was coerced to bool in %s on line 4
nan is true

Warning: unexpected NAN value was coerced to bool in %s on line 4
nan is true
