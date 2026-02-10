<?php
interface IValue
{
   public function setVal ($name, $val);
   public function dumpVal ();
}
class Value implements IValue
{
  private $vars = array ();

  public function setVal ( $name, $val ) {
    $this->vars[$name] = $val;
  }

  public function dumpVal () {
    var_dump ( $vars );
  }
}
$Value_object = new Value();
$search_arr = array( TRUE, FALSE, 1, 0, -1, "1", "0", "-1",  NULL,
                     array(), "php", "");
$iterator = 1;
$iterator++;
$f = __DIR__."/data/test.txt.gz";
$h = gzopen($f, 'r');
var_dump(gzeof($h));
