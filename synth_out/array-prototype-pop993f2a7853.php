<?php
printf("[009] Cannot run SELECT, [%d] %s\n",
                mysqli_errno($link), mysqli_error($link));
gc_collect_cycles();
