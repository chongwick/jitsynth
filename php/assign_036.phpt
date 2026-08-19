<?php
class A {
    public $result = "string";
    function __set($propName, $propValue)
    {
        $oldType = \gettype($this->$propName);
        $newType = \gettype($propValue);
        if ($propValue === 'false')
        {
            $newType   = 'boolean';
            $propValue = \false;
        }
        elseif ($propValue === 'true')
        {
            $newType   = 'boolean';
            $propValue = \true;
        }
        if ($oldType !== $newType)
        {
            $tmp = $propValue;
            \settype($tmp, $newType);
        }
        $this->propName = $propValue;
    }
}
$a = new A;
$a->result = "okey";
echo $a->result;
?>
