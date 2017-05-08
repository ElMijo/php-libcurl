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
 * This exception thrown when Unable to parse FTP file list
 * (during FTP wildcard downloading).
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpBadFileListException extends LibCurlException
{
    protected $code = 87;
}
