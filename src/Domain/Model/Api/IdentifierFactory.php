<?php declare(strict_types=1);

namespace Novuso\Common\Domain\Model\Api;

/**
 * IdentifierFactory is the interface for an identifier factory
 *
 * @copyright Copyright (c) 2016, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <email@johnnickell.com>
 */
interface IdentifierFactory
{
    /**
     * Generates a unique identifier
     *
     * @return Identifier
     */
    public static function generate();
}
