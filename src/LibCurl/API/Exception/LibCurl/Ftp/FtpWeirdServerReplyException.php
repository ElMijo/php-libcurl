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
 * This exception thrown when The server sent data libcurl couldn't parse.
 * This error code is used for more than just FTP and is aliased as
 * CURLE_WEIRD_SERVER_REPLY since 7.51.0.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpWeirdServerReplyException extends LibCurlException
{
    protected $code = 8;
}
