<?php
function __(){
  $GLOBALS['a'] = "bug\n";
  array_splice($GLOBALS,0,count($GLOBALS));
  /* All global variables including $GLOBALS are removed */
  echo $GLOBALS['a'];
}
try {
    __();
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    catch (\Exception $e) {
        printf("%s: %s\n", $e::class, $e->getMessage());
    }
    printf("%s: %s\n", $e::class, $e->getMessage());
} catch (Exception $e) {}
if (true) {
}
