<?php declare(strict_types=1);

namespace Novuso\Common\Application\Filesystem\Exception;

use Exception;

/**
 * FileNotFoundException is thrown when a file cannot be found
 *
 * @copyright Copyright (c) 2016, Novuso. <http://novuso.com>
 * @license   http://opensource.org/licenses/MIT The MIT License
 * @author    John Nickell <email@johnnickell.com>
 */
class FileNotFoundException extends FilesystemException
{
    /**
     * Creates exception for a given path
     *
     * @param string         $path     The file path
     * @param Exception|null $previous The previous exception
     *
     * @return FileNotFoundException
     */
    public static function fromPath(string $path, Exception $previous = null): FileNotFoundException
    {
        $message = sprintf('File not found: %s', $path);

        return new static($message, $path, $previous);
    }
}
