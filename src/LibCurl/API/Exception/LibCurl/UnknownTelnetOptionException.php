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
 * This exception thrown when An option passed to libcurl is not
 * recognized/known. Refer to the appropriate documentation. This is most likely
 * a problem in the program that uses libcurl. The error buffer might contain
 * more specific information about which exact option it concerns.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class UnknownTelnetOptionException extends LibCurlException
{
    protected $code = 48;
}
