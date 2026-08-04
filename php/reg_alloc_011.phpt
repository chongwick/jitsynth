<?php
function foo($y) {
    for ($cnt=0;$cnt<6;$cnt++) {
        $i = $y;
        for ($i=0;$i<1;)
            for(;$i<1;)
                for(;$i<1;$i++)
                    for(;$y;);
                for($i=0;$i< 1;$i++)
                    for(;$y;);
    }
}
foo(null);
?>
DONE
--EXPECTF--
DONE
