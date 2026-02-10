<?php
$c = [];
function f_0() {
    $this->values = array('a' => 0);
    function __set($name, $value)
      {
        print "set $name = $value ($name was ".$this->values[$name].")\n";
        $this->values[$name] = $value;
      }
    $this->values[$name] = $value;
    function __get($name)
      {
        print "get $name (returns ".$this->values[$name].")\n";
        return $this->values[$name];
      }
    return $this->values[$name];
}
var_dump(-9_223_372_036_860_776_000 % -1);
$arr = array(
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
    range(1, 5),
);
array_walk_recursive($arr,
    function (&$value, $key) use(&$arr) {
        var_dump($key);
        unset($arr[$key]);
    }
);
$regex = '/[a-z]/';
$subject = 'string';
var_dump(preg_match_all($regex, $subject, 'test'));
