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
 * This exception thrown when libcurl failed to get a sensible result back from
 * the server as a response to either a PASV or a EPSV command. The server is
 * flawed.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpWeirdPasvReplyException extends LibCurlException
{
    protected $code = 13;
}
