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
 * This exception thrown when Problem with reading the SSL CA cert
 * (path? access rights?).
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class SslCacertBadfileException extends LibCurlException
{
    protected $code = 77;
}
