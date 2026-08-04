<?php
function test(): int
{
    return 0;
}

exit(@test());
?>
--EXPECTF--
<!-- init '%s' -->
<file '%s'>
  <!-- opcode: 'ZEND_BEGIN_SILENCE' in user handler -->
  <!-- opcode: 'ZEND_END_SILENCE' in user handler -->
  <!-- init exit() -->
  <exit>
    <!-- Exception: UnwindExit -->
  </exit>
  <!-- Exception: UnwindExit -->
</file '%s'>
