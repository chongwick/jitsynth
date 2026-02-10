<?php
bar();
pg_update($conn,$table, array('value' => '-inf'), array('id' => 2));
