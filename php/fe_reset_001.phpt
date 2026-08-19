<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < $i; $j++) {}
    foreach ($$i as $x) {}
}
?>
OK
--EXPECTF--
Warning: Undefined variable $0 in %sfe_reset_001.php on line 4

Warning: foreach() argument must be of type array|object, null given in %sfe_reset_001.php on line 4

Warning: Undefined variable $1 in %sfe_reset_001.php on line 4

Warning: foreach() argument must be of type array|object, null given in %sfe_reset_001.php on line 4

Warning: Undefined variable $2 in %sfe_reset_001.php on line 4

Warning: foreach() argument must be of type array|object, null given in %sfe_reset_001.php on line 4

Warning: Undefined variable $3 in %sfe_reset_001.php on line 4

Warning: foreach() argument must be of type array|object, null given in %sfe_reset_001.php on line 4

Warning: Undefined variable $4 in %sfe_reset_001.php on line 4

Warning: foreach() argument must be of type array|object, null given in %sfe_reset_001.php on line 4
OK
