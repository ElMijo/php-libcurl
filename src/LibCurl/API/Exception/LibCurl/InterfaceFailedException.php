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
 * This exception thrown when Interface error. A specified outgoing interface
 * could not be used. Set which interface to use for outgoing connections'
 * source IP address with CURLOPT_INTERFACE.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class InterfaceFailedException extends LibCurlException
{
    protected $code = 45;
}
