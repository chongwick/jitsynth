<?php
class A
{
    use T1;
}
class B extends A
{
    use T2;
}
$b = new B();
$b->aa();
