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
 * This exception thrown when problem with the local client certificate.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class SslCertproblemException extends LibCurlException
{
    protected $code = 58;
}
