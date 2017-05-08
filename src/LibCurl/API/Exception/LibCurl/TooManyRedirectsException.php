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
 * This exception thrown when Too many redirects. When following redirects,
 * libcurl hit the maximum amount. Set your limit with CURLOPT_MAXREDIRS.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class TooManyRedirectsException extends LibCurlException
{
    protected $code = 47;
}
