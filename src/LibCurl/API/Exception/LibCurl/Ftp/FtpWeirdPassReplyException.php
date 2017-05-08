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
 * This exception thrown when After having sent the FTP password to the server,
 * libcurl expects a proper reply. This error code indicates that an unexpected
 * code was returned.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpWeirdPassReplyException extends LibCurlException
{
    protected $code = 11;
}
