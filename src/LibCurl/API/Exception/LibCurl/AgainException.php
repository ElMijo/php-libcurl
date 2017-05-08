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
 * This exception thrown when Socket is not ready for send/recv wait till
 * it's ready and try again. This return code is only returned from
 * curl_easy_recv and curl_easy_send (Added in 7.18.2).
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class AgainException extends LibCurlException
{
    protected $code = 81;
}
