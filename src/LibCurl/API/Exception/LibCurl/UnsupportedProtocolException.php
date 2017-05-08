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
 * This exception thrown when The URL you passed to libcurl used a protocol that
 * this libcurl does not support. The support might be a compile-time option
 * that you didn't use, it can be a misspelled protocol string or just a
 * protocol libcurl has no code for. 
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class UnsupportedProtocolException extends LibCurlException
{
    protected $code = 1;
}
