<?php declare(strict_types=1);

namespace Novuso\Common\Application\Messaging\Event\Subscriber;

use Novuso\Common\Domain\Messaging\Event\EventMessage;
use Novuso\Common\Domain\Messaging\Event\EventSubscriber;
use Psr\Log\LoggerInterface;

/**
 * EventLogger is a subscriber that logs event messages
 *
 * @copyright Copyright (c) 2016, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <email@johnnickell.com>
 */
class EventLogger implements EventSubscriber
{
    /**
     * Logger
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Constructs EventLogger
     *
     * @param LoggerInterface $logger The logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public static function eventRegistration(): array
    {
        return [EventSubscriber::ALL_EVENTS => 'logEvent'];
    }

    /**
     * Logs the event message
     *
     * @param EventMessage $message The event message
     *
     * @return void
     */
    public function logEvent(EventMessage $message)
    {
        $name = $message->payloadType()->toString();

        $this->logger->info(
            sprintf('Event dispatched {%s}', $name),
            ['message' => $message->toString()]
        );
    }
}
