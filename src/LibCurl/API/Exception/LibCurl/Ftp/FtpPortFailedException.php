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
 * This exception thrown when The FTP PORT command returned error. This mostly
 * happens when you haven't specified a good enough address for libcurl to use.
 * See CURLOPT_FTPPORT.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpPortFailedException extends LibCurlException
{
    protected $code = 30;
}
