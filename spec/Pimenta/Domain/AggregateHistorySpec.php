<?php

namespace spec\Pimenta\Domain;

use PhpSpec\ObjectBehavior;
use Pimenta\Domain\DomainEvent;
use Pimenta\Domain\IdentifiesAggregate;
use Prophecy\Argument;

class AggregateHistorySpec extends ObjectBehavior
{

    function let(IdentifiesAggregate $aggregate)
    {
        $this->beConstructedWith($aggregate, []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Pimenta\Domain\AggregateHistory');
    }

    function it_has_a_aggragate_id(IdentifiesAggregate $aggregate)
    {
        $this->getAggregateId()->shouldReturn($aggregate);
    }

    function it_should_deny_apped(DomainEvent $event)
    {
        $this->shouldThrow(\Exception::class)->during('append', [$event]);
    }

}
