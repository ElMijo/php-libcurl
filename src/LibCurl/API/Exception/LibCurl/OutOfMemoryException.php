<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl;

/**
 * This exception thrown when A memory allocation request failed. This is
 * serious badness and things are severely screwed up if this ever occurs.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class OutOfMemoryException extends LibCurlException
{
    protected $code = 27;
}
