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
 * This exception thrown when A requested feature, protocol or option was not
 * found built-in in this libcurl due to a build-time decision. This means that
 * a feature or option was not enabled or explicitly disabled when libcurl was
 * built and in order to get it to function you have to get a rebuilt libcurl.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class UrlMalformatUserException extends LibCurlException
{
    protected $code = 4;
}
