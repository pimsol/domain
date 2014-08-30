<?php
namespace Pimenta\Domain;

interface EventStoreInterface
{
    /**
     * @param  DomainEvents $events
     * @return void
     */
    public function commit(DomainEvents $events);

    /**
     * @param  IdentifiesAggregate $id
     * @return AggregateHistory
     */
    public function getAggregateHistoryFor(IdentifiesAggregate $id);
}
