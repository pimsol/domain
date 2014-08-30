<?php
namespace Pimenta\Domain;

trait EventRecorderTrait
{

    /**
     * @var DomainEvent[]
     */
    private $latestRecordedEvents = [];

    protected function recordThat(DomainEvent $domainEvent)
    {
        $this->latestRecordedEvents[] = $domainEvent;

        $this->when($domainEvent);
    }

    /**
     * @return DomainEvents
     */
    public function getRecordedEvents()
    {
        return new DomainEvents($this->latestRecordedEvents);
    }

    public function clearRecordedEvents()
    {
        $this->latestRecordedEvents = [];
    }

}
