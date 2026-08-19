<?php
ini_set('opcache.jit', 'tracing');
?>
--EXPECTF--
Warning: Cannot change opcache.jit setting at run-time (JIT is disabled) in %s on line %d
