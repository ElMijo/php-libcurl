<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception;

use Exception;
use InvalidArgumentException;

/**
 * This exception thrown when the CuRL option type is ivalid.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class InvalidCurlOptionTypeException extends InvalidArgumentException
{
    public function __construct($type, Exception $previous = null)
    {
        parent::__construct(
            sprintf('Curl Option type [%s] is not valid.', $type),
            0,
            $previous
        );
    }
}
