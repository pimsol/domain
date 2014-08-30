<?php

namespace spec\Pimenta\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UuidSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Pimenta\Domain\Uuid');
    }

    function it_returns_a_generated_id()
    {
        $this::uuid()->shouldBeString();
    }
}
