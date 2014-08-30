<?php

namespace spec\Pimenta\Domain;

use PhpSpec\ObjectBehavior;
use Pimenta\Domain\ArrayIsImmutable;
use Pimenta\Domain\DomainEvent;
use Prophecy\Argument;

class DomainEventsSpec extends ObjectBehavior
{
    function let(DomainEvent $event)
    {
        $this->beConstructedWith([$event]);
    }

    function it_is_initializable()
    {
        $this->beConstructedWith([]);
        $this->shouldHaveType('Pimenta\Domain\DomainEvents');
    }

    function it_is_countable()
    {
        $this->shouldImplement('\Countable');
    }

    function it_should_count_2(DomainEvent $event1, DomainEvent $event2)
    {
        $this->beConstructedWith([$event1, $event2]);
        $this->count()->shouldReturn(2);
    }

    function it_should_count_1(DomainEvent $event)
    {
        $this->count()->shouldReturn(1);
    }

    function it_should_not_except_other_types()
    {
        $this->shouldThrow(ArrayIsImmutable::class)->during('__construct', [[new \StdClass]]);
    }

    function it_denies_changes(DomainEvent $event)
    {
        $this->shouldThrow(ArrayIsImmutable::class)->during('offsetSet', [1, $event]);
    }

    function it_denies_unset_changes(DomainEvent $event)
    {
        $this->shouldThrow(ArrayIsImmutable::class)->during('offsetUnset', [1]);
    }

}
