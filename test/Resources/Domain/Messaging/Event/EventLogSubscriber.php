<?php

namespace Novuso\Test\Common\Resources\Domain\Messaging\Event;

use Novuso\Common\Domain\Messaging\Event\EventMessage;
use Novuso\Common\Domain\Messaging\Event\EventSubscriber;

class EventLogSubscriber implements EventSubscriber
{
    protected $logs = [];

    public static function eventRegistration(): array
    {
        return [EventSubscriber::ALL_EVENTS => 'onAllEvents'];
    }

    public function onAllEvents(EventMessage $message)
    {
        $this->logs[] = $message->toString();
    }

    public function getLogs(): array
    {
        return $this->logs;
    }
}
