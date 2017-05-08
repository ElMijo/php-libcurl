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
 * This exception thrown when This was either a weird reply to a 'RETR' command
 * or a zero byte transfer complete.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpCouldNotRetrFileException extends LibCurlException
{
    protected $code = 19;
}
