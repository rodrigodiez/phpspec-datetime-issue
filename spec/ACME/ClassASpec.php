<?php

namespace spec\ACME;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use ACME\ClassB;

class ClassASpec extends ObjectBehavior
{
    function it_should_call_bObject_with_provided_datetime(ClassB $bObject, \DateTime $datetime)
    {
        $datetime->getTimestamp()->willReturn(1458054681);
        $bObject->bar($datetime)->shouldBeCalled();

        $this->foo($bObject, $datetime);
    }
}
