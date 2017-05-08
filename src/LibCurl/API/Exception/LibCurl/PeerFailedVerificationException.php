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
 * This exception thrown when The remote server's SSL certificate or SSH md5
 * fingerprint was deemed not OK.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class PeerFailedVerificationException extends LibCurlException
{
    protected $code = 51;
}
