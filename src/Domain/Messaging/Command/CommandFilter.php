<?php declare(strict_types=1);

namespace Novuso\Common\Domain\Messaging\Command;

use Exception;

/**
 * CommandFilter is the interface for a command filter
 *
 * @copyright Copyright (c) 2016, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <email@johnnickell.com>
 */
interface CommandFilter
{
    /**
     * Processes a command message and calls the next filter
     *
     * Signature of $next:
     *
     * <code>
     * function (CommandMessage $message): void {}
     * </code>
     *
     * @param CommandMessage $message The command message
     * @param callable       $next    The next filter
     *
     * @return void
     *
     * @throws Exception When an error occurs
     */
    public function process(CommandMessage $message, callable $next);
}
