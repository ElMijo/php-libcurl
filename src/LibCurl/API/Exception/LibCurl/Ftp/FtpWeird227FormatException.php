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
 * This exception thrown when FTP servers return a 227-line as a response to a
 * PASV command. If libcurl fails to parse that line, this return code is
 * passed back.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpWeird227FormatException extends LibCurlException
{
    protected $code = 14;
}
