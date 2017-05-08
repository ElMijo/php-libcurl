<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl\Ftp;

use PhpTools\LibCurl\API\Exception\LibCurl\LibCurlException;

/**
 * This exception thrown when An internal failure to lookup the host used for
 * the new connection.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpCanNotGetHostException extends LibCurlException
{
    protected $code = 15;
}
