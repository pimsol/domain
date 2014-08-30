<?php
namespace Pimenta\Domain;

trait When
{

    public function parseClassname($class)
    {
        $name = get_class($class);

        return join('', array_slice(explode('\\', $name), -1));
    }

    protected function when(DomainEvent $event)
    {
        $functionName = 'when' . $this->parseClassname($event);

        call_user_func(array($this, $functionName), $event);
    }

}
