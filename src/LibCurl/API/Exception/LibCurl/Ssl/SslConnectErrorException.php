<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl\Ssl;

use PhpTools\LibCurl\API\Exception\LibCurl\LibCurlException;

/**
 * This exception thrown when A problem occurred somewhere in the SSL/TLS
 * handshake. You really want the error buffer and read the message there as it
 * pinpoints the problem slightly more. Could be certificates
 * (file formats, paths, permissions), passwords, and others.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class SslConnectErrorException extends LibCurlException
{
    protected $code = 35;
}
