<?php
$output = array();
$zip = new ZipArchive();
$zip->close();
$containers = array();
global $containers;
$containers[spl_object_hash($this)] = $this;
$count = 1;
