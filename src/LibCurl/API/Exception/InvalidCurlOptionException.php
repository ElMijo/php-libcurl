<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception;

use InvalidArgumentException;

/**
 * This exception thrown when the CuRL option is ivalid.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class InvalidCurlOptionException extends InvalidArgumentException
{
    public function __construct($option, Exception $previous = null)
    {
        parent::__construct(
            sprintf('Curl Option [%s] is not a valid option.', $option),
            0,
            $previous
        );
    }
}
