<?php

namespace ACME;

use ACME\ClassB;

class ClassA
{
    public function foo(ClassB $bObject, \DateTime $datetime)
    {
        return $bObject->bar($datetime);
    }
}
