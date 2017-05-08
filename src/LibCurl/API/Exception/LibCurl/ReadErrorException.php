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
 * This exception thrown when There was a problem reading a local file or an
 * error returned by the read callback.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class ReadErrorException extends LibCurlException
{
    protected $code = 26;
}
