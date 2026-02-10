<?php
var_dump(json_decode('{"":"value", "key":"value"}', true));
var_dump($baz);
var_dump($client->__getLastResponse());
printf("printf test 4:%.10f\n", 10.0/3);
var_dump(filter_var("<data&sons>", FILTER_SANITIZE_ENCODED, FILTER_FLAG_ENCODE_LOW));
var_dump(odbc_result($res, 'whatever'));
