<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception;

use RuntimeException;

/**
 * This exception thrown when the CuRL option is ivalid.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class InvalidCurlOptionListException extends RuntimeException
{
    public function __construct($className, Exception $previous = null)
    {
        parent::__construct(
            sprintf('Curl Option list should be an string array and not be empty [%s].', $className),
            0,
            $previous
        );
    }
}
