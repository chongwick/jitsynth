<?php
$this->logOnEvent = $logOnEvent;
$attrs = [ PDO::ATTR_PREFETCH => 0 ];
$context = stream_context_create(['http' => ['method' => 'MKCALENDAR']]);
var_dump($obj->getTest());
