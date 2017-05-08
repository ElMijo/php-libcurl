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
 * This exception thrown when The FTP REST command returned error. This should
 * never happen if the server is sane.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpCouldNotUseRestException extends LibCurlException
{
    protected $code = 31;
}
