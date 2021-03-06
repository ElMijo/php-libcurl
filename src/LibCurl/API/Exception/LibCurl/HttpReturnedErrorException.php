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
 * This exception thrown when This is returned if CURLOPT_FAILONERROR is set
 * TRUE and the HTTP server returns an error code that is >= 400.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class HttpReturnedErrorException extends LibCurlException
{
    protected $code = 22;
}
