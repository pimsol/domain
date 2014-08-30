<?php
namespace Pimenta\Domain;

abstract class Entity implements RecordsEvents
{

    use EventRecorderTrait;
    use When;

    /**
     * @param  AggregateHistory $aggregateHistory
     * @return RecordsEvents
     */
    public static function reconstituteFrom(AggregateHistory $aggregateHistory)
    {
        $item = $aggregateHistory->getAggregateId();

        $item = new static(static::createId($item));

        foreach ($aggregateHistory as $event) {
            $item->when($event);
        }

        return $item;
    }

    public static function createId($item)
    {
        throw new \Exception(get_called_class() . '::createId not implemented');
    }

}
