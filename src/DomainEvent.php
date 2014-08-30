<?php
namespace Pimenta\Domain;

interface DomainEvent
{

    /**
     * The Aggregate this event belongs to.
     * @return IdentifiesAggregate
     */
    public function getAggregateId();
}
