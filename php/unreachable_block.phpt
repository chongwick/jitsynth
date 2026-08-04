<?php
class A {
    public function Value()
    {
        switch ($this->returnType) {
            case 'float':  return $this->returnTypeNullable ? null : 0;
            default: return;
        }
    }
}
?>
okey
